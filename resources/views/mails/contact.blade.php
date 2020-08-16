@component('mail::message')
# {{ $title }}

@component('mail::panel')
    <b>Nowa wiadomość od użytkownika - {{ $email }}</b>
    {{ $message }}
@endcomponent

@endcomponent