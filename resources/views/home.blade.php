@extends('layouts.app-master')

@section('title', 'Главная')

@section('content')

    <section id="home">
        <div class="container">
            @include('layouts.partials.ad')
        </div>
    </section>

@endsection
