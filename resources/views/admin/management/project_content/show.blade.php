@extends('template.content')
@section('content')

<div class="row mb-3">
    <div class="col-sm-12">
      <a href="{{url('admin/project_content/'.$row->project_id)}}"><i class="mdi mdi-chevron-left"></i> back to menu</a>
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
                        <td>projects</td>
                        <td>:</td>
                        <td>{{$row->projects}}</td>
                    </tr>
                    <tr>
                        <td>title</td>
                        <td>:</td>
                        <td>{{$row->title}}</td>
                    </tr>
                    <tr>
                        <td>subtitle</td>
                        <td>:</td>
                        <td>{{$row->subtitle}}</td>
                    </tr>
                    <tr>
                        <td>content</td>
                        <td>:</td>
                        <td>@php echo $row->content; @endphp</td>
                    </tr>
                    <tr>
                        <td>link</td>
                        <td>:</td>
                        <td>{{$row->link}}</td>
                    </tr>
                    <tr>
                        <td>icon</td>
                        <td>:</td>
                        <td>{{$row->icon}}</td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>:</td>
                        <td>{{$row->type}}</td>
                    </tr>
                </table>
              </div>

              <hr>
                <div class="row mt-20">
                  <div class="col-sm-12">
                      <a class="btn btn-success" href="{{url('admin/project_content/'.$row->project_id)}}">Back</a>
                  </div>
                </div>

            </div>
          </div>
        </div>
    </div>


@endsection