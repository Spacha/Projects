@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="clearfix headbar">
                <a href="/projects/create" class="btn btn-primary pull-right"><span class="fa fa-plus" aria-hidden="true"></span> New project</a>
            </div>
            
            <div class="panel panel-default">          
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Project name</th>
                                <th>Started</th>
                                <th>Last entry</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @forelse ($projects as $project)
                            <tr>
                                <td><a href="{{ url('/projects/'. $project->id) }}">{{ $project->name }}</a></td>
                                <td>{{ $project->created_at }}</td>
                                <td>{{ $project->updated_at }}</td>
                            </tr>
                        @empty
                            <tr><td colspan="3">No projects</td></tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
