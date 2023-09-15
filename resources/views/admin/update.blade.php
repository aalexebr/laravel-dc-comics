@extends('layout.layout-template')
@section('content')
    <div class="container text-light py-4">
        <div class="row">
            <form action="{{route('comics.update',['comic'=>$object->id])}}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" name="title" value="{{$object->title}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" name="description" value="{{$object->description}}">
                </div>
                <div class="mb-3">
                    <label for="src" class="form-label">image path</label>
                    <input type="text" class="form-control" name="src" value="{{$object->src}}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" name="series" value="{{$object->series}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="number" class="form-control" name="price" step=".01" value="{{$object->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
@endsection