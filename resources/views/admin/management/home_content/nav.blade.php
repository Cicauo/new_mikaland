<div class="mb-3">
    <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="justify-content: start">
          <a class="btn @if($type == 'description') btn-success @else btn-secondary @endif btn-sm" href="{{url('admin/home_content/description/'.$home_id)}}"><i class='bx bx-plus'></i>&nbsp;description</a>
          &nbsp;
          <a class="btn @if($type == 'image') btn-success @else btn-secondary @endif btn-sm" href="{{url('admin/home_content/image/'.$home_id)}}"><i class='bx bx-plus'></i>&nbsp;image</a>
          &nbsp;
          <a class="btn @if($type == 'spesifikasi') btn-success @else btn-secondary @endif btn-sm" href="{{url('admin/home_content/spesifikasi/'.$home_id)}}"><i class='bx bx-plus'></i>&nbsp;spesifikasi</a>
          </div>
      </nav>
    </div>