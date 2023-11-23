@extends('layouts.homeapp')

@section('title')
    Portal Client
@endsection

@section('content')
    <!-- Page Content -->
    <div class="bg-purple">

        <section class="wrapper">

            <div class="container">
                <div class="center_top">
                    <img src="/images/dashboard/logo-webcare.svg" alt="" srcset="" class="logo-404 mx-auto">
                    <p class="website_name">Portal Client | Webcare</p>
                </div>

                <div id="scene" class="scene" data-hover-only="false">


                    <div class="circle" data-depth="1.2"></div>

                    <div class="one" data-depth="0.9">
                        <div class="content">
                            <span class="piece"></span>
                            <span class="piece"></span>
                            <span class="piece"></span>
                        </div>
                    </div>

                    <div class="two" data-depth="0.60">
                        <div class="content">
                            <span class="piece"></span>
                            <span class="piece"></span>
                            <span class="piece"></span>
                        </div>
                    </div>

                    <div class="three" data-depth="0.40">
                        <div class="content">
                            <span class="piece"></span>
                            <span class="piece"></span>
                            <span class="piece"></span>
                        </div>
                    </div>

                    <p class="p404" data-depth="0.50">404</p>
                    <p class="p404" data-depth="0.10">404</p>


                </div>


                <div class="text">
                    <article>

                        <p>Uh oh! Looks like you got lost. <br>Go back to the homepage if you dare!</p>
                        <a href="https://webcareidn.com/">
                            <button>
                                Home
                            </button>
                        </a>
                    </article>
                </div>

            </div>
        </section>

    </div>
@endsection
