@extends('home.template.master')

@section('content')
<main id="main">
    {{-- <section id="category">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2 href="category.html">Category</h2>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center ">
                    <ul id="select-category">
                        <li data-filter="*" class="category-active">
                            <div class="icon"><i class="las la-icons"></i></div>All
                        </li>
                        <li data-filter=".filter-beasiswa">
                            <div class="icon"><i class="las la-graduation-cap"></i></div>Beasiswa
                        </li>
                        <li data-filter=".filter-lomba">
                            <div class="icon"><i class="las la-trophy"></i></div>Lomba
                        </li>
                        <li data-filter=".filter-seminar">
                            <div class="icon"><i class="las la-users"></i></div>Seminar
                        </li>
                        <li data-filter=".filter-exchange">
                            <div class="icon"><i class="las la-globe"></i></div>Exchange
                        </li>

                    </ul>
                </div>
            </div>


            <div class="row list-category-container">
                <div class="col-lg-12 category-item filter-beasiswa">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="select-filters-beasiswa">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-bea-diploma">Beasiswa Diploma</li>
                                <li data-filter=".filter-bea-sarjana">Beasiswa Sarjana</li>
                                <li data-filter=".filter-bea-master">Beasiswa Master</li>
                                <li data-filter=".filter-bea-doctor">Beasiswa Doctor</li>
                                <li data-filter=".filter-dalam-negeri">Dalam Negeri</li>
                                <li data-filter=".filter-luar-negeri">Luar Negeri</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row info-beasiswa-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-3 col-md-6 wrapper-item info-beasiswa-item filter-bea-diploma filter-bea-sarjana filter-bea-master">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/bea01.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/bea01.jpg" data-gallery="info-beasiswaGallery" data-title="Beasiswa SejutaCita" data-description="SejutaCita menawarkan beasiswa bantuan biaya pendidikan dan berbagai keuntungan lainnya untuk seluruh jenjang pendidikan" class="item-lightbox preview-link"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Beasiswa SejutaCita </a>
                                    </h3>
                                    <div class="text">
                                        SejutaCita menawarkan beasiswa bantuan biaya pendidikan dan berbagai
                                        keuntungan
                                        lainnya untuk seluruh jenjang pendidikan
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item info-beasiswa-item filter-luar-negeri">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/exchange01.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/exchange01.jpg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item info-beasiswa-item filter-bea-diploma">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/bea02.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/bea02.jpg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item info-beasiswa-item filter-bea-doctor">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/bea03.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/bea03.jpg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item info-beasiswa-item filter-bea-master">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/bea01.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/bea01.jpg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item info-beasiswa-item filter-bea-sarjana">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/bea03.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/bea03.jpg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item info-beasiswa-item filter-bea-diploma">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/bea03.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/bea03.jpg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 category-item filter-lomba">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="select-filters-lomba">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-kabupaten">kabupaten</li>
                                <li data-filter=".filter-provinsi">Beasiswa Sarjana</li>
                                <li data-filter=".filter-nasional">Beasiswa Master</li>
                                <li data-filter=".filter-internasional">Beasiswa Doctor</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row lomba-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-3 col-md-6 wrapper-item list-lomba-item filter-kabupaten">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/lomba01.jpeg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/lomba01.jpeg" data-gallery="info-beasiswaGallery" data-title="Karya Tulis Ilmiah" data-description="SejutaCita menawarkan beasiswa bantuan biaya pendidikan dan berbagai keuntungan lainnya untuk seluruh jenjang pendidikan" class="item-lightbox preview-link"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Lomba Karya tulis Ilmiah</a>
                                    </h3>
                                    <div class="text">
                                        SejutaCita menawarkan beasiswa bantuan biaya pendidikan dan berbagai
                                        keuntungan
                                        lainnya untuk seluruh jenjang pendidikan
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item list-lomba-item filter-luar-negeri">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/lomba02.jpeg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/lomba02.jpeg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item list-lomba-item filter-bea-diploma">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/lomba01.jpeg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/lomba02.jpeg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wrapper-item list-lomba-item filter-bea-doctor">
                            <div class="item">
                                <div class="img">
                                    <img src="assets/img/content/lomba02.jpeg" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="assets/img/content/lomba02.jpeg" data-gallery="info-beasiswaGallery" class="item-lightbox preview-link" title="App 10"><i class="las la-binoculars"></i></a>
                                    <h3>
                                        <a href="#">Vivamus ac vehicula dui</a>
                                    </h3>
                                    <div class="text">
                                        Cras aliquet ligula dui, vitae fermentum velit tincidunt id. Praesent eu
                                        finibus
                                        nunc. Nulla in sagittis eros. Aliquam egestas augue.
                                    </div>
                                    <a href="#" class="main-button">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </section> --}}
    <section id="trending" class="trending">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Event</h2>
                {{-- <p style="color: white;"><b>Bersama kami temukan beasiswa-beasiswa impianmu, event akan berakhir dalam 10 hari mendatang<b></p> --}}
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="50">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="trending-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach($category as $data)
                        <li data-filter=".filter-{{$data->slug}}">{{$data->nama_category}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row trending-container" data-aos="fade-up" data-aos-delay="100">
                @foreach($event as $data)
                <div class="col-lg-3 col-md-6 trending-item filter-{{$data->Category->slug}}">
                    <div class="item">
                        <div class="img">
                            <img src="{{$data->gambar}}" alt="" max-width="200">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">{{$data->title}}</a>
                            </h3>
                            <div class="category-item">
                                <ul>
                                    <li class="{{$data->Category->slug}}">{{$data->Category->nama_category}}</li>
                                </ul>
                            </div>
                            <div class="text">
                                {{$data->deskripsi}}
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Contact Us</h2>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <address>Jl. Candi Jolotundo I, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+62 872 6676 5362</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@bumi.com</a></p>
                    </div>
                </div>

            </div>
        </div>

        <!-- send message  -->
        <div class="container">
            <div class="form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>

                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>

                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- End send message Section -->


</main>
@endsection
