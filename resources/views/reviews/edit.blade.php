@extends('admin.base')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактирование отзыва "{{ $review->title }}"</div>
                    <div class="panel-body">
                        <form action="{{ route('reviews.update', $review) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT" />
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $review->title }}">
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <input type="text" name="body" class="form-control" id="body" placeholder="Body" value="{{ $review->body }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
