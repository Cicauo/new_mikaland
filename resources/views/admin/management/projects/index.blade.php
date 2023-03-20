@extends('template.content')
@section('content')


<div class="mb-3">
  <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="justify-content: start">
        <a class="btn btn-primary btn-sm" href="{{url('admin/projects/create')}}"><i class='bx bx-plus'></i>&nbsp;add data</a>
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
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Content</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        {{-- @php dd($row); @endphp --}}
                          @foreach($row as $key)
                          
                          <tr>
                            <td>{{$key->name}}</td>
                            <td>{{$key->slug}}</td>
                            <td>
                              <a href="{{url('admin/role_access/'.$key->id)}}" class="btn btn-sm btn-success">Content</a>
                            </td>
                            <td>
                              <a href="{{url('admin/projects/show/'.$key->id)}}" class="btn btn-sm btn-primary">detail</a>
                              <a href="{{url('admin/projects/edit/'.$key->id)}}" class="btn btn-sm btn-warning">edit</a>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/projects/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
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