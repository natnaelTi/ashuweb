@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">
                            @if (request()->routeIs('edit_exhibition') && isset($exhibition))
                                Edit Exhibition
                            @else
                                Add Exhibition
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
                        <form method="post" name="exhibition_form" action="{{$route ?? route('store_exhibition')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <label for="title">Title</label>
                                    <input class="form-control" type="text" id="title" name="title" placeholder="Enter exhibition title" value="{{ old('title') ?? $exhibition['title'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label for="statement">Statement</label>
                                    <textarea class="form-control" type="text" id="statement" name="statement" placeholder="Enter curator's statement of the exhibition" value="{{ old('statement') ?? $exhibition['statement'] ?? '' }}">{{ old('statement') ?? $exhibition['statement'] ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="start_date">Start Date</label>
                                        <input class="form-control" type="date" id="start_date" name="start_date" placeholder="Starting Date of Exhibition" value="{{ old('start_date') ?? $exhibition['start_date'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="end_date">End Date</label>
                                    <input class="form-control" type="date" id="end_date" name="end_date" placeholder="Closing Date of Exhibition" value="{{ old('end_date') ?? $exhibition['end_date'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="location">Location</label>
                                    <input class="form-control" type="text" id="location" name="location" placeholder="Exhibition's Location" value="{{ old('location') ?? $exhibition['location'] ?? '' }}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="type">Type</label>
                                    <select class="form-control" id="type" name="type" selected="{{ old('type') ?? $exhibition['type'] ?? '' }}">
                                        <option value="solo">Solo Exhibition</option>
                                        <option value="group">Group Exhibition</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" type="text" id="description" name="description" placeholder="Enter a brief description of the exhibition." value="{{ old('description') ?? $exhibition['description'] ?? '' }}">{{ old('description') ?? $exhibition['description'] ?? '' }}</textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="filepath">Installation Views</label><br/>
                                    <label class="btn btn-secondary" for="filepath">
                                        <span class="my-2">Upload Installation Images</span>
                                        <input type="file" class="hidden form-control" id="filepath" name="filepath"/>
                                    </label>
                                    <h6 class="text-xs uppercase" id="filepath">
                                        <!-- Uploaded file's filename will appear here -->
                                    </h6>
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
