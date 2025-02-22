@component('mail::message')


# Hello!

A new <b>Free Trial</b> request has been submitted on StrideERP website. <br>
Please view details below:

<b>First Name</b>: {{ $trial->first_name }} <br>
<b>Last Name</b>: {{ $trial->last_name }} <br>
<b>Email</b>: {{ $trial->email }} <br>
<b>Phone Number</b>: {{ $trial->phone }} <br>
<b>Company Name</b>: {{ $trial->company_name}} <br>
<b>Company Size</b>: {{ $trial->staff_strength }} <br>

You can also <a href="https://strideerp.com/login">login</a> to view records

<!-- @component('mail::button', ['url' => 'https://strideerp.com/login'])
Login
@endcomponent -->
Thanks,<br>
Rytegate
@endcomponent
