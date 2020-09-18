@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Seja Bem-Vindo Aluno : {{ Auth::user()->name }}
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <a href="{{ route('videos.listAluno') }}">Lista de Videos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
