@component('mail::message')
# Introduction
Hey {{$check}},
Welcome to our {{ config('app.name') }}.
Admin has opened an account for you at {{ config('app.name') }}. Please log in with your password and change your password accordingly.


@component('mail::panel')
Your password is: {{ $generate}}
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
