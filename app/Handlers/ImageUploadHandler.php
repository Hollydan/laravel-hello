<?php

namespace App\Handlers;

use Image;

class ImageUploadHandler
{
	protected $allowed_ext = ['jpg', 'png', 'jpeg', 'gif']; // allowed extend

	/**
	 * upload file
	 *
	 * @param $file object
	 * @param $folder string
	 * @param $file_prefix string
	 *
	 * @return array
	 */
	public function save($file, $folder, $file_prefix, $max_width=false){

		$folder_name = "uploads/images/$folder/" . date('Ym/d', time()); // folder path

		$upload_path = public_path() . '/' . $folder_name;

		$extension = strtolower($file->getClientOriginalExtension()) ?: 'jpg';

		$filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;

		if(! in_array($extension, $this->allowed_ext)){
			return false;
		}

		$file->move($upload_path, $filename); // move_uploaded_file

		if($max_width && $extension != 'gif'){
			$this->reduceSize($upload_path . '/' . $filename, $max_width);
		}

		//return ['path' => config('app.url') . "/$folder_name/$filename"];
		return ['path' => "/$folder_name/$filename"];
	}

	/**
	 * reduce size
	 *
	 * @param $file_path
	 * @param $max_width
	 * @return resource
	 */
	public function reduceSize($file_path, $max_width){
		$image = Image::make($file_path);

		$image->resize($max_width, null, function($constraint){
			$constraint->aspectRatio(); // set width = max_width
			$constraint->upsize();
		});

		$image->save(); // save
	}
}
