@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listagem de Usuarios</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <table class="table table-dark">
                    <tr>
                        <td>#ID</td>
                        <td>Nome:</td>
                        <td>E-mail:</td>
                    </tr>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach()
                </table>
            </div>
            <button class="btn btn-primary" onclick="location.href='{{ url('admin/home') }}'">Voltar</button>
        </div>
    </body>

    </html>


@endsection
