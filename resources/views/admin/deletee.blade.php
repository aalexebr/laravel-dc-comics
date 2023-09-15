@extends('layout.layout-template')
@section('content')
    <div class="container  py-4">
        <div class="row justify-content-center">
            <div class="col-auto my-2">
                <div class="card m-auto p-2 bg-dark">
                    <h1 class="text-warning">
                        ARE YOU SURE YOU WANT TO DELETE FOR EVER?
                    </h1>
                    <form 
                        action="{{route('comics.destroy',['comic'=>$comic->id])}}" class="d-inline-block m-auto" 
                        method="POST"
                        onsubmit="return confirm('are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            DELETE
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-auto">
                
                <div class="card m-auto py-2" style="width: 18rem;">
                    <img src="{{$comic->src}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <div class="card-text">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        description
                                    </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{$comic->description}}
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <h6>
                                price: ${{$comic->price}}
                            </h6> 
                        </div>
    
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        arists
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($artistArr as $index => $artist)
                                                @if ($index != 0)
                                                    <li>
                                                        {{$artist}}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        writers
                                    </button>
                                    </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($writerArr as $index => $writer)
                                                @if ($index != 0)
                                                    <li>
                                                        {{$writer}}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection