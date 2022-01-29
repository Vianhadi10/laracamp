@component('mail::message')
# your Transaction Has Been Confirmed

Hi {{$checkout->User->name}}
<br>
Your transaction has been confirmed, now you can enjoy the benefits of <b>{{$checkout->Camp->title}}</b> camp.

The body of your message.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
