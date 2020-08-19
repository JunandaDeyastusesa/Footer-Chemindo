@extends('master')

@section('tab-title')
footer
@endsection

@section('main')
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Roboto&display=swap" rel="stylesheet">
        <!-- style  -->
        <style>
            .bawah {
                margin-right:20px;
                font-family: 'Open Sans', sans-serif;

            }
            .line-blue {
                padding-top:15px;
                height: 50px;
                margin-right: -20px;
                /* margin-top: -8px; */
                background-color: #1e3668;
            }
            .line-text {
                color: white;
                font-size: 20px;
                text-align: center;
                font-family: 'Fira Sans', sans-serif;
            }
            .logo {
                margin-top:52px;
                margin-bottom: 52px;
            }
            .img-logo {
                width: 650px;
                display: block;
                margin: auto;
            }
            .foter {
                background-color: #090d20;
                color: #d2d2d4;
                font-size: 18x;
                margin-right: -20px;
                padding-top:35px;
                padding-bottom:35px;
            }
            .f1 {
                margin-left:50px;
            }
            .fi1 {
                width:20px;
            }
            .Tp-18 {
                font-size: 18px;
            }
            a {
                font-size:14px;
            }
            .ill {
                font-family: 'Roboto', sans-serif;
            }
        </style>

        <div class="bawah">
            <div class="line-blue">
                <h4 class="line-text">OUR QUALITY CERTIFICATIONS</h4>
            </div>
            <div class="container">
                <div class="logo">
                    <img class="img-logo" src="img/footer-lg1.png"  alt="">
                </div>
            </div>

            <div class="foter">
            <div class="fot">
            <footer class="page-footer font-small indigo">

            <div class="text-center text-md-left">

                <div class="row">

                <div class="col-md-3 mx-auto">
                <div class="f1">

                    <p class=" mt-3 mb-4">Browse Our Site</p>

                    <ul class="list-unstyled">
                    <li>
                        <a>About</a>
                    </li>
                    <li>
                        <a>Industry Application</a>
                    </li>
                    <li>
                        <a>Quality</a>
                    </li>
                    <li>
                        <a>Contact</a>
                    </li>
                    </ul>
                </div>
                </div>

                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-3 mx-auto">
                <div class="f2">

                    <p class="mt-3 mb-4">Products</p>

                    <ul class="list-unstyled">
                    <li>
                        <a>Waste Water & Water Treatment Chemicals</a>
                    </li>
                    <li>
                        <a>Industrial General Chemicals</a>
                    </li>
                    <li>
                        <a>Fiberglass Composite Material</a>
                    </li>
                    <li>
                        <a>Fiberglass Custom Project Fabrication</a>
                    </li>
                    </ul>
                </div>
                </div>

                <hr class="clearfix w-100 d-md-none">

                <div class="col-md-3 mx-auto">
                <div class="f3">

                    <p class="mt-3 mb-4">Inquire Now</p>

                    <ul class="list-unstyled">
                    <li>
                        <a><img src="img/footer-wa.png" alt="" class="fi1"> +62 812 4666 6968</a>
                    </li>
                    <li>
                        <a><img src="img/footer-telp.png" alt="" class="fi1"> +62 31 5353 668</a>
                    </li>
                    <li>
                        <a><img src="img/footer-mail.png" alt="" class="fi1"> admin@perdanachemindo.com</a>
                    </li>
                    </ul>
                </div>
                </div>

                <hr class="clearfix w-100 d-md-none">

            
                <div class="col-md-3 mx-auto">
                <div class="f4">
                    <p class="Tp-18 mt-4 mb-4">PT. Perdana Chemindo Perkasa</p>

                    <ul class="ill list-unstyled">
                    <li>
                        <a>Copyright © 2020,  All Rights Reserved</a>
                    </li>
                    <li>
                        <a>Website by Mark Design.</a>
                    </li>
                    </ul>
                    </div>
                </div>
                </div></div>
            </div>
            </footer>
        </div>
    </div>

@endsection
