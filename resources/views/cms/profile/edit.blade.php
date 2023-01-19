@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">
                            @if (request()->routeIs('edit_profile') && isset($artist))
                                Edit Artist Profile
                            @else
                                Error
                            @endif
                        </h4>
                    </div>
                    <div class="card-body cms-profile-exhibition">
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
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="dob">Date of Birth</label>
                                            <input class="form-control" type="date" id="dob" name="dob" placeholder="Select artist's date of birth" value="{{ old('dob') ?? $artist['dob'] ?? '' }}"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="filepath">Image</label>
                                            <label class="btn btn-secondary" for="filepath">
                                                <span class="my-2">Upload Profile Picture</span>
                                                <input type="file" class="hidden form-control" id="filepath" name="filepath"/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label for="bio">Artist Bio</label>
                                    <textarea class="form-control ckeditor" type="text" id="bio" name="bio" placeholder="Enter a brief biography of the artist" value="{{ old('bio') ?? $artist['bio'] ?? '' }}">{{ old('bio') ?? $artist['bio'] ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <label for="statement">Artist Statement</label>
                                    <textarea class="form-control ckeditor" type="text" id="statement" name="statement" placeholder="Enter the current statement of the artist on his carrier and works" value="{{ old('statement') ?? $artist['statment'] ?? '' }}">{{ old('statement') ?? $artist['statement'] ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label for="exhibitions">Exhibitions</label>
                                    <textarea class="form-control ckeditor" type="text" id="exhibitions" name="exhibitions" placeholder="Enter a biref list of exhibitions the artist has done in his carrier" value="{{ old('exhibitions') ?? $artist['exhibitions'] ?? '' }}">{{ old('exhibitions') ?? $artist['exhibitions'] ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label for="prs">PR References</label>
                                    <input class="form-control" type="text" id="prs" name="prs" placeholder="List the artist\'s PR links separated with a comma" value="{{ old('prs') ?? $artist['prs'] ?? '' }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="filepath">Background</label>
                                    <label class="btn btn-secondary" for="filepath">
                                        <span class="my-2">Upload Website Background Image</span>
                                        <input type="file" class="hidden form-control" id="bg" name="bg"/>
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="filepath">Mobile Background</label>
                                    <label class="btn btn-secondary" for="filepath">
                                        <span class="my-2">Upload Website Background Image for Mobile Viewing</span>
                                        <input type="file" class="hidden form-control" id="mobile_bg" name="mobile_bg"/>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection