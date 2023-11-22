<h1>Nova Dúvida</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form method="POST" action="{{ route('supports.store') }}">
    @csrf()
    <input type="text" placeholder="Assunto" name="subject" id="subject" value="{{ old('subject') }}" /><br />
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{ old('body') }}</textarea><br />
    <button type="submit">Enviar</button>
</form>