<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title title-page="home">Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- FONTS --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </head>
    <body>
        <header>

            <div class="header-top px-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-start align-items-center">
                            <h3 class="my-0">Ciao {{ $name }}! </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom px-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <h3><a href="{{ route('home') }}">Home</a</h3>
                        </div>

                        <div class="col-lg-9 d-flex justify-content-between align-items-center">
                            <h3><a href="{{ route('products') }}">Products</a></h3>
                            <h3><a href="{{ route('about') }}">About us</a></h3>
                            <h3><a href="{{ route('contacts') }}">Contacts</a></h3>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <main class="p-5">
            <h3>Articles</h3>
                @foreach ($articles as $article)

                    @if ($loop->last)
                        <a class="text-capitalize py-2" href="#">  {{  $article }} </a>
                        <span class="font-weight-bold">(NEW!)</span>

                    @else
                        <a class="d-block text-capitalize py-2" href="#">  {{  $article }} </a>
                    @endif
                @endforeach
        </main>
    </body>
</html>
