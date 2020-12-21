<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title title-page="contacts">Contacts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- FONTS --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </head>
    <body>
        <main>
            <div class="container-lg">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h1>Contacts</h1>
                    </div>
                    <div class="col-lg-12">
                        <h3>Ciao {{ $name }}</h3>
                    </div>
                    <div class="col-lg-6">
                        <h1>col-lg-6</h1>
                    </div>
                    <div class="col-lg-6">
                        <h1>col-lg-6</h1>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
