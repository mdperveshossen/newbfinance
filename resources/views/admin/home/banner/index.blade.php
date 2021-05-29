@extends('layouts.dashboard_app')
@section('title')
    home | banner | deshboard
@endsection
@section('banner')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item active">Home banner</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Home Banner</h5>
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
                        <h3>Update banner</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.bannner.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Banner heading</label>
                                <textarea class="form-control" type="text" name="bnner_heading" id="editor" rows="4">{!! $homebanner->bnner_heading !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <img src="" alt="">
                            <div class="form-group">
                                <input type="submit" value="Submit" class="form-control bg-info text-white">
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            <div class="col-lg-8">
              @if (session('user_delete_status'))
                  <div class="alert alert-danger">
                    {{ session('user_delete_status') }}
                  </div>
              @endif
              <table class="table table-bordered">
                <thead class="bg-prima">
                  <th>Banner heading</th>
                  <th>Banner photo</th>
                  <th>updated At</th>
                </thead>
                <tbody>
                  <tr>
                    <td>{!! $homebanner->bnner_heading !!}</td>
                    <td>
                        <img width="150px" src="{{ asset('uploads/home_banner') }}/{{ $homebanner->photo }}" class="img-fluid" alt="">
                    </td>
                    <td>{{ $homebanner->updated_at }}</td>
                  </tr>

                </tbody>
              </table>
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

