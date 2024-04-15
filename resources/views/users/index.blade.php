@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row mb-4">
        <div class="col">
            <header class = "bg-primary py-3 text-white text-center">
                <h1 class="mb-0">Todos los usuarios</h1>
            </header>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe facere expedita necessitatibus a veritatis culpa nihil delectus officia alias? Doloremque cum facere possimus amet corrupti nemo, ratione molestias natus adipisci!</p>
        </div>
    </div>
</div>

@endsection

@section('breadcrumb')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

@endsection
