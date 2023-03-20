@extends('template.content')
@section('content')

@push('css')
    
@endpush

<div class="mb-3">
  <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid" style="justify-content: start">
        <a class="btn btn-primary btn-sm" href="{{url('admin/home_type/create')}}"><i class='bx bx-plus'></i>&nbsp;tambah data</a>
        </div>
    </nav>
  </div>


<div class="row" style="margin-bottom: 30px">
  <div class="col-sm-12">
    <div class="overflow-auto">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$title}}</h4>
        <div class="table-responsive">
          <table class="table table-hover" id="tabel">
            <thead>
              <tr>
                <th>name</th>
                <th>projects</th>
                <th>image</th>
                <th>created_at</th>
                <th>content</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($row as $key)
              <tr>
                <td>{{$key->name}}</td>
                <td>{{$key->projects}}</td>
                <td>
                  @if($key->image)
                  <a data-fslightbox="gallery" href="{{url('storage/'.$key->image)}}">
                      <img src="{{url('storage/'.$key->image)}}" class="img-table" alt="{{$key->name}}">
                  </a>
                  @else
                      <p>no image</p>
                  @endif
              </td>
                <td>{{$key->created_at}}</td>
                <td>
                  <a href="{{url('admin/home_content/description/'.$key->id)}}" class="btn btn-sm btn-success">Content</a>
                </td>
                <td>
                  <a href="{{url('admin/home_type/show/'.$key->id)}}" class="btn btn-sm btn-primary">detail</a>
                  <a href="{{url('admin/home_type/edit/'.$key->id)}}" class="btn btn-sm btn-warning">edit</a>
                  <a href="javascript:void(0)" onclick="hapus('{{url('admin/home_type/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
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