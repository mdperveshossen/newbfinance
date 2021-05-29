@extends('layouts.dashboard_app')
@section('title')
  About |  Method | deshboard
@endsection
@section('method')
    active
@endsection
@section('about')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item active">Method</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Method</h5>
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
                        <h3>Add a Service</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.method.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Heading</label>
                                <input type="text" name="heading" class="form-control" placeholder="Enter Heading">

                            </div>
                            <div class="form-group">
                                <label for=""> Desctiption</label>
                                <textarea name="description" class="form-control" id="editor"rows="8" placeholder="Enter Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
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
                  <th>Heading</th>
                  <th>Description</th>
                  <th>Phot</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($socials as $social)


                  <tr>
                    <td>{{ $social->heading }}</td>
                    <td>{!! $social->description !!}</td>
                    <td>
                        <img width="250px" src="{{ asset('uploads/about/method') }}/{{ $social->photo }}" class="img-fluid" alt="">
                    </td>
                    <td>
                    <a href="{{ route('about.method.delete',$social->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('about.method.show',$social->id) }}" class="btn btn-info">Update</a>
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

