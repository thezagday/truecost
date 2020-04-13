@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Lot</div>
                    <div class="panel-body">
                        <form action="{{ route('lots.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="start_cost">Start cost</label>
                                <input type="text" name="start_cost" class="form-control" id="start_cost" placeholder="Start cost">
                            </div>
                            <div class="form-group">
                                <label for="current_cost">Current cost</label>
                                <input type="text" name="current_cost" class="form-control" id="current_cost" placeholder="Current cost">
                            </div>
                            <div class="form-group">
                                <label for="final_cost">Final cost</label>
                                <input type="text" name="final_cost" class="form-control" id="final_cost" placeholder="Final cost">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active">Active</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="order">Order</label>
                                <select class="form-control" id="order" name="order_id">
                                    @foreach($orders as $order)
                                        <option value="{{ $order->id }}">{{ $order->bid->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user">User</label>
                                <select class="form-control" id="user" name="user_id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection