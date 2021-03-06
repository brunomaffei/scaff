@extends('layouts.app')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar Video</title>
    </head>

    <body>

        <div class="container">
            <div class="row justify-content-center">
                <form action="{{ route('videos.edit', ['video' => $video->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="">Descrição do Video</label><br />
                    <input type="text" name="descricao" value="{{ $video->descricao }}"><br />

                    <label for="">Link</label><br />
                    <input type="text" name="link" value="{{ $video->link }}"><br />

                    <br />
                    <input class="btn btn-warning" type="submit" value="Editar Video">
                </form>
            </div>
        </div>
    </body>

    </html>

@endsection
