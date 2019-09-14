@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Counter</h1>
            @livewire('counter')
        </div>
    </div>
@endsection
