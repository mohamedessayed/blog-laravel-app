<div class="mb-3">
    <!-- He who is contented is rich. - Laozi -->
@if (session('errorMassage'))
    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('errorMassage') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
</div>