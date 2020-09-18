@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listagem de Videos</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-dark">
                    <tr>
                        <td>#ID: </td>
                        <td>Descrição:</td>
                        <td>Link:</td>
                        <td>Ações:</td>
                    </tr>
                    @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->id }} </td>
                            <td>{{ $video->descricao }}</td>
                            <td>{{ $video->link }}</td>
                            <td>
                                <form action="{{ route('videos.destroy', ['video' => $video->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit" value="Remover">
                                </form>
                            <td>
                                <form action="{{ route('videos.editVideo', ['video' => $video->id]) }}" method="GET">
                                    @csrf
                                    <input class="btn btn-warning" type="submit" value="Editar">
                                </form>
                            </td>
                            </td>
                        </tr>
                    @endforeach()
                </table>
            </div>
            <button class="btn btn-primary" onclick="location.href='{{ url('/admin/home') }}'">Voltar</button>
        </div>
    </body>

    </html>

@endsection
