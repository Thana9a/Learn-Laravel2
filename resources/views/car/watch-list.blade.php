<x-app-layout title="My Favorite Cars">
    <main class="container">
        <div class="flex justify-between items-center">
            <h2>My Favorite Cars</h2>
            @if (isset($cars) && method_exists($cars, 'total') && $cars->total() > 0)
                <div class="pagination-summary">
                    <p>Showing {{ $cars->firstItem() }} to {{ $cars->lastItem() }} of {{ $cars->total() }} results</p>
                </div>
            @endif
        </div>
        <div class="car-grid">
            @foreach ($cars ?? [] as $car)
                <x-car-item :$car :isInWatchlist="true" />
            @endforeach
        </div>
        @if (isset($cars) && method_exists($cars, 'links'))
            {{ $cars->onEachSide(1)->links() }}
        @endif
    </main>
</x-app-layout>
