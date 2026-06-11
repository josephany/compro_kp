@extends('layouts.app')

@section('title','Products')

@section('content')

{{-- HERO --}}
<section class="product-hero">

    <div class="container text-center">

        <span class="section-label">
            OUR PRODUCTS
        </span>

        <h1 class="product-title mt-3">

            Industrial Products
            For Power Plant Operations

        </h1>

        <p class="product-desc">

            Delivering reliable and high-quality products
            for Mechanical, Electrical and Instrumentation needs.

        </p>

    </div>

</section>

{{-- PRODUCTS GRID --}}

<section class="py-5">

    <div class="container">

        <div class="row g-4">

            {{-- Boiler Components --}}
            <div class="col-lg-4">

                <div class="product-category-card">

                    <div class="product-icon">
                        ⚙️
                    </div>

                    <h3>Boiler Components</h3>

                    <ul>
                        <li>Grate Bar</li>
                        <li>Boiler Tube</li>
                        <li>Economizer</li>
                        <li>Chain Grate</li>
                        <li>Heat Exchanger</li>
                    </ul>

                </div>

            </div>

            {{-- Mechanical --}}
            <div class="col-lg-4">

                <div class="product-category-card">

                    <div class="product-icon">
                        🔩
                    </div>

                    <h3>Mechanical Parts</h3>

                    <ul>
                        <li>Gear Box</li>
                        <li>Gear Sprocket</li>
                        <li>Shaft</li>
                        <li>Roller</li>
                        <li>Impeller</li>
                    </ul>

                </div>

            </div>

            {{-- Valve --}}
            <div class="col-lg-4">

                <div class="product-category-card">

                    <div class="product-icon">
                        🚰
                    </div>

                    <h3>Valves & Flow Control</h3>

                    <ul>
                        <li>Ball Valve</li>
                        <li>Butterfly Valve</li>
                        <li>Globe Valve</li>
                        <li>Control Valve</li>
                        <li>Safety Valve</li>
                    </ul>

                </div>

            </div>

            {{-- Instrument --}}
            <div class="col-lg-4">

                <div class="product-category-card">

                    <div class="product-icon">
                        📟
                    </div>

                    <h3>Instrumentation</h3>

                    <ul>
                        <li>Pressure Gauge</li>
                        <li>Display Unit</li>
                        <li>Transmitter</li>
                        <li>Electrode</li>
                    </ul>

                </div>

            </div>

            {{-- Equipment --}}
            <div class="col-lg-4">

                <div class="product-category-card">

                    <div class="product-icon">
                        🏭
                    </div>

                    <h3>Industrial Equipment</h3>

                    <ul>
                        <li>Root Blower</li>
                        <li>Rotary Valve</li>
                        <li>Heat Exchanger</li>
                        <li>Turbine Parts</li>
                    </ul>

                </div>

            </div>

            {{-- Service --}}
            <div class="col-lg-4">

                <div class="product-category-card">

                    <div class="product-icon">
                        🛠️
                    </div>

                    <h3>Boiler Services</h3>

                    <ul>
                        <li>Maintenance</li>
                        <li>Inspection</li>
                        <li>Replacement</li>
                        <li>Spare Parts Supply</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- CTA --}}

<section class="product-cta">

    <div class="container">

        <div class="cta-box">

            <h2>
                Need Specific Industrial Products?
            </h2>

            <p>
                Contact our team to discuss your project requirements.
            </p>

            <a href="/contact" class="btn btn-light btn-lg">
                Request Quotation
            </a>

        </div>

    </div>

</section>

@endsection