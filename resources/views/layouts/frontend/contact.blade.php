

       <!--Contact Page Start-->
       <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <h3 class="contact-page__title">Get In Touch</h3>
                            <ul class="contact-page__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Address</h3>
                                        <p>Helena's Mansion, 2nd Floor
                                        Road#25, Uposohor,Bogura</p>
                                        <p>Bangladesh</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Phone</h3>
                                        <p><a href="tel:882562562584">88 256 256 2584</a></p>
                                        <p><a href="tel:882562562584">88 256 256 2584</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-open-mail"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Address</h3>
                                        <p><a href="mailto:blesscreation@gmail.com">blesscreation@gmail.com</a></p>
                                        <p><a href="mailto:blesscreation@gmail.com">blesscreation@gmail.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__form-box">
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                                <form action="{{route('contacts.contact')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Full name" name="name">
                                                
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="contact-page__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box text-message-box">
                                                <textarea class="summernote form-control" name="message" placeholder="Your Message"></textarea>
                                            </div>
                                            <div class="contact-page__btn-box">
                                                <button type="submit" class="contact-page__btn">Send
                                                    Message<span>+</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->