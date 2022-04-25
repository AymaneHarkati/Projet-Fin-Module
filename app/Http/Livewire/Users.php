<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class Users extends Component
{

    public function destroy($usid,$tab)
    {
        User::where('id',$usid)->delete();
        return redirect('/dashboard?slug=1')->with('num',$value=0);
    }
}
