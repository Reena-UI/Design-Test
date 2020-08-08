@extends('layouts.app')
 @section('content')
 <section class="inner-banner">
    
<img src="{{ asset('images/shop-banner.jpg') }}" alt="" class="img-fluid">
<div class="carousel-caption carousel-caption--center">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <h1 class="text-uppercase font-weight-bold">Bluebirds Handmade Market</h1>
                             <p class="lead">Independent, Makers Market</p>
                             
                         </div>
                     </div>
                 </div>
             </div>
        
 </section>
 <section>
 <ul class="nav nav-tabs nav-line-tabs font-weight-bold text-uppercase" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="Information-tab" data-toggle="tab" href="#Information" role="tab" aria-controls="home" aria-selected="true"><span class="d-sm-none"><i class="fa fa-info-circle"></i></span> <span class="d-none d-sm-block"> General Information </span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Direction-tab" data-toggle="tab" href="#Direction" role="tab" aria-controls="profile" aria-selected="false"><span class="d-sm-none"><i class="fa fa-map-marker-alt"></i></span> <span class="d-none d-sm-block">Direction </span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Gallery-tab" data-toggle="tab" href="#Gallery" role="tab" aria-controls="contact" aria-selected="false"><span class="d-sm-none"><i class="fa fa-images"></i></span> <span class="d-none d-sm-block">Gallery </span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Events-tab" data-toggle="tab" href="#Events" role="tab" aria-controls="contact" aria-selected="false"><span class="d-sm-none"><i class="fa fa-glass-cheers"></i></span> <span class="d-none d-sm-block">Events </span></a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="Information" role="tabpanel" aria-labelledby="home-tab">
      <div class="container  py-5">
          <div class="row">
              <div class="col-sm-9">
                  <h2 class="text-uppercase font-weight-bold">Market description</h2>
                  <ul class="list-inline mb-sm-0 font-weight-bold">
              
                         <li class="list-inline-item"><a href=""><i class="fa fa-phone"></i> 07475292828</a></li>
                         <li class="list-inline-item"><a href=""><i class="fas fa-envelope"></i> bluebirds.handmade.market@gmail.com</a></li>
</ul>
              </div>  
              <div class="col-sm-3 text-sm-right">
              <ul class="list-inline mb-0 lead">
              
                         <li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                         <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                         <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                         <li class="list-inline-item"><a href=""><i class="fa fa-share-alt"></i></a></li>
