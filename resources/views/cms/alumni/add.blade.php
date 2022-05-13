@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">
                            @if (request()->routeIs('edit_alumni') && isset($alumni))
                                Edit Alumni
                            @else
                                Add Alumni
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
                        <form method="post" name="alumni_form" action="{{$route ?? route('store_alumni')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <label for="organisation">Organisation</label>
                                    <input class="form-control" type="text" id="organisation" name="organisation" placeholder="Enter the name of the alumni organisation" value="{{ old('organisation') ?? $alumni['organisation'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <label for="year">Year</label>
                                    <input class="form-control" type="number" id="year" name="year" placeholder="Enter fellowship year" value="{{ old('year') ?? $alumni['year'] ?? '' }}"/>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <label for="location">Location</label>
                                    <input class="form-control" type="text" id="location" name="location" placeholder="Enter organisation's location" value="{{ old('location') ?? $alumni['location'] ?? '' }}"/>
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
