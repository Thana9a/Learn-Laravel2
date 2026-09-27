@props(['car', 'isInWatchlist' => false])
<div class="car-item">
    <a href="{{ Route::has('car.show') ? route('car.show', $car) : '#' }}" class="car-item-image">
        <img src="{{ $car->primaryImage?->image_path ?? '/image/placeholder.png' }}" alt="{{ $car->maker->name ?? '' }} {{ $car->model->name ?? '' }}">
    </a>
    <div class="car-item-body">
        <div class="car-item-location">{{ $car->city->name ?? '' }}</div>
        <h3 class="car-item-title">
            <a href="{{ Route::has('car.show') ? route('car.show', $car) : '#' }}">{{ $car->year }} {{ $car->maker->name ?? '' }} {{ $car->model->name ?? '' }}</a>
        </h3>
        <div class="car-item-price">${{ number_format($car->price ?? 0) }}</div>
        <div class="car-item-meta">
            <span>{{ $car->carType->name ?? '' }}</span> &bull; <span>{{ $car->fuelType->name ?? '' }}</span>
        </div>
    </div>
    <button class="btn-heart text-primary">
        {{-- Outlined Heart --}}
        <svg class="{{ $isInWatchlist ? 'hidden' : '' }}" width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
        </svg>
        {{-- Filled Heart --}}
        <svg class="{{ !$isInWatchlist ? 'hidden' : '' }}" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
        </svg>
    </button>
</div>
