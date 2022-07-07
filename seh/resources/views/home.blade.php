<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Shreyanshi Eye Hospital | Home</title>
  </head>
  <body>    
    <!-- navbar starts here -->
        @include('include.navbar')
    <!-- navbar ends here -->

    <!-- Carousel Starts Here -->
   
        <div id="shreyanshiCarousel" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#shreyanshiCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#shreyanshiCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#shreyanshiCarousel" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/seed/picsum/200/300?random=1" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/seed/picsum/200/300?random=2" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/seed/picsum/200/300?random=3" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#shreyanshiCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#shreyanshiCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
     <!-- Carousel Ends Here -->

     <!-- About us Page Starts Here -->
        @include('include.home.about')
     <!-- About us Page Ends Here -->

     <!-- Services Page Starts Here -->
        @include('include.home.service')
     <!-- Services Page Ends Here -->

    <!-- Testimonials Page Starts Here -->
    @include('include.home.testimonial')



    



    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>
