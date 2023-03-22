@extends('template.content')
@section('content')

<div class="row mb-3">
    <div class="col-sm-12">
      <a href="{{url('admin/project_content/'.$row->project_id)}}"><i class="mdi mdi-chevron-left"></i> back to menu</a>
    </div>
  </div>


    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{$title}}</h4>
              <form class="forms-sample" method="POST" action="{{url('admin/project_content/update')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$row->id}}">
                <input type="hidden" name="project_id" value="{{$row->project_id}}">

                <div class="form-group">
                  <label for="name">{{Helper::uc('title')}}</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{$row->title}}">
                </div>

                <div class="form-group">

                    <label for="value">{{Helper::uc('subtitle')}}</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtile" value="{{$row->subtitle}}">
                  </div>

                   <div class="form-group">
                    <label for="content">{{Helper::uc('content')}}</label>
                    <textarea class="form-control" name="content" id="content" rows="10">{{$row->content}}</textarea>
                </div>

                <div class="form-group">
                  <label for="link">{{Helper::uc('link')}}</label>
                  <input type="text" class="form-control" id="link" name="link" placeholder="link" value="{{$row->link}}">
                </div>

                <div class="form-group">
                  <label for="icon">{{Helper::uc('icon')}}</label>
                  <input type="text" class="form-control" id="icon" name="icon" placeholder="icon" value="{{$row->icon}}">
                </div>

                <div class="form-group">
                    <label for="description">{{Helper::uc('type')}}</label>
                   <select class="form-select" aria-label="Default select example" name="type">
                    <option selected value="{{$row->type}}">{{$row->type}}</option>
                    <option >header</option>
                    <option >about</option>
                    <option >detail</option>
                    <option >facilities</option>
                    <option >site_plan</option>
                    <option >map</option>
                    <option >usp</option>
                    <option >whatsapp</option>
                    </select>
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
                  <a class="btn btn-success" href="{{url('admin/project_content')}}"><i class="mdi mdi-arrow-left-thick"></i>&nbsp;Back</a>
                    <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-content-save"></i>&nbsp;Submit</button>
                </div>

              </form>
            </div>
          </div>
        </div>
    </div>

    @push('js')
    <script src="https://cdn.tiny.cloud/1/0el4n01c6kp1p847l54ghx1wkxjadb3pe3p1bk1orbvnq5wx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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