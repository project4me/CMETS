@component('mail::message')
# {{ $content['subject'] }}

{{ $content['message'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
