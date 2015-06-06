<?php namespace App\Http\Controllers;

use App\Trend as Trend;
use App\Category as Category;

class HomeController extends Controller {

	public function index()
	{
		$trends = Trend::all();
		$categories = Category::all();

		return view('home')->with('trends',$trends)->with('categories',$categories);
	}

	public function redirectIndex() {
		return redirect(route('home.index'));
	}

	public function getCategory() {
		return view('category');
	}

}
