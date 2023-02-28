<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
@extends('clients.layout')

 @section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="client">
            <h1>Добавить нового клиента</h1>
        </div>
    </div>
</div>

    <div class="container">
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Имя клиента</label>
                <input type="text" class="form-control" name="clients_name" id="exampleFormControlInput1" placeholder="Введите Имя ">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Номер клиента</label>
                <input type="tel" class="form-control" name="clients_number" id="exampleFormControlTextarea1" rows="1" placeholder="Введите номер"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email клиента</label>
                <input type="email" class="form-control" name="clients_Email" id="exampleFormControlInput1" placeholder="Введите Email">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Назад</a>
        </div>
        </form>
    </div>
    @endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

<!---->
  
<!---->

@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<!--<form action="{{ route('clients.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                <textarea class="form-control" style="height:150px" name="email" placeholder="Email"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
-->