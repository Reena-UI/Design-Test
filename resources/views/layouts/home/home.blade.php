 
 @extends('layouts.app')  
@section('content')  

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/banner.webp') }}" alt="First slide">
               
                <div class="carousel-caption carousel-caption--center">
                    <div class="container">
                        <div class="row"><div class="col-12">
                        <h1 class="text-uppercase font-weight-bold">Markets open across the UK</h1>
                    <a href="https://medium.com/marketti/find-out-what-markets-have-reopened-across-the-uk-4564d445b75b" class="btn btn-primary text-white text-uppercase font-weight-bold" tabindex="-1">
                                Discover who's back in action
                            </a>
                        </div></div>
                    </div>
                </div> </div>
             
            
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          @stop  