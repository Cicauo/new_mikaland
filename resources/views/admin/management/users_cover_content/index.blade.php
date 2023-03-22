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
                            <th>title</th>
                            <th>sorter</th>
                            <th>image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($row as $key)
                          <tr>
                            <td>{{$key->title}}</td>
                            <td>{{$key->sorter}}</td>
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
                              <button type="button" class="btn btn-warning btn-sm" 
                                data-bs-toggle="modal" data-bs-target="#edit{{$key->id}}">
                                    edit
                                </button>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/users_cover_content/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
                            </td>
                          </tr>

                          <div class="modal fade" id="edit{{$key->id}}" tabindex="-1" aria-labelledby="create" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                        
                                <form action="{{url('admin/users_cover_content/update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" value="{{$key->id}}" name="id">
                                    <input type="hidden" value="{{$key->users_cover_id}}" name="users_cover_id">
                        
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="title">title</label>
                                        <input type="text" name="title" value="{{$key->title}}"  class="form-control" id="title" placeholder="title">
                                      </div>
                    
                                      <div class="form-group">
                                        <label for="sorter">sorter</label>
                                        <input type="number" name="sorter" value="{{$key->sorter}}"  class="form-control" id="sorter" placeholder="sorter">
                                      </div>
                    
                                      <div class="form-group">
                                        <label for="content">content</label>
                                        <input type="text" name="content" value="{{$key->content}}"  class="form-control" id="content" placeholder="content">
                                      </div>

                                    <div class="form-group">
                                        <label for="link">link whatsapp</label>
                                        <input type="text" value="{{$key->link}}" name="link" class="form-control" id="link" placeholder="link">
                                      </div>

                                      @if($key->image)
                                      <div class="form-group">
                                        <img src="{{url('storage/'.$key->image)}}" width="200px" alt="">
                                      </div>
                                      @endif

                                      <div class="form-group" style="margin-top: 10px">
                                        <label for="description">{{Helper::uc('image')}}</label>
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-danger me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block"><i class='bx bx-cloud-upload'></i>&nbsp;Upload photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input
                                                type="file"
                                                id="upload"
                                                class="account-file-input"
                                                hidden
                                                accept="image/png, image/jpeg"
                                                name="image"
                                            />
                                            </label>
                                        </div>
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
    
            <form action="{{url('admin/users_cover_content/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
    
            <div class="modal-body">

                <input type="hidden" value="{{$users_cover_id}}" name="users_cover_id">

                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                  </div>

                  <div class="form-group">
                    <label for="sorter">sorter</label>
                    <input type="number" name="sorter" class="form-control" id="sorter" placeholder="sorter">
                  </div>

                  <div class="form-group">
                    <label for="content">content</label>
                    <input type="text" name="content" class="form-control" id="content" placeholder="content">
                  </div>

                  <div class="form-group">
                    <label for="link">link whatsapp</label>
                    <input type="text" name="link" class="form-control" id="link" placeholder="link">
                  </div>

                <div class="form-group" style="margin-top: 10px">
                    <label for="description">{{Helper::uc('image')}}</label>
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-danger me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block"><i class='bx bx-cloud-upload'></i>&nbsp;Upload photo</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input
                            type="file"
                            id="upload"
                            class="account-file-input"
                            hidden
                            accept="image/png, image/jpeg"
                            name="image"
                        />
                        </label>
                    </div>
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