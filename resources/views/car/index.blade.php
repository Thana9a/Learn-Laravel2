<x-app-layout title="My Cars" bodyClass="page-my-cars">
    <main class="container">
        <div class="header-actions">
            <h1>My Cars</h1>
            <a href="{{ Route::has('car.create') ? route('car.create') : '#' }}" class="btn btn-primary">Add New Car</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Car</th>
                    <th>Created At</th>
                    <th>Published</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cars ?? [] as $car)
                    <tr>
                        <td>
                            <img src="{{ $car->primaryImage?->image_path ?? '/image/placeholder.png' }}" width="80" alt="Car">
                        </td>
                        <td>{{ $car->year ?? '' }} {{ $car->maker->name ?? '' }} {{ $car->model->name ?? '' }}</td>
                        <td>{{ method_exists($car, 'getCreateDate') ? $car->getCreateDate() : $car->created_at }}</td>
                        <td>{{ $car->published_at ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ Route::has('car.edit') ? route('car.edit', $car) : '#' }}" class="btn btn-sm btn-info">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center padding-large">
                            You don't have cars yet.
                            <a href="{{ Route::has('car.create') ? route('car.create') : '#' }}">Add new car</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if(isset($cars) && method_exists($cars, 'links'))
            {{ $cars->onEachSide(1)->links() }}
        @endif
    </main>
</x-app-layout>
