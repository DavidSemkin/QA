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
@extends('house.layout')

 @section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="house">
            <h1>Добавить новый дом</h1>
        </div>
    </div>
</div>

    <div class="container">
        <form action="{{ route('houses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Название дома</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Введите название дома ">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Цена за 1кв/м</label>
                <input type="text" class="form-control" name="price" id="exampleFormControlTextarea1" placeholder="Введите цену"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Год постройки</label>
                <input type="datetime-local" class="form-control" name="year of build" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Количество этажей</label>
                <input type="number" class="form-control" name="number of floor" id="exampleFormControlTextarea1" placeholder="Введите количество этажей"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('houses.index') }}"> Назад</a>
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
