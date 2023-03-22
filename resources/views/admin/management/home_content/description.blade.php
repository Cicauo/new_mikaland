@extends('template.content')
@section('content')

@include('admin.management.home_content.nav')

<div class="mb-3">
    <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="justify-content: start">
          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#create">
              <i class='bx bx-plus'></i>
              &nbsp;add data
          </button>
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
                            <th>content</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($row as $key)
                          <tr>
                            <td>{{$key->name}}</td>
                            <td>{{$key->content}}</td>
                            <td>
                              <button type="button" class="btn btn-warning btn-sm" 
                                data-bs-toggle="modal" data-bs-target="#edit{{$key->id}}">
                                    edit
                                </button>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/home_content/'.$type.'/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
                            </td>
                          </tr>

                          <div class="modal fade" id="edit{{$key->id}}" tabindex="-1" aria-labelledby="create" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Home Description</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                        
                                <form action="{{url('admin/home_content/update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" value="{{$key->id}}" name="id">
                                    <input type="hidden" name="home_id" value="{{$home_id}}">
                                    <input type="hidden" name="type" value="description">
                        
                                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="name">name</label>
                                        <input type="text" value="{{$key->name}}" name="name" class="form-control" id="name" placeholder="name">
                                      </div>

                                      <div class="form-group">
                                        <label for="content">content</label>
                                        <input type="text" name="content" value="{{$key->content}}"  class="form-control" id="content" placeholder="content">
                                    </div>
                        
                                    
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Update changes</button>
                                </div>
                        
                                </form>
                        
                        
                              </div>
                            </div>
                          </div>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

        </div>
    </div>

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Home Description</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    
            <form action="{{url('admin/home_content/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="type" value="description">
                <input type="hidden" name="home_id" value="{{$home_id}}">
            <div class="modal-body">
    
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                </div>

                <div class="form-group">
                    <label for="content">content</label>
                    <input type="text" name="content" class="form-control" id="content" placeholder="content">
                </div>

    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
    
            </form>
    
    
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