<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Styles -->
        <style>
        
                .Heading h1{
                    font-size:40px;
                    font-weight:900;
                    color:#fff;

                }
                .Heading h3{
                    font-size:30px;
                    font-weight:900;
                    color:#fff;
                    
                }
                .Heading h4{
                    font-size:25px;
                    font-weight:900;
                    color:#fff; 
                }
            
                .img-1 img{
                    width:300px;
                    height:300px;
                    margin-left:23%;
                }
        </style>
    </head>
    <body class="antialiased">
        <x-frontend.body.header>
        </x-frontend.body.header>
        <x-frontend.body.navbar>
        </x-frontend.body.navbar>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="row d-flex align-item-center justify-content-center">
                    <div class="col-sm-10">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label ">User name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="User Name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label ">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
