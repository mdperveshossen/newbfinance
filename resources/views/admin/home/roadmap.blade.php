@extends('layouts.dashboard_app')
@section('title')
  roadmap | deshboard
@endsection
@section('roadmap')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item active">Roadmap</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Roadmap</h5>
      </div><!-- sl-page-title -->
        <div class="container">
          <div class="row">
              <div class="col-lg-4">
                <div class="card">
                    @if (session('why_statu'))
                        <div class="alert alert-success">
                            {{ session('why_statu') }}
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
                        <h3>Roadmap </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('why.roadmap.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Heading</label>
                                <input type="text" name="heading"  class="form-control" placeholder="Enter heading">
                            </div>
                            <div class="form-group">
                                <label for="">Details</label>
                                <textarea name="details"  id="editor" class="form-control" id="" rows="6" placeholder="Enter Details"></textarea>
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
                  <th>Details</th>
                  <th>Created At</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($whynewbs as $whynewb)


                  <tr>
                    <td>{{ $whynewb->heading }}</td>
                    <td>{!! $whynewb->details !!}</td>
                    <td>{{ $whynewb->created_at }}</td>
                    <td>
                      <form action="{{ route('why.roadmap.delete',$whynewb->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      <a href="{{ route('why.roadmap.show', $whynewb->id) }}" class="btn btn-info">Update</a>
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

