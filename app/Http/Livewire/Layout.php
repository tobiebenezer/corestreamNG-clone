<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Layout extends Component
{
    public $title;
    public $slot;
    
    public function mount($title,$slot)
    {
        $this->title = $title;
        $this->slot = $slot;
    }
    public function render()
    {
        return view('livewire.layout');
    }
}
