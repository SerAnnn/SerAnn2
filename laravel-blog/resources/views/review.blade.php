@extends('layouts.app')
@section('title','Отзывы')

@section('main-content')

<h1>Отзывы </h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="/review/check" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder=" введите ваш email" class="form-control"><br>
    <input type="text" name="subject" id="subject" placeholder=" введите ваш Отзыв" class="form-control"><br>
    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="введите сообшение "></textarea><br>
    <button type="submit" class="btn btn succes">отправить </button>
</form>
<br>
<h1>Все отзовы</h1>
<br>
@foreach($reviews as $el)
<div class=" alert alert-warning">
    <h3>{{$el->subject}}</h3>
    <b>{{$el->email}}</b>
    <p>{{$el->message}}</p>
</div>
@endforeach

@endsection