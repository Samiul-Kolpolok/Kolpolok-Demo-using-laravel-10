@extends('admin.master')


@section('content')

    <!--Hero section starts here-->
    <section class="bg-dark text-light p-5 text-center text-sm-start" id="home">
        <div class="container py-5">
            <div class="d-sm-flex align-items-center justify-content-between py-5">
                <div>
                    <h3>Providing Solutions <br/> by Transforming Your Ideas</h3>
                    <h1>We provide 360-degree software solutions, <br/>with our customers being our ultimate priority.</h1>
                    <p> We are expert in Web development, App development & Digital Marketing </p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#getaquote">
                        Get A Quote
                      </button>
                </div>
                <a href="#">
                    <img src="asset/ui_image/kolpolok_limited_logo.png" alt="kolpolok_limited_logo" width="250 px" height="250 px" />
                </a>
            </div>
        </div>

    </section>
    <!--Hero section ends here-->

    <!--Newsletter section starts here-->
    <section class="bg-primary text-light p-5" id="newsletter">
        <div class="container py-5">
            <div class="d-md-flex justify-content-between align-items-center ">
                <h3 class="mb-3 mb-md-0">
                    Sign up for Newsletter
                </h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="user@gmail.com" name="">
                    <button class="btn btn-dark btn-lg">Discover</button>
                </div>
            </div>
        </div>
    </section>
    <!--Newsletter section ends here-->

    <!--Services section starts here-->
    <section class="p-5" id="services">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Web Development
                            </h3>
                            <p>We are expert in Web Development with a history of <br /> completing 200+ projects from our
                                50+ clients</p>
                            <a href="#"><button class="btn btn-primary">Read more</button></a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-app"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Android Development
                            </h3>
                            <p>We are expert in Android Development with a history of <br /> completing 50+ projects from
                                our 25+ clients</p>
                            <a href="#"><button class="btn btn-primary">Read more</button></a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card bg-dark text-light p-5">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Digital Marketing
                            </h3>
                            <p>We are expert in Digital Marketing with a history of <br /> completing 1000+ projects from
                                our 200+ clients</p>
                            <a href="#"><button class="btn btn-primary">Read more</button></a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!--Services section ends here -->

    <!--Start about section-->

    <section class="p-5" id="about">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md">
                    <a href="#"> <img src="asset/ui_image/kolpolok_about.png" alt="kolpolok_about" width="600 px" height="600 px" class="img-fluid"/></a>
                </div>
                <div class="col-md">
                    <h3>We Dream Together, We Work Together to Succeed More</h3>
                    <p class="text-justify">We’re a team of highly skilled professionals with years of experience in various fields. We are always available to assist our clients by offering professional expertise in achieving set targets for our customers.
                    </p>
                    <p class="text-justify">Once we generate an idea, we divide it into teams into strategies. After methodic planning, we move on with our
                        research team to know the inside-outs of each technology we are working with and determine the pros and cons.
                        Then, our development team proceeds and brings the idea to reality. The testing team ensures no errors
                        before delivering the project. Finally, our support team remains active for further queries.</p>
                        <a href="#"><button class="btn btn-primary mt-3"> <i class="bi bi-chevron-compact-right"></i>Read more</button></a>
                </div>
            </div>

        </div>
    </section>

    <!--End about section-->

    <!--Start FAQ-->
    <section class="p-5" id="questions">
        <div class="container py-5">
            <h2 class="text-center mb-4">
                Frequently Asked Questions
            </h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      How to connect?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Our exact location?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      our office hours?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    <!--End FAQ-->
    <!--Review Section Starts here-->
  
    <!--Review Section Ends here-->
    

    <!--Modal start for Get A Quote button-->
  

@endsection