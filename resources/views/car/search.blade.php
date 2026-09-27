<x-app-layout title="Search Results">
    <main class="container">
        <h2>Found {{ isset($cars) && method_exists($cars, 'total') ? $cars->total() : count($cars ?? []) }} cars</h2>
        <div class="car-grid">
            @foreach ($cars ?? [] as $car)
                <x-car-item :$car />
            @endforeach
        </div>
        @if (isset($cars) && method_exists($cars, 'links'))
            {{ $cars->onEachSide(1)->links() }}
        @endif
    </main>
</x-app-layout>
