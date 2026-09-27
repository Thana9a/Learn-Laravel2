@props(['title' => '', 'bodyClass' => ''])
<x-base-layout :$title :$bodyClass>
    <main class="page-auth">
        <div class="auth-card">
            <div class="auth-header">
                <a href="{{ Route::has('home') ? route('home') : '/' }}">
                    <img src="/image/logo.svg" alt="Logo" class="logo">
                </a>
            </div>
            {{ $slot }}
            <div class="social-auth-buttons">
                <x-google-button />
                <x-fb-button />
            </div>
            <div class="auth-footer-link">
                {{ $footerLink }}
            </div>
        </div>
    </main>
</x-base-layout>
