<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>HTML 5 Boilerplate</title>
    </head>
    <body>
        <h1>{{ $worker->name }} page</h1>
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
    </body>
</html>
