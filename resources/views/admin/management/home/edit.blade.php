@extends('template.content')
@section('content')

@push('css')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- TinyMCE -->
    
@endpush

<div class="row">
    <div class="col-sm-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">{{$title}}</h4>
          <form class="forms-sample" method="POST" action="{{url('admin/home_type/update')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$row->id}}">
            <div class="form-group">

              <label for="name">{{Helper::uc('name')}}</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$row->name}}" required>
            </div>

              <div class="form-group">
                <label for="project">{{Helper::uc('project')}}</label>
                <select class="form-control" name="project_id" id="project_id" required>
                  <option value="{{$row->project_id}}">{{$row->projects}}</option>
                  @foreach ($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="content">{{Helper::uc('content')}}</label>
                <textarea id="content" name="content">{{$row->content}}</textarea>
              </div>

            @if($row->image)
              <div class="form-group">
                <img src="{{url('storage/'.$row->image)}}" width="200px" alt="">
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


            <hr>
            
            <div class="form-group mt-20">
              <a class="btn btn-success" href="{{url('admin/home_type')}}"><i class="mdi mdi-arrow-left-thick"></i>&nbsp;Back</a>
                <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-content-save"></i>&nbsp;Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
</div>


@push('js')

 <!-- TinyMCE -->
 <script src="https://cdn.tiny.cloud/1/0el4n01c6kp1p847l54ghx1wkxjadb3pe3p1bk1orbvnq5wx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script>
tinymce.init({
  selector: 'textarea#content',
  height: 500,
  plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'help', 'wordcount'
  ],
  toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});

 </script>

@endpush

@endsection