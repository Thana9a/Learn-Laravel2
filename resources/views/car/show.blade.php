<x-app-layout :title="($car->maker->name ?? '') . ' ' . ($car->model->name ?? '')">
    <main class="container page-car-details">
        <div class="car-details-header">
            <h1>{{ $car->year ?? '' }} {{ $car->maker->name ?? '' }} {{ $car->model->name ?? '' }}</h1>
            <p>{{ $car->city->name ?? '' }} &bull; {{ $car->published_at ?? '' }}</p>
        </div>
        <div class="car-gallery">
            <div class="primary-image">
                <img src="{{ $car->primaryImage?->image_path ?? '/image/placeholder.png' }}" alt="Car Image">
            </div>
            <div class="thumbnails">
                @foreach ($car->images ?? [] as $image)
                    <img src="{{ $image->image_path }}" alt="Thumbnail">
                @endforeach
            </div>
        </div>
        <div class="car-specs-grid">
            <div class="car-overview">
                <h3>Specifications</h3>
                <ul class="specs-list">
                    <x-car-specification :value="$car->features?->air_conditioning">Air Conditioning</x-car-specification>
                    <x-car-specification :value="$car->features?->power_windows">Power Windows</x-car-specification>
                    <x-car-specification :value="$car->features?->power_door_locks">Power Door Locks</x-car-specification>
                    <x-car-specification :value="$car->features?->abs">ABS</x-car-specification>
                    <x-car-specification :value="$car->features?->cruise_control">Cruise Control</x-car-specification>
                    <x-car-specification :value="$car->features?->bluetooth_connectivity">Bluetooth Connectivity</x-car-specification>
                    <x-car-specification :value="$car->features?->remote_start">Remote Start</x-car-specification>
                    <x-car-specification :value="$car->features?->gps_navigation">GPS Navigation</x-car-specification>
                    <x-car-specification :value="$car->features?->heated_seats">Heated Seats</x-car-specification>
                    <x-car-specification :value="$car->features?->climate_control">Climate Control</x-car-specification>
                    <x-car-specification :value="$car->features?->rear_parking_sensors">Rear Parking Sensors</x-car-specification>
                    <x-car-specification :value="$car->features?->leather_seats">Leather Seats</x-car-specification>
                </ul>
                <h3>Detailed Description</h3>
                <div class="description">
                    {!! $car->description ?? '' !!}
                </div>
            </div>
            <div class="car-sidebar">
                <div class="price-box">${{ number_format($car->price ?? 0) }}</div>
                <div class="seller-info">
                    <h4>Seller: {{ $car->owner->name ?? '' }}</h4>
                    <p>Total listings: {{ $car->owner?->cars()?->count() ?? 0 }}</p>
                    <p>Phone: {{ \Illuminate\Support\Str::mask($car->phone ?? '', '*', -3) }}</p>
                </div>
                <div class="car-attributes">
                    <p><strong>VIN:</strong> {{ $car->vin ?? '' }}</p>
                    <p><strong>Mileage:</strong> {{ number_format($car->mileage ?? 0) }} mi</p>
                    <p><strong>Type:</strong> {{ $car->carType->name ?? '' }}</p>
                    <p><strong>Fuel:</strong> {{ $car->fuelType->name ?? '' }}</p>
                    <p><strong>Address:</strong> {{ $car->address ?? '' }}</p>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
