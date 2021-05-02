<div class="mb-5">
    <div class="flex justify-center items-center">
        <form action="" method="POST" class="w-full" wire:submit.prevent="update">
            @csrf
            <div class="flex justify-around items-center">
                <!-- Name  -->
                <div>
                    <label for="name">Pseudo :</label><br>
                    <input type="text" id="name" name="name"
                        class="w-50 h-10 rounded-full"
                        wire:model="name">
                    @if(session()->has('name'))
                        <div>
                            <p class="text-xl text-red-600">{{ session('name') }}</p>
                        </div>
                    @endif
                </div>

                <!-- Email  -->
                <div>
                    <label for="email">Email :</label><br>
                    <input type="text" id="email" name="email"
                        class="w-50 h-10 rounded-full"
                        wire:model="email">
                    @if(session()->has('email'))
                        <div>
                            <p class="text-xl text-red-600">{{ session('email') }}</p>
                        </div>
                    @endif
                    @error('email')
                        <div>
                            <p class="text-xl text-red-600">{{ $message }}</p>
                        </div>
                    @enderror
                </div>

                <!-- Password  -->
                <div>
                    <label for="password">Password :</label><br>
                    <input type="password" id="password" name="password"
                        class="w-50 h-10 rounded-full"
                        wire:model="password">
                    @if(session()->has('password'))
                        <div>
                            <p class="text-xl text-red-600">{{ session('password') }}</p>
                        </div>
                    @endif
                    @error('password')
                        <div>
                            <p class="text-xl text-red-600">{{ $message }}</p>
                        </div>
                    @enderror
                        <br>
                </div>
            </div>

            <button type="submit" class="bg-yellow-400 text-xl w-1/6 h-12 rounded-full mt-5">Modifier !</button>

        </form>
    </div>
</div>
