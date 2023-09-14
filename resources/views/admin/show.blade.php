@extends('layout.layout-template')
@section('content')
    <div class="container">
        <div class="row justify-center">
            <div class="col">
                <div class="card">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$comic->src}}" class="card-img-top" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <div class="card-text">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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
                                ${{$comic->price}}
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection