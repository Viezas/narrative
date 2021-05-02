<div class="{{ auth()->check() ? '-mt-52' : ''}}">
    @if(session()->has('status'))
        <div class="flex justify-center items-center h-12 bg-green-600 w-full mb-5" >
            <p class="text-2xl text-white">{{ session('status') }}</p>
        </div>
    @endif

    @foreach($posts as $post)
        <livewire:post :post="$post" :key="$post->id" />
    @endforeach

    {{ $posts->links() }}
</div>
