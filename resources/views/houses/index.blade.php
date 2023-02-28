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
<div class="container">
    @foreach($houses as $house)
        <a href="{{ route('houses.show', $house) }}">
            <p>
{{--                {{dd($house->number of floor)}}--}}
                <span class="ms-5">{{ $house->name }}</span>
{{--                <span class="ms-5">{{ $house-price }}</span>--}}
                <span class="ms-5">{{ $house->year of build }}</span>
                <span class="ms-5">{{ $house->number of floor }}</span>
            </p>
        </a>
    @endforeach

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">year of build</th>
                    <th scope="col">number of floor</th>
                </tr>
            </thead>
            <tbody>
            @foreach($houses as $house)
                <tr>
                    <th scope="row">{{ $house->name }}</th>
                    <td>{{ $house->price }}</td>
                    <td>{{ $house->year of build }}</td>
                    <td>{{ $house->number of floor }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!--@foreach($authors as $author)
            <p>{{ $author->name}}
                @foreach($author->articles as $article)
                    <span class="ps-5">{{ $article->title }}</span>
                @endforeach
            </p>
        @endforeach-->


        <br>
        <br>
        <br>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

@extends('houses.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example f</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('houses.create') }}"> Create New Houses</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Year of build</th>
            <th>Number of floor</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($houses as $house)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $house->Name }}</td>
            <td>{{ $house->Price }}</td>
            <td>{{ $house->Year of build }}</td>
            <td>{{ $house->Number of floor }}</td>
            <td>
                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('client.show',$client->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('client.edit',$client->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $clients->links() !!}
      
@endsection