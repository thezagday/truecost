@extends('admin.base')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Reviews</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Body</td>
                                <td>User</td>
                                <td colspan = 3>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{$review->id}}</td>
                                    <td>{{$review->title}}</td>
                                    <td>{{$review->body}}</td>
                                    <td>{{$review->user->name}}</td>
                                    <td>
                                        <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-primary">Show</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('reviews.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection