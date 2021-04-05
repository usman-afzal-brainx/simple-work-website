<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

    <title>Document</title>
</head>

<body>
    <div id="wrapper">

        <div id="page" class="container">


            <form method="POST" action="/contact">
                @csrf
                <div class="field">
                    <label for="email" class="label">Email address</label>
                    <div class="control">
                        <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="email"
                            id="email">
                        @error('email')
                        <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

                @if(session('message'))
                <div>
                    {{session('message')}}
                </div>
                @endif
            </form>

        </div>


    </div>
</body>

</html>