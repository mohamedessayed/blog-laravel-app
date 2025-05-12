<div class="mb-3">
    <!-- He who is contented is rich. - Laozi -->
@if (session('errorMassage'))
    <div class="alert alert-danger">
        {{ session('errorMassage') }}
    </div>
@endif
</div>