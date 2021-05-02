<div class="border-2 border-blue-600 rounded-full px-8 py-2 mb-8">
    <div class="flex justify-between items-center">
        <h3 class="text-2xl">{{ $name }} <span class="text-sm text-gray-400">-{{ $date }}-</span></h3>
        @if(auth()->check())
        <button class="focus:outline-none flex text-gray-400" wire:click="like">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="{{ $like ? 'red' : 'white' }}" viewBox="0 0 24 24" stroke="{{ $like ? 'red' : 'gray' }}">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            {{ $likes }}
        </button>
        @endif

        @if(!auth()->check())
        <div class="focus:outline-none flex text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="red" viewBox="0 0 24 24" stroke="red">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            {{ $likes }}
        </div>
        @endif
    </div>
        
    <div>
        <p class="text-lg">{{ $body }}</p>
    </div>
</div>
