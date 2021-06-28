@extends('home.template.master')


@section('hero')
<!-- ======= hero Section ======= -->
<section id="hero">

    <div class="hero-content">
        <h2>Making Your <span>Future Life</span><br>Brighter!</h2>
        <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="#trending" class="btn-projects scrollto">Hot Event</a>
        </div>
    </div>

    <div class="hero-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('{{asset('templateHome/assets/img/hero-carousel/hero-01.jpg')}}');"></div>
            <div class="swiper-slide" style="background-image: url('{{asset('templateHome/assets/img/hero-carousel/hero-02.jpg')}}');"></div>
            <div class="swiper-slide" style="background-image: url('{{asset('templateHome/assets/img/hero-carousel/hero-03.jpg')}}');"></div>
            <div class="swiper-slide" style="background-image: url('{{asset('templateHome/assets/img/hero-carousel/hero-04.jpg')}}');"></div>
            <div class="swiper-slide" style="background-image: url('{{asset('templateHome/assets/img/hero-carousel/hero-05.jpg')}}');"></div>
        </div>
    </div>

</section>
<!-- End Hero Section -->
@endsection

@section('content')
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="{{asset('templateHome/assets/img/come-on-join.png')}}" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>Beasiswa Untuk Mahasiswa Indonesia</h2>
                    <h3>Kami ingin membantu mahasiswa Indonesia dalam meningkatkan prestasi dalam bidang pendidikan
                        serta unggul dan mampu bersaing</h3>

                    <ul>
                        <li><i class="bi bi-check-circle"></i> Mendorong mahasiswa Indonesia untuk berprestasi.</li>
                        <li><i class="bi bi-check-circle"></i> Meningkatkan kualitas mahasiswa Indonesia.</li>
                        <li><i class="bi bi-check-circle"></i> Memberikan sarana beasiswa untuk mahasiswa Indonesia.
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= category Section ======= -->
    <section id="category">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>category</h2>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="box">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="{{route('homeCategory')}}">Beasiswa</a></h4>
                        <p class="description">pemberian berupa bantuan keuangan yang diberikan
                            kepada perorangan yang bertujuan untuk digunakan demi keberlangsungan pendidikan yang
                            ditempuh.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <div class="icon"><i class="bi bi-trophy"></i></div>
                        <h4 class="title"><a href="{{route('homeCategory')}}">Lomba</a></h4>
                        <p class="description">Memberikan motivasi kepada mahasiswa untuk melaksanakan kegiatan
                            kurikuler, kokurikuler,
                            dan ekstrakurikuler sebagai wahana menyinergikan hard skills dan soft skills mahasiswa.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="box">
                        <div class="icon"><i class="bi bi-easel"></i></div>
                        <h4 class="title"><a href="{{route('homeCategory')}}">Seminar</a></h4>
                        <p class="description">Ruang diskusi untuk meningkatkan kualitas sumber daya manusia
                            Indonesia .</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <div class="icon"><i class="bi bi-globe"></i></div>
                        <h4 class="title"><a href="{{route('homeCategory')}}">Exchange</a></h4>
                        <p class="description">Meningkatkan wawasan mahasiswa Indonesia terkait pendidikan di luar
                            negeri </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End category Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Clients</h2>
                <p>Didukung oleh :</p>
            </div>
            <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{asset('templateHome/assets/img/client/masukkampus.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('templateHome/assets/img/client/kemdikbud.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('templateHome/assets/img/client/sejutacita.webp')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('templateHome/assets/img/client/erasmus.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('templateHome/assets/img/client/umm.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('templateHome/assets/img/client/bi.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('templateHome/assets/img/client/djarum.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('templateHome/assets/img/client/kgsp.jpg')}}" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= trending Section ======= -->
    <section id="trending" class="trending">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Hot Event</h2>
                <p style="color: white;"><b>Bersama kami temukan beasiswa-beasiswa impianmu, event akan berakhir dalam 10 hari mendatang<b></p>
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
                @foreach($deadlineApproaching as $data)
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

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Testimonials</h2>
            </div>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="50">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="templateHome/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Website ini membantu saya untuk mengetahui informasi-informasi tentang beasiswa
                                terupdate.
                                <img src="templateHome/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="templateHome/assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Mahasiswa Sarjana</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="templateHome/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Dengan adanya web ini saya dapat menemukan informasi terbaru tidak hanya tentang
                                beasiswa tetapi tentang lomba, seminar bahkan student exchange.
                                <img src="templateHome/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="templateHome/assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Mahasiswa Master</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="templateHome/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                website BUMI ini keren banget! disini, aku nemuin banyak event2 menarik, semminar,
                                lomba, pertukaran pelajar dan aku juga dapetin banyak pengalaman disini.
                                <img src="templateHome/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="templateHome/assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Pelajar</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="templateHome/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                website ini sangat membantu bagi pemuda terutama bagi pelajar/mahasiswa. kita dapat
                                menemukan program beasiswa, seminar dan informasi lainnya.
                                <img src="templateHome/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="templateHome/assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Guru</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="templateHome/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                sangat berguna untuk mahasiswa dan siswa aktif maupun yang tidal, karena disini kita
                                bisa memperlihatkan kemampuan skil kita. saya sangat berharap semoga BUMI makin
                                lancar
                                <img src="templateHome/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="templateHome/assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Team Section ======= -->
    <section id="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="templateHome/assets/img/team/team1.jpeg" alt=""></div>
                        <div class="details">
                            <h4>Mochamad Alghifary Syaichul Rijal</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href="#" title="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" title="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" title="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" title="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="templateHome/assets/img/team/team2.jpeg" alt=""></div>
                        <div class="details">
                            <h4>Salsabila Aulia Ramadhan</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href="#" title="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" title="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" title="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" title="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="templateHome/assets/img/team/team3.jpg" alt=""></div>
                        <div class="details">
                            <h4>Ivan Maulana <br>Arrasid</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href="#" title="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" title="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" title="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" title="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- End Team Section -->

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
                <form action="templateHome/forms/contact.php" method="post" role="form" class="php-email-form">
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

</main><!-- End #main -->
@endsection
