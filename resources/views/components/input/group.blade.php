@props([
    'cols' => 4,
    'lcols' => 2
])

<div class="col-span-{{ $cols }} col-span-{{ $lcols }}">
    {{ $slot }}
</div>
