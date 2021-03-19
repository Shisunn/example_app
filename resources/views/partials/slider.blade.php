    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @for($i=0; $i<count($sliders); $i++)
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="{{$i}}" @if($i==0) class="active"> @endif</li>
            @endfor
        </ol>
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/assets/admin/dist/img/slider/{{$slider['image']}}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>{{$slider['title']}}</b></h1>
                                <h3 class="h2">{{$slider['sub_title']}}</h3>
                                <p>
                                    {!! $slider['text'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->
