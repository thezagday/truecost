@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактирование "{{ $bid->title }}"</div>
                    <div class="panel-body">
                        <form action="{{ route('bids.update', $bid) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT" />
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $bid->title }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{ $bid->description }}">
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control" id="level" name="level_id">
                                    @foreach($levels as $level)
                                        <option value="{{ $level->id }}" @if ($level->id == $bid->level->id) {{ 'selected' }} @endif>{{ $level->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" @if ($category->id == $bid->category->id) {{ 'selected' }} @endif>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
