@extends('template.content')
@section('content')

    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-description"> {{$title}} </p>
              
              <div class="table-responsive">
                <table class="table table-borderless">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{$row->name}}</td>
                    </tr>
                    <tr>
                        <td>Slug</td>
                        <td>:</td>
                        <td>{{$row->slug}}</td>
                    </tr>
                </table>
              </div>

              <hr>
                <div class="row mt-20">
                  <div class="col-sm-12">
                      <a class="btn btn-success" href="{{url('admin/projects')}}">Back</a>
                  </div>
                </div>

            </div>
          </div>
        </div>
    </div>


@endsection