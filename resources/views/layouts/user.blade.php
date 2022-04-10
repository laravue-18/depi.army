<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
<!-- admin sidebar -->
<div class="admin-slidebar">
    <div class="admin-logo">
        <a href="index.html">
            <img src="img/logo.png">
        </a>
    </div>
    <div class="admin-menu">
        <a class="active" href="/home">Dashboard</a>
        <a href="/rank">Rank</a>
        <a href="/stats">Stats</a>
    </div>
    <div class="admin-media">
        <a href="#">
            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_319_277)">
                    <path d="M18.2998 4.15175C17.6384 4.45414 16.9378 4.65374 16.2204 4.74414C16.9757 4.27271 17.5412 3.53341 17.8125 2.66276C17.1125 3.08698 16.3367 3.39579 15.5109 3.56777C14.966 2.96272 14.244 2.56142 13.457 2.42619C12.67 2.29095 11.862 2.42936 11.1585 2.8199C10.455 3.21045 9.89536 3.83129 9.56648 4.58601C9.23761 5.34073 9.1579 6.18709 9.33974 6.99368C6.32925 6.84616 3.6625 5.34417 1.87608 3.07552C1.55133 3.64865 1.38194 4.30235 1.38587 4.96733C1.38587 6.27441 2.02624 7.42326 2.99637 8.09819C2.4214 8.07919 1.85913 7.91775 1.35643 7.62734V7.6732C1.3561 8.54183 1.64516 9.38382 2.17456 10.0563C2.70396 10.7288 3.44111 11.1904 4.26092 11.3628C3.7297 11.5106 3.17333 11.5328 2.63275 11.4278C2.86544 12.1754 3.31704 12.8288 3.92455 13.2971C4.53206 13.7653 5.26516 14.0249 6.02158 14.0396C4.74048 15.0837 3.15865 15.6504 1.53014 15.6486C1.24307 15.6486 0.956745 15.6311 0.668945 15.5974C2.32928 16.7014 4.25983 17.2875 6.23135 17.2859C12.8949 17.2859 16.5347 11.5562 16.5347 6.59621C16.5347 6.43569 16.5347 6.27517 16.5237 6.11465C17.2347 5.58331 17.848 4.92363 18.3344 4.16704L18.2998 4.15175Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_319_277">
                        <rect width="17.6654" height="18.3449" fill="white" transform="translate(0.668945 0.658569)"/>
                    </clipPath>
                </defs>
            </svg>
        </a>
        <a href="#">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_319_279)">
                    <path d="M16.2885 4.56665C15.0551 3.98027 13.7534 3.56212 12.4162 3.32269C12.404 3.32034 12.3915 3.32202 12.3803 3.32749C12.3691 3.33296 12.3599 3.34194 12.3539 3.35315C12.1867 3.66126 12.0014 4.06314 11.8717 4.37897C10.4095 4.15222 8.95468 4.15222 7.52247 4.37897C7.39279 4.05608 7.2008 3.66126 7.03283 3.35315C7.02661 3.34219 7.01734 3.33343 7.00624 3.32801C6.99514 3.32259 6.98272 3.32077 6.9706 3.32277C5.63318 3.56165 4.33145 3.97976 3.0982 4.56657C3.08765 4.57124 3.07876 4.57918 3.07276 4.58931C0.606413 8.4056 -0.069268 12.1281 0.262231 15.8044C0.263168 15.8134 0.26584 15.8221 0.270088 15.83C0.274336 15.8379 0.280074 15.8449 0.286962 15.8504C1.91418 17.0881 3.49042 17.8395 5.03742 18.3375C5.04944 18.3413 5.06228 18.3411 5.07421 18.337C5.08614 18.333 5.09659 18.3252 5.10416 18.3149C5.47006 17.7973 5.79625 17.2515 6.07598 16.6777C6.07983 16.6698 6.08203 16.6612 6.08243 16.6524C6.08283 16.6436 6.08142 16.6348 6.07831 16.6266C6.07519 16.6184 6.07044 16.611 6.06435 16.6048C6.05827 16.5987 6.05099 16.5939 6.04301 16.5909C5.52555 16.3876 5.0329 16.1397 4.55895 15.8583C4.55031 15.8531 4.54305 15.8457 4.53782 15.8368C4.53258 15.828 4.52953 15.8179 4.52893 15.8076C4.52834 15.7972 4.53022 15.7868 4.5344 15.7774C4.53859 15.768 4.54495 15.7597 4.55293 15.7535C4.65265 15.676 4.75245 15.5956 4.84765 15.5142C4.85611 15.507 4.86635 15.5024 4.87722 15.5008C4.88809 15.4993 4.89915 15.501 4.90916 15.5056C8.02265 16.9779 11.3933 16.9779 14.47 15.5056C14.48 15.5007 14.4912 15.4988 14.5022 15.5002C14.5132 15.5015 14.5236 15.5061 14.5322 15.5134C14.6275 15.5947 14.7272 15.676 14.8277 15.7535C14.8357 15.7597 14.8421 15.7678 14.8464 15.7772C14.8506 15.7866 14.8526 15.7969 14.852 15.8073C14.8515 15.8176 14.8486 15.8277 14.8434 15.8366C14.8383 15.8455 14.8311 15.8529 14.8225 15.8582C14.3484 16.145 13.8517 16.3898 13.3378 16.5901C13.3298 16.5932 13.3226 16.5981 13.3165 16.6043C13.3105 16.6106 13.3058 16.6181 13.3028 16.6264C13.2997 16.6347 13.2984 16.6435 13.2989 16.6523C13.2993 16.6612 13.3016 16.6698 13.3055 16.6777C13.5912 17.2507 13.9174 17.7965 14.2766 18.3141C14.2839 18.3247 14.2943 18.3327 14.3063 18.337C14.3183 18.3412 14.3312 18.3414 14.3433 18.3375C15.8978 17.8394 17.474 17.0881 19.1012 15.8504C19.1082 15.8451 19.1141 15.8384 19.1183 15.8305C19.1226 15.8227 19.1252 15.8141 19.126 15.8051C19.5227 11.5548 18.4616 7.86293 16.3132 4.59005C16.3079 4.57942 16.2992 4.57109 16.2885 4.56657V4.56665ZM6.54089 13.5659C5.60355 13.5659 4.83116 12.6745 4.83116 11.5799C4.83116 10.4853 5.58857 9.59399 6.54097 9.59399C7.50075 9.59399 8.26561 10.4931 8.25062 11.58C8.25062 12.6745 7.49322 13.5659 6.54089 13.5659ZM12.8624 13.5659C11.925 13.5659 11.1526 12.6745 11.1526 11.5799C11.1526 10.4853 11.91 9.59399 12.8624 9.59399C13.8221 9.59399 14.587 10.4931 14.572 11.58C14.572 12.6745 13.8221 13.5659 12.8624 13.5659Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_319_279">
                        <rect width="19.0243" height="19.7038" fill="white" transform="translate(0.183594 0.979126)"/>
                    </clipPath>
                </defs>
            </svg>
        </a>
        <a href="#">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_319_281)">
                    <path d="M13.089 11.831C13.0941 13.5653 12.4107 15.2307 11.1889 16.4615C9.96715 17.6923 8.30682 18.3879 6.57258 18.3955C4.83833 18.3879 3.17801 17.6923 1.95622 16.4615C0.734433 15.2307 0.0510633 13.5653 0.0561809 11.831C0.0510633 10.0967 0.734433 8.43135 1.95622 7.20054C3.17801 5.96973 4.83833 5.27412 6.57258 5.26648C8.30682 5.27412 9.96715 5.96973 11.1889 7.20054C12.4107 8.43135 13.0941 10.0967 13.089 11.831ZM20.231 11.831C20.231 15.2384 18.7776 18.0105 16.9776 18.0105C15.1777 18.0105 13.7146 15.2384 13.7146 11.831C13.7146 8.42361 15.1777 5.6515 16.9776 5.6515C18.7776 5.6515 20.231 8.42361 20.231 11.831ZM23.1572 11.831C23.1572 14.8823 22.647 17.3656 22.0117 17.3656C21.3764 17.3656 20.8663 14.8823 20.8663 11.831C20.8663 8.77975 21.3764 6.2964 22.0117 6.2964C22.647 6.2964 23.1572 8.77975 23.1572 11.831Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_319_281">
                        <rect width="23.101" height="23.101" fill="white" transform="translate(0.0561523 0.280518)"/>
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>
    <div class="admin-bg">
        <img src="img/sidebar-bg.png">
    </div>
    <div class="hamburger-cross" onclick="hanburgerCross()">
        <span></span>
        <span></span>
    </div>
