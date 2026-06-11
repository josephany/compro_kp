@extends('layouts.app')

@section('title','About Us')

@section('content')

<section class="bg-white">

    <div class="container">

        <div class="row align-items-center min-vh-100">

            <div class="col-lg-6" data-aos="fade-right">

                <div class="section-label">
                    About Company
                </div>

                <h1 class="section-title mt-3">
                    Supporting Indonesia's
                    Power Generation Industry
                    Since 2012
                </h1>

                <p class="section-desc mt-4">

                    PT Putera Harapan Abadi specializes in supplying
                    Mechanical, Electrical and Instrumentation products
                    and services for power plants throughout Indonesia.

                    Through strategic partnerships with domestic and
                    international vendors, we provide reliable solutions
                    that support operational excellence and sustainable growth.

                </p>

            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <img src="{{ asset('images/powerplant.jpg') }}"
                     class="img-fluid rounded-4 shadow-lg">

            </div>

        </div>

    </div>

</section>

<section style="background:#F8FAFC">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">

                <h1 class="fw-bold text-danger">
                    14+
                </h1>

                <p>Years Experience</p>

            </div>

            <div class="col-md-3">

                <h1 class="fw-bold text-danger">
                    100+
                </h1>

                <p>Projects Supported</p>

            </div>

            <div class="col-md-3">

                <h1 class="fw-bold text-danger">
                    PLN
                </h1>

                <p>Strategic Customer</p>

            </div>

            <div class="col-md-3">

                <h1 class="fw-bold text-danger">
                    MEI
                </h1>

                <p>Mechanical Electrical Instrument</p>

            </div>

        </div>

    </div>

</section>

<section>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <span class="section-label">
                    Vision
                </span>

                <h2 class="section-title mt-3">
                    Building Long-Term Trust
                    Through Excellence
                </h2>

                <p class="section-desc mt-4">

                    To become a reputable business entity recognized
                    for reliability, professionalism and customer satisfaction
                    in the industrial and power generation sector.

                </p>

            </div>

            <div class="col-lg-6">

                <span class="section-label">
                    Core Values
                </span>

                <div class="row mt-4">

                    <div class="col-md-4">

                        <div class="value-card">

                            <h5>
                                Integrity
                            </h5>

                            <p>
                                Building trust through transparency and accountability.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="value-card">

                            <h5>
                                Innovation
                            </h5>

                            <p>
                                Continuously improving solutions and services.
                            </p>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="value-card">

                            <h5>
                                Partnership
                            </h5>

                            <p>
                                Creating long-term relationships with stakeholders.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section style="background:#0F172A;color:white">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label text-warning">
                Company Journey
            </span>

            <h2 class="fw-bold mt-3">
                Our Growth Story
            </h2>

        </div>

        <div class="row text-center">

            <div class="col-md-3">

                <h3>2012</h3>

                <p>Company Established</p>

            </div>

            <div class="col-md-3">

                <h3>2015</h3>

                <p>Expanded Vendor Network</p>

            </div>

            <div class="col-md-3">

                <h3>2020</h3>

                <p>Major Power Plant Supply Projects</p>

            </div>

            <div class="col-md-3">

                <h3>Today</h3>

                <p>Trusted Industrial Partner</p>

            </div>

        </div>

    </div>

</section>

@endsection