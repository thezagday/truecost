@extends('admin.base')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактирование лота "{{ $lot->order->bid->title }}"</div>
                    <div class="panel-body">
                        <form action="{{ route('lots.update', $lot) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT" />
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
                                <select class="form-control" id="order" name="order_id">
                                    @foreach($orders as $order)
                                        <option value="{{ $order->id }}" @if ($order->id == $lot->order_id) {{ 'selected' }} @endif>{{ $order->bid->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="user">Candidate</label>
                                <select class="form-control" id="candidate" name="candidate_id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" @if ($user->id == $lot->candidate_id) {{ 'selected' }} @endif>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
