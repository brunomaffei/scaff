@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Seja Bem-Vindo Professor : {{ Auth::user()->name }}
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.list') }}">Lista De Alunos</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('videos.list') }}">Lista de Videos</a>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary" onClick="location.href='{{ url('/videos/novo') }}'">Upload
                            Videos</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
