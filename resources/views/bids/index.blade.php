@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($bids as $bid)
                                <li>{{ $bid->title }}</li>
                            @endforeach


                            <ul id="menu">
                                <li><a href="{{ route('bids.index') }}">All</a></li>
                                <li><a href="{{ route('bids.create') }}">Create</a></li>
                                <li><a href="#">Edit</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection