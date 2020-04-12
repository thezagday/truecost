@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Bids</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>User</td>
                                <td>Level</td>
                                <td>Category</td>
                                <td colspan = 3>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bids as $bid)
                                <tr>
                                    <td>{{$bid->id}}</td>
                                    <td>{{$bid->title}}</td>
                                    <td>{{$bid->description}}</td>
                                    <td>{{$bid->user->name}}</td>
                                    <td>{{$bid->level->title}}</td>
                                    <td>{{$bid->category->title}}</td>
                                    <td>
                                        <a href="{{ route('bids.edit', $bid->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('bids.show', $bid->id) }}" class="btn btn-primary">Show</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('bids.destroy', $bid->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('bids.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection