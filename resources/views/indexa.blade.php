<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('site/filepond.css') }}">
        <style>
            /**
            * FilePond Custom Styles
            */
            .filepond--drop-label {
                color: #fff;
            }

            .filepond--label-action {
                text-decoration-color: #babdc0;
            }

            .filepond--panel-root {
                border: 1px solid;
                border-radius: 2em;
                border-color: #484f5e;
                background: #1f2531;
                height: 1em;
            }

            .filepond--item-panel {
                background-color: #595e68;
            }

            .filepond--drip-blob {
                background-color: #7f8a9a;
            }


            /**
            * Page Styles
            */
            html {
                padding:30vh 0 0;
            }

            body {
                max-width: 20em;
                margin: 0 auto;
                background: #1f2531;
            }
        </style>

    </head>
    <body class="antialiased">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="file"
            class="filepond"
            name="filepond"
            multiple
            data-allow-reorder="true">


        <script src="{{ asset('site/jquery.js') }}"></script>
        <script src="{{ asset('site/filepond.js') }}"></script>
        <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="filepond-plugin-file-validate-type.js"></script>
        <script src="{{ asset('site/bootstrap.js') }}"></script>
        <script src="{{ asset('site/function.js') }}"></script>
    </body>
</html>
