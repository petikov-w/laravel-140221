@extends('layouts.basis')

@section('title-page')@parent {{$title}}@endsection

@section('content')
    <div class="s-header">{{$message}}</div>
    <form action="" method="post"></form>

    <!--========================== ФОРМА ИЗМЕНЕНИЯ КОНТАКТНЫХ ДАННЫХ ===========================-->
    <div class="form-ds">
           <form method="post" action="index.php" class="form-dsg">
               @csrf
               <label for="telefon" class="form-label">Телефон</label>
               <input name="telefon" id="telefon" type="text" class="form-input" value="{{$telefon}}" placeholder="Введите телефон">
               <label for="email" class="form-label">Адрес электронной почты</label>
               <input name="email" id="email" type="text" class="form-input" value="{{$email}}" placeholder="Введите email">
               <button class="form-submit" type="submit">Изменить</button>
            </form>
    </div>
    <!--=======================================================================================-->
@endsection
