@component('mail::message')

# Hello!

A new <b>Partnership</b> request has been submitted on StrideERP website. <br>
Please view details below:

<b>First Name</b>: {{ $partner->first_name }} <br>
<b>Last Name</b>: {{ $partner->last_name }} <br>
<b>Email</b>: {{ $partner->email }} <br>
<b>Phone Number</b>: {{ $partner->phone }} <br>

You can also <a href="https://strideerp.com/login">login</a> to view records

<!-- @component('mail::button', ['url' => 'https://strideerp.com/login'])
Login
@endcomponent -->

Thanks,<br>
Rytegate
@endcomponent
