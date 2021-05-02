<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdateForm extends Component
{
    public $user;
    public $user_id;
    public $name;
    public $email;
    public $password;

    protected $rules = [];

    public function mount()
    {
        $this->user = auth()->user();
        $this->user_id = auth()->user()->id;
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->password = "";
    }

    public function render()
    {
        return view('livewire.update-form');
    }

    public function update(Request $request)
    {

        if ($this->name != auth()->user()->name && !empty($this->name)) {
            $this->rules = ['name' => 'min:1'];
            $this->validate();

            $taken = User::where('name', '=', $this->name)->exists();
            
            if ($taken) {
                return session()->flash('name', "Nom d'utilisateur déjà prit !");   
            }
            DB::table('users')->where('id', $this->user_id)->update(['name' => $this->name]);
            auth()->user()->name = $this->name;
        }

        if ($this->email != auth()->user()->email && !empty($this->email)) {
            $this->rules = ['email' => 'email'];
            $this->validate();  

            $taken = User::where('email', '=', $this->email)->exists();
            
            if ($taken) {
                return session()->flash('email', "Email non disponible !");   
            }

            DB::table('users')->where('id', $this->user_id)->update(['email' => $this->email]);
            auth()->user()->email = $this->email;
        }

        if (!empty($this->password)) {
            $this->rules = ['password' => 'min:8'];
            $this->validate();
            
            DB::table('users')->where('id', $this->user_id)->update(['password' => Hash::make($this->password)]);
            auth()->user()->password = $this->password;
        }

        session()->flash('status', "Mise à jour effectué !"); 
        return redirect('/');
    }
}
