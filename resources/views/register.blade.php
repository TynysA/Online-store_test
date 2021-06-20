@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
@if($errors->any())
<div class="mt1 alert alert-danger container">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{route('contact-form')}}" class="container mt1">
    @csrf
    <div class="form-group mb-10">
        <label for="name" class="mt-1_2">Имя:</label>
        <input class="form-control mt-0_3" type="text" name="name" id="name">
        <label for="name" class="mt-1_2">E-mail:</label>
        <input class="form-control mt-0_3" type="email" name="email" id="eamil">
        <label for="name" class="mt-1_2">Пороль:</label>
        <input class="form-control mt-0_3" type="password" name="password" id="pss">
    </div>
    <button type="submit" class="btn btn-success">Зарегистрироваться</button>
</form>
@endsection