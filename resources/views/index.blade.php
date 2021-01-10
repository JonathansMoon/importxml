<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('custom/styles/styles.css') }}">
        @toastr_css
        <title>Import xml</title>
    </head>
    <body>
        <div class="errors-custom">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form action="/register" method="POST" enctype='multipart/form-data' id="formulario">
            @csrf
            <div class="container">
                <div class="mb-3 box">
                    <input class="form-control" type="file" id="file" id="file" name="file[]" multiple>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </body>
    @jquery
    @toastr_js
    @toastr_render
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/file-validate.js') }}"></script>
</html>
