 <!-- Navigation-->
<header class="header">
<div class="header-top py-1">
<div class="container">
<div class="row">
<div class="col-6">
<i class="fa fa-phone mr-1"></i> <span class="d-none d-md-inline-block">Need Help? Free call us 24/7 :</span> <a href="tel:(+1) 00 123 456" class="header-top-link">(+1) 00 123 456 </a>
</div>
<div class="col-6 text-right">
    <ul class="list-inline mb-0 header-top-list">
        <li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
        <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href=""><i class="fas fa-sign-in-alt"></i> <span class="d-none d-sm-inline"> Sign up</span></a></li>
        <li class="list-inline-item"><a href=""><i class="fas fa-user"></i> <span class="d-none d-sm-inline"> Sign in</span></a></li>
    </ul>
</div>
</div>
</div>
</div>
<div class="header-middle">
 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"> <img src="{{ asset('images/markket-logo.svg') }}" alt="" class="main-logo"> </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           
            <i class="fas fa-bars"></i>
        </button>
        <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than < </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
                </span>
            </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link active py-3" href="" data-tag="all">All</a></li>
                            <li class="nav-item"><a class="nav-link py-3" href="" data-tag="markets">Markets</a></li>
                            <li class="nav-item"><a class="nav-link py-3" href="" data-tag="traders">Traders</a></li>
                            <li class="nav-item"><a class="nav-link py-3" href="" data-tag="products">Products</a></li>
                            <li class="nav-item"><a class="nav-link py-3" href="" data-tag="events">Events</a></li>
                            <li class="nav-item"><a class="nav-link py-3" href="" data-tag="contact">Contact</a></li>
               
            </ul>
        </div>
    </div>
</nav>
</div>
</header>