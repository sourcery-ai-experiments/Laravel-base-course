<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<h1>Main page</h1>
<div>
    <a href="{{ route('worker.create') }}">Add worker</a>
</div>
<hr>
<br>
{{-- Фильтр --}}
<div>
    <form action="{{ route('worker.index') }}">
        <input type="text" name="name" placeholder="Name" value="{{ request()->get('name') }}">
        <input type="text" name="surname" placeholder="Surname" value="{{ request()->get('surname') }}">
        <input type="text" name="email" placeholder="Email" value="{{ request()->get('email') }}">
        <input type="number" name="ageFrom" placeholder="Age from" value="{{ request()->get('ageFrom') }}">
        <input type="number" name="ageTo" placeholder="Age to" value="{{ request()->get('ageTo') }}">
        <input type="text" name="description" placeholder="description" value="{{ request()->get('description') }}">
        <input id="isMarried" type="checkbox" name="is_married"
            {{ request()->get('is_married') == 'on' ? ' checked' : '' }}
        >
        <label for="isMarried">Is married</label>

        <input type="submit">
        <a href="{{ route('worker.index') }}">reset</a>
    </form>
</div>
<br>
@foreach($workers as $worker)
    <div>
        <div> Name: {{ $worker->name  }}</div>
        <div> Surname: {{ $worker->surname  }}</div>
        <div> Email: {{ $worker->email  }}</div>
        <div> Age: {{ $worker->age  }}</div>
        <div> Description: {{ $worker->description  }}</div>
        <div> Is married: {{ $worker->is_married ? 'Married' : 'Not married'  }}</div>
        <div>
            <a href="{{ route('worker.show', $worker->id)  }}">Show</a>
        </div>
        <div>
            <a href="{{ route('worker.edit', $worker->id)  }}">Edit</a>
        </div>
        <div>
            <form action="{{ route('worker.destroy', $worker->id) }}" method="post">
                @csrf
                @method('Delete')
                <input type="submit" value="Delete">
            </form>
        </div>
        <hr>
    </div>
@endforeach
<div class="my-pagination">
    {{ $workers->withQueryString()->links() }}
</div>
<style>
    .my-pagination svg {
        width: 20px;
    }
</style>
</body>
</html>
