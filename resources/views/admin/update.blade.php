@extends('layout.layout-template')
@section('content')
    <div class="container text-light py-4">
        <div class="row">
            <form action="{{route('comics.update',['comic'=>$object->id])}}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control  @error('title') is-invalid @enderror" 
                        name="title" value="{{old('title',$object->title)}}">
                    @error('title')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" 
                        name="description" value="{{old('description',$object->description)}}">
                    @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="src" class="form-label">image path</label>
                    <input type="text" class="form-control @error('src') is-invalid @enderror" 
                        name="src" value="{{old('src',$object->src)}}">
                    @error('src')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" 
                        name="series" value="{{old('series', $object->series)}}">
                    @error('series')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" 
                        name="price" step=".01" value="{{old('price',$object->price)}}">
                    @error('price')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
@endsection