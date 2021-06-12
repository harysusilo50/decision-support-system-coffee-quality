<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="POST">
        @csrf
            <div>
                <label for="username">Username</label>
                <input value="{{ old('username') }}" type="text" name="username" id="username">
                @error('username')
                    <div >
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div >
                <label for="password">password</label>
                <input type="password" name="password" id="password" ">
                @error('password')
                    <div >
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button  type="submit">login</button>

    </form>
</body>
</html>