@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактирование заказа "{{ $order->bid->title }}"</div>
                    <div class="panel-body">
                        <form action="{{ route('orders.update', $order) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT" />
                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input type="text" name="cost" class="form-control" id="cost" placeholder="Cost" value="{{ $order->cost }}">
                            </div>
                            <div class="form-group">
                                <label for="bid">Bid</label>
                                <select class="form-control" id="bid" name="bid_id">
                                    @foreach($bids as $bid)
                                        <option value="{{ $bid->id }}" @if ($bid->id == $order->bid->id) {{ 'selected' }} @endif>{{ $bid->title }}</option>
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
