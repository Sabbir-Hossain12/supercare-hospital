
@extends('frontend.layout.master')


@push('meta-title')
    {{ env('APP_NAME') }} | Contact Page
@endpush


@section('body-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Portfolio Details</h2>
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Portfolio Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<section class="pf-details section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-content">
                    <div class="image-slider">
                        <img src="{{ asset($project->image) }}" alt="#">
                    </div>

                    <div class="date">
                        <ul>
                            <li><span>Category :</span> {{ $project->category }}</li>
                            <li><span>Date :</span> {{ $project->date }}</li>	
                            <li><span>Client :</span> {{ $project->client_name }}</li>
                            <li><span>Age :</span> {{ $project->age }}</li>
                        </ul>
                    </div>

                    <div class="body-text">
                        <h3>{{ $project->title }}</h3>

                        <div class="details-content">
                            {!! $project->description !!}
                        </div>

                        <div class="share">
                            <h4>Share Now -</h4>
                            <ul>
                                <li><a href="{{ $project->facebook }}"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $project->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $project->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@push('script-tag')

@endpush