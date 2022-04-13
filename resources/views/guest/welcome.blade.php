@extends('layouts.guest')

@section('content')
    <!-- banner section -->
    <section class="banner-section vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="banner-content text-center">
                        <h2><span>pi to</span> i<p class="n">n</p><p class="f">f</p>ini<p class="t">t</p>y!</h2>
                        <p>With the infinite digits of Pi, we create art that evolves infinitely. Hooah!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- join section -->
    <section class="join-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="join-left">
                        <p>Harnessing the power of technology, art, NFTs and web3, Pi is now decentralized. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="join-right d-flex justify-content-end">
                        <a href="#enlistForm">Join the dePi Army!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="join-overlay">
            <img src="img/join.svg">
        </div>
    </section>

    <!-- qr section -->
    <section class="qr-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="qr-left">
                        <h2>The Art of Pi</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="qr-right">
                        <div class="qr-scanner-box">
                            <div class="d-flex justify-content-center">
                                <img class="qr-img" src="img/qr.svg" alt="qr code img">
                            </div>
                            <div class="qr-scanner">
                                <img src="img/qr-scanner.svg" alt="">
                            </div>
                            <div class="qr-status">
                                <div class="qr-status-scroll">
                                    <div class="qr-list qr-left-1">
                                        <p>The gradient is made from two color hexcodes that match the numbers of Pi</p>
                                    </div>
                                    <div class="qr-list qr-left-2">
                                        <p>Art is regenerated every 3.14 seconds from 12 digits of Pi</p>
                                    </div>
                                    <div class="qr-list qr-left-3">
                                        <p>Art is regenerated every 3.14 seconds from 12 digits of Pi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- art content section -->
    <section class="art-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="art-box">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="art-img">
                                    <img src="img/art.svg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="art-content" id="art-content">
                                    <div class="art-content-anim">
                                        <h2>3.14 Commendations</h2>
                                    </div>
                                    <p>Every year, we invite artists to submit their unique designs for
                                        consideration as
                                        our new scannable art. The art with the most votes wins and will be
                                        installed
                                        for Pi Day. As part of our Pi Day Celebration, the artist will receive the
                                        3.14
                                        ART AWARD and receives the 3.14% of that year’s annual sales .</p>
                                    <p>Your art continues to mature and diversify year over year.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="art-circle"></div>
                    <div class="art-dot">
                        <img src="img/join.svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- nft section -->
    <section class="nft-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="nft-card">
                        <ul>
                            <li>Regeneration <span>84383</span></li>
                            <li><svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.63102 1.59378C5.67003 1.59378 2.45901 4.8048 2.45901 8.76579C2.45901 12.7268 5.67003 15.9378 9.63102 15.9378C13.592 15.9378 16.803 12.7268 16.803 8.76579C16.803 4.8048 13.592 1.59378 9.63102 1.59378ZM0.865234 8.76579C0.865234 3.92458 4.78981 0 9.63102 0C14.4722 0 18.3968 3.92458 18.3968 8.76579C18.3968 13.607 14.4722 17.5316 9.63102 17.5316C4.78981 17.5316 0.865234 13.607 0.865234 8.76579Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.631 3.18756C10.0711 3.18756 10.4279 3.54434 10.4279 3.98445V8.90268C10.4279 8.90274 10.4279 8.90263 10.4279 8.90268C10.428 9.11395 10.512 9.31671 10.6614 9.46608L12.5852 11.3899C12.8964 11.7011 12.8964 12.2056 12.5852 12.5168C12.2739 12.828 11.7694 12.828 11.4582 12.5168L9.53457 10.5932C9.53454 10.5932 9.5346 10.5933 9.53457 10.5932C9.08626 10.145 8.83424 9.53698 8.83411 8.90302V3.98445C8.83411 3.54434 9.19089 3.18756 9.631 3.18756Z"
                                        fill="white" />
                                </svg>
                                3.14</li>
                        </ul>
                        <div class="nft-card-content">
                            <div class="nft-head-bg"></div>
                            <div class="nft-body">
                                <img src="img/nft-qr.svg">
                                <div class="nft-body-content">
                                    <h2>Pi Digits</h2>
                                    <p>FROM THE 1,004,676TH DECIMAL OF PI</p>
                                    <h4>820931840573</h4>
                                    <div class="nft-color">
                                        <ul>
                                            <li>
                                                <span></span>
                                                <p>#820931</p>
                                            </li>
                                            <li>
                                                <span></span>
                                                <p>#840573</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="nft-right-content">
                        <h2>You become a General when you mint an Infinitely regenerating NFT.</h2>
                        <ul>
                            <li>Infinity NFTs regenerate forever</li>
                            <li>Watch it evolve every 3.14 seconds from 12 new digits of Pi</li>
                            <li>Your art is always unique, never regenerating with the same digits as your fellow
                                members</li>
                            <li>All the generated scannable art is downloadable and yours forever</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- info card section -->
    <section class="info-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-card">
                        <img src="img/info-01.svg">
                        <h4>Pi Day Celebrations</h4>
                        <p>Every year on 3.14 we will throw an exclusive members only Pi Day party. There will be
                            many
                            celebrations but the VIP events are for ranked Generals with clearance. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-card">
                        <img src="img/info-02.svg" class="info-img-fix-1">
                        <h4>Voting Rights</h4>
                        <p>All soldiers receive voting rights. Generals command what deciding options will be voted
                            on.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-card">
                        <img src="img/info-03.svg" class="info-img-fix-2">
                        <h4>70% Dividends</h4>
                        <p>After the Infinity NFT sale, and all ranked General are earned, we will open up
                            recruiting
                            for anyone to become a soldier. Soldiers choose their favorite set of digits from Pi and
                            MINT them. </p>
                    </div>
                </div>
            </div>
            <div class="info-card-dot">
                <img src="img/join.svg">
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact-section" id="enlistForm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>Start Your Brigade</h2>
                        <p>The Infinity NFTs will be available as a limited time-based Open Edition.The date, price
                            and
                            rules will be announced soon. </p>
                        <p>
                            Every 3 Hours and 14 seconds, we group those who enlist. Earlier groups have the
                            advantage
                            of minting sooner and ranking higher.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form" >
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Enlist Now</h4>
                            <h4>2 Days 3 Hours 14 Minutes</h4>
                        </div>
                        <p>When joining, you will be authenticated through twitter to make signing up simple and
                            anonymous, we do not request your email from twitter.</p>
                        <form  action="enlist" method="post">
                            @csrf
                            <div class="form-input">
                                <input type="text" name="wallet_id" placeholder="Enter Wallet" required>
                            </div>
                            <button class="form-btn" type="submit">Join the dePi Army!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const wallet = document.querySelector("input[name='wallet_id']");
            wallet.oninvalid = function(e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    e.target.setCustomValidity("A wallet address is required so we can whitelist it");
                }
            };
            wallet.oninput = function(e) {
                e.target.setCustomValidity("");
            };
        })

        if({{ session()->get('notRegistered') }}) alert('You do not have an account yet. Please sign up by enlisting now.');
    </script>
@endpush
