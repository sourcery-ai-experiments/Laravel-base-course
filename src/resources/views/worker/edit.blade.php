<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>HTML 5 Boilerplate</title>
    </head>
    <body>
        <h1>Edit Worker</h1>
        <br>
            <div>
                <form action="{{ route('worker.update', $worker->id)  }}" method="post">
                    @csrf
                    @method('Patch')
                    <div style="margin-bottom: 15px">
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') ?? $worker->name }}">
                        @error('name') {{ $message }} @enderror
                    </div>
                    <div style="margin-bottom: 15px">
                        <input type="text" name="surname" placeholder="Surname" value="{{ old('surname') ?? $worker->surname }}">
                        @error('surname') {{ $message }} @enderror
                    </div>
                    <div style="margin-bottom: 15px">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') ?? $worker->email }}">
                        @error('email') {{ $message }} @enderror
                    </div>
                    <div style="margin-bottom: 15px">
                        <input type="number" name="age" placeholder="Age" value="{{ old('age') ?? $worker->age }}">
                        @error('age') {{ $message }} @enderror
                    </div>
                    <div style="margin-bottom: 15px">
                        <textarea name="description" placeholder="Description">
                            {{ old('description') ?? $worker->description }}
                        </textarea>
                        @error('description') {{ $message }} @enderror
                    </div>
                    <div>
                        <input id="isMarried" type="checkbox" name="is_married"
                            {{ $worker->is_married ? ' checked' : '' }}
                        >
                        <label for="isMarried">Is married</label>
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="Save">
                    </div>
                    <div>
                        <a href="{{ route('worker.index')  }}">Back</a>
                    </div>
                </form>
            </div>
    </body>
</html>
