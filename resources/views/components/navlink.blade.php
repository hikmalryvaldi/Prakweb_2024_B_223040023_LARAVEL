<a {{ $attributes }} class="{{ request()->is($attributes->get('href')) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-base font-medium" aria-current="page">{{ $slot }}</a>

