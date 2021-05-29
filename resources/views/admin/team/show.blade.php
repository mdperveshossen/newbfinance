@extends('layouts.dashboard_app')
@section('title')
   Update | Team Member | Dashboard
@endsection
@section('teams')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('team.index') }}">Team Member</a>
        <a class="breadcrumb-item active">Update Team Member</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Team Member</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_team'))
                    <div class="alert alert-success">{{ session('update_team') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update team member</div>
                        <div class="card-body">
                          <form method="POST" action="{{ route('team.update', $info->id) }}" enctype="multipart/form-data">
                              @csrf
                              @method('PATCH')
                              <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name"  value="{{ $info->name }}">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Designation</label>
                                <input type="text" class="form-control" name="designation"  value="{{ $info->designation }}">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Facebook link</label>
                                <textarea  class="form-control" name="fb_link"  rows="4" >{{ $info->fb_link }}</textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Twitter link</label>
                                <textarea  class="form-control" name="twitter_link"  rows="4" >{{ $info->twitter_link }}</textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin link</label>
                                <textarea  class="form-control" name="linkedin_link"  rows="4" >{{ $info->linkedin_link }}</textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Instagram link</label>
                                <textarea  class="form-control" name="instagram_link"  rows="4" >{{ $info->instagram_link }}</textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail">
                              </div>
                              <img style="height: 50px; width: 50px;" src="{{ asset('uploads/team') }}/{{ $info->thumbnail }}" alt="">
                              <br>
                              <br>
                              <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection