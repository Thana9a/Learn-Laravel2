<x-guest-layout title="Login" bodyClass="page-login">
    <h1>Login</h1>
    <form action="{{ Route::has('login') ? route('login') : '#' }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <x-slot:footerLink>
        Don't have an account?
        <a href="{{ Route::has('signup') ? route('signup') : '#' }}">Click here to create one</a>
    </x-slot:footerLink>
</x-guest-layout>
