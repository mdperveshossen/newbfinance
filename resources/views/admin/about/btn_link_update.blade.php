@extends('layouts.dashboard_app')
@section('title')
    Update | About Btn Link | Dashboard
@endsection
@section('btn')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('aboutbtnlink') }}">About Btn Link</a>
        <a class="breadcrumb-item active">Update About Btn Link</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>About Btn Link</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    @if (session('link_update'))
                        <div class="alert alert-success">
                            {{ session('link_update') }}
                        </div>
                    @endif
                    <form action="{{ route('aboutbtnlinkupdatepost', $info->id) }}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="btn_link" value="{{ $info->btn_link }}">
                        <br>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection