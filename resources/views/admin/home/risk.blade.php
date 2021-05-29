@extends('layouts.dashboard_app')
@section('title')
    Risk Disclosure | deshboard
@endsection
@section('risk')
    active
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}" >Home</a>
      <a class="breadcrumb-item active">Risk Disclosure</a>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>RISK DISCLOSURE</h5>
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
                        <h3>RISK DISCLOSURE</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('why.risk.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Heading</label>
                                <input type="text" name="heading" value="{{ $whynewb->heading }}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Details</label>
                                <textarea name="details"  id="editor" class="form-control" id="" rows="6">{!! $whynewb->details !!}</textarea>
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
                  <th>Update At</th>
                </thead>
                <tbody>


                  <tr>
                    <td>{{ $whynewb->heading }}</td>
                    <td>{!! $whynewb->details !!}</td>
                    <td>{{ $whynewb->updated_at }}</td>
                    {{-- <td><a href="{{ route('why.risk.delete',$whynewb->id) }}" class="btn btn-danger">Delete</a></td> --}}
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

