@extends('layouts.user')

@php
    $ranks = ['Lieutenant', 'Captain', 'Major', 'Colonel', 'General'];
    $rank = $metrics['rank'];
@endphp

@section('content')
<div class="admin-content">
    <div class="admin-base">
        <div class="admin-base-logo">
            <img src="img/{{ $rank }}.svg" alt="">
            <div>
                <p>My Rank</p>
                <h2>{{ $rank }}</h2>
            </div>
        </div>
    </div>
    <div class="admin-share">
        <h2>Build Your Brigade</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="admin-input">
            <input type="text" value="{{ $user->share_link }}">
            <div class="admin-share-icon">
                <a class="copy-btn" onclick="event.preventDefault()" href="javascrip:void(0)">
                    <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_319_704)">
                            <path d="M8.60449 3.73608V14.2361C8.60449 14.7002 8.80927 15.1453 9.17376 15.4735C9.53826 15.8017 10.0326 15.9861 10.5481 15.9861H18.3226C18.8381 15.9861 19.3324 15.8017 19.6969 15.4735C20.0614 15.1453 20.2662 14.7002 20.2662 14.2361V6.57283C20.2662 6.3397 20.2144 6.10892 20.1139 5.89405C20.0135 5.67918 19.8663 5.48455 19.6812 5.32158L16.4596 2.48483C16.0965 2.16516 15.6089 1.98614 15.101 1.98608H10.5481C10.0326 1.98608 9.53826 2.17046 9.17376 2.49865C8.80927 2.82684 8.60449 3.27196 8.60449 3.73608V3.73608Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.379 15.9861V17.7361C16.379 18.2002 16.1742 18.6453 15.8097 18.9735C15.4452 19.3017 14.9509 19.4861 14.4354 19.4861H6.6609C6.14542 19.4861 5.65106 19.3017 5.28656 18.9735C4.92206 18.6453 4.71729 18.2002 4.71729 17.7361V8.11108C4.71729 7.64696 4.92206 7.20184 5.28656 6.87365C5.65106 6.54546 6.14542 6.36108 6.6609 6.36108H8.60452" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_319_704">
                                <rect width="23.3234" height="21" fill="white" transform="translate(0.830078 0.236084)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="javascrip:void(0)">
                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.9973 6.22538L14.3615 0.458105C13.6931 -0.0467719 12.6397 0.363087 12.6397 1.14736V4.18508C5.67092 4.25487 0.14502 5.47647 0.14502 11.2529C0.14502 13.5844 1.86221 15.8941 3.76037 17.1017C4.35269 17.4785 5.19686 17.0055 4.97847 16.3947C3.01125 10.892 5.91153 9.43109 12.6397 9.34644V12.6825C12.6397 13.468 13.6939 13.876 14.3615 13.3717L21.9973 7.6039C22.4776 7.24106 22.4783 6.58872 21.9973 6.22538Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="admin-brigade">
        <div class="admin-brigade-content">
            <h4>My Brigade</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            <h4>
                Total : <span>{{ $metrics['brigade']['total_count'] }}</span>
            </h4>
        </div>
        <div class="admin-brigade-table">
            <div class="admin-brigade-item">
                <h4>General</h4>
                <h4>{{ $metrics['brigade']['general_count'] }}</h4>
            </div>
            <div class="admin-brigade-item">
                <h4>Colonel</h4>
                <h4>{{ $metrics['brigade']['colonel_count'] }}</h4>
            </div>
            <div class="admin-brigade-item">
                <h4>Major</h4>
                <h4>{{ $metrics['brigade']['major_count'] }}</h4>
            </div>
            <div class="admin-brigade-item">
                <h4>Captain</h4>
                <h4>{{ $metrics['brigade']['captain_count'] }}</h4>
            </div>
            <div class="admin-brigade-item">
                <h4>Lieutenant</h4>
                <h4>{{ $metrics['brigade']['lieutenant_count'] }}</h4>
            </div>
            <div class="admin-brigade-item">
                <h4>Unactivated</h4>
                <h4>{{ $metrics['brigade']['unactivated_count'] }}</h4>
            </div>
        </div>
    </div>
