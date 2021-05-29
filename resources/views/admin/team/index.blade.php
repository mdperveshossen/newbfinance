@extends('layouts.dashboard_app')
@section('title')
    Team Member | Dashboard
@endsection
@section('teams')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Team Member</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Team Member</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $heading->heading }}</td>
                                <td>{{ $heading->description }}</td>
                                <td>
                                    <a href="{{ route('teamheadingupdate', $heading->id) }}" class="btn btn-info">Update</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if (session('delete_team'))
                    <div class="alert alert-success">{{ session('delete_team') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->designation }}</td>
                                <td>
                                    <img style="height: 50px; width: 50px;" src="{{ asset('uploads/team') }}/{{ $team->thumbnail }}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('team.update', $team->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('team.destroy', $team->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    @if (session('add_team'))
                    <div class="alert alert-success">{{ session('add_team') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add team member</div>
                        <div class="card-body">
                          <form method="POST" action="{{ route('team.index') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter team member name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Designation</label>
                                <input type="text" class="form-control" name="designation" placeholder="Enter team member designation">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Facebook link</label>
                                <textarea  class="form-control" name="fb_link"  rows="4" placeholder="Enter member facebook link"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Twitter link</label>
                                <textarea  class="form-control" name="twitter_link"  rows="4" placeholder="Enter member twitter link"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin link</label>
                                <textarea  class="form-control" name="linkedin_link"  rows="4" placeholder="Enter member linkedin link"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Instagram link</label>
                                <textarea  class="form-control" name="instagram_link"  rows="4" placeholder="Enter member instagram link"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail">
                              </div>
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