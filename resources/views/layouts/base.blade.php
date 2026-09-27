@props(['bodyClass' => '', 'title' => ''])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ? $title . ' | ' : '' }}{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body @if($bodyClass) class="{{ $bodyClass }}" @endif>
    {{ $slot }}
    <script src="/js/app.js"></script>
</body>
</html>
