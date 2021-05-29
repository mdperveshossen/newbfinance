@extends('layouts.dashboard_app')
@section('title')
    Update | social | deshboard
@endsection
@section('social')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item" href="{{ route('home.social.index') }}" >Social media</a>
      <a class="breadcrumb-item active">Update Social media</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Social Media</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
              <div class="col-lg-4 m-auto">
                <div class="card">
                    @if (session('update_social'))
                        <div class="alert alert-success">
                            {{ session('update_social') }}
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
                        <h3>Update Social Media</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.social.update', $info->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Social Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $info->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Social Link</label>
                                <input type="text" name="link"class="form-control"  value="{{ $info->link }}">
                            </div>
                            <div class="form-group">
                                <label for="">Social media icon</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <img style="height: 50px; width: 50px;" src="{{ asset('uploads/social') }}/{{ $info->photo }}" alt="">
                            <br>
                            <br>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="form-control bg-info text-white">
                            </div>
                        </form>
                    </div>
                </div>
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

