@extends('layouts.dashboard_app')
@section('title')
  Update |  Method | deshboard
@endsection
@section('method')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item" href="{{ route('about.method.index') }}" >Method</a>
      <a class="breadcrumb-item active">Update method</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update method</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto">
                <div class="card">
                    @if (session('update_method'))
                        <div class="alert alert-success">
                            {{ session('update_method') }}
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
                        <h3>Update method</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.method.update', $info->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Heading</label>
                                <input type="text" name="heading" class="form-control" value="{{ $info->heading }}">

                            </div>
                            <div class="form-group">
                                <label for=""> Desctiption</label>
                                <textarea name="description" class="form-control" id="editor"rows="8" >{!! $info->description !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <img style="height: 50px; width: 100px;" src="{{ asset('uploads/about/method') }}/{{ $info->photo }}" alt="">
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

