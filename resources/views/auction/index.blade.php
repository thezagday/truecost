@extends('admin.base')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Lots</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <td>Current cost</td>
                                <td>Order</td>
                                <td>Candidate</td>
                                <td colspan = 3>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lots as $lot)
                                <tr>
                                    <td>{{$lot->current_cost}}</td>
                                    <td>{{$lot->order->bid->title}}</td>
                                    <td>{{$lot->candidate->name}}</td>
                                    <td><a href="{{ route('auction.show', $lot->id) }}" class="btn btn-primary">Show</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection