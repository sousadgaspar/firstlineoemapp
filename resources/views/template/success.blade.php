@if (session('message'))
    <div class="success alert-success">
     {{ session('message') }}
    </div>
@endif