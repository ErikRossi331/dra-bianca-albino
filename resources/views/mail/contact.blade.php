@component('mail::message')

   <b> Novo contato a partir do site institucional</b>
   <hr>
   <b>Nome:</b> {{$data["nome"]}} <br>
   <b>Email:</b> {{$data["email"]}} <br>
   <b>Assunto:</b> {{$data["assunto"]}} <br>
   <b>Mensagem:</b> {{$data["mensagem"]}} <br>

@endcomponent