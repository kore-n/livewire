<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    public $message = 'Hello World';

    public function render()
    {
        logger("render");

        return view('livewire.test-component');
    }

    public function updated($propertyName)
    {
        logger("プロパティが更新されました: " . $propertyName . " => " . $this->$propertyName);
    }
}