@extends('layouts.user')

@section('content')

<section class="admin-window-box active" id="vapp">
    <div class="admin-window-content">
        <div class="admin-window-text">
            <h2>Lieutenant Activation</h2>
            <p>Congratulation, you’ve enlisted and are a few simple tasks away from becoming a ranking Lieutenant. You can then begin building your brigade and climbing rank.</p>
        </div>
        <div class="admin-window-step">
            <a class="follow-step" :class="{ active: step==1 }" href="javascript:void(0)">1. Follow</a>
            <a class="join-step" :class="{ active: step==2 }" href="javascript:void(0)">2. Join</a>
            <a class="tweet-step" :class="{ active: step==3 }" href="javascript:void(0)">3. Tweet</a>
        </div>
        <div v-if="step==1">
            <form action="following" method="post" @submit.prevent="followDepi">
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
                    <template v-if="user.following_at">
                        <button type="button">Followed</button>
                    </template>
                    <template v-else>
                        <button type="submit">Follow</button>
                    </template>
                </div>
                <div class="ui-mobile-model">
                    <div class="ui-mobile-twitter">
                        <svg width="59" height="47" viewBox="0 0 59 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M58.2199 5.7004C56.0384 6.63906 53.7273 7.25866 51.3611 7.53925C53.8524 6.07588 55.7177 3.78098 56.6126 1.07835C54.3037 2.3952 51.7447 3.35378 49.0206 3.88764C47.2233 2.00947 44.8418 0.763774 42.2459 0.343993C39.6499 -0.075788 36.9848 0.353837 34.6643 1.56615C32.3438 2.77847 30.4978 4.70564 29.413 7.0484C28.3282 9.39115 28.0653 12.0184 28.6651 14.5222C18.735 14.0642 9.93871 9.40184 4.0462 2.35961C2.975 4.13871 2.41627 6.16789 2.42922 8.23209C2.42922 12.2894 4.5415 15.8556 7.74146 17.9507C5.84493 17.8917 3.99029 17.3906 2.33211 16.4891V16.6315C2.33103 19.3278 3.2845 21.9415 5.03073 24.0291C6.77697 26.1166 9.20843 27.5495 11.9126 28.0846C10.1604 28.5435 8.32516 28.6124 6.54208 28.2863C7.30959 30.6068 8.79921 32.6353 10.8031 34.0888C12.8069 35.5422 15.2251 36.348 17.7201 36.3939C13.4944 39.6349 8.27676 41.3939 2.90509 41.3884C1.95821 41.3884 1.01376 41.3339 0.0644531 41.2295C5.54108 44.6564 11.909 46.4756 18.4121 46.4708C40.3918 46.4708 52.3978 28.6849 52.3978 13.2884C52.3978 12.7901 52.3978 12.2918 52.3614 11.7935C54.7067 10.1442 56.7297 8.09641 58.334 5.74785L58.2199 5.7004Z" fill="white"></path>
                        </svg>
                        <div>
                            <p>@depiarmy</p>

                            <template v-if="user.following_at">
                                <button type="button" class="rounded-full border border-white text-white px-4">Followed</button>
                            </template>
                            <template v-else>
                                <button type="submit" class="rounded-full border border-white text-white px-4">Follow</button>
                            </template>
                        </div>
                    </div>
                </div>
            </form>
            <template v-if="user.following_at">
                <a class="window-next" @click.prevent="step++">Next</a>
            </template>
        </div>
        <div v-else-if="step==2">
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
                <template v-if="user.join_at">
                    <a href="#">Joined</a>
                </template>
                <template v-else>
                    <a href="/discord">Join Now</a>
                </template>
            </div>
            <div class="ui-mobile-model">
                <div class="ui-mobile-discord">
                    <svg width="63" height="51" viewBox="0 0 63 51" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M52.9906 4.18421C48.9579 2.21366 44.702 0.80847 40.3296 0.00383422C40.2899 -0.00405373 40.2489 0.00159278 40.2123 0.0199697C40.1758 0.0383467 40.1457 0.0685183 40.1262 0.106192C39.5793 1.14163 38.9736 2.49214 38.5496 3.55351C33.7686 2.79149 29.012 2.79149 24.3292 3.55351C23.9052 2.46841 23.2775 1.14163 22.7283 0.106192C22.7079 0.0693767 22.6776 0.0399434 22.6413 0.0217333C22.605 0.00352315 22.5644 -0.00261791 22.5248 0.00411049C18.152 0.806876 13.8958 2.21195 9.8636 4.18394C9.82911 4.19963 9.80004 4.22633 9.78041 4.26036C1.71643 17.0851 -0.492774 29.5945 0.591096 41.9489C0.594161 41.9791 0.602897 42.0084 0.616787 42.035C0.630677 42.0616 0.649438 42.0849 0.671959 42.1036C5.9923 46.263 11.146 48.788 16.2041 50.4616C16.2434 50.4741 16.2854 50.4735 16.3244 50.4599C16.3634 50.4463 16.3975 50.4203 16.4223 50.3855C17.6186 48.6462 18.6851 46.8121 19.5998 44.8836C19.6123 44.8572 19.6195 44.8282 19.6208 44.7986C19.6221 44.7691 19.6175 44.7395 19.6074 44.712C19.5972 44.6844 19.5816 44.6595 19.5617 44.6388C19.5418 44.6181 19.5181 44.6022 19.492 44.592C17.8001 43.9088 16.1893 43.0759 14.6397 42.1301C14.6114 42.1125 14.5877 42.0877 14.5706 42.0579C14.5534 42.0282 14.5435 41.9944 14.5415 41.9596C14.5396 41.9247 14.5457 41.8899 14.5594 41.8582C14.5731 41.8265 14.5939 41.7989 14.62 41.7778C14.946 41.5176 15.2723 41.2473 15.5836 40.9738C15.6113 40.9496 15.6447 40.934 15.6803 40.9289C15.7158 40.9237 15.752 40.9293 15.7847 40.9449C25.9646 45.8925 36.9852 45.8925 47.0448 40.9449C47.0776 40.9283 47.1141 40.9219 47.1501 40.9266C47.1862 40.9312 47.2202 40.9467 47.2483 40.9711C47.5598 41.2442 47.8859 41.5176 48.2145 41.7778C48.2407 41.7987 48.2616 41.8261 48.2755 41.8577C48.2893 41.8892 48.2957 41.9239 48.294 41.9587C48.2923 41.9935 48.2826 42.0272 48.2658 42.0571C48.2489 42.0869 48.2254 42.1119 48.1974 42.1298C46.6472 43.0937 45.0233 43.9164 43.3431 44.5892C43.317 44.5998 43.2933 44.6162 43.2735 44.6372C43.2538 44.6582 43.2384 44.6835 43.2285 44.7113C43.2185 44.7391 43.2142 44.7688 43.2157 44.7985C43.2173 44.8281 43.2247 44.8571 43.2376 44.8836C44.1716 46.8093 45.2381 48.6435 46.4125 50.3827C46.4364 50.4186 46.4704 50.4455 46.5096 50.4597C46.5488 50.4739 46.5911 50.4745 46.6307 50.4616C51.7131 48.7878 56.8668 46.2628 62.1871 42.1036C62.2101 42.0858 62.2291 42.0631 62.2431 42.0368C62.2571 42.0105 62.2657 41.9814 62.2683 41.9513C63.5652 27.6682 60.0959 15.2614 53.0714 4.26284C53.0542 4.22711 53.0255 4.19912 52.9906 4.18394V4.18421ZM21.1198 34.4263C18.0551 34.4263 15.5297 31.4309 15.5297 27.7524C15.5297 24.0741 18.0061 21.0787 21.1201 21.0787C24.2582 21.0787 26.759 24.1003 26.71 27.7526C26.71 31.4309 24.2336 34.4263 21.1198 34.4263V34.4263ZM41.7885 34.4263C38.7238 34.4263 36.1984 31.4309 36.1984 27.7524C36.1984 24.0741 38.6745 21.0787 41.7885 21.0787C44.9266 21.0787 47.4274 24.1003 47.3784 27.7526C47.3784 31.4309 44.9266 34.4263 41.7885 34.4263V34.4263Z" fill="white"></path></svg>
                    <div>
                        <p>Join Our Discord Server</p>
                        <a href="/discord">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="ui-join-step">
                <div class="admin-step-email">
                    <div class="admin-mail-head">
                        <svg width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.4453 0.834106H3.23394C1.63816 0.834106 0.347027 2.13974 0.347027 3.73552L0.33252 21.144C0.33252 22.7398 1.63816 24.0455 3.23394 24.0455H26.4453C28.0411 24.0455 29.3467 22.7398 29.3467 21.144V3.73552C29.3467 2.13974 28.0411 0.834106 26.4453 0.834106ZM26.4453 6.63694L14.8396 13.8905L3.23394 6.63694V3.73552L14.8396 10.9891L26.4453 3.73552V6.63694Z" fill="white"/>
                        </svg>
                        <template v-if="user.email">
                            <p>@{{ user.email }}</p>
                        </template>
                        <template v-else>
                            <p>
                                Add Email <span>(optional)</span>
                            </p>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10.3272" cy="10.4984" r="9.9903" fill="#3A3A53"/>
                                <circle cx="10.3274" cy="6.93221" r="1.05976" transform="rotate(180 10.3274 6.93221)" fill="white"/>
                                <rect x="11.3872" y="15.1244" width="2.08681" height="6.20198" rx="1.0434" transform="rotate(180 11.3872 15.1244)" fill="white"/>
                            </svg>
                        </template>
                    </div>
                </div>
                <div class="admin-email-box">
                    <template v-if="!user.email">
                        <form action="addEmail" method="post" @submit.prevent="addEmail">
                            @csrf
                            <div class="admin-mail-control">
                                <input type="text" type="email" placeholder="Enter Email" v-model="email" required>
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </template>
                </div>
            </div>
            <template v-if="user.join_at">
                <a class="window-next" @click.prevent="step++">Next</a>
            </template>
        </div>
        <div v-else-if="step==3" class="admin-step-three active">
            <img src="/img/tweet.png">
            <template v-if="user.tweet">
                <div >
                    <h1 class="text-white">Tweet Posted Successfully</h1>
                    <a class="text-white" :href="'https://twitter.com/' + user.username + '/status/' + user.tweet" target="_blank">@{{ 'https://twitter.com/' + user.username + '/status/' + user.tweet }}</a>
                </div>
            </template>
            <template v-else>
                <form action="tweet" method="post" @submit.prevent="tweet">
                    @csrf
                    <div class="admin-tweet-link">
                        <p style="flex: 1;">
                            <input type="text" name="text" v-model="tweet_text" style="width: 90%;">
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
            </template>

            <div v-if="user.tweet" class="admin-twees-bottom">
                <div class="admin-check">
                    <label>
                        <input type="checkbox" checked>
                        <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7L5 9.5L12 1" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </label>
                    <p>I have completed all the tasks to earn my rank as a Lietenant</p>
                </div>
                <a id="step-next-three" class="window-next" href="/home">Complete</a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script src="/js/vue@2.6.14.js"></script>
    <script>
        var app = new Vue({
            el: '#vapp',
            data(){
                return {
                    user: @json($user),
                    step: {{ session()->get('step') ?? 1 }},
                    email: '',
                    tweet_text: "Join My Brigade {{ $user->share_link }}"
                }
            },
            methods: {
                followDepi(){
                    fetch('/following', {
                        method: 'POST',
                    })
                    .then(res => res.json())
                    .then(data => {
                        if(data.success){
                            this.$set(this.user, 'following_at', data.following_at)
                        }
                    })
                },
                addEmail(){
                    fetch('/addEmail', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ email: this.email })
                    })
                        .then(res => res.json())
                        .then(data => {
                            if(data.success){
                                this.$set(this.user, 'email', data.email)
                            }
                        })
                },
                tweet(){
                    fetch('/tweet', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ text: this.tweet_text })
                    })
                        .then(res => res.json())
                        .then(data => {
                            if(data.success){
                                this.$set(this.user, 'tweet', data.tweet)
                            }else{
                                alert('Failed');
                            }
                        })
                },
            }
        })
    </script>
@endpush
