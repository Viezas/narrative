<div>
    <form method="post" wire:submit.prevent="createPost" class="h-full grid grid-cols-12 grid-rows-2">
        @csrf
        <div class="col-span-12">
            <textarea name="body" id="body" cols="30" rows="10" placeholder="Write your own story ... (min 15 chars)" wire:model="body"
                class="resize-none h-auto w-full"
            ></textarea><br>
            @error('body')
                <div class="flex justify-center items-center h-12 bg-red-600 w-full mb-5">
                    <p class="text-xl text-white">{{ $message }}</p>
                </div>
            @enderror
        </div>
        <button type="submit" class="h-10 w-24 rounded-full bg-blue-600 text-white row-start-2 col-start-12">Publier !</button>
    </form>
</div>
