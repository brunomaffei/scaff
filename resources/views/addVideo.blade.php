@extends('layouts.app')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro de Video</title>
    </head>

    <body>

        <div class="container">
            <div class="row justify-content-center">
                <form action="{{ route('videos.store') }}" method="POST">
                    @csrf
                    <label for="">Descrição do Video</label><br />
                    <input type="text" name="descricao" placeholder="digite descrição"><br />

                    <label for="">Link</label><br />
                    <input type="text" name="link" placeholder="http://"><br />

                    <input type="submit" value="Cadastrar Video">
                </form>
            </div>
        </div>
    </body>

    </html>

@endsection
