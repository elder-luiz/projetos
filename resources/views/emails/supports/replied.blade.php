<x-mail::message>
# Dúvida {{ $reply->support_id }} foi respondida.

Resposta: <b>{{ $reply->content }}</b>

<x-mail::button :url="route('replies.index', $reply->support_id)">
Ver dúvida completa
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
