@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Lots</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <td>ID</td>
                                <td>Start cost</td>
                                <td>Current cost</td>
                                <td>Final cost</td>
                                <td>Status</td>
                                <td>Order</td>
                                <td>Candidate</td>
                                <td colspan = 3>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lots as $lot)
                                <tr>
                                    <td>{{$lot->id}}</td>
                                    <td>{{$lot->start_cost}}</td>
                                    <td>{{$lot->current_cost}}</td>
                                    <td>{{$lot->final_cost}}</td>
                                    <td>{{$lot->status}}</td>
                                    <td>{{$lot->order->bid->title}}</td>
                                    <td>{{$lot->candidate->name}}</td>
                                    <td>
                                        <a href="{{ route('lots.edit', $lot->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('lots.show', $lot->id) }}" class="btn btn-primary">Show</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('lots.destroy', $lot->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('lots.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection