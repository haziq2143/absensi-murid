<li class="mr-3 flex-1">
    <a {{ $attributes }}
        class="block py-1 md:py-3 pl-1 align-middle text-slate-700 no-underline hover:text-yellow-500 border-b-2 border-blue-600">
        <i class="{{ $icon }} pr-0 md:pr-3 text-yellow-500"></i><span
            class="pb-1 md:pb-0 text-xs md:text-base text-slate-700 md:text-slate-700 block md:inline-block">{{ $slot }}</span>
    </a>
</li>
