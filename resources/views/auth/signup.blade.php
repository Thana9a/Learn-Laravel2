<x-guest-layout title="Sign Up" bodyClass="page-signup">
    <h1>Sign Up</h1>
    <form action="{{ Route::has('signup') ? route('signup') : '#' }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <x-slot:footerLink>
        Already have an account?
        <a href="{{ Route::has('login') ? route('login') : '#' }}">Click here to login</a>
    </x-slot:footerLink>
</x-guest-layout>
