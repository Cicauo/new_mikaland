@extends('template.content')
@section('content')

    <div class="row">
        <div class="col-sm-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{$title}}</h4>
              <form class="forms-sample" method="POST" action="{{url('admin/project_content/store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="project_id" value="{{$project_id}}">
                <div class="form-group">

                  <label for="name">{{Helper::uc('title')}}</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="title">
                </div>

                <div class="form-group">

                    <label for="value">{{Helper::uc('subtitle')}}</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtile" required>
                  </div>

                   <div class="form-group">
                    <label for="content">{{Helper::uc('content')}}</label>
                    <textarea class="form-control" name="content" id="content" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="description">{{Helper::uc('type')}}</label>
                   <select class="form-select" aria-label="Default select example" name="type">
                    <option selected>Open this select menu</option>
                    <option >header</option>
                    <option >about</option>
                    <option >home_type</option>
                    <option >facilities</option>
                    <option >site_plan</option>
                    <option >map</option>
                    <option >usp</option>
                    <option >wa</option>
                    </select>
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


                <hr>
                
                <div class="form-group mt-20">
                  <a class="btn btn-success" href="{{url('admin/settings')}}"><i class="mdi mdi-arrow-left-thick"></i>&nbsp;Back</a>
                    <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-content-save"></i>&nbsp;Submit</button>
                </div>

              </form>
            </div>
          </div>
        </div>
    </div>

    @push('js')
    <script>
        ClassicEditor
    .create( document.querySelector( '#content' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
    </script>
    @endpush


@endsection