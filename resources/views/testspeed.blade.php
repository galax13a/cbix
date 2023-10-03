@extends('layouts.tema.appadmin')
@section('title', __('Test Speed Webcam'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card my-4">

                    <div class="card-body ">

                        <h1>Test Speed</h1>

                        <div class="ratio ratio-21x9">
                          <iframe src="https://fast.com/en" title="Test Speed allowfullscreen"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
