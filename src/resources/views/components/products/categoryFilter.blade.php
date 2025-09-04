<div class="dashboard-section mb-4">
    <div class="d-flex flex-wrap gap-2">
        <a href="#" class="btn btn-outline-light active">Todas</a>
        @foreach($categories as $category)
            <a href="#" class="btn btn-outline-light">{{ $category }}</a>
        @endforeach
    </div>
</div>

<style>
    .btn-outline-light {
        color: var(--text-light);
        border-color: rgba(255, 255, 255, 0.2);
        transition: background-color 0.3s, color 0.3s;
    }
    .btn-outline-light:hover,
    .btn-outline-light.active {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }
</style>