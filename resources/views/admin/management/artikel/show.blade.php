@extends('template.content')
@section('content')

<div class="row mb-3">
    <div class="col-sm-12">
      <a href="{{url('admin/artikel/')}}"><i class="mdi mdi-chevron-left"></i> back to menu</a>
    </div>
  </div>


    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-description"> {{$title}} </p>
              
              <div class="table-responsive">
                <table class="table table-borderless">
                    <tr>
                        <td>users</td>
                        <td>:</td>
                        <td>{{$row->users}}</td>
                    </tr>
                    <tr>
                      <td>slug</td>
                      <td>:</td>
                      <td>{{$row->slug}}</td>
                    </tr>
                    <tr>
                        <td>title</td>
                        <td>:</td>
                        <td>{{$row->title}}</td>
                    </tr>
                    <tr>
                        <td>category</td>
                        <td>:</td>
                        <td>{{$row->category}}</td>
                    </tr>
                    <tr>
                        <td>content</td>
                        <td>:</td>
                        <td>@php echo $row->content; @endphp</td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>:</td>
                        <td>{{$row->type}}</td>
                    </tr>

                    @if($row->image)
                        <tr>
                            <td>image</td>
                            <td>:</td>
                            <td><img src="{{url('storage/'.$row->image)}}" width="200px" alt=""></td>
                        </tr>
                    @endif

                </table>
              </div>

              <hr>
                <div class="row mt-20">
                  <div class="col-sm-12">
                      <a class="btn btn-success" href="{{url('admin/artikel/')}}">Back</a>
                  </div>
                </div>

            </div>
          </div>
        </div>
    </div>


@endsection