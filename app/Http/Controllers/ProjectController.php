<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Category;
use App\User;
use Auth;

use DB;

class ProjectController extends Controller
{
	public function create() {
        $categories = Category::all();

		return view('projects.create', [
            'categories' => $categories
        ]);
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
        $projectData = Project::find($id);

        // Get category data
        $categoryData = DB::table('categories')
            ->where('id', $projectData->category_id)
            ->first();

        // If category exists
        if (!empty($categoryData)) {
            $category['id'] = $categoryData->id;
            $category['name'] = $categoryData->name;
        }

        // Insert view data to array
        $project = [
            'name' => $projectData->name,
            'url' => $projectData->url,
            'category' => $category,
            'started' => prettifyDate($projectData->created_at),
            'updated' => prettifyDate($projectData->updated_at),

            'description' => $projectData->description,
        ];

        // Show view
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
