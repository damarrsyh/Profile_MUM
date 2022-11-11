@extends('layout.main')

@section('page')

    <div class="container">
        @include('home.services.index')
        @include('home.about.index')
        @include('home.history.index')
        @include('home.structure.index')
    </div>
    <!-- Clients-->
    <div class="container" data-aos="fade-in" data-aos-duration="2500">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6 my-3">
                <img class="img-fluid img-brand d-block mx-auto" src="/assets/media/img/logos/Danamon.svg"
                        alt="..." aria-label="Danamon Logo" />
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <img class="img-fluid img-brand d-block mx-auto" src="/assets/media/img/logos/prudential.svg"
                        alt="..." aria-label="Prudential Logo" />
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <img class="img-fluid img-brand d-block mx-auto" src="/assets/media/img/logos/grameentrust.jpg"
                        alt="..." aria-label="grameentrust Logo" />
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <img class="img-fluid img-brand d-block mx-auto" src="/assets/media/img/logos/mercy.png"
                        alt="..." aria-label="Mercy Logo" />
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5" data-aos="fade-in" data-aos-duration="2500">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0 textheader fw-bold">CONTACT</h2>
                    <hr class="divider" />
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>(021) 212 796 62</div>
                </div>
            </div>
        </div>
        
    </section>

@endsection