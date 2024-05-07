<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>HTML 5 Boilerplate</title>
    </head>
    <body>
        <h1>Create Worker</h1>
        <br>
            <div>
                <form action="{{ route('worker.store')  }}" method="post">
                    @csrf
                    <div style="margin-bottom: 15px">
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                        @error('name') {{ $message }} @enderror
                    </div>
                    <div style="margin-bottom: 15px">
                        <input type="text" name="surname" placeholder="Surname" value="{{ old('surname') }}">
                        @error('surname') {{ $message }} @enderror
                    </div>
                    <div style="margin-bottom: 15px">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email') {{ $message }} @enderror
                    </div>
                    <div style="margin-bottom: 15px">
                        <input type="number" name="age" placeholder="Age" value="{{ old('age') }}">
                        @error('age') {{ $message }} @enderror
                    </div>
                    <div style="margin-bottom: 15px">
                        <textarea name="description" placeholder="Description">
                            {{ old('description') }}
                        </textarea>
                        @error('description') {{ $message }} @enderror
                    </div>
                    <div>
                        <input {{ old('is_married') == 'on' ? ' checked' : ' ' }} id="isMarried" type="checkbox" name="is_married">
                        <label for="isMarried">Is married</label>
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="Add">
                    </div>
                    <div>
                        <a href="{{ route('worker.index')  }}">Back</a>
                    </div>
                </form>
            </div>
    </body>
</html>
