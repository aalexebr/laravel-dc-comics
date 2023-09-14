@extends('layout.layout-template')

@section('content')
    <div class="container my-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">series</th>
                <th scope="col">price</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>${{$comic->price}}</td>
                        <td><a href="{{route('comics.show', ['comic' => $comic->id])}}">view</a></td>
                    </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
@endsection