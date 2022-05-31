@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">
                            @if (request()->routeIs('edit_event') && isset($event))
                                Edit Event
                            @else
                                Create Event
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
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label for="filepath">Cover Image</label>
                                            <label class="btn btn-secondary" for="filepath">
                                                <span class="my-2">Upload Cover Image</span>
                                                <input type="file" class="hidden form-control" id="filepath" name="filepath"/>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label for="bio">Topic</label>
                                            <textarea class="form-control ckeditor" type="text" id="topic" name="topic" placeholder="Enter the details of the event" value="{{ old('topic') ?? $event['topic'] ?? '' }}">{{ old('topic') ?? $event['topic'] ?? '' }}</textarea>
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