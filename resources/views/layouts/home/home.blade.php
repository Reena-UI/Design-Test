 
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
          <section class="py-5"> 
              <div class="container">
              <div class="banner-grid">
                <div class="banner-grid__banner banner-grid__banner1">
                  <a href="" class="banner-grid__banner-link">
                    <div class="banner-grid__banner-content">
                    <h3 class="font-weight-bold text-white ">Pop-Up Club is back.</h3>
                    <h5 class="text-white">The return of the markets</h5>
                    </div>
                    <img src="http://via.placeholder.com/750X500" alt="" class="img-fluid banner-grid__banner-image">
                  </a>
                </div>
                <div class="banner-grid__banner banner-grid__banner2">
                
                  <a href="" class="banner-grid__banner-link">
                  <div class="banner-grid__banner-content">
                    <h3 class="font-weight-bold text-white ">Marketti For Traders</h3>
                    <h5 class="text-white">Taking the hassle out the hustle</h5>
                    </div>
                    <img src="http://via.placeholder.com/750X500" alt="" class="img-fluid banner-grid__banner-image">
                  </a>
                </div>
                <div class="banner-grid__banner banner-grid__banner3 ">
                
                  <a href="" class="banner-grid__banner-link">
                  <div class="banner-grid__banner-content">
                    <h3 class="font-weight-bold text-white ">Marketti Members</h3>
                    <h5 class="text-white">Claim a free contactless device until 31st July</h5>
                    </div>
                    <img src="http://via.placeholder.com/750X500" alt="" class="img-fluid banner-grid__banner-image">
                  </a>
                </div>
                <div class="banner-grid__banner banner-grid__banner4">
                  <a href="" class="banner-grid__banner-link">
                  <div class="banner-grid__banner-content">
                    <h3 class="font-weight-bold text-white ">Briefing note</h3>
                    <h5 class="text-white">An operators guide</h5>
                    </div>
                    <img src="http://via.placeholder.com/750X500" alt="" class="img-fluid banner-grid__banner-image">
                  </a>
                </div>
              </div>
              </div>
          </section>
          <section class="pb-5">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="h4 mb-2 text-center text-uppercase font-weight-bold">Markets near You</h2>
                  <div class="owl-carousel owl-theme" id="Market_list">
                  <div class="owl-carousel--item">
                  <img src="http://via.placeholder.com/300X350" alt="" class="img-fluid owl-carousel__list-image">
                 <h3 class="h6 my-2 text-center  font-weight-bold">London Makers Market</h3>
                  </div>
                  <div class="owl-carousel--item">
                  <img src="http://via.placeholder.com/300X350" alt="" class="img-fluid owl-carousel__list-image">
                 <h3 class="h6 my-2 text-center  font-weight-bold">Bohemia Place Market</h3>
                  </div>
                  <div class="owl-carousel--item">
                  <img src="http://via.placeholder.com/300X350" alt="" class="img-fluid owl-carousel__list-image">
                 <h3 class="h6 my-2 text-center  font-weight-bold">Buck Street Market</h3>
                  </div>
                  <div class="owl-carousel--item">
                  <img src="http://via.placeholder.com/300X350" alt="" class="img-fluid owl-carousel__list-image">
                 <h3 class="h6 my-2 text-center  font-weight-bold">Makers Bazaar Handmade Market</h3>
                  </div>
                  <div class="owl-carousel--item">
                  <img src="http://via.placeholder.com/300X350" alt="" class="img-fluid owl-carousel__list-image">
                 <h3 class="h6 my-2 text-center  font-weight-bold">Maker's Factory Norwich</h3>
                  </div>

 
                </div>
               
                </div>
                <div class="col-12 text-center mt-3"> <a href="#" class="btn btn-outline-primary  text-uppercase font-weight-bold" tabindex="-1">
                               More Markets
                            </a></div>
              </div>
            </div>
          </section>
          <section class="pb-5">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="h4 mb-2 text-center text-uppercase font-weight-bold">Traders near you</h2>
                    <div class="owl-carousel owl-theme traders-carousel" id="Trader_list">
                          <div class="traders-carousel--item">
                            <img src="{{ asset('images/markket-logo.svg') }}" alt="" class="img-fluid ">
                          </div>
                          <div class="traders-carousel--item">
                                              <img src="{{ asset('images/markket-logo.svg') }}" alt="" class="img-fluid">
                          </div>
                          <div class="traders-carousel--item">
                                              <img src="{{ asset('images/markket-logo.svg') }}" alt="" class="img-fluid">
                          </div>
                          <div class="traders-carousel--item">
                                              <img src="{{ asset('images/markket-logo.svg') }}" alt="" class="img-fluid">
                          </div>
                          <div class="traders-carousel--item">
                                              <img src="{{ asset('images/markket-logo.svg') }}" alt="" class="img-fluid">
                          </div>
                          <div class="traders-carousel--item">
                                              <img src="{{ asset('images/markket-logo.svg') }}" alt="" class="img-fluid">
                          </div>
                     </div>
                </div>
              </div>
              </div>
</section>
          @stop  