@extends('template.content')
@section('content')

<div class="row mb-3">
  <div class="col-sm-12">
    <a href="{{url('admin/projects')}}"><i class="mdi mdi-chevron-left"></i> back to menu</a>
  </div>
</div>


<div class="mb-3">
  <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="justify-content: start">
        <a class="btn btn-primary btn-sm" href="{{url('admin/project_content/create/'.$project_id)}}"><i class='bx bx-plus'></i>&nbsp;add data</a>
        </div>
    </nav>
  </div>

  <div class="mb-3">
    <div class="card-body">
      <div class="row">
        <!-- List group Numbered -->
        <div class="col-sm-12">
          <div class="demo-inline-spacing mt-3">
            <ul class="list-group">
              <li class="list-group-item">Project : {{$parent->name}}</li>
              <li class="list-group-item">Link    : {{$parent->slug}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
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
                            <th>Project ID</th>
                            <th>Type</th>
                            <th>title</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($row as $key)
                          <tr>
                            <td>{{$key->projects}}</td>
                            <td>{{$key->type}}</td>
                            <td>{{$key->title}}</td>
                            <td>
                                @if($key->image)
                                <a data-fslightbox="gallery" href="{{url('storage/'.$key->image)}}">
                                    <img src="{{url('storage/'.$key->image)}}" class="img-table" alt="{{$key->name}}">
                                </a>
                                @else
                                    <p>no image</p>
                                @endif
                            </td>
                            <td>
                              <a href="{{url('admin/project_content/show/'.$key->id)}}" class="btn btn-sm btn-primary">detail</a>
                              <a href="{{url('admin/project_content/edit/'.$key->id)}}" class="btn btn-sm btn-warning">edit</a>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/project_content/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
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