@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Полное описание лота {{ $lot->order->bid->title }}</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="start_cost">Start cost</label>
                                <input type="text" name="start_cost" class="form-control" id="start_cost" placeholder="Start cost" value="{{ $lot->start_cost }}">
                            </div>
                            <div class="form-group">
                                <label for="current_cost">Current cost</label>
                                <input type="text" name="current_cost" class="form-control" id="current_cost" placeholder="Current cost" value="{{ $lot->current_cost }}">
                            </div>
                            <div class="form-group">
                                <label for="final_cost">Final cost</label>
                                <input type="text" name="final_cost" class="form-control" id="final_cost" placeholder="Final cost" value="{{ $lot->final_cost }}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control" id="status" placeholder="Status" value="{{ $lot->status }}">
                            </div>
                            <div class="form-group">
                                <label for="order">Order</label>
                                <input type="text" name="order_id" class="form-control" id="order" placeholder="Order" value="{{ $lot->order->bid->title }}">
                            </div>
                            <div class="form-group">
                                <label for="user">User</label>
                                <input type="text" name="user_id" class="form-control" id="user" placeholder="User" value="{{ $lot->user_id }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
