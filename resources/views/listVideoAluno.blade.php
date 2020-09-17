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
          <td>Descrição:</td>
          <td>Link:</td>
        </tr> 

        @foreach($videos as $video)
        <tr>
          <td>{{ $video->descricao }}</td>
          <td>{{ $video->link }}</td>
        </tr>
        @endforeach()
    </table>
  </div>
  <button class="btn btn-primary" onclick="location.href='{{ url('/home') }}'">Voltar</button>
</div>
</body>
</html>

@endsection