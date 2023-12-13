<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>

<body style="margin-bottom: 15vh;  {{ request()->is('details/comments*') ? 'background: #f5f6fb;' : '' }}">

    {{-- Navbar --}}
    {{-- @include('includes.navbar') --}}
    <!-- Adding Nav Menu -->
    <nav class="navbar navbar-light d-xl-block d-lg-block d-md-block d-sm-none bg-navbar shadow-lg">
        <div class="d-flex justify-content-between content-nav">
            <div class="d-flex">
                <img src="/images/dashboard/logo-webcare.svg" width="40" height="40"
                    class="d-inline-block align-top" alt="">
                <a class="navbar-brand font-weight-bold font-nav ml-2" href="#">
                    Portal Client
                </a>
            </div>

            <!-- List Menu -->
            <div class="navbar-expand my-auto d-none d-sm-block"> <!-- Hide for screens smaller than 'sm' -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link font-nav" href="/details/{{ $client->slug }}">
                            <svg class="d-inline-block align-top width-menu {{ request()->routeIs('detail') ? 'active' : '' }} "
                                viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.4244 0.220861C14.2577 0.0783255 14.0457 0 13.8264 0C13.6071 0 13.395 0.0783255 13.2284 0.220861L0.0263672 11.5369V24.8401C0.0263672 25.5721 0.317152 26.2741 0.834752 26.7917C1.35235 27.3093 2.05437 27.6001 2.78637 27.6001H10.1464C10.3904 27.6001 10.6244 27.5031 10.7969 27.3306C10.9694 27.1581 11.0664 26.9241 11.0664 26.6801V21.1601C11.0664 20.4281 11.3572 19.726 11.8748 19.2084C12.3924 18.6908 13.0944 18.4001 13.8264 18.4001C14.5584 18.4001 15.2604 18.6908 15.778 19.2084C16.2956 19.726 16.5864 20.4281 16.5864 21.1601V26.6801C16.5864 26.9241 16.6833 27.1581 16.8558 27.3306C17.0284 27.5031 17.2624 27.6001 17.5064 27.6001H24.8664C25.5984 27.6001 26.3004 27.3093 26.818 26.7917C27.3356 26.2741 27.6264 25.5721 27.6264 24.8401V11.5369L14.4244 0.220861Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/details/comments/{{ $client->slug }}">
                            <svg class="d-inline-block align-top width-menu {{ request()->is('details/comments*') ? 'active' : '' }}"
                                viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.467 0.199463C22.0887 0.199463 28.267 6.37772 28.267 13.9995C28.267 21.6212 22.0887 27.7995 14.467 27.7995H3.42699C2.69499 27.7995 1.99298 27.5087 1.47538 26.9911C0.957777 26.4735 0.666992 25.7715 0.666992 25.0395V13.9995C0.666992 6.37772 6.84525 0.199463 14.467 0.199463ZM14.467 16.7595H10.327C9.96099 16.7595 9.60999 16.9049 9.35118 17.1637C9.09238 17.4225 8.94699 17.7735 8.94699 18.1395C8.94699 18.5055 9.09238 18.8565 9.35118 19.1153C9.60999 19.3741 9.96099 19.5195 10.327 19.5195H14.467C14.833 19.5195 15.184 19.3741 15.4428 19.1153C15.7016 18.8565 15.847 18.5055 15.847 18.1395C15.847 17.7735 15.7016 17.4225 15.4428 17.1637C15.184 16.9049 14.833 16.7595 14.467 16.7595ZM18.607 11.2395H10.327C9.97526 11.2399 9.63695 11.3745 9.38118 11.616C9.12542 11.8575 8.97151 12.1875 8.95089 12.5386C8.93028 12.8897 9.04452 13.2355 9.27028 13.5052C9.49603 13.7749 9.81626 13.9483 10.1655 13.9898L10.327 13.9995H18.607C18.9587 13.9991 19.297 13.8644 19.5528 13.6229C19.8086 13.3815 19.9625 13.0515 19.9831 12.7003C20.0037 12.3492 19.8895 12.0035 19.6637 11.7337C19.438 11.464 19.1177 11.2907 18.7685 11.2491L18.607 11.2395Z" />
                            </svg>


                            Chat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/details/tutorials/{{ $client->slug }}">
                            <svg class="d-inline-block align-top width-menu {{ request()->is('details/tutorials*') ? 'active' : '' }}"
                                viewBox="0 0 35 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.6 23.8018L22.423 18.1613L13.6 12.5207V23.8018ZM33.252 9.08C33.473 9.96369 33.626 11.1482 33.728 12.6523C33.847 14.1565 33.898 15.4538 33.898 16.5819L34 18.1613C34 22.2789 33.728 25.306 33.252 27.2426C32.827 28.9347 31.841 30.0253 30.311 30.4953C29.512 30.7397 28.05 30.9089 25.806 31.0218C23.596 31.1534 21.573 31.2098 19.703 31.2098L17 31.3226C9.877 31.3226 5.44 31.0217 3.689 30.4953C2.159 30.0253 1.173 28.9347 0.748 27.2426C0.527 26.3589 0.374 25.1744 0.272 23.6702C0.153 22.1661 0.102 20.8688 0.102 19.7406L0 18.1613C0 14.0437 0.272 11.0166 0.748 9.08C1.173 7.38783 2.159 6.29733 3.689 5.82728C4.488 5.58286 5.95 5.41364 8.194 5.30083C10.404 5.16922 12.427 5.11281 14.297 5.11281L17 5C24.123 5 28.56 5.30083 30.311 5.82728C31.841 6.29733 32.827 7.38783 33.252 9.08Z" />
                            </svg>

                            Tutorial
                        </a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="/images/details/menu-account.svg" class="d-inline-block align-top width-menu" alt="">
              Account
            </a>
          </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- End of Nav Menu -->

    <!-- adding Mobile Menu -->
    <nav class="navbar navbar-dark navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none p-0 bg-nav ">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="/details/{{ $client->slug }}" class="nav-link text-center">
                    <svg class="{{ request()->routeIs('detail') ? 'active' : '' }}" width="28" height="28"
                        viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.4244 0.220861C14.2577 0.0783255 14.0457 0 13.8264 0C13.6071 0 13.395 0.0783255 13.2284 0.220861L0.0263672 11.5369V24.8401C0.0263672 25.5721 0.317152 26.2741 0.834752 26.7917C1.35235 27.3093 2.05437 27.6001 2.78637 27.6001H10.1464C10.3904 27.6001 10.6244 27.5031 10.7969 27.3306C10.9694 27.1581 11.0664 26.9241 11.0664 26.6801V21.1601C11.0664 20.4281 11.3572 19.726 11.8748 19.2084C12.3924 18.6908 13.0944 18.4001 13.8264 18.4001C14.5584 18.4001 15.2604 18.6908 15.778 19.2084C16.2956 19.726 16.5864 20.4281 16.5864 21.1601V26.6801C16.5864 26.9241 16.6833 27.1581 16.8558 27.3306C17.0284 27.5031 17.2624 27.6001 17.5064 27.6001H24.8664C25.5984 27.6001 26.3004 27.3093 26.818 26.7917C27.3356 26.2741 27.6264 25.5721 27.6264 24.8401V11.5369L14.4244 0.220861Z" />
                    </svg>
                </a>
            </li>
            <li class="nav-item">
                <a href="/details/comments/{{ $client->slug }}" class="nav-link text-center">
                    <svg class="{{ request()->is('details/comments*') ? 'active' : '' }}" width="28" height="28"
                        viewBox="0 0 29 28" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.467 0.199463C22.0887 0.199463 28.267 6.37772 28.267 13.9995C28.267 21.6212 22.0887 27.7995 14.467 27.7995H3.42699C2.69499 27.7995 1.99298 27.5087 1.47538 26.9911C0.957777 26.4735 0.666992 25.7715 0.666992 25.0395V13.9995C0.666992 6.37772 6.84525 0.199463 14.467 0.199463ZM14.467 16.7595H10.327C9.96099 16.7595 9.60999 16.9049 9.35118 17.1637C9.09238 17.4225 8.94699 17.7735 8.94699 18.1395C8.94699 18.5055 9.09238 18.8565 9.35118 19.1153C9.60999 19.3741 9.96099 19.5195 10.327 19.5195H14.467C14.833 19.5195 15.184 19.3741 15.4428 19.1153C15.7016 18.8565 15.847 18.5055 15.847 18.1395C15.847 17.7735 15.7016 17.4225 15.4428 17.1637C15.184 16.9049 14.833 16.7595 14.467 16.7595ZM18.607 11.2395H10.327C9.97526 11.2399 9.63695 11.3745 9.38118 11.616C9.12542 11.8575 8.97151 12.1875 8.95089 12.5386C8.93028 12.8897 9.04452 13.2355 9.27028 13.5052C9.49603 13.7749 9.81626 13.9483 10.1655 13.9898L10.327 13.9995H18.607C18.9587 13.9991 19.297 13.8644 19.5528 13.6229C19.8086 13.3815 19.9625 13.0515 19.9831 12.7003C20.0037 12.3492 19.8895 12.0035 19.6637 11.7337C19.438 11.464 19.1177 11.2907 18.7685 11.2491L18.607 11.2395Z" />
                    </svg> </a>
            </li>

            <li class="nav-item">
                <a href="/details/tutorials/{{ $client->slug }}" class="nav-link text-center">
                    <svg class="{{ request()->is('details/tutorials*') ? 'active' : '' }}" width="28"
                        height="28" viewBox="0 0 35 26" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.6 23.8018L22.423 18.1613L13.6 12.5207V23.8018ZM33.252 9.08C33.473 9.96369 33.626 11.1482 33.728 12.6523C33.847 14.1565 33.898 15.4538 33.898 16.5819L34 18.1613C34 22.2789 33.728 25.306 33.252 27.2426C32.827 28.9347 31.841 30.0253 30.311 30.4953C29.512 30.7397 28.05 30.9089 25.806 31.0218C23.596 31.1534 21.573 31.2098 19.703 31.2098L17 31.3226C9.877 31.3226 5.44 31.0217 3.689 30.4953C2.159 30.0253 1.173 28.9347 0.748 27.2426C0.527 26.3589 0.374 25.1744 0.272 23.6702C0.153 22.1661 0.102 20.8688 0.102 19.7406L0 18.1613C0 14.0437 0.272 11.0166 0.748 9.08C1.173 7.38783 2.159 6.29733 3.689 5.82728C4.488 5.58286 5.95 5.41364 8.194 5.30083C10.404 5.16922 12.427 5.11281 14.297 5.11281L17 5C24.123 5 28.56 5.30083 30.311 5.82728C31.841 6.29733 32.827 7.38783 33.252 9.08Z" />
                    </svg> </a>
            </li>

            <!-- <li class="nav-item">
        <a href="#" class="nav-link text-center">
          <img src="/images/details/menu-account.svg" alt="" srcset="">
        </a>
      </li> -->

        </ul>
    </nav>
    <!-- End Mobile Menu -->



    {{-- Page Content --}}
    @yield('content')




    {{-- Footer --}}
    {{-- @include('includes.footer') --}}


    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>
