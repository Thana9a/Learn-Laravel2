<x-app-layout title="Home Page">
    <section class="home-slider">
        <!-- Slider banners -->
    </section>
    <main class="container">
        <x-search-form />
        <section class="car-section">
            <h2>Latest Added Cars</h2>
            <div class="car-grid">
                @foreach ($cars ?? [] as $car)
                    <x-car-item :$car />
                @endforeach
            </div>
        </section>
    </main>
</x-app-layout>
