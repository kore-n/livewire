<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserSearch extends Component
{
    public $search = ''; // 検索文字列

    public function render()
    {
        logger("render");
        $users = User::where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.user-search', [
            'users' => $users,
        ]);
    }

    public function updated($propertyName)
    {
        logger("プロパティが更新されました: " . $propertyName . " => " . $this->$propertyName);
    }
}