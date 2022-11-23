<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Тестовое задание</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <header class="p-3 text-bg-dark mb-5">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="{{ route('index') }}" class="d-flex align-items-center text-white text-decoration-none">
                    {{ config('app.name') }}
                </a>

            </div>
        </div>
    </header>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div id="message" class="alert alert-success d-none">Данные отправлены</div>
                <form id="feedbackForm">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                        <div id="name" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                        <div id="email" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" id="phone-mask" class="form-control" placeholder="Телефон">
                        <div id="phone" class="text-danger"></div>
                    </div>
                    <div class="d-flex">
                        <button type="button" id="button" class="btn btn-secondary">Отправить</button>
                        <div id="progress" class="spinner-border spinner-border-sm ms-3 my-auto d-none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
