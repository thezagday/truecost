@extends('admin.base')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Order</div>
                    <div class="panel-body">
                        <form action="{{ route('orders.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input type="text" name="cost" class="form-control" id="cost" placeholder="Cost">
                            </div>
                            <div class="form-group">
                                <label for="bid">Bid</label>
                                <select class="form-control" id="bid" name="bid_id">
                                    @foreach($bids as $bid)
                                        <option value="{{ $bid->id }}">{{ $bid->title }}</option>
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