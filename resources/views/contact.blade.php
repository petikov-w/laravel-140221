@include('layouts.head')
<div class="container">
    @include('layouts.other_header')
    <div class="s-header">{{$message}}</div>
    <div class="contacts">
        <span class="sss">Телефон:</span>
        <a href="tel: {{$telefon}}"><span class="contact-info">{{$telefon}}</span></a>
    </div>
    <div class="contacts">
        <span class="sss">Email:</span>
        <a href="mailto: {{$email}}"><span class="contact-info">{{$email}}</span></a>
    </div>
</div>
@include('layouts.foot')
