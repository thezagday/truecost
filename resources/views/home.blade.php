@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h2>
                            <bold><a href="{{ route('categories.index') }}">Categories</a></bold>
                        </h2>
                        <h2>
                            <bold><a href="{{ route('levels.index') }}">Levels</a></bold>
                        </h2>
                        <h2>
                            <bold><a href="{{ route('bids.index') }}">Bids</a></bold>
                        </h2>
                        <h2>
                            <bold><a href="{{ route('orders.index') }}">Orders</a></bold>
                        </h2>
                        <h2>
                            <bold><a href="{{ route('lots.index') }}">Lots</a></bold>
                        </h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