</ul>
              </div> 
              
              <div class="col-lg-6 py-3">
                  <img src="{{ asset('images/blue-bird-logo.jpg') }}" alt="" class="img-fluid">
                  <ul class="list-inline product-category">
                      <li class="list-inline-item"> Arts</li>
                      <li class="list-inline-item">Crafts</li>
                      <li class="list-inline-item"> Handmade</li>
                      <li class="list-inline-item">Jewellery </li>
                      <li class="list-inline-item">Accessories </li>
                  </ul>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At ut ad fuga voluptatem iure nostrum corrupti fugit, doloremque ullam ducimus delectus! Optio amet fuga rem, reprehenderit nam ipsum ipsa error?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At ut ad fuga voluptatem iure nostrum corrupti fugit, doloremque ullam ducimus delectus! Optio amet fuga rem, reprehenderit nam ipsum ipsa error?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. At ut ad fuga voluptatem iure nostrum corrupti fugit, doloremque ullam ducimus delectus! Optio amet fuga rem, reprehenderit nam ipsum ipsa error?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At ut ad fuga voluptatem iure nostrum corrupti fugit, doloremque ullam ducimus delectus! Optio amet fuga rem, reprehenderit nam ipsum ipsa error?
              Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <ul class="list-inline  font-weight-bold border-list py-4">
                  <li class="list-inline-item text-primary"><i class="far fa-calendar"></i></li>
            <li class="list-inline-item">  15th March</li>
            <li class="list-inline-item">4th July</li>
            <li class="list-inline-item">9th August</li>
            <li class="list-inline-item">8th November</li>
            <li class="list-inline-item">29th November</li>
              </ul>
                  <h4 class="font-weight-bold">BUSINESS HOURS</h4>
                  <ul class="list-unstyled business-hours">
                      <li class="d-flex justify-content-between"><span>Monday - Saturday</span> <span>10:00 AM - 08:00 PM</span></li>
                      <li class="d-flex justify-content-between"><span>Sunday</span> <span>11:00 AM - 07:00 PM</span></li>
                  </ul>
              </div>
              <div class="col-lg-6 mt-4 text-lg-right"> <img src="{{ asset('images/blue-bird-main-image.jpeg') }}" alt="" class="img-fluid"></div>
          </div>
      </div>
  </div>
  <div class="tab-pane fade" id="Direction" role="tabpanel" aria-labelledby="profile-tab">
  / <div class="container mb-4">
      <div class="row">
          <div class="col-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.3318223336078!2d1.7319002158104382!3d52.59977277982937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTLCsDM1JzU5LjIiTiAxwrA0NCcwMi43IkU!5e0!3m2!1sen!2sin!4v1596825331891!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
      </div>
  </div>
  </div>
  <div class="tab-pane fade" id="Gallery" role="tabpanel" aria-labelledby="contact-tab">
  <div class="container py-5">
      <div class="row">
      <a data-fancybox="gallery" class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3" href="{{ asset('images/banner-sm-7.png') }}"> <img src="{{ asset('images/banner-sm-7.png') }}" alt="" class="img-fluid"></a>
       <a data-fancybox="gallery" class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3" href="{{ asset('images/banner-sm-8.png') }}"> <img src="{{ asset('images/banner-sm-8.png') }}" alt="" class="img-fluid"></a>
       <a data-fancybox="gallery" class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3" href="{{ asset('images/banner-sm-9.png') }}"> <img src="{{ asset('images/banner-sm-9.png') }}" alt="" class="img-fluid"></a>
    
       <a data-fancybox="gallery" class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3" href="{{ asset('images/banner-sm-5.png') }}"> <img src="{{ asset('images/banner-sm-5.png') }}" alt="" class="img-fluid"></a>
       <a data-fancybox="gallery" class="col-6 col-md-4 col-lg-3 col-xl-2 mb-3" href="{{ asset('images/banner-sm-6.png') }}"> <img src="{{ asset('images/banner-sm-6.png') }}" alt="" class="img-fluid"></a>
      </div>
  </div>
  </div>
  <div class="tab-pane fade" id="Events" role="tabpanel" aria-labelledby="contact-tab">
      <div class="container py-5">
          <div class="row">
              <div class="col-md-4 mb-3">
                  <img src="{{ asset('images/event-banner.jpg') }}" alt="" class="img-fluid">
                  <h4 class="font-weight-bold mt-2">Bluebirds Handmade Market August</h4>
                  <p>Starts 11:00 AM 09/08/2020 - Ends 4:00 PM 09/08/2020                                                     </p>
              </div>
              <div class="col-md-4 mb-3">
                  <img src="{{ asset('images/event-banner.jpg') }}" alt="" class="img-fluid">
                  <h4 class="font-weight-bold mt-2">Bluebirds Handmade Market August</h4>
                  <p>Starts 11:00 AM 09/08/2020 - Ends 4:00 PM 09/08/2020                                                     </p>
              </div>
              <div class="col-md-4 mb-3">
                  <img src="{{ asset('images/event-banner.jpg') }}" alt="" class="img-fluid">
                  <h4 class="font-weight-bold mt-2">Bluebirds Handmade Market August</h4>
                  <p>Starts 11:00 AM 09/08/2020 - Ends 4:00 PM 09/08/2020                                                     </p>
              </div>
          </div>
      </div>
  </div>
</div>
 </section>
 @stop