@extends('layouts.cms')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card cms-artwork-list">
                    <div class="card-header">
                        <h4 class="my-4">Photographs</h4>
                    </div>
                    <div class="card-body cms-profile-exhibition">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="{{ route('add_photo') }}" class="btn btn-primary">Add New Photo Piece</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <table summary="This table shows the artist's current and previous exhibitions in tabular details." class="table table-borderless table-hover dt-responsive">
                                    <thead>
                                        <tr>
                                            <th>PRE</th>
                                            <th>Year</th>
                                            <th>Resolution</th>
                                            <th>Camera</th>
                                            <th>Shoot Settings</th>
                                            <th>--</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($photos as $photo)
                                            <tr>
                                                <td>
                                                    @if($artwork->filepath != 'none.png')
                                                        <img src="{{asset('$photo->filepath')}}"/>
                                                    @else
                                                        No Preview
                                                    @endif
                                                </td>
                                                <td>{{ $photo->title }}</td>
                                                <td>{{ $photo->year }}</td>
                                                <td>{{ $photo->ar_width }}px x {{ $photo->ar_height }}cm</td>
                                                <td>{{ $photo->camera }}</td>
                                                <td>{{ $photo->iso }}ISO - at {{ $photo->sh_speed }}Shutter Speed</td>
                                                <td>
                                                    <a href="{{ route('edit_photo', $photo->id) }}" class="btn btn-warning">Edit</a>
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
