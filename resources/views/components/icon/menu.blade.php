@props([
    'width' => 16,
    'height' => 16
])
<svg
    width="{{ $width }}" height="{{ $height }}"
    viewBox="0 0 24 24"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    {{ $attributes ?? '' }}
>
<path
  d="M2 7H22M2 12H22M2 17H22"
  stroke="currentColor"
  stroke-width="1.5"
/>
</svg>
