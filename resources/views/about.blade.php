@extends('layouts.base',['title'=>"About"])

@section('content')

    <div class="container">
        <h2>what is  laracarte ?</h2>

        <p>Laracarte is a clone of <a href="https://laramap.com" target="_blank">Laramap.com</a> .</p>

        <div class="row">

            <div class="col-md-6">

                <p class="alert alert-warning">
                    <strong>
                        <i class="fa fa-exclamation-triangle"> </i> This app ast been built  by <a href="#">@estmo</a> for learning purpose
                    </strong>
                </p>
            <p>Feel  free to help to improve the <a href="#">source code</a></p>
                <hr>
                <h2>What is laramap</h2>
                <p>
                    Laramap is a website by which Laracarte was inpired :).
                </p>
                <p>More info <a href="#">here.</a></p>
                <hr>
                <h2>Which tools and service are used in Laracarte ?</h2>
                <p>
                    Basically it's built on Laravel & bootstrap .But there's  a bunch of services used for email and other sections.
                </p>
                <ul>
                    <li>Laravel</li>
                    <li>Bootstrap</li>
                    <li>Amazon S3</li>
                    <li>Mandrill</li>
                    <li>Google Maps</li>
                    <li>Gravatar</li>
                    <li>Antony Martin's Geolocation Package </li>
                    <li>Heroku</li>
                </ul>
            </div>
        </div>
    </div>
@stop