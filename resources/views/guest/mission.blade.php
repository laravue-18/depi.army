@extends('layouts.guest')

@section('content')
    <!-- mission banner section -->
    <section class="mission-box">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="mission-content text-center">
                        <p>Our Mission</p>
                        <h4>dePi.Army’s mission is to unify blockchain, crypto and NFT enthusiasts looking to drive
                            utility and purpose under the decentralized symbol and numbers of Pi.</h4>
                        <h2>#StrengthInNumbers</h2>
                    </div>
                </div>
            </div>
        </div>
        <img src="/img/color-dot.png" alt="">
    </section>

    <!-- unify section -->
    <section class="unify-section">
        <div class="unify-content">
            <h2>Why Unify?</h2>
            <p>Billions of dollars in cryptocurrency trades are being transacted daily and millions more in NFT sales.
                Where is all that money going? Who is it helping? Is it driving the industry forward and creating
                innovation and adoption? Where is the utility? </p>
            <p>This army is not about war, its about the battle, the good fight. It is about unifying our voice for
                change and driving purpose and bringing utility to the forefront of the crypto industry.</p>
            <p>People supporting projects they are involved in just in the hopes that a price pumps is essentially a
                ponzi scheme.</p>
            <p>This army is not about war, its about the battle, the good fight. It is about unifying our voice for
                change and driving purpose and bringing utility to the forefront of the crypto industry.</p>
            <p>People supporting projects they are involved in just in the hopes that a price pumps is essentially a
                ponzi scheme.</p>
        </div>
    </section>

    <!-- qr section -->
    <section class="qr-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="qr-left">
                        <h2>Why Pi?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="qr-right">
                        <div class="qr-scanner-box">
                            <img src="/img/qr.svg" alt="qr code img">
                            <div class="qr-scanner">
                                <img src="/img/qr-scanner.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>Enlist Now</h2>
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
                    <div class="contact-form">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Enlist Now</h4>
                            <h4>2 Days 3 Hours 14 Minutes</h4>
                        </div>
                        <p>When joining, you will be authenticated through twitter to make signing up simple and
                            anonymous, we do not request your email from twitter.</p>
                        <form action="./index.html">
                            <!-- <div class="form-input">
                                <input type="text" class="select-input" placeholder="Enter Email">
                                <div class="form-select-option">
                                    <button class="form-select-btn" type="button">
                                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.978394 1.20361L8.95054 9.17576L16.9227 1.20361"
                                                stroke="white" />
                                        </svg>
                                        <i class="fa-solid fa-envelope"></i>
                                    </button>
                                    <div class="select-option">
                                        <a href="javascript:void(0)" data-info="Enter Email"
                                            data-icon="fa-solid fa-envelope"><i
                                                class="fa-solid fa-envelope"></i>Email</a>
                                        <a href="javascript:void(0)" data-info="Discord Id"
                                            data-icon="fa-brands fa-discord"><i
                                                class="fa-brands fa-discord"></i>Discord</a>
                                        <a href="javascript:void(0)" data-info="Twitter Id"
                                            data-icon="fa-brands fa-twitter"><i
                                                class="fa-brands fa-twitter"></i>Twitter</a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-input">
                                <input type="text" placeholder="Enter Wallet">
                            </div>
                            <button class="form-btn" type="submit">Join the dePi Army!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
