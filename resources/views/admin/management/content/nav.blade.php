<div class="mb-3">
    <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="justify-content: start">
          <a class="btn @if($position == 'home') btn-success @else btn-secondary @endif btn-sm" 
          href="{{url('admin/content/home/')}}"><i class='bx bx-plus'></i>&nbsp;content home</a>
          &nbsp;
          <a class="btn @if($position == 'about') btn-success @else btn-secondary @endif btn-sm" 
          href="{{url('admin/content/about/')}}"><i class='bx bx-plus'></i>&nbsp;content home</a>
          &nbsp;
          <a class="btn @if($position == 'contact') btn-success @else btn-secondary @endif btn-sm" 
          href="{{url('admin/content/contact/')}}"><i class='bx bx-plus'></i>&nbsp;content contact</a>
          </div>
      </nav>
    </div>