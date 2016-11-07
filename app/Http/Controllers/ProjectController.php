<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class ProjectController extends Controller
{
	public function create() {
		return view('projects.create');
	}

    public function index()
    {
    	$projects = User::find(Auth::user()->id)->projects();

    	return view('home', [
    		'active' => 'projects',
    		'projects' => $projects
    	]);
    }

    public function save(Request $request)
    {
        dd($request->input());
    }
}
