@extends('layouts.dashboard_app')
@section('title')
    home | social | deshboard
@endsection
@section('social')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item active">Social media</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Home Social Media</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
              <div class="col-lg-4">
                <div class="card">
                    @if (session('home_banner_added'))
                        <div class="alert alert-success">
                            {{ session('home_banner_added') }}
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                    <div class="card-header card-header-default bg-info">
                        <h3>Add a Social Media</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.social.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Social Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Social media name">
                            </div>
                            <div class="form-group">
                                <label for="">Social Link</label>
                                <input type="text" name="link"class="form-control" placeholder="Enter Social media link">
                            </div>
                            <div class="form-group">
                                <label for="">Social media icon</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="form-control bg-info text-white">
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            <div class="col-lg-8">
              @if (session('delete_item'))
                  <div class="alert alert-danger">
                    {{ session('delete_item') }}
                  </div>
              @endif
              <table class="table table-bordered">
                <thead class="bg-prima">
                  <th>Social Name</th>
                  <th>Social Link</th>
                  <th>updated At</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($socials as $social)


                  <tr>
                    <td>{{ $social->name }}</td>
                    <td>
                        <img width="50px" src="{{ asset('uploads/social') }}/{{ $social->photo }}" class="img-fluid" alt="">
                    </td>
                    <td>{{ $social->updated_at }}</td>
                    <td>
                    <a href="{{ route('home.social.delete',$social->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('home.social.show',$social->id) }}" class="btn btn-info">Update</a>
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

{{-- @section('footer_scripts')
<script type="text/javascript">
  $(document).ready(function(){
    ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
  })
</script>

@endsection--}}

