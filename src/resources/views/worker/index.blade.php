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
    </body>
</html>
