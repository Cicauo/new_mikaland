@extends('template.content')
@section('content')


<div class="mb-3">
  <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="justify-content: start">
        <a class="btn btn-primary btn-sm" href="{{url('admin/modules/create')}}"><i class='bx bx-plus'></i>&nbsp;add data</a>
        </div>
    </nav>
  </div>

    <div class="row">
        <div class="col-sm-12">
            
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{$title}}</h4>
                    <div class="table-responsive">
                      <table class="table table" id="tabel">
                        <thead>
                          <tr>
                            <th>name</th>
                            <th>icon</th>
                            <th>middleware</th>
                            <th>controller</th>
                            <th>model</th>
                            <th>table</th>
                            <th>status</th>
                            <th>folder controller</th>
                            <th>folder storage</th>
                            <th>folder model</th>
                            <th>Settings ID</th>
                            <th>generate modules</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($cms_modules as $key)
                          <tr>
                            <td>{{$key->name}}</td>
                            <td><i class="bx {{$key->icon}}"></i></td>
                            <td>{{$key->middleware}}</td>
                            <td>{{$key->controller}}</td>
                            <td>{{$key->model}}</td>
                            <td>{{$key->table}}</td>
                            <td>{{$key->status}}</td>
                            <td>{{$key->folder_controller}}</td>
                            <td>{{$key->folder_storage}}</td>
                            <td>{{$key->folder_model}}</td>
                            <td>{{$key->cms_settings_name}}</td>
                            <td><a href="{{url('admin/modules/generate/'.$key->id)}}" class="btn btn-sm btn-success">klik generate</a></td>
                            <td>
                              <a href="{{url('admin/modules/show/'.$key->id)}}" class="btn btn-sm btn-primary">detail</a>
                              <a href="{{url('admin/modules/edit/'.$key->id)}}" class="btn btn-sm btn-warning">edit</a>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/modules/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

        </div>
    </div>

    @push('js')
    <script>
      $(document).ready( function () {
        $('#tabel').DataTable({
          "pageLength": 25,
             searching: true,
             ordering:  true,
             paging: true,   
             "order": [[1, 'desc']],
             "columnDefs": [
                { "type": "date", "targets": [1] }//date column formatted like "03/23/2018 10:25:13 AM".
              ],     
        });
    });
    </script>
@endpush

@endsection