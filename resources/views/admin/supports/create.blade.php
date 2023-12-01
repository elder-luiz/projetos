@extends('admin.layouts.app')

@section('title', 'Nova dúvida')

@section('header')

<h1 class="text-lg text-black-500">Nova Dúvida</h1>

@endsection

@section('content')

<form method="POST" action="{{ route('supports.store') }}">
    @include('admin.supports.partials.form')
    <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Enviar</button>
</form>

@endsection