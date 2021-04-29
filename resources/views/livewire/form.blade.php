<div>
    <form method="post" wire:submit.prevent="createPost">
        @csrf
        <div>
            <textarea name="body" id="body" cols="30" rows="10" wire:model="body"></textarea><br>
            @error('body')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Publier !</button>
    </form>
</div>
