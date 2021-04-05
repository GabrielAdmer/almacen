<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
// use Livewire\WithPagination;

class Index extends Component
{

   public $search;

   public function render()
   {
      $users = User::where('name', 'LIKE', '%' . $this->search . '%')->paginate();
      return view('livewire.admin.user.index', compact('users'));
   }
}
