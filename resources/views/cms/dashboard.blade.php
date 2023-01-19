@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            @if (Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <i class="pe-7s-light"></i>
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{Session::get('success')}}</span>
                </div>
            @endif
            @if (Session::get('error'))
                <div class="alert alert-danger" role="alert">
                <i class="pe-7s-light"></i>
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{Session::get('error')}}</span>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card cms-info-cards cms-ic-artworks" id="cms-ic-artworks">
                        <div class="card-body">
                            <div class="row">
                                <h3 class="text-right mt-0 pt-0"><i class="pe-7s-paint"></i></h3>
                                <h1>{{ $total_artworks }}</h1>
                                <h4 class="text-white ml-2">Artworks Published</h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="add_artwork">add artwork</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card cms-info-cards cms-ic-photos" id="cms-ic-photos" style="background-image: linear-gradient(to bottom, rgba(77, 90, 153, 0.76), rgba(43, 10, 15, 0.89)), url('./images/card-painting.jpg') !important;">
                        <div class="card-body">
                            <h3 class="text-right mt-0 pt-0"><i class="pe-7s-camera"></i></h3>
                            <h1>{{ $total_workshops }}</h1>
                            <h4 class="text-white ml-2">Workshops Completed</h4>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('add_workshop') }}">add workshop</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card cms-info-cards cms-ic-exhibitions" id="cms-ic-exhibitions" style="background-image: linear-gradient(to bottom, rgba(77, 90, 153, 0.76), rgba(43, 10, 15, 0.89)), url('./images/card-exhibition.jpg') !important;">
                        <div class="card-body">
                            <h3 class="text-right mt-0 pt-0"><i class="pe-7s-look"></i></h3>
                            <h1>{{ $total_exhibitions }}</h1>
                            <h4 class="text-white ml-2">Exhibitions Done</h4>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('add_exhibition') }}">add exhibition</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card cms-db-profile-card">
                        <div class="card-header">
                            <h3>Artist's Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="center">
                                            <img src="{{ asset('/artists/') }}/{{ $artist->filepath }}" alt="Artist Profile Picture"/>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                            <h3>{{ $artist->name }}</h3>
                                            <h5>{{ $artist->dob }} ({{ $age }})</h5>
                                            <h5>
                                                @foreach($alumni as $alum)
                                                    {{$alum}}{{ __(", ") }}
                                                @endforeach
                                            </h5>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-12">
                                    <div class="row">
                                        <h4>Artist Bio</h4>
                                        <p class="bio">{{ $artist->bio }}</p>
                                    </div>
                                    <br/><br/>
                                    <div class="row">
                                        <h4>The Year's Statement</h4>
                                        <p class="bio">{{ $artist->statement }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!--  Charts Plugin -->
<script src="{{ asset('js/cms/chartist.min.js') }}"></script>