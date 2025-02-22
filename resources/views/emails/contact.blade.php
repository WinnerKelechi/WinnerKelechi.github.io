@component('mail::message')
#

The body of your message.

Name: {{ $contact->name }}
Email: {{ $contact->name }}
Phone: {{ $contact->phone }}
Company: {{ $contact->company }}
Subject: {{ $contact->subject }}

Message:
{{ $contact->message }}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