</div>
<!-- admin window step -->
<section class="admin-window-box {{ $metrics['rank'] == 'Unactivated' ? 'active' : '' }}">
    <div class="admin-window-content">
        <div class="admin-window-text">
            <h2>Lieutenant Activation</h2>
            <p>Congratulation, you???ve enlisted and are a few simple tasks away from becoming a ranking Lieutenant. You can then begin building your brigade and climbing rank.</p>
        </div>
        <div class="admin-window-step">
            <a class="follow-step active" href="javascript:void(0)">1. Follow</a>
            <a class="join-step" href="javascript:void(0)">2. Join</a>
            <a class="tweet-step" href="javascript:void(0)">3. Tweet</a>
        </div>
        <div class="admin-step-one {{ $user->followe ? '' : 'active' }}">
            <form action="following" method="post">
                @csrf
                <div class="admin-step-first">
                    <svg width="45" height="44" viewBox="0 0 45 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_403_27)">
                            <path d="M44.3382 9.03044C42.6909 9.73923 40.9458 10.2071 39.159 10.419C41.0402 9.31397 42.4487 7.58106 43.1245 5.54027C41.381 6.53465 39.4487 7.25848 37.3917 7.66161C36.0345 6.24338 34.2362 5.30274 32.276 4.98575C30.3158 4.66877 28.3033 4.99319 26.551 5.90862C24.7988 6.82406 23.4049 8.27928 22.5858 10.0483C21.7666 11.8174 21.5681 13.8012 22.021 15.6919C14.5226 15.3461 7.88048 11.8254 3.43098 6.50777C2.62211 7.85119 2.2002 9.38344 2.20998 10.9421C2.20998 14.0059 3.80498 16.6988 6.22132 18.2808C4.78922 18.2363 3.38876 17.8579 2.13665 17.1771V17.2846C2.13584 19.3207 2.85581 21.2943 4.17441 22.8706C5.49301 24.447 7.32904 25.529 9.37098 25.933C8.04786 26.2795 6.66207 26.3315 5.31565 26.0853C5.89521 27.8376 7.02003 29.3693 8.53318 30.4668C10.0463 31.5643 11.8723 32.1728 13.7563 32.2074C10.5655 34.6548 6.62552 35.983 2.56932 35.9789C1.85432 35.9789 1.14115 35.9377 0.424316 35.8589C4.55978 38.4466 9.36826 39.8202 14.2788 39.8166C30.876 39.8166 39.9418 26.3863 39.9418 14.7602C39.9418 14.3839 39.9418 14.0077 39.9143 13.6314C41.6853 12.386 43.2129 10.8397 44.4243 9.06627L44.3382 9.03044Z" fill="#0EB0E3"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_403_27">
                                <rect width="44" height="43" fill="white" transform="translate(0.424316 0.842529)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <p>@depiarmy</p>
                    @if($user->following_at)
                        <button type="button">Followed</button>
                    @else
                        <button type="submit">Follow</button>
                    @endif
                </div>
            </form>
            <a id="step-next-one" class="window-next" href="javascript:void(0)">Next</a>
        </div>
        <div class="admin-step-two {{ ($user->following_at && !$user->tweet_at) ? 'active' : '' }}">
            <div class="admin-step-second">
                <svg width="32" height="34" viewBox="0 0 32 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_412_473)">
                        <path d="M26.5826 6.46117C24.5728 5.4791 22.4518 4.77879 20.2727 4.37777C20.2529 4.37384 20.2325 4.37666 20.2143 4.38582C20.1961 4.39497 20.181 4.41001 20.1713 4.42879C19.8988 4.94482 19.5969 5.61789 19.3856 6.14685C17.0029 5.76707 14.6323 5.76707 12.2985 6.14685C12.0872 5.60606 11.7743 4.94482 11.5006 4.42879C11.4905 4.41044 11.4754 4.39577 11.4573 4.38669C11.4392 4.37762 11.419 4.37456 11.3992 4.37791C9.2199 4.77799 7.09874 5.47824 5.08918 6.46104C5.07199 6.46886 5.0575 6.48216 5.04772 6.49912C1.02882 12.8907 -0.0721927 19.1251 0.467982 25.2822C0.46951 25.2973 0.473863 25.3118 0.480786 25.3251C0.487708 25.3383 0.497058 25.35 0.508282 25.3593C3.15982 27.4323 5.72829 28.6907 8.24911 29.5247C8.26871 29.531 8.28963 29.5307 8.30907 29.5239C8.32851 29.5171 8.34553 29.5042 8.35787 29.4868C8.9541 28.62 9.48562 27.7059 9.94145 26.7448C9.94772 26.7316 9.95129 26.7172 9.95195 26.7024C9.9526 26.6877 9.95031 26.673 9.94523 26.6593C9.94016 26.6455 9.93241 26.6331 9.9225 26.6228C9.91258 26.6125 9.90073 26.6045 9.88772 26.5994C9.04452 26.259 8.24175 25.8439 7.46946 25.3725C7.45538 25.3637 7.44355 25.3514 7.43502 25.3365C7.42648 25.3217 7.42151 25.3049 7.42054 25.2875C7.41957 25.2702 7.42263 25.2528 7.42945 25.237C7.43627 25.2212 7.44664 25.2074 7.45964 25.1969C7.62214 25.0673 7.78476 24.9325 7.93989 24.7963C7.95367 24.7842 7.97036 24.7764 7.98807 24.7738C8.00578 24.7713 8.02381 24.774 8.04012 24.7818C13.1135 27.2476 18.6059 27.2476 23.6194 24.7818C23.6358 24.7735 23.654 24.7704 23.6719 24.7727C23.6899 24.775 23.7068 24.7827 23.7208 24.7949C23.8761 24.931 24.0386 25.0673 24.2024 25.1969C24.2154 25.2073 24.2258 25.221 24.2327 25.2367C24.2396 25.2525 24.2428 25.2697 24.242 25.2871C24.2411 25.3044 24.2363 25.3212 24.2279 25.3361C24.2195 25.351 24.2078 25.3634 24.1938 25.3724C23.4213 25.8527 22.612 26.2627 21.7745 26.5981C21.7615 26.6033 21.7497 26.6115 21.7399 26.622C21.73 26.6325 21.7224 26.645 21.7174 26.6589C21.7125 26.6727 21.7103 26.6875 21.7111 26.7023C21.7119 26.7171 21.7156 26.7316 21.722 26.7448C22.1875 27.7045 22.719 28.6186 23.3043 29.4854C23.3162 29.5033 23.3332 29.5167 23.3527 29.5238C23.3722 29.5308 23.3933 29.5312 23.413 29.5247C25.946 28.6905 28.5145 27.4321 31.166 25.3593C31.1774 25.3504 31.1869 25.3391 31.1939 25.326C31.2009 25.3129 31.2051 25.2984 31.2064 25.2834C31.8528 18.165 30.1237 11.9818 26.6229 6.50036C26.6143 6.48255 26.6 6.4686 26.5826 6.46104V6.46117ZM10.699 21.5331C9.17162 21.5331 7.91302 20.0403 7.91302 18.207C7.91302 16.3738 9.14721 14.881 10.6991 14.881C12.2631 14.881 13.5094 16.3869 13.485 18.2071C13.485 20.0403 12.2508 21.5331 10.699 21.5331ZM20.9998 21.5331C19.4724 21.5331 18.2138 20.0403 18.2138 18.207C18.2138 16.3738 19.4479 14.881 20.9998 14.881C22.5637 14.881 23.8101 16.3869 23.7857 18.2071C23.7857 20.0403 22.5637 21.5331 20.9998 21.5331Z" fill="white"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_412_473">
                            <rect width="31" height="33" fill="white" transform="translate(0.339844 0.452698)"/>
                        </clipPath>
                    </defs>
                </svg>
                <p>Join Our Discord Server</p>
                <a href="/discord">Join Now</a>
            </div>
            <div class="admin-step-email">
                <div class="admin-mail-head">
                    <svg width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.4453 0.834106H3.23394C1.63816 0.834106 0.347027 2.13974 0.347027 3.73552L0.33252 21.144C0.33252 22.7398 1.63816 24.0455 3.23394 24.0455H26.4453C28.0411 24.0455 29.3467 22.7398 29.3467 21.144V3.73552C29.3467 2.13974 28.0411 0.834106 26.4453 0.834106ZM26.4453 6.63694L14.8396 13.8905L3.23394 6.63694V3.73552L14.8396 10.9891L26.4453 3.73552V6.63694Z" fill="white"/>
                    </svg>
                    <p>
                        Add Email <span>(optional)</span>
                    </p>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10.3272" cy="10.4984" r="9.9903" fill="#3A3A53"/>
                        <circle cx="10.3274" cy="6.93221" r="1.05976" transform="rotate(180 10.3274 6.93221)" fill="white"/>
                        <rect x="11.3872" y="15.1244" width="2.08681" height="6.20198" rx="1.0434" transform="rotate(180 11.3872 15.1244)" fill="white"/>
                    </svg>
                </div>
            </div>
            <div class="admin-email-box">
                <form action="">
                    <div class="admin-mail-control">
                        <input type="text" placeholder="Enter Email">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <a id="step-next-two" class="window-next" href="javascript:void(0)">Next</a>
        </div>
        <div class="admin-step-three">
            <img src="./img/tweet.png">
            <form action="tweet" method="post">
                @csrf
                <div class="admin-tweet-link">
                    <p>
                        <input type="text" value="Join My Brigade {{ $user->share_link }}">
                    </p>
                    <button>
                        <svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.568848" y="0.180298" width="30.0884" height="30.9626" rx="15.0442" fill="#0EB0E3"/>
                            <g clip-path="url(#clip0_0_1)">
                                <path d="M22.8578 11.2224C22.3337 11.4532 21.7784 11.6055 21.2099 11.6745C21.8085 11.3148 22.2567 10.7506 22.4717 10.0861C21.9169 10.4099 21.3021 10.6455 20.6476 10.7768C20.2158 10.315 19.6436 10.0088 19.0199 9.90557C18.3962 9.80237 17.7558 9.90799 17.1983 10.206C16.6408 10.5041 16.1973 10.9779 15.9366 11.5538C15.676 12.1298 15.6128 12.7757 15.7569 13.3913C13.3711 13.2787 11.2577 12.1324 9.84192 10.4011C9.58455 10.8385 9.45031 11.3374 9.45342 11.8449C9.45342 12.8424 9.96092 13.7191 10.7298 14.2342C10.2741 14.2197 9.82849 14.0965 9.43009 13.8749V13.9099C9.42983 14.5728 9.65891 15.2153 10.0785 15.7286C10.498 16.2418 11.0822 16.5941 11.7319 16.7256C11.3109 16.8384 10.87 16.8554 10.4416 16.7752C10.626 17.3457 10.9839 17.8444 11.4653 18.2017C11.9468 18.5591 12.5278 18.7572 13.1273 18.7684C12.112 19.5652 10.8584 19.9977 9.56775 19.9964C9.34025 19.9964 9.11334 19.9829 8.88525 19.9573C10.2011 20.7998 11.7311 21.247 13.2935 21.2459C18.5744 21.2459 21.459 16.8732 21.459 13.0879C21.459 12.9654 21.459 12.8429 21.4503 12.7204C22.0138 12.3149 22.4998 11.8115 22.8853 11.2341L22.8578 11.2224Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_0_1">
                                    <rect width="14" height="14" fill="white" transform="translate(8.88525 8.55664)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </form>
            <div class="admin-twees-bottom">
                <div class="admin-check">
                    <label>
                        <input type="checkbox">
                        <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7L5 9.5L12 1" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </label>
                    <p>I have completed all the tasks to earn my rank as a Lietenant</p>
                </div>
                <a id="step-next-three" class="window-next" href="javascript:void(0)">Complete</a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script>
        $(function () {
            $(".copy-btn").on("click", function () {
                var input = $(".admin-input input")[0];
                input.select();
                input.setSelectionRange(0, 99999);
                navigator.clipboard.writeText(input.value);
                alert("Copied");
            });

            $("#step-next-one").on("click", function () {
                $(".admin-step-one").removeClass("active");
                $(".follow-step").removeClass("active");
                $(".admin-step-two").addClass("active");
                $(".join-step").addClass("active");
            });

            $("#step-next-two").on("click", function () {
                $(".admin-step-one").removeClass("active");
                $(".follow-step").removeClass("active");
                $(".admin-step-two").removeClass("active");
                $(".join-step").removeClass("active");
                $(".admin-step-three").addClass("active");
                $(".tweet-step").addClass("active");
            });

            $("#step-next-three").on("click", function () {
                $(".admin-window-box").removeClass("active");
            });
        });

        const circle = document.querySelectorAll(".admin-timeline-circle");
        if (circle) {
            const stepAttr = document.querySelector(".timeline-bar");
            if (stepAttr) {
                const step = stepAttr.getAttribute("data-step");
                circle.forEach((item, index) => {
                    if (index >= parseInt(step)) {
                        item.style.backgroundColor = "none";
                    } else {
                        item.style.background =
                            "linear-gradient(278.88deg, #00DEFC -103.16%, #BAFFD1 72.76%)";
                    }
                });
            }
        }

    </script>
@endpush
