@extends('template.content')
@section('content')


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
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        {{-- @php dd($row); @endphp --}}
                          @foreach($row as $key)
                          
                          <tr>
                            <td>{{$key->name}}</td>
                            <td>{{$key->email}}</td>
                            <td>{{$key->message}}</td>
                            <td>
                              <a href="javascript:void(0)" onclick="hapus('{{url('admin/contact/destroy/'.$key->id)}}')" class="btn btn-sm btn-danger">delete</a>
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