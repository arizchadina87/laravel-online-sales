@if (session('success'))
    <div class="alert alert-success" style="padding: 12px; margin-bottom: 16px; background-color: #d4edda; color: #155724; border-radius: 6px;">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" style="padding: 12px; margin-bottom: 16px; background-color: #f8d7da; color: #721c24; border-radius: 6px;">
        {{ session('error') }}
    </div>
@endif