<div>
    @if(session()->has('status'))
        <p>{{ session('status') }}</p>
    @endif

    @foreach($posts as $post)
        <livewire:post :post="$post" :key="$post->id" />
    @endforeach
</div>
