@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="page-header">
            <h1><a href="{{ url('/projects') }}"><i class="fa fa-arrow-circle-o-left"></i></a> Example page header <small>Subtext for header</small></h1>
        </div>
            <div class="panel panel-default row">
                <div class="panel-body">
                    <div class="col-sm-6">
                        <table class="header-info">
                            <tr><th>Project url</th><td>{{ $project['url'] }}</td></tr>
                            <tr><th>Category</th><td>{{ $project['category'] }}</td></tr>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="header-info">
                            <tr><th>Project started</th><td>{{ $project['started'] }}</td></tr>
                            <tr><th>Last updated</th><td>{{ $project['updated'] }}</td></tr>
                        </table>
                    </div>

                    <hr>

                    <div class="project-description">
                    
                        <p>{{ $project['description'] }}</p>

                    </div>

                    <div class="project-logs">
                        <h3>Logs here</h3>

                        <p>There will be logs...</p>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
