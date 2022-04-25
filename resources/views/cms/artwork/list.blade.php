@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">Artworks</h4>
                    </div>
                    <div class="card-body cms-profile-exhibition">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="{{ route('add_artwork') }}" class="btn btn-primary">Add New Artwork</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <table summary="This table shows the artist's current and previous exhibitions in tabular details." class="table table-borderless table-hover dt-responsive">
                                    <caption class="text-center">Ongoing exhibitions are highlighted <span style="color: green !important;">green</span> and exhibitions with no installation views are highlighted <span style="color: orange !important;">orange</span>.</caption>
                                    <thead>
                                        <tr>
                                            <th>PRE</th>
                                            <th>Title</th>
                                            <th>Size</th>
                                            <th>Medium</th>
                                            <th>Year</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>--</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($artworks as $artwork)
                                            <tr>
                                                <td>
                                                    @if($artwork->filepath != 'none.png')
                                                        <img src="{{asset('$artwork->filepath')}}"/>
                                                    @else
                                                        No Preview
                                                    @endif
                                                </td>
                                                <td>{{ $artwork->title }}</td>
                                                <td>{{ $artwork->width }}cm x {{ $artwork->height }}cm</td>
                                                <td>{{ $artwork->medium }}</td>
                                                <td>{{ $artwork->year }}</td>
                                                <td>{{ $artwork->type }}</td>
                                                <td>{{ $artwork->price }}USD</td>
                                                <td>{{ $artwork->description }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
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
