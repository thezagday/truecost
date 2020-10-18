@extends('admin.base')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Полное описание заказа {{ $order->bid->title  }}</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="cost">Cost</label>
                                <input type="text" name="cost" class="form-control" id="cost" placeholder="Cost" value="{{ $order->cost }}">
                            </div>
                            <div class="form-group">
                                <label for="bid">Bid</label>
                                <input type="text" name="bid_id" class="form-control" id="bid" placeholder="Bid" value="{{ $order->bid->title }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
