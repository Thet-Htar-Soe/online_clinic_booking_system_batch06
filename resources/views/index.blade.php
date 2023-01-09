@extends('layouts.patient')

@section('content')
    {{-- Banner Start --}}
    <section>

        <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">

            <ol class="carousel-indicators">
                <li class="active" data-bs-target="#mycarousel" data-bs-slide-to="0"></li>
                <li data-bs-target="#mycarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#mycarousel" data-bs-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active banners1">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5">
                            <h2 class="text-uppercase display-4 pb-4">Providing Health Care Solution</h2>
                            <p class="lead pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                                labore laboriosam officia voluptate earum velit, nesciunt non tempora sapiente
                                minima ad, quasi, unde impedit accusantium culpa dolor excepturi tempore quisquam!
                            </p>
                            <a href="javascript:void(0);" class="btn btn-lg btn-primary">Our Service</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item  banners2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5">
                            <h2 class="text-uppercase display-4 pb-4">Providing Total Care Solution</h2>
                            <p class="lead pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                                labore laboriosam officia voluptate earum velit, nesciunt non tempora sapiente
                                minima ad, quasi, unde impedit accusantium culpa dolor excepturi tempore quisquam!
                            </p>
                            <a href="javascript:void(0);" class="btn btn-lg btn-primary">Our Service</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item  banners3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5">
                            <h2 class="text-uppercase display-4 pb-4">Your Life Is Our Priority</h2>
                            <p class="lead pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                                labore laboriosam officia voluptate earum velit, nesciunt non tempora sapiente
                                minima ad, quasi, unde impedit accusantium culpa dolor excepturi tempore quisquam!
                            </p>
                            <a href="javascript:void(0);" class="btn btn-lg btn-primary">Our Service</a>
                        </div>

                    </div>
                </div>
            </div>

            <a href="#mycarousel" class="carousel-control-prev" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#mycarousel" class="carousel-control-next" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

    </section>
    {{-- Banner End --}}


    {{-- Our Departments Section Start --}}
    <section id="departments" class="text-center py-5 sec-departments">
        <div class="container">

            <div class="row">
                <div class="col-md-12 mb-4">
                    <h4 class="cmn-ttl">Our Departments</h4>
                    <p>We believe that the greatest gift we can give you and your family is a healthy you.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="departments">
                        <div>
                            <img src="{{ asset('assets/img/departments/dept-02.jpg') }}" alt="dept-02" />
                        </div>
                        <div class="contents">
                            <h6>Elder Services Department</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="departments">
                        <div>
                            <img src="{{ asset('assets/img/departments/dept-06.jpg') }}" alt="dept-06" />
                        </div>
                        <div class="contents">
                            <h6>Dental Department</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="departments">
                        <div>
                            <img src="{{ asset('assets/img/departments/dept-04.jpg') }}" alt="dept-04" />
                        </div>
                        <div class="contents">
                            <h6>Surgery Department</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Our Departments Section End --}}

    {{-- About Us Section Start --}}
    <section id="aboutUs" class="text-center py-5 sec-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="cmn-ttl">About Us</h4>
                    <p>We believe that the greatest gift we can give you and your family is a healthy you.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12 mb-3">
                    <h5 class="mb-4 text-start sub-ttl">Our Features</h5>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-4 text-dark">
                            <div class="iconboxes">
                                <div class="icons"><i class="fas fa-ambulance"></i></div>
                                <h6>Emergency Care</h6>
                                <p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-4 features-img">
                            <img src="{{ asset('assets/img/departments/emergency.jpg') }}" alt="emergency" />
                        </div>
                        <div class="col-md-6 col-sm-12 mb-4 features-img">
                            <img src="{{ asset('assets/img/departments/sevices.jpg') }}" alt="services" />
                        </div>
                        <div class="col-md-6 col-sm-12 mb-4 text-dark">
                            <div class="iconboxes">
                                <div class="icons"><i class="fas fa-hospital-user"></i></div>
                                <h6>24/7 Hours Service</h6>
                                <p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 text-start">
                    <h5 class="sub-ttl">Reasons To Choose Us</h5>
                    <div class="accordion text-dark mt-4" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Our Best Price Offer
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <small>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    We put our patients first
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <small>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    You are treated with dignity, kindness and respect
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <small>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Our qualified doctors and Emergency care
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <small>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Mental health and drug treatment
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <small>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Us Section End --}}

    {{-- Contact Us Section Start --}}
    <section id="contactUs" class="text-center py-5 sec-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="cmn-ttl">Contact Us</h4>
                    <p>We believe that the greatest gift we can give you and your family is a healthy you.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12 mb-3 contact-map">
                    <h5 class="mb-4 text-start sub-ttl">Our Location</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122199.93977760978!2d96.06466944607654!3d16.838847272248454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec603dce9349%3A0xaaa95d12ca7d8d30!2sSeattle%20Consulting%20Myanmar%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1672983643223!5m2!1sen!2smm"
                        width="600" height="450" class="google-map"></iframe>
                    <div class="addresses text-start">
                        <div class="address mb-2">
                            <h6 class="small p-0 m-0 text-dark">Address</h6>
                            <small class="p-0 m-0 text-dark">No.122/124, 5th floor, Botahtaung Pagoda Rd,
                                Yangon</small>
                        </div>
                        <div class="mail mb-2">
                            <h6 class="small p-0 m-0 text-dark">Email</h6>
                            <small><a href="mailto:info@example.com">info@example.com</a></small>
                        </div>
                        <div class="phone mb-2">
                            <h6 class="small p-0 m-0 text-dark">Phone</h6>
                            <small><a href="tel:09123456789">09-123 456 789</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-3">
                    <h5 class="mb-4 text-start sub-ttl">Get In Touch</h5>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form>
                                    <div class="form-group pb-3">
                                        <input type="text" name="name" id="name" class="form-control inputs"
                                            placeholder="Enter Your Name" autocomplete="off" />
                                    </div>
                                    <div class="form-group pb-3">
                                        <input type="text" name="email" id="email" class="form-control inputs"
                                            placeholder="Enter Your Email" autocomplete="off" />
                                    </div>
                                    <div class="form-group py-3">
                                        <textarea name="msg" class="form-control textboxs" rows="4" placeholder="How Can We Help You?"></textarea>
                                    </div>
                                    <div class="d-grid mt-4">
                                        <button type="button"
                                            class="btn text-uppercase fw-bold rounded-pill submit-btns">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Us Section End --}}
@endsection('content')
