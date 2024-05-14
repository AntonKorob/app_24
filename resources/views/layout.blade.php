<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <title>@yield('title')</title>
    </head>

    <body class="bg-secondary text-white" style="height: 100px;">

        <div class="d-flex flex-column flex-md-row align-items-center p-3 mb-4 border-bottom bg-dark text-white">
            <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                    role="img">
                    <title>Bootstrap</title>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                        fill="currentColor"></path>
                </svg>
                <span class="fs-4">Pricing example</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto ">
                <a class="me-3 p-2 link-body-emphasis text-decoration-none text-white" href="/"> Главная </a>
                <a class="me-3 p-2 link-body-emphasis text-decoration-none text-white" href="/about"> Про нас </a>
                <a class="me-3 p-2 link-body-emphasis text-decoration-none text-white" href="/posts"> Статья </a>
                <a class="p-2 link-body-emphasis text-decoration-none text-white" href="/product"> Продукт </a>
                <a class="p-2 link-body-emphasis text-decoration-none text-white" href="/review"> Отзывы </a>

                <!-- <a class="btn btn-outline-primary pe-2 m-2" href="/login">Login</a>
                    <a class="btn btn-outline-primary pe-2 m-2" href="/register">Register</a> -->

                <div
                    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn btn-outline-secondary">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 btn btn-outline-secondary">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif


                </div>

            </nav>
        </div>

        <!-- //container -->

        <div class="container">
            @yield('main_content')
        </div>
        <div class="p-2">
            <p>
                Copyright © {{date('Y')}}
                Все права защищены товарными
                знаками и свидетельствами.

            </p>
        </div>

    </body>

</html>