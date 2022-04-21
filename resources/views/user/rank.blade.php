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
                    <svg width="42" height="61" viewBox="0 0 42 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0671 43.3327C40.9314 42.4448 41.4185 41.2406 41.4218 39.9837V5.14422C41.4218 3.88378 40.9353 2.67497 40.0695 1.7837C39.2036 0.892437 38.0292 0.391724 36.8047 0.391724H5.30163C4.07711 0.391724 2.90275 0.892437 2.03688 1.7837C1.17101 2.67497 0.68457 3.88378 0.68457 5.14422V39.9959C0.68784 41.2527 1.17497 42.457 2.03923 43.3448L17.7863 59.5234C18.6524 60.4124 19.8256 60.9117 21.0487 60.9117C22.2719 60.9117 23.4451 60.4124 24.3111 59.5234L40.0671 43.3327ZM21.0487 55.7973L27.7031 48.9593L36.485 39.935V5.32849H5.62134V39.9472L14.4024 48.9707L21.0487 55.7973Z" fill="#BAFFD1"/>
                    </svg>
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat->lieutenant_at)
                            {{ explode("-", $user->stat->lieutenant_at)[1] }}.{{ explode("-", $user->stat->lieutenant_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-item">
                    <svg width="42" height="61" viewBox="0 0 42 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.9471 13.0121L24.535 18.1774C24.5952 18.299 24.6846 18.4042 24.7955 18.4838C24.9064 18.5635 25.0354 18.6152 25.1712 18.6344L30.9537 19.4608C31.1096 19.4834 31.2561 19.5485 31.3766 19.6487C31.497 19.749 31.5867 19.8804 31.6354 20.0282C31.6842 20.1759 31.6901 20.3342 31.6525 20.4851C31.615 20.636 31.5354 20.7736 31.4227 20.8823L27.2389 24.913C27.1406 25.0068 27.067 25.123 27.0247 25.2513C26.9825 25.3796 26.9727 25.5161 26.9963 25.649L27.9829 31.3271C28.0094 31.4803 27.9919 31.6378 27.9325 31.7817C27.873 31.9257 27.7739 32.0504 27.6464 32.1418C27.5189 32.2333 27.368 32.2878 27.2107 32.2992C27.0535 32.3106 26.8961 32.2786 26.7563 32.2066L21.5831 29.5256C21.4617 29.4628 21.3267 29.4299 21.1895 29.4299C21.0524 29.4299 20.9174 29.4628 20.796 29.5256L15.6228 32.2066C15.483 32.2786 15.3256 32.3106 15.1684 32.2992C15.0111 32.2878 14.8602 32.2333 14.7327 32.1418C14.6052 32.0504 14.5061 31.9257 14.4466 31.7817C14.3872 31.6378 14.3697 31.4803 14.3962 31.3271L15.3828 25.649C15.4064 25.5161 15.3966 25.3796 15.3543 25.2513C15.3121 25.123 15.2385 25.0068 15.1402 24.913L10.9564 20.8902C10.8437 20.7815 10.7641 20.644 10.7266 20.4931C10.689 20.3421 10.6949 20.1839 10.7437 20.0361C10.7924 19.8884 10.8821 19.7569 11.0025 19.6567C11.123 19.5565 11.2695 19.4914 11.4254 19.4687L17.2079 18.6424C17.3437 18.6232 17.4727 18.5715 17.5836 18.4918C17.6945 18.4121 17.7839 18.3069 17.8441 18.1854L20.432 13.0201C20.5008 12.8801 20.608 12.762 20.7414 12.679C20.8749 12.596 21.0293 12.5516 21.187 12.5508C21.3448 12.55 21.4997 12.5928 21.634 12.6743C21.7684 12.7559 21.8768 12.8729 21.9471 13.0121Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40.1999 43.1016C41.0642 42.2137 41.5513 41.0095 41.5546 39.7526V4.91314C41.5546 3.6527 41.0681 2.44389 40.2023 1.55262C39.3364 0.661358 38.162 0.160645 36.9375 0.160645H5.43445C4.20993 0.160645 3.03556 0.661358 2.16969 1.55262C1.30383 2.44389 0.817383 3.6527 0.817383 4.91314V39.7648C0.820653 41.0216 1.30778 42.2259 2.17204 43.1138L17.9191 59.2923C18.7852 60.1814 19.9584 60.6806 21.1815 60.6806C22.4047 60.6806 23.5779 60.1814 24.444 59.2923L40.1999 43.1016ZM21.1815 55.5662L27.836 48.7282L36.6178 39.7039V5.09741H5.75415V39.7161L14.5352 48.7396L21.1815 55.5662Z" fill="#BAFFD1"/>
                    </svg>
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat->captain_at)
                            {{ explode("-", $user->stat->captain_at)[1] }}.{{ explode("-", $user->stat->captain_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-item">
                    <svg width="41" height="83" viewBox="0 0 41 83" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.1292 22.4124L23.7171 27.5777C23.7773 27.6992 23.8667 27.8044 23.9776 27.8841C24.0885 27.9637 24.2175 28.0155 24.3533 28.0347L30.1358 28.861C30.2918 28.8837 30.4382 28.9488 30.5587 29.049C30.6791 29.1492 30.7688 29.2807 30.8176 29.4284C30.8663 29.5762 30.8723 29.7344 30.8347 29.8854C30.7971 30.0363 30.7175 30.1738 30.6048 30.2825L26.421 34.3133C26.3227 34.4071 26.2492 34.5232 26.2069 34.6515C26.1646 34.7798 26.1548 34.9164 26.1784 35.0493L27.165 40.7273C27.1915 40.8806 27.174 41.038 27.1146 41.182C27.0551 41.3259 26.9561 41.4507 26.8285 41.5421C26.701 41.6335 26.5501 41.688 26.3929 41.6995C26.2356 41.7109 26.0782 41.6788 25.9384 41.6068L20.7652 38.9259C20.6439 38.863 20.5088 38.8302 20.3717 38.8302C20.2346 38.8302 20.0995 38.863 19.9781 38.9259L14.8049 41.6068C14.6651 41.6788 14.5077 41.7109 14.3505 41.6995C14.1932 41.688 14.0423 41.6335 13.9148 41.5421C13.7873 41.4507 13.6882 41.3259 13.6288 41.182C13.5693 41.038 13.5518 40.8806 13.5783 40.7273L14.565 35.0493C14.5885 34.9164 14.5788 34.7798 14.5365 34.6515C14.4942 34.5232 14.4207 34.4071 14.3223 34.3133L10.1385 30.2905C10.0259 30.1818 9.94627 30.0442 9.90868 29.8933C9.8711 29.7424 9.87702 29.5842 9.92578 29.4364C9.97454 29.2886 10.0642 29.1572 10.1847 29.057C10.3051 28.9567 10.4516 28.8916 10.6076 28.869L16.39 28.0427C16.5258 28.0234 16.6548 27.9717 16.7657 27.8921C16.8766 27.8124 16.966 27.7072 17.0262 27.5857L19.6142 22.4204C19.6829 22.2804 19.7901 22.1622 19.9235 22.0793C20.057 21.9963 20.2114 21.9519 20.3692 21.9511C20.5269 21.9502 20.6818 21.993 20.8161 22.0746C20.9505 22.1561 21.0589 22.2732 21.1292 22.4124Z" fill="#3A3A53"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9783 0C11.615 0 10.5099 1.10513 10.5099 2.46838C10.5099 3.83163 11.615 4.93677 12.9783 4.93677H25.9658C27.3291 4.93677 28.4342 3.83163 28.4342 2.46838C28.4342 1.10513 27.3291 0 25.9658 0H12.9783ZM1.35466 52.5142L17.1018 68.6928C17.9678 69.5818 19.141 70.0811 20.3642 70.0811C21.5873 70.0811 22.7605 69.5818 23.6266 68.6928L39.3825 52.502C40.2468 51.6142 40.7339 50.4099 40.7372 49.1531V14.3136C40.7372 13.0531 40.2508 11.8443 39.3849 10.953C38.519 10.0618 37.3447 9.56107 36.1201 9.56107H4.61706C3.39254 9.56107 2.21818 10.0618 1.35231 10.953C0.486444 11.8443 0 13.0531 0 14.3136V49.1652C0.00326993 50.4221 0.490401 51.6263 1.35466 52.5142ZM35.8004 49.1044L27.0186 58.1286L20.3641 64.9666L13.7186 58.1409L4.93677 49.1165V14.4978H35.8004V49.1044ZM2.27114 64.3158C3.2351 63.3518 4.79799 63.3518 5.76196 64.3158L18.6278 77.1816C19.5917 78.1456 21.1546 78.1456 22.1186 77.1816L34.9844 64.3158C35.9484 63.3518 37.5113 63.3518 38.4752 64.3158C39.4392 65.2797 39.4392 66.8426 38.4752 67.8066L25.6094 80.6724C22.7175 83.5643 18.0289 83.5643 15.137 80.6724L2.27114 67.8066C1.30717 66.8426 1.30717 65.2797 2.27114 64.3158Z" fill="#3A3A53"/>
                    </svg>
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat->major_at)
                            {{ explode("-", $user->stat->major_at)[1] }}.{{ explode("-", $user->stat->major_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-item">
                    <svg width="67" height="83" viewBox="0 0 67 83" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_604_7)">
                            <path d="M34.7054 22.4122L37.2933 27.5774C37.3535 27.699 37.4429 27.8042 37.5538 27.8838C37.6647 27.9635 37.7937 28.0152 37.9295 28.0345L43.712 28.8608C43.8679 28.8834 44.0144 28.9485 44.1349 29.0488C44.2553 29.149 44.345 29.2804 44.3937 29.4282C44.4425 29.5759 44.4484 29.7342 44.4108 29.8851C44.3733 30.036 44.2937 30.1736 44.181 30.2823L39.9972 34.313C39.8989 34.4069 39.8253 34.523 39.783 34.6513C39.7408 34.7796 39.731 34.9161 39.7545 35.049L40.7412 40.7271C40.7677 40.8803 40.7502 41.0378 40.6908 41.1817C40.6313 41.3257 40.5322 41.4504 40.4047 41.5419C40.2772 41.6333 40.1263 41.6878 39.969 41.6992C39.8118 41.7107 39.6544 41.6786 39.5146 41.6066L34.3414 38.9256C34.22 38.8628 34.085 38.83 33.9478 38.83C33.8107 38.83 33.6757 38.8628 33.5543 38.9256L28.3811 41.6066C28.2413 41.6786 28.0839 41.7107 27.9267 41.6992C27.7694 41.6878 27.6185 41.6333 27.491 41.5419C27.3635 41.4504 27.2644 41.3257 27.2049 41.1817C27.1455 41.0378 27.128 40.8803 27.1545 40.7271L28.1411 35.049C28.1647 34.9161 28.1549 34.7796 28.1126 34.6513C28.0704 34.523 27.9968 34.4069 27.8985 34.313L23.7147 30.2903C23.602 30.1816 23.5224 30.044 23.4849 29.8931C23.4473 29.7422 23.4532 29.5839 23.502 29.4362C23.5507 29.2884 23.6404 29.157 23.7608 29.0567C23.8813 28.9565 24.0278 28.8914 24.1837 28.8688L29.9662 28.0424C30.102 28.0232 30.231 27.9715 30.3419 27.8918C30.4528 27.8122 30.5422 27.707 30.6024 27.5854L33.1903 22.4201C33.2591 22.2802 33.3663 22.162 33.4997 22.079C33.6332 21.9961 33.7876 21.9516 33.9453 21.9508C34.1031 21.95 34.258 21.9928 34.3923 22.0743C34.5267 22.1559 34.6351 22.2729 34.7054 22.4122Z" fill="#3A3A53"/>
                        </g>
                        <g clip-path="url(#clip1_604_7)">
                            <path d="M62.6381 27.71L63.7037 29.9698C63.7285 30.023 63.7653 30.069 63.811 30.1039C63.8566 30.1387 63.9097 30.1614 63.9657 30.1698L66.3467 30.5313C66.4109 30.5412 66.4712 30.5697 66.5208 30.6135C66.5704 30.6574 66.6073 30.7149 66.6274 30.7795C66.6475 30.8442 66.6499 30.9134 66.6344 30.9794C66.619 31.0455 66.5862 31.1056 66.5398 31.1532L64.8171 32.9166C64.7766 32.9577 64.7463 33.0085 64.7289 33.0646C64.7115 33.1208 64.7074 33.1805 64.7171 33.2386L65.1234 35.7228C65.1343 35.7898 65.1271 35.8587 65.1026 35.9217C65.0782 35.9847 65.0374 36.0393 64.9849 36.0793C64.9324 36.1193 64.8702 36.1431 64.8055 36.1481C64.7407 36.1531 64.6759 36.1391 64.6184 36.1076L62.4882 34.9347C62.4382 34.9072 62.3826 34.8928 62.3262 34.8928C62.2697 34.8928 62.2141 34.9072 62.1641 34.9347L60.0339 36.1076C59.9764 36.1391 59.9116 36.1531 59.8468 36.1481C59.7821 36.1431 59.7199 36.1193 59.6674 36.0793C59.6149 36.0393 59.5741 35.9847 59.5497 35.9217C59.5252 35.8587 59.518 35.7898 59.5289 35.7228L59.9352 33.2386C59.9449 33.1805 59.9408 33.1208 59.9234 33.0646C59.906 33.0085 59.8757 32.9577 59.8353 32.9166L58.1125 31.1567C58.0661 31.1091 58.0333 31.0489 58.0179 30.9829C58.0024 30.9169 58.0048 30.8477 58.0249 30.783C58.045 30.7184 58.0819 30.6609 58.1315 30.617C58.1811 30.5732 58.2414 30.5447 58.3056 30.5348L60.6866 30.1733C60.7426 30.1648 60.7957 30.1422 60.8413 30.1074C60.887 30.0725 60.9238 30.0265 60.9486 29.9733L62.0142 27.7135C62.0425 27.6523 62.0867 27.6006 62.1416 27.5643C62.1966 27.528 62.2601 27.5085 62.3251 27.5082C62.3901 27.5078 62.4538 27.5265 62.5092 27.5622C62.5645 27.5979 62.6091 27.6491 62.6381 27.71Z" fill="#3A3A53"/>
                        </g>
                        <g clip-path="url(#clip2_604_7)">
                            <path d="M4.63123 27.71L5.69686 29.9698C5.72164 30.023 5.75847 30.069 5.80413 30.1039C5.84979 30.1387 5.90289 30.1614 5.95882 30.1698L8.33983 30.5313C8.40406 30.5412 8.46437 30.5697 8.51397 30.6135C8.56357 30.6574 8.60049 30.7149 8.62057 30.7795C8.64065 30.8442 8.64308 30.9134 8.62761 30.9794C8.61213 31.0455 8.57936 31.1056 8.53297 31.1532L6.81022 32.9166C6.76973 32.9577 6.73946 33.0085 6.72205 33.0646C6.70463 33.1208 6.7006 33.1805 6.71031 33.2386L7.11659 35.7228C7.12749 35.7898 7.12029 35.8587 7.09581 35.9217C7.07133 35.9847 7.03054 36.0393 6.97803 36.0793C6.92552 36.1193 6.86338 36.1431 6.79863 36.1481C6.73387 36.1531 6.66906 36.1391 6.61152 36.1076L4.48138 34.9347C4.43139 34.9072 4.37578 34.8928 4.31932 34.8928C4.26286 34.8928 4.20724 34.9072 4.15725 34.9347L2.02711 36.1076C1.96956 36.1391 1.90476 36.1531 1.84 36.1481C1.77525 36.1431 1.71311 36.1193 1.66061 36.0793C1.6081 36.0393 1.5673 35.9847 1.54282 35.9217C1.51834 35.8587 1.51115 35.7898 1.52205 35.7228L1.92832 33.2386C1.93803 33.1805 1.934 33.1208 1.91659 33.0646C1.89917 33.0085 1.8689 32.9577 1.82842 32.9166L0.105654 31.1567C0.0592727 31.1091 0.0265018 31.0489 0.0110262 30.9829C-0.00444942 30.9169 -0.00201239 30.8477 0.0180655 30.783C0.0381433 30.7184 0.0750636 30.6609 0.124664 30.617C0.174265 30.5732 0.234572 30.5447 0.298797 30.5348L2.67981 30.1733C2.73573 30.1648 2.78885 30.1422 2.83451 30.1074C2.88017 30.0725 2.91699 30.0265 2.94177 29.9733L4.0074 27.7135C4.0357 27.6523 4.07984 27.6006 4.13479 27.5643C4.18974 27.528 4.25331 27.5085 4.31828 27.5082C4.38325 27.5078 4.44701 27.5265 4.50233 27.5622C4.55765 27.5979 4.60231 27.6491 4.63123 27.71Z" fill="#3A3A53"/>
                        </g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.554 0C25.1907 0 24.0856 1.10513 24.0856 2.46838C24.0856 3.83163 25.1907 4.93677 26.554 4.93677H39.5415C40.9048 4.93677 42.0099 3.83163 42.0099 2.46838C42.0099 1.10513 40.9048 0 39.5415 0H26.554ZM14.9303 52.5142L30.6774 68.6928C31.5435 69.5818 32.7167 70.0811 33.9398 70.0811C35.163 70.0811 36.3362 69.5818 37.2023 68.6928L52.9582 52.502C53.8225 51.6142 54.3096 50.4099 54.3129 49.1531V14.3136C54.3129 13.0531 53.8264 11.8443 52.9606 10.953C52.0947 10.0618 50.9203 9.56107 49.6958 9.56107H18.1927C16.9682 9.56107 15.7939 10.0618 14.928 10.953C14.0621 11.8443 13.5757 13.0531 13.5757 14.3136V49.1652C13.579 50.4221 14.0661 51.6263 14.9303 52.5142ZM49.3761 49.1044L40.5943 58.1286L33.9398 64.9666L27.2943 58.1409L18.5124 49.1165V14.4978H49.3761V49.1044ZM15.8468 64.3158C16.8108 63.3518 18.3737 63.3518 19.3376 64.3158L32.2035 77.1816C33.1674 78.1456 34.7303 78.1456 35.6943 77.1816L48.5601 64.3158C49.5241 63.3518 51.087 63.3518 52.0509 64.3158C53.0149 65.2797 53.0149 66.8426 52.0509 67.8066L39.1851 80.6724C36.2932 83.5643 31.6045 83.5643 28.7126 80.6724L15.8468 67.8066C14.8829 66.8426 14.8829 65.2797 15.8468 64.3158Z" fill="#3A3A53"/>
                        <defs>
                            <clipPath id="clip0_604_7">
                                <rect width="20.9813" height="19.7471" fill="white" transform="translate(23.4585 21.9473)"/>
                            </clipPath>
                            <clipPath id="clip1_604_7">
                                <rect width="8.63934" height="8.63934" fill="white" transform="translate(58.0068 27.5066)"/>
                            </clipPath>
                            <clipPath id="clip2_604_7">
                                <rect width="8.63934" height="8.63934" fill="white" transform="translate(0 27.5066)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat->colonel_at)
                            {{ explode("-", $user->stat->colonel_at)[1] }}.{{ explode("-", $user->stat->colonel_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-item">
                    <svg width="71" height="83" viewBox="0 0 71 83" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M36.5569 22.4123L39.1449 27.5776C39.205 27.6991 39.2945 27.8043 39.4054 27.884C39.5163 27.9636 39.6452 28.0153 39.7811 28.0346L45.5635 28.8609C45.7195 28.8835 45.866 28.9486 45.9864 29.0489C46.1069 29.1491 46.1965 29.2805 46.2453 29.4283C46.2941 29.5761 46.3 29.7343 46.2624 29.8852C46.2248 30.0361 46.1452 30.1737 46.0326 30.2824L41.8487 34.3131C41.7504 34.407 41.6769 34.5231 41.6346 34.6514C41.5923 34.7797 41.5825 34.9163 41.6061 35.0491L42.5928 40.7272C42.6193 40.8804 42.6018 41.0379 42.5423 41.1819C42.4829 41.3258 42.3838 41.4505 42.2563 41.542C42.1288 41.6334 41.9779 41.6879 41.8206 41.6994C41.6633 41.7108 41.5059 41.6787 41.3662 41.6067L36.193 38.9257C36.0716 38.8629 35.9365 38.8301 35.7994 38.8301C35.6623 38.8301 35.5272 38.8629 35.4058 38.9257L30.2326 41.6067C30.0929 41.6787 29.9355 41.7108 29.7782 41.6994C29.621 41.6879 29.4701 41.6334 29.3425 41.542C29.215 41.4505 29.1159 41.3258 29.0565 41.1819C28.997 41.0379 28.9796 40.8804 29.006 40.7272L29.9927 35.0491C30.0163 34.9163 30.0065 34.7797 29.9642 34.6514C29.9219 34.5231 29.8484 34.407 29.7501 34.3131L25.5662 30.2904C25.4536 30.1817 25.374 30.0441 25.3364 29.8932C25.2988 29.7423 25.3048 29.584 25.3535 29.4363C25.4023 29.2885 25.4919 29.1571 25.6124 29.0568C25.7329 28.9566 25.8793 28.8915 26.0353 28.8689L31.8177 28.0425C31.9536 28.0233 32.0826 27.9716 32.1934 27.8919C32.3043 27.8123 32.3938 27.7071 32.4539 27.5855L35.0419 22.4203C35.1106 22.2803 35.2178 22.1621 35.3513 22.0791C35.4847 21.9962 35.6391 21.9518 35.7969 21.9509C35.9547 21.9501 36.1095 21.9929 36.2439 22.0745C36.3782 22.156 36.4867 22.273 36.5569 22.4123Z" fill="#3A3A53"/>
                        <path d="M66.3402 16.03L67.4058 18.2898C67.4306 18.343 67.4674 18.389 67.5131 18.4238C67.5588 18.4587 67.6119 18.4813 67.6678 18.4897L70.0488 18.8512C70.113 18.8611 70.1734 18.8896 70.223 18.9335C70.2726 18.9773 70.3095 19.0348 70.3296 19.0995C70.3496 19.1641 70.3521 19.2334 70.3366 19.2994C70.3211 19.3654 70.2883 19.4256 70.242 19.4732L68.5192 21.2366C68.4787 21.2777 68.4484 21.3285 68.431 21.3846C68.4136 21.4407 68.4096 21.5005 68.4193 21.5586L68.8256 24.0428C68.8365 24.1098 68.8293 24.1787 68.8048 24.2417C68.7803 24.3046 68.7395 24.3592 68.687 24.3992C68.6345 24.4392 68.5724 24.4631 68.5076 24.4681C68.4429 24.4731 68.378 24.459 68.3205 24.4275L66.1904 23.2546C66.1404 23.2271 66.0848 23.2128 66.0283 23.2128C65.9718 23.2128 65.9162 23.2271 65.8662 23.2546L63.7361 24.4275C63.6785 24.459 63.6137 24.4731 63.549 24.4681C63.4842 24.4631 63.4221 24.4392 63.3696 24.3992C63.3171 24.3592 63.2763 24.3046 63.2518 24.2417C63.2273 24.1787 63.2201 24.1098 63.231 24.0428L63.6373 21.5586C63.647 21.5005 63.643 21.4407 63.6256 21.3846C63.6082 21.3285 63.5779 21.2777 63.5374 21.2366L61.8146 19.4766C61.7683 19.4291 61.7355 19.3689 61.72 19.3029C61.7045 19.2368 61.707 19.1676 61.727 19.103C61.7471 19.0383 61.784 18.9808 61.8336 18.937C61.8832 18.8931 61.9436 18.8646 62.0078 18.8547L64.3888 18.4932C64.4447 18.4848 64.4978 18.4622 64.5435 18.4273C64.5892 18.3925 64.626 18.3464 64.6508 18.2933L65.7164 16.0335C65.7447 15.9722 65.7888 15.9205 65.8438 15.8842C65.8987 15.8479 65.9623 15.8285 66.0273 15.8281C66.0922 15.8278 66.156 15.8465 66.2113 15.8822C66.2666 15.9178 66.3113 15.9691 66.3402 16.03Z" fill="#3A3A53"/>
                        <path d="M4.63123 38.2454L5.69686 40.5052C5.72164 40.5584 5.75847 40.6044 5.80413 40.6393C5.84979 40.6741 5.90289 40.6968 5.95882 40.7052L8.33983 41.0667C8.40406 41.0766 8.46437 41.1051 8.51397 41.1489C8.56357 41.1928 8.60049 41.2503 8.62057 41.3149C8.64065 41.3796 8.64308 41.4488 8.62761 41.5148C8.61213 41.5809 8.57936 41.641 8.53297 41.6886L6.81022 43.452C6.76973 43.4931 6.73946 43.5439 6.72205 43.6C6.70463 43.6562 6.7006 43.7159 6.71031 43.774L7.11659 46.2582C7.12749 46.3252 7.12029 46.3941 7.09581 46.4571C7.07133 46.5201 7.03054 46.5747 6.97803 46.6147C6.92552 46.6547 6.86338 46.6785 6.79863 46.6835C6.73387 46.6885 6.66906 46.6745 6.61152 46.643L4.48138 45.4701C4.43139 45.4426 4.37578 45.4282 4.31932 45.4282C4.26286 45.4282 4.20724 45.4426 4.15725 45.4701L2.02711 46.643C1.96956 46.6745 1.90476 46.6885 1.84 46.6835C1.77525 46.6785 1.71311 46.6547 1.66061 46.6147C1.6081 46.5747 1.5673 46.5201 1.54282 46.4571C1.51834 46.3941 1.51115 46.3252 1.52205 46.2582L1.92832 43.774C1.93803 43.7159 1.934 43.6562 1.91659 43.6C1.89917 43.5439 1.8689 43.4931 1.82842 43.452L0.105654 41.6921C0.0592727 41.6445 0.0265018 41.5843 0.0110262 41.5183C-0.00444942 41.4523 -0.00201239 41.3831 0.0180655 41.3184C0.0381433 41.2538 0.0750636 41.1963 0.124664 41.1524C0.174265 41.1086 0.234572 41.0801 0.298797 41.0702L2.67981 40.7087C2.73573 40.7002 2.78885 40.6776 2.83451 40.6428C2.88017 40.6079 2.91699 40.5619 2.94177 40.5087L4.0074 38.2489C4.0357 38.1877 4.07984 38.136 4.13479 38.0997C4.18974 38.0634 4.25331 38.0439 4.31828 38.0436C4.38325 38.0432 4.44701 38.0619 4.50233 38.0976C4.55765 38.1333 4.60231 38.1845 4.63123 38.2454Z" fill="#3A3A53"/>
                        <path d="M66.2074 27.0079L66.8163 28.2992C66.8305 28.3296 66.8515 28.3559 66.8776 28.3758C66.9037 28.3958 66.934 28.4087 66.966 28.4135L68.3266 28.6201C68.3633 28.6257 68.3977 28.642 68.4261 28.6671C68.4544 28.6921 68.4755 28.725 68.487 28.7619C68.4985 28.7989 68.4999 28.8384 68.491 28.8762C68.4822 28.9139 68.4635 28.9483 68.437 28.9755L67.4525 29.9831C67.4294 30.0066 67.4121 30.0356 67.4021 30.0677C67.3922 30.0998 67.3899 30.1339 67.3954 30.1671L67.6276 31.5867C67.6338 31.625 67.6297 31.6643 67.6157 31.7003C67.6017 31.7363 67.5784 31.7675 67.5484 31.7903C67.5184 31.8132 67.4829 31.8268 67.4459 31.8297C67.4089 31.8325 67.3719 31.8245 67.339 31.8065L66.1218 31.1363C66.0932 31.1206 66.0614 31.1124 66.0291 31.1124C65.9969 31.1124 65.9651 31.1206 65.9365 31.1363L64.7193 31.8065C64.6864 31.8245 64.6494 31.8325 64.6124 31.8297C64.5754 31.8268 64.5399 31.8132 64.5099 31.7903C64.4799 31.7675 64.4566 31.7363 64.4426 31.7003C64.4286 31.6643 64.4245 31.625 64.4307 31.5867L64.6629 30.1671C64.6684 30.1339 64.6661 30.0998 64.6562 30.0677C64.6462 30.0356 64.6289 30.0066 64.6058 29.9831L63.6213 28.9774C63.5948 28.9503 63.5761 28.9159 63.5673 28.8781C63.5584 28.8404 63.5598 28.8009 63.5713 28.7639C63.5828 28.727 63.6039 28.6941 63.6322 28.6691C63.6605 28.644 63.695 28.6277 63.7317 28.6221L65.0923 28.4155C65.1242 28.4107 65.1546 28.3977 65.1807 28.3778C65.2068 28.3579 65.2278 28.3316 65.242 28.3012L65.8509 27.0099C65.8671 26.9749 65.8923 26.9454 65.9237 26.9246C65.9551 26.9039 65.9914 26.8928 66.0286 26.8926C66.0657 26.8924 66.1021 26.9031 66.1337 26.9235C66.1653 26.9438 66.1909 26.9731 66.2074 27.0079Z" fill="#3A3A53"/>
                        <path d="M4.4984 49.2233L5.10733 50.5146C5.12149 50.545 5.14253 50.5713 5.16862 50.5912C5.19472 50.6111 5.22506 50.624 5.25702 50.6288L6.6176 50.8354C6.6543 50.8411 6.68876 50.8573 6.71711 50.8824C6.74545 50.9075 6.76655 50.9403 6.77802 50.9773C6.78949 51.0142 6.79089 51.0538 6.78204 51.0915C6.7732 51.1292 6.75447 51.1636 6.72797 51.1908L5.74353 52.1985C5.7204 52.2219 5.7031 52.251 5.69315 52.283C5.6832 52.3151 5.6809 52.3492 5.68645 52.3825L5.9186 53.802C5.92483 53.8403 5.92072 53.8797 5.90673 53.9156C5.89274 53.9516 5.86943 53.9828 5.83943 54.0057C5.80942 54.0285 5.77391 54.0422 5.73691 54.045C5.69991 54.0479 5.66287 54.0399 5.62999 54.0219L4.41277 53.3516C4.3842 53.3359 4.35243 53.3277 4.32016 53.3277C4.2879 53.3277 4.25612 53.3359 4.22755 53.3516L3.01033 54.0219C2.97745 54.0399 2.94041 54.0479 2.90341 54.045C2.86641 54.0422 2.8309 54.0285 2.8009 54.0057C2.77089 53.9828 2.74758 53.9516 2.73359 53.9156C2.7196 53.8797 2.71549 53.8403 2.72172 53.802L2.95388 52.3825C2.95942 52.3492 2.95713 52.3151 2.94717 52.283C2.93722 52.251 2.91992 52.2219 2.89679 52.1985L1.91235 51.1928C1.88585 51.1656 1.86712 51.1312 1.85828 51.0935C1.84944 51.0558 1.85083 51.0162 1.8623 50.9792C1.87378 50.9423 1.89487 50.9095 1.92322 50.8844C1.95156 50.8593 1.98602 50.8431 2.02272 50.8374L3.3833 50.6308C3.41526 50.626 3.44561 50.6131 3.4717 50.5932C3.49779 50.5732 3.51883 50.5469 3.53299 50.5166L4.14192 49.2252C4.1581 49.1902 4.18332 49.1607 4.21472 49.14C4.24612 49.1192 4.28245 49.1081 4.31957 49.1079C4.35669 49.1077 4.39313 49.1184 4.42474 49.1388C4.45635 49.1592 4.48187 49.1884 4.4984 49.2233Z" fill="#3A3A53"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.4055 0C27.0423 0 25.9372 1.10513 25.9372 2.46838C25.9372 3.83163 27.0423 4.93677 28.4055 4.93677H41.3931C42.7563 4.93677 43.8615 3.83163 43.8615 2.46838C43.8615 1.10513 42.7563 0 41.3931 0H28.4055ZM16.7819 52.5142L32.529 68.6928C33.3951 69.5818 34.5683 70.0811 35.7914 70.0811C37.0145 70.0811 38.1878 69.5818 39.0538 68.6928L54.8098 52.502C55.674 51.6142 56.1612 50.4099 56.1644 49.1531V14.3136C56.1644 13.0531 55.678 11.8443 54.8121 10.953C53.9463 10.0618 52.7719 9.56107 51.5474 9.56107H20.0443C18.8198 9.56107 17.6454 10.0618 16.7796 10.953C15.9137 11.8443 15.4272 13.0531 15.4272 14.3136V49.1652C15.4305 50.4221 15.9176 51.6263 16.7819 52.5142ZM51.2277 49.1044L42.4459 58.1286L35.7913 64.9666L29.1459 58.1409L20.364 49.1165V14.4978H51.2277V49.1044ZM17.6984 64.3158C18.6623 63.3518 20.2252 63.3518 21.1892 64.3158L34.055 77.1816C35.019 78.1456 36.5819 78.1456 37.5458 77.1816L50.4117 64.3158C51.3756 63.3518 52.9385 63.3518 53.9025 64.3158C54.8665 65.2797 54.8665 66.8426 53.9025 67.8066L41.0367 80.6724C38.1448 83.5643 33.4561 83.5643 30.5642 80.6724L17.6984 67.8066C16.7344 66.8426 16.7344 65.2797 17.6984 64.3158Z" fill="#3A3A53"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.31995 30.9093C2.9567 30.9093 1.85156 29.8042 1.85156 28.4409L1.85156 15.4534C1.85156 14.0901 2.95669 12.985 4.31994 12.985C5.6832 12.985 6.78833 14.0901 6.78833 15.4534L6.78833 28.4409C6.78833 29.8042 5.6832 30.9093 4.31995 30.9093Z" fill="#3A3A53"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M66.0294 59.626C64.6662 59.626 63.561 58.5208 63.561 57.1576L63.561 44.1701C63.561 42.8068 64.6662 41.7017 66.0294 41.7017C67.3927 41.7017 68.4978 42.8068 68.4978 44.1701L68.4978 57.1576C68.4978 58.5208 67.3927 59.626 66.0294 59.626Z" fill="#3A3A53"/>
                    </svg>
                    <div class="admin-timeline-circle"></div>
                    <p>
                        @if($user->stat->general_at)
                            {{ explode("-", $user->stat->general_at)[1] }}.{{ explode("-", $user->stat->general_at)[2] }}
                        @endif
                    </p>
                </div>
                <div class="admin-timeline-line">
                    <div class="timeline-bar" data-step="2"></div>
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
