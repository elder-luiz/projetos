@extends('admin.layouts.app')

@section('title', "Editar a dúvida #$support->id")

@section('header')

<h1 class="text-lg text-black-500">Dúvida #{{ $support->id }}</h1>

@endsection

@section('content')

<form method="POST" action="{{ route('supports.update', $support->id) }}">
    @csrf()
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support
    ])
    <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Atualizar</button>
</form>

@endsection