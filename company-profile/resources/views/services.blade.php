@extends('layouts.app')

@section('title','Services')

@section('content')

{{-- HERO --}}
<section class="service-hero">

    <div class="container text-center">

        <span class="section-label">
            OUR SERVICES
        </span>

        <h1 class="service-title mt-3">

            Reliable Industrial Solutions
            For Power Plant Operations

        </h1>

        <p class="service-desc">

            Supporting power generation facilities through
            quality products, engineering expertise,
            and trusted procurement services.

        </p>

    </div>

</section>

{{-- SERVICES --}}

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="service-card">

                    <div class="service-number">
                        01
                    </div>

                    <h3>
                        Industrial Product Supply
                    </h3>

                    <p>

                        Supplying high-quality industrial
                        components and spare parts for
                        power plant operations.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="service-card">

                    <div class="service-number">
                        02
                    </div>

                    <h3>
                        Mechanical Solutions
                    </h3>

                    <p>

                        Supporting maintenance and operational
                        requirements through reliable mechanical
                        equipment and components.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="service-card">

                    <div class="service-number">
                        03
                    </div>

                    <h3>
                        Electrical Services
                    </h3>

                    <p>

                        Providing electrical products and
                        support for industrial and power
                        generation systems.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="service-card">

                    <div class="service-number">
                        04
                    </div>

                    <h3>
                        Instrumentation Solutions
                    </h3>

                    <p>

                        Delivering monitoring, measuring,
                        and control instruments to improve
                        operational performance.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="service-card">

                    <div class="service-number">
                        05
                    </div>

                    <h3>
                        Boiler Support Services
                    </h3>

                    <p>

                        Providing boiler spare parts,
                        components, and technical support
                        for continuous operations.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="service-card">

                    <div class="service-number">
                        06
                    </div>

                    <h3>
                        Procurement & Vendor Management
                    </h3>

                    <p>

                        Coordinating sourcing and procurement
                        from trusted domestic and international
                        partners.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- WHY US --}}

<section class="service-dark">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label text-warning">
                WHY CHOOSE US
            </span>

            <h2 class="text-white fw-bold mt-3">

                Delivering Excellence Through
                Experience & Partnership

            </h2>

        </div>

        <div class="row text-center">

            <div class="col-md-4">

                <h3 class="text-warning">
                    Experienced Team
                </h3>

                <p>
                    Skilled professionals with
                    extensive industrial experience.
                </p>

            </div>

            <div class="col-md-4">

                <h3 class="text-warning">
                    Trusted Network
                </h3>

                <p>
                    Strong collaboration with
                    domestic and international vendors.
                </p>

            </div>

            <div class="col-md-4">

                <h3 class="text-warning">
                    Customer Focused
                </h3>

                <p>
                    Providing reliable solutions
                    tailored to client requirements.
                </p>

            </div>

        </div>

    </div>

</section>

{{-- CTA --}}

<section class="py-5">

    <div class="container">

        <div class="cta-box">

            <h2>

                Need Industrial Products
                or Engineering Support?

            </h2>

            <p>

                Contact us today and discuss
                your project requirements.

            </p>

            <a href="/contact"
               class="btn btn-light btn-lg">

                Request Quotation

            </a>

        </div>

    </div>

</section>

@endsection