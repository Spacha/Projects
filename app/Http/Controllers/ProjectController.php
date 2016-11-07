<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\User;
use Auth;

class ProjectController extends Controller
{
	public function create() {
		return view('projects.create');
	}

    public function index()
    {
        // Get all user's projects
    	$projects = Auth::user()->projects()
            ->orderBy('updated_at', 'desc')
            ->get();

    	return view('home', [
    		'active' => 'projects',
    		'projects' => $projects
    	]);
    }

    public function view($id)
    {
        $project = Project::find($id);

        return view('projects.view', [
            'project' => $project
        ]);
    }

    public function save(Request $request)
    {
        if (isset($request->id)) {

            // Update existing projects
            $project = Project::find($request->id);

        } else {

            // Create new project
            $project = new Project();

        }

        $project->name = $request->name;
        $project->category_id = $request->category;
        $project->public = false;
        $project->description = $request->description;
        $project->url = $request->url;

        $project->user_id = Auth::user()->id;

        if ($project->save()) {
            return redirect('projects/' . $project->id);
        } else {
            // TODO: Use flash!
            return redirect('projects/create');
        }

    }
}
