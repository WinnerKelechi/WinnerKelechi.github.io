@component('mail::message')


# Hello!

You have been made an administrator on strideerp.com.
Please Login to review records.

@component('mail::button', ['url' => 'https://strideerp.com/login'])
Login
@endcomponent

Thanks,<br>
Rytegate
@endcomponent