</div>
<!-- admin mobile -->
<div class="mobile-header">
    <div class="mobile-logo">
        <svg width="62" height="32" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.51527 4.77839C9.51527 2.15027 7.38576 0.020752 4.75764 0.020752C2.12952 0.020752 0 2.15027 0 4.77839C0 7.40651 2.12952 9.53603 4.75764 9.53603C7.38576 9.53603 9.51527 7.40651 9.51527 4.77839ZM26.3503 5.20536L26.351 10.39L21.7766 10.3906L17.2022 10.3912L17.2015 5.20661C17.2011 2.34263 19.2501 0.0217199 21.7752 0.0213759C24.3003 0.0210319 26.3499 2.34138 26.3503 5.20536ZM26.3521 20.7592L26.3507 10.39L17.2018 10.3913L17.2032 20.7604H17.2028L17.2035 25.945C17.2039 28.809 19.2517 31.1293 21.7787 31.129C24.3056 31.1287 26.3528 28.8078 26.3524 25.9438L26.3517 20.7592H26.3521ZM13.3597 25.6388C14.8759 25.6388 16.1045 26.8674 16.1045 28.3836C16.1045 29.8998 14.8759 31.1284 13.3597 31.1284C11.8435 31.1284 10.6149 29.8998 10.6149 28.3836C10.6149 26.8674 11.8435 25.6388 13.3597 25.6388ZM9.51527 26.3707C9.51527 23.7426 7.38576 21.6131 4.75764 21.6131C2.12952 21.6131 0 23.7426 0 26.3707C0 28.9989 2.12952 31.1284 4.75764 31.1284C7.38576 31.1284 9.51527 28.9989 9.51527 26.3707ZM4.75764 10.6339C7.38576 10.6339 9.51527 12.7635 9.51527 15.3916C9.51527 18.0197 7.38576 20.1492 4.75764 20.1492C2.12952 20.1492 0 18.0197 0 15.3916C0 12.7635 2.12952 10.6339 4.75764 10.6339ZM36.5973 0.020752C40.8427 0.020752 44.2827 3.29694 44.2827 7.3402C44.2827 11.3835 40.8427 14.6596 36.5973 14.6596C32.3519 14.6596 28.9119 11.3835 28.9119 7.3402C28.9119 3.29694 32.3519 0.020752 36.5973 0.020752ZM44.2827 23.8089C44.2827 19.7657 40.8427 16.4895 36.5973 16.4895C32.3519 16.4895 28.9119 19.7657 28.9119 23.8089C28.9119 27.8522 32.3519 31.1284 36.5973 31.1284C40.8427 31.1284 44.2827 27.8522 44.2827 23.8089ZM53.4317 16.4895C57.6771 16.4895 61.1171 19.7657 61.1171 23.8089C61.1171 27.8522 57.6771 31.1284 53.4317 31.1284C49.1863 31.1284 45.7463 27.8522 45.7463 23.8089C45.7463 19.7657 49.1863 16.4895 53.4317 16.4895ZM61.1171 7.3402C61.1171 3.29694 57.6771 0.020752 53.4317 0.020752C49.1863 0.020752 45.7463 3.29694 45.7463 7.3402C45.7463 11.3835 49.1863 14.6596 53.4317 14.6596C57.6771 14.6596 61.1171 11.3835 61.1171 7.3402Z" fill="url(#paint0_linear_661_6957)"/>
            <defs>
                <linearGradient id="paint0_linear_661_6957" x1="0" y1="0.020752" x2="61.1171" y2="31.1289" gradientUnits="userSpaceOnUse">
                    <stop offset="0.05" stop-color="#00DEFC"/>
                    <stop offset="1" stop-color="#BAFFD1"/>
                </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="mobile-hamburger-menu" onclick="hanburger()">
        <span></span>
        <span></span>
    </div>
</div>

@yield('content')

<div class="hamburger-menu" onclick="hanburger()">
    <span></span>
    <span></span>
    <span></span>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

@stack('scripts')

</body>
</html>
