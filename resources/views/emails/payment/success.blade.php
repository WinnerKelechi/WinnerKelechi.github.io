@component('mail::message')
# Hello

{{-- A new payment has been made for STRIDE ERP License, details below. --}}
Stride ERP interest form has just been filled

+ Name: **{{ $payment->name }}**
+ Company: **{{ $payment->company }}**
+ Address: **{{ $payment->address }}**
+ Phone: **{{ $payment->phone }}**
+ Email: **{{ $payment->email }}**
+ Amount **{{ number_format($payment->amount/100, 2) }}**
+ License Type **{{ $payment->licenseType->name }}**

Thanks,<br>
{{ config('app.name') }}
@endcomponent
