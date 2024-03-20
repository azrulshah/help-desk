<?php

namespace App\Http\Livewire;

use App\Models\Notice;
use Livewire\Component;

class ScrollingBanner extends Component
{
    public function render()
    {
        return view('livewire.scrolling-banner', [
            'notices' => Notice::all(),
        ]);
    }
}
