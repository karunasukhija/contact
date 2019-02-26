
@component('mail::message')
 #Intoduction
There is a query {{ $name }}
{{ $message }}

@component('mail::button',['url'=>''])
        Button Text 
@endcomponent
        
   Thank You,<br>
{{ config('app.name')}}
@endcomponent