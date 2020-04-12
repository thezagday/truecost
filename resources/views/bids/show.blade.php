@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Полное описание {{ $bid->title  }}</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $bid->title }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{ $bid->description }}">
                            </div>
                            <div class="form-group">
                                <label for="title">User</label>
                                <input type="text" name="user" class="form-control" id="user" placeholder="User" value="{{ $bid->user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Level</label>
                                <input type="text" name="level" class="form-control" id="level" placeholder="Level" value="{{ $bid->level->title }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Category</label>
                                <input type="text" name="category" class="form-control" id="category" placeholder="Category" value="{{ $bid->category->title }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
