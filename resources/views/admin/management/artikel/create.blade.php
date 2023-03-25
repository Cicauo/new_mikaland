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
          <form class="forms-sample" method="POST" action="{{url('admin/artikel/store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

              <label for="title">{{Helper::uc('title')}}</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="title" required>
            </div>

              <div class="form-group">
                <label for="category">{{Helper::uc('category')}}</label>
                <select class="form-control" name="artikel_category_id" id="artikel_category_id" required>
                  @foreach ($category as $categorys)
                    <option value="{{$categorys->id}}">{{$categorys->category}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="content">{{Helper::uc('content')}}</label>
                <textarea id="content" name="content"></textarea>
              </div>

              <div class="form-group" style="margin-top: 10px">
                <label for="description">{{Helper::uc('image')}}</label>
                <input type="file" name="image">
            </div>


            <hr>
            
            <div class="form-group mt-20">
              <a class="btn btn-success" href="{{url('admin/artikel')}}"><i class="mdi mdi-arrow-left-thick"></i>&nbsp;Back</a>
                <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-content-save"></i>&nbsp;Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
</div>


@push('js')

 <!-- TinyMCE -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script>

<script src="https://cdn.tiny.cloud/1/0el4n01c6kp1p847l54ghx1wkxjadb3pe3p1bk1orbvnq5wx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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