@extends('base.base')

@section('page.title', 'Главная')

@section('content')
    <div class="container mx-auto">
        <h1>Главная</h1>
        @livewire('hello-world')
    </div>
@endsection

