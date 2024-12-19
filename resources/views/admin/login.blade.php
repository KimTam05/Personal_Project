<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="container bg-dark position-absolute top-50 start-50 translate-middle">

    <section>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 py-2 bg-white rounded">
                <h1 class="text-center">Login</h1>
                <form action="{{route('admin.loginSubmit')}}" method="post">
                    @csrf
                    <div class="form-group my-2">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your name">
                        @error('username')
                            <span class="text-danger my-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        <div class="text-danger">
                            {{ $errors->first('message') }}
                        </div>
                    </div>
                    <button class="btn btn-primary my-2" type="submit">Login</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
