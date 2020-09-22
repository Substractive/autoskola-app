<?php

use App\Policies\AdministrationPolicy;

?>

@extends('layouts.frontend')
@section('content')
    <section id="landing">
        <div class="container">

            <div class="landing-row row">
                <div class="landing-col col-12">
                    <!--    <h3>Dobrodošli novi vozači</h3> -->

                    <h1>Brže i lakše do vozačke</h1>
                    {{sprintf('can:%s.%s',AdministrationPolicy::POLICY_NAMESPACE, AdministrationPolicy::ACTION_DASHBOARD)}}

                    <div class="mob-icons">
                        <a class="mob-btn" href="#" role="button">
                            <i class="fab fa-apple"></i>
                            Apple IOS
                        </a>

                        <a class="mob-btn icon-camera-retro" href="#" role="button">
                            <!--<i class="icon-android icon-5x"></i>-->
                            <i class="fa fa-android icon-5x"></i>
                            Android
                        </a>
                    </div>

                    <p>
                        *uskoro dostupne i mobilne verzije za polaznike
                    </p>
                </div>


            </div>

            <div class="bottom-img">
                <img src="{{ asset('img/landing.png') }}">
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section id="why-choose">
        <div class="container">

            <div class="why-choose-row row">
                <div class="why-choose-col col-xl-5 col-lg-5 col-8">
                    <img src="{{ asset('img/maskota.svg')}}">
                </div>

                <div class="why-choose-col why-heading col-xl-5 col-lg-5 col-12">
                    <h2><span>Zašto</span> koristiti "Prometni Propisi"?</h2>

                    <div id="accordion">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Brže i lakše!
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Koristeći aplikaciju "Prometni propisi", učite i vježbajte prometne propise rješavajući ispite!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Kako znam da je ova aplikacija za mene?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p style="margin-bottom: 5px;">
                                        U ovoj aplikaciji imate ponuđeno više od 400 ispitnih pitanja, raspoređenih na nekoliko tipova ispita.
                                    </p>

                                    <p style="margin-bottom: 5px;">
                                        Ukoliko ste maher za teoriju, ali Vam raskrižja zadaju glavobolje, imamo poseban ispit pun zadataka samo za raskrižja.
                                    </p>

                                    <p>
                                        Aplikacija vam omogućuje da učite iz vlastitih grešaka. Po završetku ispita, označit će se pitanja koja ste riješili točno, koja niste riješili u cijelosti ili koja ste riješili netočno.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Kako započeti?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p style="margin-bottom: 5px;">
                                        Jednostavno, u nekoliko klikova, dođite do ispitnih pitanja.
                                    </p>

                                    <p>
                                        Za početak, kliknite <a href="{{route('ispiti')}}" style="text-transform: uppercase; text-decoration: none; color: rgba(230, 37, 51, 1); font-weight: 700;">Ispiti</a> u izborniku i slijedite korake koji će Vas voditi do uspješnog polaganja ispita prometnih propisa.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Trebam li učiti samo iz ove aplikacije?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <p style="margin-bottom: 5px;">
                                        Volimo misliti kako aplikacija pruža sve odgovore na vaša pitanja. No, postoji mogućnost da
                                        neka pitanja nismo obuhvatili.
                                    </p>

                                    <p style="margin-bottom: 5px;">
                                        U slučaju da primjetite da neka pitanja nedostaju ili su pogrešna, voljeli bi smo da nam dojavite pomoću <a href="#contact" style="text-transform: uppercase; text-decoration: none; color: rgba(230, 37, 51, 1); font-weight: 700;">kontakt</a> forme.
                                    </p>

                                    <p>
                                        Naša preporuka je da, uz aplikaciju, koristite službene materijale za učenje (ukoliko ste ih dobili u vašoj autoškoli), kako biste povećali šanse za polaganje ispita iz prometnih propisa.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Video Section -->
    <section id="video-section" style="background-size: cover; background-repeat: no-repeat; background-position: bottom;">
        <div class="container">

            <div class="video-section-row row">

                <div class="video-section-col col-12">
                    <div class="video-text">
                        <h3>
                            <span>Prometni propisi</span> - Najbolja aplikacija za učenje prometnih propisa
                        </h3>

                        <p>
                            Riješite mnoštvo pitanja i položite svoje ispite iz prometnih propisa
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing">
        <div class="container">

            <div class="pricing-row row d-flex justify-content-center" style="margin-bottom: 35px;">
                <div class="pricing-heading col-12 text-center">
                    <h2>
                        Digitalizirajte vašu
                        <span>autoškolu</span>
                    </h2>
                </div>

                <div class="pricing-heading col-xl-8 col-lg-8 col-10 text-center">
                    <p style="color: #ffffff; border-radius: 25px; text-transform: uppercase; background-color: red; padding: 10px 17px; display: inline-block; margin-bottom: 15px;">
                    <span>
                        Isprobajte besplatno!
                    </span>
                    </p>

                    <p>
                    <span>
                        Bez ugovorne obaveze, bez "kvake", otkažite kad god želite!
                    </span>
                    </p>
                </div>
            </div>

            <div class="pricing-row row d-flex justify-content-center">
                <div class="pricing-col col-xl-4 col-lg-4 col-10">

                    <div class="card">
                        <div class="card-header" style="border: none;">
                            <h3>Mini</h3>
                        </div>

                        <div class="card-body text-center">
                            <div class="price-info">
                                <div class="price-box text-center" style="padding: 35px 25px;">
                                    <h3>0 HRK</h3>
                                    <p>mjesečno</p>
                                </div>
                            </div>

                            <div class="price-content">
                                <ul style="list-style-type: none; padding: 0; margin: 0;">
                                    <li>
                                        <i class="fas fa-check"></i>
                                        Vodite do 5 grupa polaznika
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Izradite do 5 ispita
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Automatske email obavijesti polaznicima
                                    </li>

                                    <li class="error">
                                        <i class="fas fa-times"></i>
                                        Automatska izrada ugovora i arhiva
                                    </li>

                                    <li class="error">
                                        <i class="fas fa-times"></i>
                                        Analitika poslovanja
                                    </li>

                                    <li class="error">
                                        <i class="fas fa-times"></i>
                                        PDF export ispita
                                    </li>

                                    <li class="error">
                                        <i class="fas fa-times"></i>
                                        Premium korisnička podrška 24/7
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-footer text-center" style="border: none; padding: 0; padding-bottom: 30px;">
                            <div class="pricing-btn">
                                <a class="btn" href="#" role="button">Zatraži ponudu</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pricing-col col-xl-4 col-lg-4 col-10">

                    <div class="card">
                        <div class="card-header" style="border: none;">
                            <h3>Standard</h3>
                        </div>

                        <div class="card-body text-center">
                            <div class="price-info">
                                <div class="price-box text-center" style="padding: 35px 15px;">
                                    <h3 class="strike">300 HRK</h3>
                                    <h3>190 HRK</h3>
                                    <p>mjesečno</p>
                                </div>
                            </div>

                            <div class="price-content">
                                <ul style="list-style-type: none; padding: 0; margin: 0;">
                                    <li>
                                        <i class="fas fa-check"></i>
                                        Vodite do 20 grupa polaznika
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Izradite do 30 ispita
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Automatske email obavijesti polaznicima
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Automatska izrada ugovora i arhiva
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Analitika poslovanja <small>*dolazi uskoro</small>
                                    </li>

                                    <li class="error">
                                        <i class="fas fa-check"></i>
                                        PDF export ispita
                                    </li>

                                    <li class="error">
                                        <i class="fas fa-times"></i>
                                        Premium korisnička podrška 24/7
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-footer text-center" style="border: none; padding: 0; padding-bottom: 30px;">
                            <div class="pricing-btn">
                                <a class="btn" href="#" role="button">Zatraži ponudu</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pricing-col col-xl-4 col-lg-4 col-10">

                    <div class="card">
                        <div class="card-header" style="border: none;">
                            <h3>Autoškola PLUS</h3>
                        </div>

                        <div class="card-body text-center">
                            <div class="price-info">
                                <div class="price-box text-center" style="padding: 35px 25px;">
                                    <h3>Dolazi</h3>
                                    <p>uskoro</p>
                                </div>
                            </div>

                            <div class="price-content">
                                <ul style="list-style-type: none; padding: 0; margin: 0;">
                                    <li>
                                        <i class="fas fa-check"></i>
                                        Vodite do 50 grupa polaznika
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Izradite do 50 ispita
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Automatske email obavijesti polaznicima
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Automatska izrada ugovora i arhiva
                                    </li>

                                    <li>
                                        <i class="fas fa-check"></i>
                                        Analitika poslovanja
                                    </li>

                                    <li class="error">
                                        <i class="fas fa-check"></i>
                                        PDF export ispita
                                    </li>

                                    <li class="error">
                                        <i class="fas fa-check"></i>
                                        Premium korisnička podrška 24/7
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-footer text-center" style="border: none; padding: 0; padding-bottom: 30px;">
                            <div class="pricing-btn">
                                <a class="btn" href="#" role="button">Zatraži ponudu</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Contact-->
    <section id="contact" style="border-top: 2px solid #f1703c;">
        <div class="container">

            <div class="contact-row row d-flex justify-content-center">
                <div class="contact-header col-xl-8 col-lg-8 col-10">

                    <h2>
                        <span>Kontaktirajte nas!</span>
                    </h2>

                    <p>
                        Imate pitanja? Ne oklijevajte, javite nam se! Naš tim će Vas kontaktirati u što kraćem roku!
                    </p>

                </div>
            </div>

            <div class="contact-row row d-flex justify-content-center">

                <div class="contact-col col-xl-8 col-lg-8 col-10">
                    <form>

                        <div class="form-row row">

                            <div class="form-col col-md-6 mb-3">
                                <div class="form-group mb-0">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Ime i prezime">
                                </div>
                            </div>

                            <div class="form-col col-md-6 mb-3">
                                <div class="form-group mb-0">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                        </div>

                        <div class="form-row row">
                            <div class="form-col col-12">
                                <div class="form-group">
                                    <textarea type="text" id="message" name="message" rows="3" class="form-control" placeholder="Vaša poruka"></textarea>
                                </div>
                            </div>
                        </div>

                    </form>

                    <div class="contact-button">
                        <a class="btn">Pošalji</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
