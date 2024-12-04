<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('user/css/login.css') }}">


    <style>



    </style>
</head>

<body>

    <div class="grid-container ">

        <div class="div text-center">
            <img src="{{ asset('img/login/Green Modern Fitness App Logo (6) .png') }}" class="img-circle elevation-2"
                alt="User Image">

            <div class="div2">LOGIN TO FITWISE</div>
            <form action="{{ route('user.login.check') }}">
                @csrf
                <input type="email" id="email" name="email" class="mb-4 mt-4" placeholder="Email" required><br>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
                <button class="btn btn-warning mt-4">Login</button>
            </form>
        </div>
        <div class="div1 d-flex justify-content-center">

            <img src="{{ asset('img/login/sport0.png') }}" class="photo" id="image" alt="sport0">

        </div>

    </div>


    <script async>
        let image = document.getElementById("image");
        let images = ["{{ asset('img/login/sport3.jpg') }}", "{{ asset('img/login/sport1.jpg') }}",
            "{{ asset('img/login/sport2.jpg') }}", "{{ asset('img/login/sport0.png') }}"
        ];
    </script>

    <script src="{{ asset('/user/js/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
