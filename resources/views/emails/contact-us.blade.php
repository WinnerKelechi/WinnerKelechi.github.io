@component('mail::message')

# Hello!

A new <b>Contact</b> request has been submitted on StrideERP website. <br>
Please view details below:

<b>Name</b>: {{ $contact->name }} <br>
<b>Email</b>: {{ $contact->email }} <br>
<b>Phone Number</b>: {{ $contact->phone_number }} <br>
<b>Subject</b>: {{ $contact->subject }} <br>

You can also <a href="https://strideerp.com/login">login</a> to view records

<!-- @component('mail::button', ['url' => 'https://strideerp.com/login'])
Login
@endcomponent -->

Thanks,<br>
Rytegate
@endcomponent
