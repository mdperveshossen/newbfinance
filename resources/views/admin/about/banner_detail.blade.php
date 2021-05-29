@extends('layouts.dashboard_app')
@section('title')
    About  banner detail | Dashboard
@endsection
@section('banner_detail')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">About  banner detail</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>About  banner detail</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Button one</th>
                                <th>Button two</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $detail->heading }}</td>
                                <td>{{ $detail->description }}</td>
                                <td>{{ $detail->btn1 }}</td>
                                <td>{{ $detail->btn2 }}</td>
                                <td>
                                    <a href="{{ route('homeaboutbannerupdate', $detail->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection