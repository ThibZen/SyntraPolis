<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="container-fluid loginscreen">

            <form action="POST" action="{{ route('login') }}">
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="email">Email: </label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ __('email') }}" required autofocus>
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="password">Password: </label>
                        <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="{{ __('password') }}" required>
                    </div>
                </div>
                <br>

                <input type="submit">
            </form>
        </div>
    </div>

</body>
</html>
