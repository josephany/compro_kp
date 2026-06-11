@extends('layouts.app')

@section('title','Home')

@section('content')

{{-- HERO --}}
<section class="hero-section">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <div class="col-lg-7" data-aos="fade-right">

                <span class="hero-label">
                    POWER PLANT SOLUTION PARTNER
                </span>

                <h1 class="hero-title">

                    Reliable Industrial
                    Products & Engineering
                    Solutions

                </h1>

                <p class="hero-description">

                    PT Putera Harapan Abadi provides Mechanical,
                    Electrical and Instrumentation products and services
                    for Indonesia's power generation industry.

                    Established since 2012 with trusted partnerships
                    across domestic and international suppliers.

                </p>

                <div class="mt-5">

                    <a href="#products"
                       class="btn btn-danger btn-lg px-5 py-3">

                        Explore Products

                    </a>

                    <a href="/contact"
                       class="btn btn-outline-dark btn-lg px-5 py-3 ms-3">

                        Contact Us

                    </a>

                </div>

            </div>

            <div class="col-lg-5 text-center" data-aos="fade-left">

                <img
                    src="{{ asset('images/hero-powerplant.png') }}"
                    class="img-fluid hero-image">

            </div>

        </div>

    </div>

</section>

{{-- TRUSTED PARTNERS --}}

<section class="partners-section">

    <div class="container">

        <div class="text-center mb-5">

            <p class="partner-title">
                TRUSTED CUSTOMER
            </p>

        </div>

        <div class="row justify-content-center align-items-center text-center">

            <div class="col-md-4">

                <div class="partner-card">

                    PLN Indonesia Power

                </div>

            </div>

            <div class="col-md-4">

                <div class="partner-card">

                    PLN Nusantara Power

                </div>

            </div>

        </div>

    </div>

</section>

{{-- ABOUT --}}

<section class="about-home">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img
                    src="{{ asset('images/company-building.jpg') }}"
                    class="img-fluid rounded-5 shadow-lg">

            </div>

            <div class="col-lg-6">

                <span class="section-label">

                    ABOUT COMPANY

                </span>

                <h2 class="section-title mt-3">

                    More Than A Decade Supporting
                    Indonesia's Power Industry

                </h2>

                <p class="section-description">

                    PT Putera Harapan Abadi specializes in supplying
                    products and services for power plants across Indonesia.

                    Through strong partnerships and experienced personnel,
                    we deliver high quality solutions in Mechanical,
                    Electrical and Instrumentation sectors.

                </p>

                <a href="/about"
                   class="btn btn-danger mt-4">

                    Learn More

                </a>

            </div>

        </div>

    </div>

</section>

{{-- STATISTICS --}}

<section class="stats-section">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">

                <h2>14+</h2>
                <p>Years Experience</p>

            </div>

            <div class="col-md-3">

                <h2>100+</h2>
                <p>Projects Supported</p>

            </div>

            <div class="col-md-3">

                <h2>50+</h2>
                <p>Vendor Partnerships</p>

            </div>

            <div class="col-md-3">

                <h2>2</h2>
                <p>Major PLN Customers</p>

            </div>

        </div>

    </div>

</section>

{{-- PRODUCTS --}}

<section id="products">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">
                PRODUCTS
            </span>

            <h2 class="section-title mt-3">
                Featured Product Categories
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="product-card">

                    <h4>Boiler Components</h4>

                    <p>
                        Grate Bar, Boiler Tube,
                        Economizer, Chain Grate,
                        Heat Exchanger.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="product-card">

                    <h4>Mechanical Parts</h4>

                    <p>
                        Gear Box, Gear Sprocket,
                        Shaft, Roller, Impeller.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="product-card">

                    <h4>Instrumentation</h4>

                    <p>
                        Pressure Gauge,
                        Display, Transmitter,
                        Industrial Sensors.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- VALUES --}}

<section class="values-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">
                OUR VALUES
            </span>

            <h2 class="section-title mt-3">

                What Drives Us Forward

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="value-box">

                    <h4>Integrity & Trust</h4>

                    <p>
                        Building sustainable
                        relationships through
                        transparency and accountability.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="value-box">

                    <h4>Innovation</h4>

                    <p>
                        Continuously improving
                        products, services,
                        and operational efficiency.
                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="value-box">

                    <h4>Partnership</h4>

                    <p>
                        Creating long-term
                        collaboration with
                        customers and suppliers.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- SERVICES --}}

<section class="services-section">

    <div class="container text-center">

        <span class="section-label text-warning">

            SERVICES

        </span>

        <h2 class="section-title text-white mt-3">

            Comprehensive Industrial Solutions

        </h2>

        <div class="row mt-5">

            <div class="col-md-4">

                <h5>Mechanical</h5>

            </div>

            <div class="col-md-4">

                <h5>Electrical</h5>

            </div>

            <div class="col-md-4">

                <h5>Instrumentation</h5>

            </div>

        </div>

    </div>

</section>

{{-- CTA --}}

<section class="cta-section">

    <div class="container">

        <div class="cta-box">

            <h2>

                Looking For A Reliable
                Industrial Supply Partner?

            </h2>

            <p>

                Let's discuss your project requirements
                and provide the right solution.

            </p>

            <a href="/contact"
               class="btn btn-light btn-lg">

                Request Quotation

            </a>

        </div>

    </div>

</section>

@endsection