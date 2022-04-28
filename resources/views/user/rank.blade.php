@extends('layouts.user')

@section('content')
    <!-- admin content -->
    <div class="admin-content">
        <div class="admin-base-logo">
            <img src="img/{{ $metrics['rank'] }}.svg" alt="">
            <div>
                <h2>{{ $metrics['rank'] }}</h2>
            </div>
        </div>
        <div class="admin-timeline">
            <h2>Timeline Achievements</h2>
            <div class="admin-timeline-bar">
                <span></span>
            </div>
        </div>
        <div class="admin-timeline-small">
            <div class="admin-timeline-area">
                <div class="admin-timeline-item">
                    <img src={{"img/lieutenant_sm_" . (!!$user->stat ? $user->stat->lieutenant_at : 0 ) . ".svg"}} alt="">
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat ? $user->stat->lieutenant_at : 0)
                            {{ explode("-", $user->stat->lieutenant_at)[1] }}.{{ explode("-", $user->stat->lieutenant_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-item">
                    <img src={{"img/captain_sm_" . (!!$user->stat ? $user->stat->captain_at : 0) . ".svg"}} alt="">
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat ? $user->stat->captain_at : 0)
                            {{ explode("-", $user->stat->captain_at)[1] }}.{{ explode("-", $user->stat->captain_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-item">
                    <img src={{"img/major_sm_" . (!!$user->stat ? $user->stat->major_at : 0) . ".svg"}} alt="">
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat ? $user->stat->major_at : 0)
                            {{ explode("-", $user->stat->major_at)[1] }}.{{ explode("-", $user->stat->major_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-item">
                    <img src={{"img/colonel_sm_" . (!!$user->stat ? $user->stat->colonel_at : 0) . ".svg"}} alt="">
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat ? $user->stat->colonel_at : 0)
                            {{ explode("-", $user->stat->colonel_at)[1] }}.{{ explode("-", $user->stat->colonel_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-item">
                    <img src={{"img/general_sm_" . (!!$user->stat ? $user->stat->general_at : 0) . ".svg"}} alt="">
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat ? $user->stat->general_at : 0)
                            {{ explode("-", $user->stat->general_at)[1] }}.{{ explode("-", $user->stat->general_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-line">
                    <div class="timeline-bar" data-step="{{ array_search($metrics['rank'], ['Lieutenant', 'Captain', 'Major', 'Colonel', 'General']) + 1 }}"></div>
                </div>
            </div>
        </div>
        <div class="admin-ranking-table">
            <div class="ranking-left">
                <h2>Rankings</h2>
                <svg width="37" height="4" viewBox="0 0 37 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="2.49756" y1="1.75269" x2="34.6434" y2="1.75269" stroke="url(#paint0_linear_407_67)" stroke-width="3" stroke-linecap="round"/>
                    <defs>
                        <linearGradient id="paint0_linear_407_67" x1="39.2612" y1="3.73544" x2="31.8197" y2="18.7843" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#00DEFC"/>
                            <stop offset="1" stop-color="#BADAFF"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="ranking-right">
                <div class="ranking-task">
                    <h4>Lieutenant</h4>
                    <h4>initial tasks</h4>
                </div>
                <div class="ranking-task">
                    <h4>Captain</h4>
                    <h4>500</h4>
                </div>
                <div class="ranking-task">
                    <h4>Major</h4>
                    <h4>1000</h4>
                </div>
                <div class="ranking-task">
                    <h4>Colonel</h4>
                    <h4>2500</h4>
                </div>
                <div class="ranking-task">
                    <h4>General</h4>
                    <h4>5000</h4>
                </div>
            </div>
        </div>
        <div class="admin-benefit">
            <div class="admin-benefit-head">
                <h2>Benefits of a Higher Rank</h2>
                <img src="img/four-dot.png" alt="">
            </div>
            <div class="admin-benefit-card-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="admin-benefit-card">
                            <h4>Pointers sentence</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="admin-benefit-card">
                            <h4>Pointers sentence</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="admin-benefit-card">
                            <h4>Pointers sentence</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const circle = document.querySelectorAll(".admin-timeline-circle");

        var barWidth = $(".timeline-bar").attr("data-step");
        if (barWidth <= 4) {
            var perStep = barWidth * 12;
            $(".timeline-bar").css({
                width: `${perStep}%`,
            });
        } else {
            $(".timeline-bar").css({
                width: `${100}%`,
            });
        }

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
