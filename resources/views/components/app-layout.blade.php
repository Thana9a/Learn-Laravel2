@props(['title' => '', 'bodyClass' => null])
<x-base-layout :$title :$bodyClass>
    <x-layouts.header />
    {{ $slot }}
    @isset($footerLinks)
        <footer>
            {{ $footerLinks }}
        </footer>
    @endisset
</x-base-layout>
