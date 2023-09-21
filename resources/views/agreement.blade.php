@php
    $url = url()->previous();
@endphp

@extends('layout.app')

@section('content')
    <!-- ===================================
                  START THE HEADER
                ==================================== -->
    <header class="default heade-sticky">
        <div class="un-title-page go-back">
            <a href="{{ $url }}" class="icon">
                <i class="ri-arrow-drop-left-line"></i>
            </a>
            <h1>Agreement</h1>
        </div>
    </header>
    <!-- ===================================
                  START THE SPACE STICKY
                ==================================== -->
    <div class="space-sticky"></div>

    <section class="account-section padding-20">
        <div class="display-title">
            <h4>Terms and Conditions</h4>
        </div>
        <div class="markdown prose w-full break-words dark:prose-invert dark">

            <ol>
                <li>
                    <p>User Verification:</p>
                    <ul>
                        <li>All users are required to undergo a verification process.</li>
                        <li>The verification process may take 2 to 3 business days to complete.</li>
                        <li>We reserve the right to request additional information or documentation for the verification
                            process.</li>
                    </ul>
                </li>
                <li>
                    <p>Payment Schedule:</p>
                    <ul>
                        <li>Users will receive monthly payments based on their earnings.</li>
                        <li>The payment calculation will be based on the user's actual earnings within the given month.</li>
                        <li>Payments will be processed and disbursed on a monthly basis.</li>
                    </ul>
                </li>
                <li>
                    <p>Testing:</p>
                    <ul>
                        <li>Users may be subject to testing or evaluation of their skills, knowledge, or performance.</li>
                        <li>The purpose of testing is to ensure the quality and reliability of the services provided.</li>
                        <li>Testing may include assessments, exams, or practical tasks relevant to the user's role or
                            responsibilities.</li>
                    </ul>
                </li>
                <li>
                    <p>User Responsibilities:</p>
                    <ul>
                        <li>Users are responsible for providing accurate and up-to-date information during the verification
                            process.</li>
                        <li>Users must comply with any requests or requirements related to the verification, payment, or
                            testing processes.</li>
                        <li>Users are expected to maintain professionalism, integrity, and adherence to the terms and
                            conditions outlined herein.</li>
                    </ul>
                </li>
                <li>
                    <p>Agreement Acceptance:</p>
                    <ul>
                        <li>By using our platform or services, users acknowledge and accept these terms and conditions in
                            their entirety.</li>
                        <li>Users understand that failure to comply with these terms and conditions may result in account
                            suspension or termination.</li>
                    </ul>
                </li>
            </ol>
            <p>Please read these terms and conditions carefully before using our platform. By proceeding with registration
                or utilizing our services, you indicate your understanding and agreement to these terms and conditions.</p>
            <hr>
            <a href="/application?step=one" class="btn btn-lg btn-primary w-100">I agree</a>
        </div>
    </section>
@endsection
