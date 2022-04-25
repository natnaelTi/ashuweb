@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">
                            @if (request()->routeIs('edit_profile') && isset($artist) && isset('$alumni'))
                                Edit Artist Profile
                            @else
                                Error
                            @endif
                        </h4>
                    </div>
                    <div class="card-body cms-profile-exhibition">
                        <form method="post" name="profile_form" action="{{$route ?? route('store_profile')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label for="name">Full Name</label>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="Enter artist's full name" value="{{ old('name') ?? $artist['name'] ?? '' }}"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label for="dob">Date of Birth</label>
                                            <input class="form-control" type="date" id="dob" name="dob" placeholder="Select artist's date of birth" value="{{ old('dob') ?? $artist['dob'] ?? '' }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label for="bio">Artist Bio</label>
                                    <textarea class="form-control" type="text" id="bio" name="bio" placeholder="Enter a brief biography of the artist" value="{{ old('bio') ?? $artist['bio'] ?? '' }}">{{ old('bio') ?? $artist['bio'] ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="statement">Artist Statement</label>
                                    <textarea class="form-control" type="text" id="statement" name="statement" placeholder="Enter the current statement of the artist on his carrier and works" value="{{ old('statement') ?? $artist['statment'] ?? '' }}">{{ old('statement') ?? $artist['statement'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
