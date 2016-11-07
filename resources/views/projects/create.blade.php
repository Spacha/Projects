@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">          
                <div class="panel-heading">Create new project</div>

                <div class="panel-body row">
                    <form class="form-horizontal" action="/projects/save" method="post">

                        {{ csrf_field() }}
                        
                        <div class="col-lg-10">
                            <div class="form-group required">
                                <label for="name" class="col-sm-3 control-label">Project name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Project name">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="category" class="col-sm-3 control-label">Category</label>
                                <div class="col-sm-9">
                                    <select name="category" class="form-control" id="name">
                                        <option value="1">General</option>
                                        <option value="2">Web applications</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" id="description" placeholder="Description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url" class="col-sm-3 control-label">Url</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon">http://</div>
                                        <input type="text" name="url" class="form-control" id="name" placeholder="Project url">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9 text-right">
                                <a href="/projects" role="button" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
