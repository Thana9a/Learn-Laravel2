<form action="{{ Route::has('car.search') ? route('car.search') : '#' }}" method="GET" class="find-car-form">
    <div class="form-inputs">
        <input type="text" name="keyword" placeholder="Search maker, model..." value="{{ request('keyword') }}">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>
