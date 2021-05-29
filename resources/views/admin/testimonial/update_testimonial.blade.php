@extends('layouts.dashboard_app')
@section('title')
    Update | Testimonials  | deshboard
@endsection
@section('testimonial')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item" href="{{ route('home.tesi.index') }}" >Update Testimonial</a>
      <a class="breadcrumb-item active">Update Testimonial</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update  Testimonials</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto">
                <div class="card">
                    @if (session('update_testimonial'))
                        <div class="alert alert-success">
                            {{ session('update_testimonial') }}
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
                        <h3>Update Testimonial</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.testi.update', $info->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Review</label>
                                <textarea name="description" class="form-control" id="editor"rows="8">{!! $info->description !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <img style="height: 50px; width: 50px;" src="{{ asset('uploads/testimonial') }}/{{ $info->photo }}" alt="">
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
 @section('footer_scripts')
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

@endsection

