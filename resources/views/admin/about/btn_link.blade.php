@extends('layouts.dashboard_app')
@section('title')
    About Btn Link | Dashboard
@endsection
@section('btn')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">About Btn Link</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>About Btn Link</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Btn name</th>
                                <th>Btn Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($btn_link as $link)
                            <tr>
                                <td>{{ $link->link_name }}</td>
                                <td>{{ $link->btn_link }}</td>
                                <td>
                                    <a href="{{ route('aboutbtnlinkupdate', $link->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection