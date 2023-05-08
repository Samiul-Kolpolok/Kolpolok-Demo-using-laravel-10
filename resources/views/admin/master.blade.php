<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo for Kolpolok</title>
    <link rel="stylesheet" href="asset/ui_image/style.css">
    <!-- For Bootstrap cdn links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img src="asset/ui_image/kolpolok_limited_logo.png" alt="kolpolok_limited_logo" width="50 px" height="50 px" />
            <a class="navbar-brand" href="{{route('dashboard')}}">Kolpolok Limited</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#service" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#services">Web Development</a></li>
                            <li><a class="dropdown-item" href="#services">App Development</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#services">Digital Marketing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#newsletter">News Letter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('testimonial')}}">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('show.subscriber')}}">Manage Subscriber</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Navbar ends here-->

    @yield('content')


    <!-- Modal -->
<section class="p-5" >
    <div class="container">
  <div class="modal fade" id="getaquote" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    <form action="{{route('add.subscriber')}}" method="POST" >
        @csrf
        <div class="modal-body">
            <div class="d-sm-flex align-items-center py-5">
                <a href="#">
                    <img src="asset/ui_image/kolpolok_modal_image.png" alt="kolpolok_modal_image" width="350 px" height="350 px" />
                </a>
                <div class="ms-auto">
                    <h5 class="modal-title mb-5 text-info" id="staticBackdropLabel">Get a Free Quote</h5>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name">
                      </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email"  id="exampleFormControlInput1" placeholder="Email (Required)*">
                      </div>
                      <div class="mb-3">
                        <input type="text" class="form-control" name="mobile"  id="exampleFormControlInput1" placeholder="Mobile">
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message"  rows="5" placeholder="Write your message (Required)*"></textarea>
                      </div>
                      <div class="d-sm-flex align-items-center justify-content-between py-3">
                        <h1>4+8 = </h1>
                        <div>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Required*">
                        </div>
                      </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<!--Modal end to-->


    <!--Footer Starts here-->
<section class="bg-secondary text-light" id="contact">
    <div class="container">
        <div class="d-sm-flex justify-content-between py-5">

                <div class="d-sm-flex align-items-center justify-content-center py-5">
                    <a href="#" class="me-3">
                        <img src="asset/ui_image/kolpolok_iso_certified.png" alt="kolpolok_iso_certified" width="100 px" height="90 px" />
                    </a>
                    <div>
                        <h5>Make a deal with an ISO 9001:2015 <br/> Certified Company</h5>
                        <p class="font-cntrl">Kolpolok Limited is a full-service custom mobile app development <br/>
                            company in Bangladesh. We are a team of professional developers, <br/>
                            designers and digital strategists. DBID NO: 8 6 8 7 7 8 8 2 5
                        </p> 
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#getaquote">
                            Get A Quote
                          </button>
                    </div>
                </div>
                <div class="d-sm-flex">
                    <div class="me-2">
                        <h5>Our Services</h5>
                        <ul class="navbar-nav">
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>App Development</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>OTT Applications</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Mobile Applications</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Web Applications</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Desktop Applications</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Resource Augmentation</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Dev Ops</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Digital Marketing</button></a></li>
                        </ul>
                    </div>
                    <div class="me-2">
                        <h5>Company</h5>
                        <ul class="navbar-nav">
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Home</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Services</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>About us</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Our Team</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Career</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Testimonial</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>FAQ</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Privacy Policy</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Terms and Condition</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Contact us</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Blog</button></a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Quick Contact</h5>
                        <ul class="navbar-nav">
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Facebook</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Twitter</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>LinkedIn</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Instagram</button></a></li>
                            <li><a href="#"><button class="btn"> <i class="bi bi-chevron-compact-right"></i>Youtube</button></a></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
</section>
<!--Footer Ends here-->



<!--Footer Bottom Starts Here-->
<section class="bg-dark text-light">
    <div class="d-sm-flex justify-content-center align-items-center">
<h5>@2023 Copyright - Kolpolok Limited</h5>
    </div>
</section>
<!--Footer Bottom Ends Here-->

<!--Script for Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>