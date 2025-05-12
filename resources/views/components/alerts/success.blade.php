<div class="my-3">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
</div>