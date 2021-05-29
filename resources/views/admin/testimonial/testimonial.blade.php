@extends('layouts.dashboard_app')
@section('title')
    Testimonials  | deshboard
@endsection
@section('testimonial')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item active">Testimonial</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Testimonials</h5>
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
                        <h3>Add a Testimonial</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.testi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Review</label>
                                <textarea name="description" class="form-control" id="editor"rows="8" placeholder="Enter Review"></textarea>
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
                  <th>Social Name</th>
                  <th>Social Link</th>
                  <th>updated At</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($socials as $social)


                  <tr>
                    <td>{!! $social->description !!}</td>
                    <td>
                        <img width="250px" src="{{ asset('uploads/testimonial') }}/{{ $social->photo }}" class="img-fluid" alt="">
                    </td>
                    <td>{{ $social->created_at }}</td>
                    <td>
                    <a href="{{ route('home.testi.delete',$social->id) }}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('home.testi.show',$social->id) }}" class="btn btn-info">Update</a>
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

