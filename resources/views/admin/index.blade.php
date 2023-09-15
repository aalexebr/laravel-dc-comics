@extends('layout.layout-template')

@section('content')
    <div class="container py-3">
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
                        <td>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">view</a>
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">update</a>
                            <form 
                                action="{{route('comics.destroy',['comic'=>$comic->id])}}" class="d-inline-block" 
                                method="POST"
                                onsubmit="return confirm('are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    delete
                                </button>
                            </form>
                        </td>
                    </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
@endsection