@extends('layout.main')
@section('content')
    <h2>{{ $worker->name }} page</h2>
    <br>
        <div>
            <div> Name: {{ $worker->name  }}</div>
            <div> Surname: {{ $worker->surname  }}</div>
            <div> Email: {{ $worker->email  }}</div>
            <div> Age: {{ $worker->age  }}</div>
            <div> Description: {{ $worker->description  }}</div>
            <div> Is married: {{ $worker->is_married ? 'Married' : 'Not married'  }}</div>
            <div>
                <a href="{{ route('worker.index')  }}">Back</a>
            </div>
            <hr>
        </div>
@endsection
