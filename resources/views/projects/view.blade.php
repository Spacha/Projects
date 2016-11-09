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
                            <tr><th>Some label here</th><td>Here is some data</td></tr>
                            <tr><th>Another datahee</th><td>Hwdawa</td></tr>
                            <tr><th>Something</th><td>awddaw22</td></tr>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="header-info">
                            <tr><th>Some label here</th><td>Here is some data</td></tr>
                            <tr><th>Another datahee</th><td>Hwdawa</td></tr>
                            <tr><th>Something</th><td>awddaw22</td></tr>
                        </table>
                    </div>

                    <hr>

                    <div class="project-description">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>

                    </div>

                    <div class="project-logs">
                        <h3>Logs here</h3>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
