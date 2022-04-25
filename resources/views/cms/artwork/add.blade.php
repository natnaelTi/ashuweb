@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">
                            @if (request()->routeIs('edit_artwork') && isset($artwork))
                                Edit Artwork
                            @else
                                Add Artwork
                            @endif
                        </h4>
                    </div>
                    <div class="card-body cms-profile-exhibition">
                        <form method="post" name="artwork_form" action="{{$route ?? route('store_artwork')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="title">Title</label>
                                    <input class="form-control" type="text" id="title" name="title" placeholder="Enter artwork title" value="{{ old('title') ?? $artwork['title'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="width">Size: Width</label>
                                    <input class="form-control" type="text" id="width" name="width" placeholder="(WIDTH) cm" value="{{ old('width') ?? $artwork['width'] ?? '' }}"/>
                                    <label for="width" style="margin-top: 0 !important; color:cornflowerblue !important; font-size: 8px !important; text-transform: capitalize !important;">Enter the spaital width of he artwork, in centimeters</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="height">Size: Height</label>
                                    <input class="form-control" type="text" id="height" name="height" placeholder="(HEIGHT) cm" value="{{ old('height') ?? $artwork['height'] ?? '' }}"/>
                                    <label for="height" style="margin-top: 0 !important; color:cornflowerblue !important; font-size: 8px !important; text-transform: capitalize !important;">Enter the spaital height of he artwork, in centimeters</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col">
                                            <label for="filepath">Image</label>
                                            <label class="btn btn-secondary" for="filepath">
                                                <span class="my-2">Upload Artwork Image</span>
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
                                    <input class="form-control" type="number" id="year" name="year" placeholder="Publication Year" value="{{ old('year') ?? $artwork['year'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="price">Price</label>
                                    <input class="form-control" type="text" id="price" name="price" placeholder="Artwork Price (USD)" value="{{ old('price') ?? $artwork['price'] ?? '' }}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="type">Type</label>
                                    <select class="form-control" id="type" name="type" selected="{{ old('type') ?? $artwork['type'] ?? '' }}">
                                        <option value="drawing">Drawing</option>
                                        <option value="painting">Painting</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="medium">Medium</label>
                                    <input class="form-control" type="text" id="medium" name="medium" placeholder="Enter medium of effect" value="{{ old('medium') ?? $artwork['medium'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" type="text" id="description" name="description" placeholder="Enter a brief description or statement of artwork" value="{{ old('description') ?? $artwork['description'] ?? '' }}">{{ old('description') ?? $artwork['description'] ?? '' }}</textarea>
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
