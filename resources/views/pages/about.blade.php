




@extends('layouts.app')


@section('content')



        <style>

            /*Contact sectiom*/
            .content-header{
                font-family: 'Oleo Script', cursive;
                color:#fcc500;
                font-size: 45px;
            }

            .section-content{
                text-align: center;

            }
            #contact{

                font-family: 'Teko', sans-serif;
                padding-top: 60px;
                width: 100%;
                width: 80vw;
                height: 550px;
                background: #3a6186; /* fallback for old browsers */
                background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                color : #fff;
            }
            .contact-section{
                padding-top: 40px;
            }
            .contact-section {
                width: 50%;
            }

            label{
                font-size: 1.3em;
                line-height: 1em;
                font-weight: normal;
            }






        </style>






    <h1>{{$title}}</h1>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <section id="contact">
        <div class="section-content">
            <h1 class="section-header">Need Help? <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Know About us</span></h1>

        </div>
        <div class="contact-section">
            <div class="container">




            </div>
        </div>
    </section>







@endsection