<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topic;

class CategoriesController extends Controller
{
	public function show(Request $request, Category $category, Topic $topic){
		$topics = $topic->where('category_id', $category->id)->withOrder($request->order)->paginate(20);
		
		return view('topics.index', compact('topics', 'category'));
	}
}
