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
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card cms-profile-card">
                    <div class="card-body">
                        <div class="row">
                            <!--<div class="center">-->
                            <!--    <img src="{{asset('artists/'.$artist->filepath)}}" alt="Artist Profile Picture" />-->
                            <!--</div>-->
                            <div class="row text-center">
                                <h3>{{ $artist->name }}</h3>
                                <h5>Age: {{ $age }}</h5>
                                <a href="{{ route('edit_profile', $artist->id) }}" class="btn btn-warning">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cms-profile-card">
                    <div class="card-body">
                        <h4>Artist's Alumni</h4>
                        <ul class="cms-profile-alumni-list">
                            @if (count($alumnis) > 0)
                                @foreach ($alumnis as $alumni)
                                    <li>
                                        <div class="row">
                                            <div class="col">
                                                {{ $alumni->organisation }}
                                            </div>
                                            <div class="col">
                                                {{ $alumni->year }}
                                            </div>
                                            <div class="col">
                                                {{ $alumni->location }}
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('edit_alumni', $alumni->id) }}"><i class="pe-7s-edit"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="{{ route('delete_alumni', $alumni->id) }}"><i class="pe-7s-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <p>No Alumni have been registered yet.</p>
                            @endif
                            <a href="{{ route('add_alumni') }}"><i class="pe-7s-add"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card cms-profile-card">
                    <div class="card-body">
                        <h4 class="my-4">Artist's Bio</h4>
                        <p class="bio" data-read-more="{ visible: false, useStyledContainer: false }">{!! $artist->bio !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card cms-profile-card">
                    <div class="card-body">
                        <h4 class="my-4">{{ $year }}'s Art Statement</h4>
                        <p class="bio" data-read-more="{ visible: false, useStyledContainer: false }">{!! $artist->statement !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="my-4">Exhibitions</h4>
                </div>
                <div class="card-body cms-profile-exhibition">
                    <div class="row">
                        <div class="col-xs-12">
                            <table summary="This table shows the artist's current and previous exhibitions in tabular details." class="table table-borderless table-hover dt-responsive">
                                <caption class="text-center">Ongoing exhibitions are highlighted <span style="color: green !important;">green</span> and exhibitions with no installation views are highlighted <span style="color: orange !important;">orange</span>.</caption>
                                <thead>
                                    <tr>
                                      <th>Title</th>
                                      <th>Year</th>
                                      <th>Type</th>
                                      <th>Status</th>
                                      <th>Statement</th>
                                      <th>Description</th>
                                      <th>Installation Views</th>
                                      <th>--</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($exhibitions) > 0)
                                        @foreach($exhibitions as $exhibition)
                                            <tr>
                                                <td>{{ $exhibition->title }}</td>
                                                <td> 2022
                                                    {{-- {{ \Carbon\Carbon::parse($exhibition->end_date)->format('Y M d') }} --}}
                                                </td>
                                                <td>{{ $exhibition->type }}</td>
                                                {{-- @if(\Carbon\Carbon::createFromFormat('Y-M-d', $exhibition->end_date)->isPast()) --}}
                                                    <td>Ended</td>
                                                {{-- @endif --}}
                                                {{-- @if(\Carbon\Carbon::createFromFormat('Y-M-d', $exhibition->start_date)->isPast() && \Carbon\Carbon::createFromFormat('Y-M-d', $exhibition->end_date)->isFuture()) --}}
                                                    {{-- <td style="color: green !important;">Ongoing</td> --}}
                                                {{-- @endif --}}
                                                {{-- @if(\Carbon\Carbon::createFromFormat('Y-M-d', $exhibition->start_date)->isFuture()) --}}
                                                    {{-- <td>Upcoming</td> --}}
                                                {{-- @endif --}}
                                                <td>Some...</td>
                                                <td>Some...</td>
                                                <td>none</td>
                                                <td>
                                                    <a href="{{ route('edit_exhibition', $exhibition->id) }}" class="btn btn-warning">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <p class="text-center">No exhibitions have been recorded yet.</p>
                                        </tr>
                                    @endif
                                    <tr>
                                        <a class="btn btn-primary" href="{{ route('add_exhibition') }}">Add Exhibition</a>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    var readJsInstance = readJs_Initialize({
        "maximumLengthOfText": 20,
        "onReadMore": onReadMore,
        "onReadLess": onReadLess,
        "useStyledContainers": false
    });

    function onReadMore() {
        document.title = "Read.js - Reading More";
    }

    function onReadLess() {
        document.title = "Read.js - Reading Less";
    }
</script>