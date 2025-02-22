@component('mail::message')
#Hello 

You have new request to Demo STRIDE ERP

Name: {{ $demo->name }} <br>
Email: {{ $demo->name }} <br>
Phone: {{ $demo->phone }} <br>
Company: {{ $demo->company }} <br>
Demo Date: {{ $demo->date }} <br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
