@extends('layouts.dashboard_app')
@section('title')
    Update About  banner detail | Dashboard
@endsection
@section('banner_detail')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('homeaboutbanner') }}">about banner detail</a>
        <a class="breadcrumb-item active">Update about banner detail</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update about  banner detail</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_detail'))
                    <div class="alert alert-success">{{ session('update_detail') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update about banner detail</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('homeaboutbannerupdatepost', $info->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $info->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <textarea class="form-control" name="description" rows="4">{{ $info->description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Button link 1</label>
                          <textarea class="form-control" name="btn1" rows="4">{{ $info->btn1 }}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Button link 2</label>
                          <textarea class="form-control" name="btn2" rows="4">{{ $info->btn2 }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Change Logo</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection