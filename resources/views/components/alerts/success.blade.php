<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
</div>