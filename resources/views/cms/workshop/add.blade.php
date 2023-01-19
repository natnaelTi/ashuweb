@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">
                            @if (request()->routeIs('edit_workshop') && isset($workshop))
                                Edit Workshop
                            @else
                                Add Workshop
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
                        <form method="post" name="workshop_form" action="{{$route ?? route('store_workshop')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <label for="title">Title</label>
                                    <input class="form-control" type="text" id="title" name="title" placeholder="Enter workshop title" value="{{ old('title') ?? $workshop['title'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <label for="statement">Description</label>
                                    <textarea class="form-control" type="text" id="statement" name="statement" placeholder="Enter a short brief about the workshop" value="{{ old('description') ?? $workshop['description'] ?? '' }}">{{ old('statement') ?? $exhibition['statement'] ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="start_date">Start Date</label>
                                        <input class="form-control" type="date" id="start_date" name="start_date" placeholder="Starting Date of Workshop" value="{{ old('start_date') ?? $workshop['start_date'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="end_date">End Date</label>
                                    <input class="form-control" type="date" id="end_date" name="end_date" placeholder="Closing Date of Workshop" value="{{ old('end_date') ?? $workshop['end_date'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="location">Location</label>
                                    <input class="form-control" type="text" id="location" name="location" placeholder="Workshop's Location" value="{{ old('location') ?? $workshop['location'] ?? '' }}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="location">External Links</label>
                                    <input class="form-control" type="text" id="link" name="link" placeholder="Add external links if there are any" value="{{ old('link') ?? $workshop['link'] ?? '' }}"/>
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
