<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{

	public function index(Request $request, Topic $topic){
		$topics = $topic->with('user', 'category')->paginate();
		return view('topics.index', ['topics' => $topics]);
	}

	public function show(){
		dd('all topics');	
	}

	public function add(){
		//
	}

	public function insert(){
		//
	}

	public function edit(){
		//
	}

	public function update(){
		//
	}

	public function destroy(){
		//
	} 
}
