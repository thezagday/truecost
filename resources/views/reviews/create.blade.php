@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Review</div>
                    <div class="panel-body">
                        <form action="{{ route('reviews.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <input type="text" name="body" class="form-control" id="body" placeholder="Body">
                            </div>
                            <input type="hidden" name="user_id" value="{{ $current_user_id }}">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection