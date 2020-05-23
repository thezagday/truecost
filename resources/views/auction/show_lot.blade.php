@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Полное описание лота {{ $lot->order->bid->title }}</div>
                    <div class="panel-body">
                        <form action="{{ route('auction.reduce', $lot->id) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="current_cost">Current cost</label>
                                <input type="text" name="current_cost" class="form-control" id="current_cost" placeholder="Current cost" value="{{ $lot->current_cost }}">
                            </div>
                            <div class="form-group">
                                <label for="order">Order</label>
                                <input type="text" name="order_id" class="form-control" id="order" placeholder="Order" value="{{ $lot->order->bid->title }}">
                            </div>
                            <div class="form-group">
                                <label for="user">User</label>
                                <input type="text" name="candidate_id" class="form-control" id="candidate" placeholder="Candidate" value="{{ $lot->candidate->name }}">
                            </div>
                            <div class="form-group">
                                <label for="offer">Your offer</label>
                                <input type="text" name="offer" class="form-control" id="offer" placeholder="Your price" value="">
                            </div>
                            <input type="submit" class="submit btn btn-primary" value="Reduce">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
