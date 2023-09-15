@extends('layout.layout-template')
@section('content')
    <div class="container  py-4">
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
                            <h6>
                                price:
                            </h6>
                            ${{$comic->price}}
                        </div>
                        <div>
                            <h6>
                                artists:
                            </h6>
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
                        <div>
                            <h6>
                                wtiters:
                            </h6>
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
@endsection