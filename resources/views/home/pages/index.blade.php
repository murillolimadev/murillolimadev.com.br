@extends('home.layouts.app')
@section('title', 'Home')

@section('content')
    <!--<< banner >>-->
    <section class="banner__section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="banner__content" style="padding: 50px">
                        <a href="#" class="bn__currently">
                            <span class="d-block">
                                Atualmente disponível para freelance
                            </span>
                            <span class="d-flex gap-4 align-items-center">
                                mundialmente
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                        <h1>
                            <span class="hone"> Murillo Lima</span><br>
                            <span class="d-block designers" data-text="Developer">Developer</span>
                            <span style="font-size: 65px">Full Stack</span>
                        </h1>
                        <div class="video__area">
                            <img src="{{ asset('home/img/banner/bn-arrow.png') }}" class="vid__arrow" alt="img">
                            <a href="https://www.youtube.com/watch?v=eqzMmuCDXy8" class="video__80 video-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-camera-video" viewBox="0 0 16 16" style="color: white">
                                    <path fill-rule="evenodd"
                                        d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z">
                                    </path>
                                </svg>
                            </a>

                            <span class="proces">
                                Processos code
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner__thumb" data-aos="fade-up-right" data-aos-duration="300">
                        <img src="{{ asset('home/img/banner/banner-man.png') }}" alt="man-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__leftinfo">
            <div class="left__infomobile">
                <a href="index.html#0">
                    <img src="{{ asset('home/img/banner/dial.png') }}" alt="img">
                </a>
                <a href="index.html#0">
                    (+55)-99991106799
                </a>
            </div>
            <div class="right__infoscroll">
                <a href="index.html#prot" class="scroll">
                    scroll down
                </a>
                <a href="index.html#prot" class="scroll__bar">
                    <img src="{{ asset('home/img/banner/scroll-down.png') }}" alt="img">
                </a>
            </div>
        </div>
        <div class="banner__rightinfo">
            <div class="right__infoscroll">
                <a href="index.html#0" class="scroll">
                    Follow Me
                </a>
                <a href="index.html#0" class="scroll__bar">
                    <img src="{{ asset('home/img/banner/scroll-down.png') }}" alt="img">
                </a>
            </div>
            <div class="banner__xlsocial">
                <ul class="banner__soci d-grid justify-content-center">
                    <li>
                        <a href="https://www.facebook.com/murillolima00001">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>‰
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg> </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/murillolima_/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-globe-americas" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/murillo-lima-b3b764b8/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--<< banner >>-->

    <!--<< text slide v1 >>-->
    <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="home/img/banner/ts2.png" alt=""></span>
                    {{-- <img src="{{ asset('home/img/banner/ts3.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts4.png') }}" alt=""></span> --}}
                    <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts2.png') }}" alt=""></span>
                    {{-- <img src="{{ asset('home/img/banner/ts3.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts4.png') }}" alt=""></span> --}}
                    <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts2.png') }}" alt=""></span>
                    {{-- <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts2.png') }}" alt=""></span>
                             <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="home/img/banner/ts2.png" alt=""></span>
                    <img src="{{ asset('home/img/banner/ts3.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts4.png') }}" alt=""></span> --}}
                    <img src="{{ asset('home/img/banner/ts1.png') }}" alt=""> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts2.png') }}" alt=""></span>
                </li>
            </ul>
        </div>
    </div>
    <!--<< text slide v1 >>-->

    <!--<< about personal >>-->
    <section class="about__section pt-120 pb-120" id="about">
        <div class="container">
            <div class="personal__head text-center">
                <img src="{{ asset('home/img/about/section-star.png') }}" class="mb-30" alt="star"
                    data-aos="fade-up" data-aos-duration="1000">
                <p class="descrp" data-aos="fade-up" data-aos-duration="1500" style="text-align: center">
                    Sou Murillo Lima, trabalho de forma independente, atuo com o desenvolvimento web e mobile.
                </p>
            </div>
            <div class="singletab">
                <ul class="tablinks">
                    <li class="nav-links active">
                        <button class="tablink">Sobre</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink">Experiências</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink">Educação</button>
                    </li>
                    <li class="nav-links">
                        <button class="tablink">Habilidades</button>
                    </li>
                </ul>
                <div class="tabcontents">
                    <div class="tabitem active">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb" data-aos="zoom-in" data-aos-duration="500">
                                        <img src="{{ asset('home/img/about/personal-infothumb.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2 class="h2-head" data-aos="fade-up" data-aos-duration="500">
                                            Informação pessoal
                                        </h2>
                                        <p class="p-descrip" data-aos="fade-up" data-aos-duration="500">
                                            Formado em Sistema de informação na faculdade FACIMP, atualmente atuo como
                                            freelancer, oferecendo soluções completas para sistemas web, mobile, desktop, e
                                            sistemas integrados.
                                        </p>
                                        <div class="about__contactwrap">
                                            <div class="row g-4">
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6" data-aos="zoom-in">
                                                    <div class="abox">
                                                        <div class="about__contbox__item">
                                                            <span class="ptext fz-18 mb-20 d-block">
                                                                E-mail
                                                            </span>
                                                            <a href="">
                                                                <span class="__cf_email__"
                                                                    style="text-transform: none">contato@murillolimadev.com.br</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6" data-aos="zoom-in">
                                                    <div class="abox">
                                                        <div class="about__contbox__item">
                                                            <span class="ptext fz-18 mb-20 d-block">
                                                                Telefone
                                                            </span>
                                                            <a href="">
                                                                +(55) 99 99110-6799
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6" data-aos="zoom-in">
                                                    <div class="abox">
                                                        <div class="about__contbox__item">
                                                            <span class="ptext fz-18 mb-20 d-block">
                                                                Endereço
                                                            </span>
                                                            <a href="index.html#0">
                                                                Centro - Estreito-MA
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6" data-aos="zoom-in">
                                                    <div class="abox">
                                                        <div class="about__contbox__item">
                                                            <span class="ptext fz-18 mb-20 d-block">
                                                                Follow
                                                            </span>
                                                            <ul class="d-flex align-items-center gap-2 gap-xl-4">
                                                                <li>
                                                                    <a href="https://www.facebook.com/murillolima00001">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-facebook"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-twitter"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.instagram.com/murillolima_/">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-instagram"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor"
                                                                            class="bi bi-globe-americas"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="https://www.linkedin.com/in/murillo-lima-b3b764b8/">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor" class="bi bi-linkedin"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="{{ asset('home/img/about/personal-infothumb.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            Minhas Experiências
                                        </h2>
                                        <p>
                                            Durante meu percurso profissional de <?php echo date('Y') - 2014; ?> anos como desenvolvedor
                                            full stack,
                                            trabalhei em diferentes projetos desafiadores. Um desses projetos foi a criação
                                            de um sistema de gerenciamento de vendas para uma empresa de e-commerce. Nesse
                                            projeto, tive a oportunidade de aplicar minhas habilidades de desenvolvimento
                                            tanto no front-end, utilizando HTML, CSS e JavaScript, quanto no back-end,
                                            utilizando PHP/Laravel e MySQL. Além disso, pude trabalhar em equipe,
                                            colaborando com outros desenvolvedores e para entregar um produto final de alta
                                            qualidade (Aplicativo).
                                        </p>
                                        <div class="exprience__box mt-30">
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    Em 2008
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        CREDI SHOP S/A
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Suporte têcnico
                                                    </p>
                                                </div>
                                            </div>

                                            {{-- <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    In 2023
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Senior UI Designer
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Fiverr.com
                                                    </p>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="{{ asset('home/img/about/personal-infothumb.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            Minha educação
                                        </h2>
                                        <p>
                                            Formado em Sistema de informação na faculdade FACIMP, atualmente atuo como
                                            freelancer, oferecendo soluções completas para sistemas web, mobile, desktop, e
                                            sistemas integrados.
                                        </p>
                                        <div class="exprience__box mt-30">
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    2008-2010
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        CREDI SHOP S/A
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Suporte técnico
                                                    </p>
                                                </div>
                                            </div>

                                            {{-- <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    2016-2018
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Web Design Course
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        New York University
                                                    </p>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="{{ asset('home/img/about/personal-infothumb.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            Minhas habilidades
                                        </h2>
                                        <p>
                                            Html5 <br>
                                            Css3 <br>
                                            JavaScript <br>
                                            Git e GitHub <br>
                                            Linguagens back-end<br>
                                            Arquitetura web<br>
                                            HTTP e REST<br>
                                            SQL - Banco de dados<br>
                                            NPM<br>
                                            Desenvolvimento mobile <br>
                                            Laravel <br>
                                            Nodejs <br>
                                            React <br>
                                            React Native <br>

                                        </p>
                                        <div class="about__contactwrap">
                                            <div class="row g-4">
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="{{ asset('home/img/about/figma.png') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                HTML
                                                            </span>
                                                            <h1 class="fw-600">
                                                                98%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="{{ asset('home/img/about/word.png') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                PHP
                                                            </span>
                                                            <h1 class="fw-600">
                                                                82%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="{{ asset('home/img/about/html.png') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                HTML
                                                            </span>
                                                            <h1 class="fw-600">
                                                                98%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="{{ asset('home/img/about/boot.png') }}"
                                                                alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                Bootstrap
                                                            </span>
                                                            <h1 class="fw-600">
                                                                97%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< about personal >>-->

    <!--<< text slide v2 >>-->
    {{-- <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-right">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    <img src="home/img/banner/ts5.png" alt="text-p"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts6.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts7.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts8.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts5.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts6.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts7.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts8.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts5.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts6.png') }}" alt="text-slide"></span>
                    <img src="{{ asset('home/img/banner/ts7.png') }}" alt="text-slide"> <span class="stroke-text"><img
                            src="{{ asset('home/img/banner/ts8.png') }}" alt="text-slide"></span>
                </li>
            </ul>
        </div>
    </div> --}}
    <!--<< text slide v2 >>-->

    <!--<< our aword >>-->
    {{-- <div class="awoard__section">
        <div class="container">
            <div class="award__wraper table-responsive" data-aos="fade-up" data-aos-duration="2000">
                <table class="table w-100">
                    <tbody>
                        <tr>
                            <td>
                                <span class="table__title">
                                    Our Awards
                                </span>
                            </td>
                            <td class="cusnoe">

                            </td>
                            <td class="text-end">
                                <a href="index.html#0"
                                    class="d-flex table__view justify-content-end align-items-center base gap-2">
                                    <span>
                                        View My Work
                                    </span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Site Of The Day</td>
                            <td>Css & Animation</td>
                            <td class="text-end">2018</td>
                        </tr>
                        <tr>
                            <td>Best Business Model</td>
                            <td>New Strategy</td>
                            <td class="text-end">2019</td>
                        </tr>
                        <tr>
                            <td>Motion Graphic</td>
                            <td>3D & Visual Effect</td>
                            <td class="text-end">2020</td>
                        </tr>
                        <tr>
                            <td>Video Design</td>
                            <td>Css & Animation</td>
                            <td class="text-end">2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
    <!--<< our aword >>-->

    <!--<< project one >>-->
    <section class="project__section pt-120 pb-120" id="prot">
        <div class="container">
            <div class="project__head text-center">
                <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                    Projetos Completos
                </span>
                <h2 class="fw-500" data-aos="fade-down" data-aos-duration="2000" style="text-transform: none;">
                    Veja meu portfólio e me dê seu feedback
                </h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="project__wrapone">
                        <h2>Aplicativos</h2>
                        @foreach ($app as $item)
                            <div class="project__item cus__mb60" data-aos="fade-up" data-aos-duration="1000">
                                <a href="{{ asset('upload/projetos/app/' . $item->image) }}" class="thumb mb-30 imgc">
                                    <img src="{{ asset('upload/projetos/app/' . $item->image) }}" alt="img">
                                </a>
                                <div class="content d-flex align-items-center justify-content-between gap-2">
                                    <a href="{{ $item->url }}" class="left__cont" target="_blank">
                                        <span class="base mb-2 mb-xxl-3 d-block text-uppercase">
                                            {{ $item->name }}
                                        </span>
                                        <h3>
                                            {{ $item->tec }}
                                        </h3>
                                    </a>
                                    <a href="{{ $item->url }}" target="_blank" class="common__icon">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">

                    <div class="project__wraptwo">
                        <h2>WebSites</h2>
                        @foreach ($website as $item)
                            <div class="project__item cus__mb60" data-aos="fade-up" data-aos-duration="1000">
                                <a href="{{ asset('upload/projetos/website/' . $item->image) }}"
                                    class="thumb mb-30 imgc">
                                    <img src="{{ asset('upload/projetos/website/' . $item->image) }}" alt="img">
                                </a>
                                <div class="content d-flex align-items-center justify-content-between gap-2">
                                    <a href="{{ $item->url }}" class="left__cont" target="_blank">
                                        <span class="base mb-2 mb-xxl-3 d-block text-uppercase">
                                            {{ $item->name }}
                                        </span>
                                        <h3>
                                            {{ $item->tec }}
                                        </h3>
                                    </a>
                                    <a href="{{ $item->url }}" target="_blank" class="common__icon">
                                        Ver
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="custom__hover">
                <a href="#" class="hover__circle mauto" data-aos="zoom-out-down" data-aos-duration="2000">
                    <span class="box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bag-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5" />
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                        </svg><br>
                        <span class="textmore">
                            Mais trabalhos
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!--<< project one >>-->

    <!--<< project metting one >>-->
    <section class="project__metting overhid pt-120 pb-120">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="pro__metting__content">
                        <div class="project__head">
                            <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                                Precisa de um projeto?
                            </span>
                            <h2 class="fw-500" data-aos="fade-down" data-aos-duration="1600"
                                style="text-transform: none;">
                                Vamos trabalhar juntos. vamos marcar uma reunião
                            </h2>
                        </div>
                        <div class="about__contbox__item pb-30" data-aos="fade-up" data-aos-duration="1000">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    style="color: black" fill="currentColor" class="bi bi-envelope-arrow-down"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99zm1 7.105 4.708-2.897L1 5.383zM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1" />
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708z" />
                                </svg>
                            </span>
                            <span class="box">
                                <span class="ptext fz-18 mb-1 d-block">
                                    Email
                                </span>
                                <a href="index.html#0" style="text-transform: none;">
                                    <span class="__cf_email__" data-cfemail="">contato@murillolimadev.com.br</span>
                                </a>
                            </span>
                        </div>
                        <div class="about__contbox__item pb-30 pt-30" data-aos="fade-up" data-aos-duration="1500">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    style="color: black" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </span>
                            <span class="box">
                                <span class="ptext fz-18 mb-1 d-block">
                                    Localização
                                </span>
                                <a href="index.html#0">
                                    Estreito, Maranhão
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="pro__mettingthumb" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="{{ asset('home/img/project/project-need.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< project metting one >>-->

    <!--<< service >>-->

    <!--<< service >>-->

    <!--<< process >>-->
    <section class="process__section pt-120 pb-120">
        <div class="container">
            <div class="project__head text-center">
                <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                    Processo de trabalho
                </span>
                <h2 class="fw-500" data-aos="fade-up" data-aos-duration="1000" style="text-transform: none">
                    O site dos seus sonhos em
                    <span class="d-block">
                        poucos passos
                    </span>
                </h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item">
                        <h2 class="white mb-24">
                            Conceito
                        </h2>
                        <p class="mb-30 pra fz-18">
                            Web Developer é responsável por planejar, criar, desenvolver e manter sites e aplicações web.
                        </p>
                        {{-- <ul>
                            <li>
                                Reviewing any existing branding
                            </li>
                            <li>
                                Target audience and competitors research
                            </li>
                            <li>
                                Developing a strategy
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item">
                        <h2 class="white mb-24">
                            Design
                        </h2>
                        <p class="mb-30 pra fz-18">
                            O Webflow se destaca como um dos criadores de sites mais populares do mercado atual,
                            impulsionando a criação de inúmeros sites, especialmente os corporativos simples.
                        </p>
                        {{-- <ul>
                            <li>
                                Developing wireframes and mockup
                            </li>
                            <li>
                                Choosing typography, color palettes,
                            </li>
                            <li>
                                Refining the design
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item">
                        <h2 class="white mb-24">
                            Webflow
                        </h2>
                        <p class="mb-30 pra fz-18">
                            Com designs modernos e ferramentas avançadas, criar uma comunidade, compartilhar suas paixões e
                            vender on-line é mais fácil do que nunca.
                        </p>
                        {{-- <ul>
                            <li>
                                Testing the website thoroughly launch
                            </li>
                            <li>
                                Choosing typography, color palettes,
                            </li>
                            <li>
                                Refining the design
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< process >>-->

    <!--<< testimonial >>-->

    <!--<< testimonial >>-->

    <!--<< blog >>-->
    {{-- <section class="blog__section overhid pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-3">
                    <div class="project__head">
                        <span class="common__sub" data-aos="fade-down" data-aos-duration="1000">
                            Meu Blog
                        </span>
                        <h2 class="fw-500 mt-3" data-aos="fade-down" data-aos-duration="1500">
                            Postagens recentes
                        </h2>
                        <div class="blog__hoverbox">
                            <a href="blog.html" class="hover__circle wow fadeInUp" data-wow-duration="1.6s">
                                <span class="box">
                                    <i class="bi bi-arrow-up-right"></i>
                                    <span class="textmore">
                                        Click More Work
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9">
                    <div class="blog__rightwrap">
                        <div class="service__uniquewrap">
                            <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1000">
                                <div class="left__service">
                                    <div class="serial__adjust">
                                        <div class="cont">
                                            <span class="dates">
                                                Sept 19, 2023
                                            </span>
                                            <h3>
                                                <a href="blog.html">
                                                    Brand design that helps
                                                    the company grow
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="opa__thumb imgc">
                                        <img src="{{ asset('home/img/blog/opa-blog.png') }}" alt="img-opa">
                                    </a>
                                </div>
                                <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="common__icon imgc">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                            <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1400">
                                <div class="left__service">
                                    <div class="serial__adjust">
                                        <div class="cont">
                                            <span class="dates">
                                                Sept 19, 2023
                                            </span>
                                            <h3>
                                                <a href="blog.html">
                                                    Brand design that helps
                                                    the company grow
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="opa__thumb imgc">
                                        <img src="{{ asset('home/img/blog/opa-blog.png') }}" alt="img-opa">
                                    </a>
                                </div>
                                <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="common__icon imgc">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                            <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1800">
                                <div class="left__service">
                                    <div class="serial__adjust">
                                        <div class="cont">
                                            <span class="dates">
                                                Sept 19, 2023
                                            </span>
                                            <h3>
                                                <a href="blog.html">
                                                    Brand design that helps
                                                    the company grow
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="opa__thumb imgc">
                                        <img src="{{ asset('home/img/blog/opa-blog.png') }}" alt="img-opa">
                                    </a>
                                </div>
                                <a href="{{ asset('home/img/blog/opa-blog.png') }}" class="common__icon imgc">
                                    <i class="bi bi-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
