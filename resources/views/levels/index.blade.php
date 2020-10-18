@extends('admin.base')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Levels</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td colspan = 2>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($levels as $level)
                                <tr>
                                    <td>{{$level->id}}</td>
                                    <td>{{$level->title}}</td>
                                    <td>{{$level->description}}</td>
                                    <td>
                                        <a href="{{ route('levels.edit', $level->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('levels.show', $level->id) }}" class="btn btn-primary">Show</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('levels.destroy', $level->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('levels.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection