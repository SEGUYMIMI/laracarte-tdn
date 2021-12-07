@component('mail::message')
# Hey Admin

-{{ $msg->name }}<br>
-{{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
