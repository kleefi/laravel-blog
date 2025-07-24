@props(['type' => 'info', 'message'])

@php
$baseClass = 'mb-4 p-4 text-sm rounded-md border';
$styles = [
'success' => 'text-green-800 bg-green-100 border-green-300',
'error' => 'text-red-800 bg-red-100 border-red-300',
'info' => 'text-blue-800 bg-blue-100 border-blue-300',
];
@endphp

@if ($message)
<div class="{{ $baseClass }} {{ $styles[$type] ?? $styles['info'] }}">
    {{ $message }}
</div>
@endif