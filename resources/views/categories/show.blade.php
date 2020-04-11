@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Полное описание категории {{ $category->title  }}</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $category->title }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{ $category->description }}">
                            </div>
                            <div class="form-group">
                                <label for="parent">Parent</label>
                                <input type="text" name="parent" class="form-control" id="parent" placeholder="Parent" value="{{ $category->parent_id ?? 'Родительская категория'}}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
