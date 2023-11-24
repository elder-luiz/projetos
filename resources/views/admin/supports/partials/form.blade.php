@csrf()
<input type="text" placeholder="Assunto" name="subject" id="subject" value="{{ $support->subject ?? old('subject') }}" /><br />
<textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{ $support->body ?? old('body') }}</textarea><br />