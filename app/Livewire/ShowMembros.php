<?php

namespace App\Livewire;

use App\Models\Membro;
use Livewire\Component;

class ShowMembros extends Component
{
    public function render()
    {
        $membros = Membro::get();

        return view('livewire.show-membros', [
            'membros' => $membros
        ]);
    }
}
