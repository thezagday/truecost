@extends('admin.base')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Полное описание отзыва {{ $review->title }}</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $review->title }}">
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <input type="text" name="body" class="form-control" id="body" placeholder="Body" value="{{ $review->body }}">
                            </div>
                            <div class="form-group">
                                <label for="user">User</label>
                                <input type="text" name="user_id" class="form-control" id="user" placeholder="User" value="{{ $review->user->name }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
