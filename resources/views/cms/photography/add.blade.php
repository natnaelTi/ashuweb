@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">
                            @if (request()->routeIs('edit_photo') && isset($photo))
                                Edit Photo Piece
                            @else
                                Add Photo Piece
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
                        <form method="post" name="photo_form" action="{{$route ?? route('store_photo')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="title">Title</label>
                                    <input class="form-control" type="text" id="title" name="title" placeholder="Enter artwork title" value="{{ old('title') ?? $photo['title'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="width">Resolution: Width</label>
                                    <input class="form-control" type="text" id="width" name="width" placeholder="(WIDTH) cm" value="{{ old('width') ?? $photo['ar_width'] ?? '' }}"/>
                                    <label for="width" class="cms-form-caption">Enter the resolution width (x-dimention) of the photo, in pixels</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="height">Resolution: Height</label>
                                    <input class="form-control" type="text" id="height" name="height" placeholder="(HEIGHT) cm" value="{{ old('height') ?? $photo['ar_height'] ?? '' }}"/>
                                    <label for="height" class="cms-form-caption">Enter the resolution height (y-dimention) of the photo, in pixels</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col">
                                            <label for="filepath">Photo</label><br/>
                                            <label class="btn btn-secondary" for="filepath">
                                                <span class="my-2">Upload Photo</span>
                                                <input type="file" class="hidden form-control" id="filepath" name="filepath"/>
                                            </label>
                                        </div>
                                        <div class="col">
                                            <h6 class="text-xs uppercase" id="filepath">
                                                <!-- Uploaded file's filename will appear here -->
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="year">Year</label>
                                    <input class="form-control" type="number" id="year" name="year" placeholder="Publication Year" value="{{ old('year') ?? $photo['year'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="camera">Camera</label>
                                    <input class="form-control" type="text" id="camera" name="camera" placeholder="Canon EOS Rebel - T3i" value="{{ old('camera') ?? $photo['camera'] ?? '' }}"/>
                                    <label for="width" class="cms-form-caption">Enter the Camera brand with the model you have taken the photo with.</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="iso">ISO</label>
                                    <input class="form-control" type="text" id="iso" name="iso" placeholder="Enter ISO value of the photo" value="{{ old('iso') ?? $photo['iso'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="speed">Shutter Speed</label>
                                    <input class="form-control" type="text" id="speed" name="speed" placeholder="Enter shutter speed used on shoot" value="{{ old('speed') ?? $photo['sh_speed'] ?? '' }}"/>
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
