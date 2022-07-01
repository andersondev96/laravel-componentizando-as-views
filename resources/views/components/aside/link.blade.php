@props([
    'current'
])

<a {{ $attributes->except('class') }}
    class="{{ empty($current) ? 'text-gray-900 hover:text-gray-900 hover:bg-gray-50' : 'bg-gray-50 text-orange-600 hover:bg-white' }} group rounded-md px-3 py-2 flex items-center text-sm font-medium">
    <svg xmlns="http://www.w3.org/2000/svg" class="{{ empty($current) ? 'text-gray-400 group-hover:text-gray-500' : 'text-orange-500'}} flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
</svg>
    <span class="truncate">
        {{ $slot }}
    </span>
</a>
