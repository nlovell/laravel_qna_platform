@component('mail::message')
    # New Contact Message
    Someone submitted a form!

    @component('mail::panel')
    @endcomponent

    {{$message}}

    @component('mail::button', ['url' => route('contact')])
        Reply to the email
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
