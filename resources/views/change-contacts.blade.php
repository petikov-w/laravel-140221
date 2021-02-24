@extends('layouts.basis')

@section('title-page')@parent {{$title}}@endsection

@section('content')
    <div class="s-header">{{$message}}</div>
    <!--========================== ФОРМА ИЗМЕНЕНИЯ КОНТАКТНЫХ ДАННЫХ ===========================-->

           <form method="post" action="{{route('contact-form')}}"   class="form-dsg">
{{--           <form method="post" action="contact/change-contacts/submit"   class="form-dsg">--}}
{{--               @CSRF--}}
{{--               {{ csrf_field() }}--}}
               {{csrf_token()}}
{{--               <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
               <label for="telefon" class="form-label">Телефон</label>
               <input name="telefon" id="telefon" type="text" class="form-input" value="{{$telefon}}" placeholder="Введите телефон">
               <label for="email" class="form-label">Адрес электронной почты</label>
               <input name="email" id="email" type="text" class="form-input" value="{{$email}}" placeholder="Введите email">
               <button type="submit" class="form-submit" >Изменить</button>
            </form>

    <!--=======================================================================================-->
@endsection
