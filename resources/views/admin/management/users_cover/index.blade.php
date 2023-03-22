@extends('template.content')
@section('content')

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
                            <th>users</th>
                            <th>slug</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($row as $key)
                          <tr>
                            <td>{{$key->users}}</td>
                            <td>{{$key->slug}}</td>
                            <td>
                              <button type="button" class="btn btn-warning btn-sm" 
                                data-bs-toggle="modal" data-bs-target="#edit{{$key->id}}">
                                    edit
                                </button>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/users_cover/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
                            </td>
                          </tr>

                          <div class="modal fade" id="edit{{$key->id}}" tabindex="-1" aria-labelledby="create" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                        
                                <form action="{{url('admin/users_cover/update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" value="{{$key->id}}" name="id">
                        
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="link">link whatsapp</label>
                                        <input type="text" value="{{$key->link}}" name="link" class="form-control" id="link" placeholder="link">
                                      </div>

                                      <div class="form-group">
                                        <label for="users">{{Helper::uc('users')}}</label>
                                        <select class="form-control" name="users_id" id="users_id" required>
                                            <option value="{{$key->users_id}}">{{$key->users}}</option>
                                          @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                          @endforeach
                                        </select>
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
              <h1 class="modal-title fs-5" id="exampleModalLabel">{{$title}}</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    
            <form action="{{url('admin/users_cover/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
    
            <div class="modal-body">
    
                <div class="form-group">
                    <label for="link">link whatsapp</label>
                    <input type="text" name="link" class="form-control" id="link" placeholder="link">
                  </div>

                  <div class="form-group">
                    <label for="users">{{Helper::uc('users')}}</label>
                    <select class="form-control" name="users_id" id="users_id" required>
                      @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                    </select>
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