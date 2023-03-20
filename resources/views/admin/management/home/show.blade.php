@extends('template.content')
@section('content')

<div class="row mb-3">
    <div class="col-sm-12">
      <a href="{{url('admin/home_type/')}}"><i class="mdi mdi-chevron-left"></i> back to menu</a>
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
                        <td>name</td>
                        <td>:</td>
                        <td>{{$row->name}}</td>
                    </tr>
                    <tr>
                        <td>projects</td>
                        <td>:</td>
                        <td>{{$row->projects}}</td>
                    </tr>
                    <tr>
                        <td>content</td>
                        <td>:</td>
                        <td>@php echo $row->content; @endphp</td>
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
                      <a class="btn btn-success" href="{{url('admin/home_type/')}}">Back</a>
                  </div>
                </div>

            </div>
          </div>
        </div>
    </div>


@endsection