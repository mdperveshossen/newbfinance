@extends('layouts.dashboard_app')
@section('title')
    Update | FAQ | deshboard
@endsection
@section('list')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item" href="{{ route('why.faq.list.index') }}" >Update FAQ</a>
      <a class="breadcrumb-item active">FAQ</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update | FAQ</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto">
                <div class="card">
                    @if (session('update_faq'))
                        <div class="alert alert-success">
                            {{ session('update_faq') }}
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
                        <h3>FAQ</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('why.faq.list.update', $info->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Question</label>
                                <input type="text" name="heading"  class="form-control" value="{{ $info->heading }}">
                            </div>
                            <div class="form-group">
                                <label for="">Answer</label>
                                <textarea name="details"  id="editor" class="form-control" id="" rows="6">{!! $info->details !!}</textarea>
                            </div>
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


