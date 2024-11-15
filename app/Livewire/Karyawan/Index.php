<?php

namespace App\Livewire\Karyawan;

use Livewire\Component;
use App\Models\Karyawan ;

class Index extends Component
{

    public $karyawan;

    public function mount()
    {
        $this->karyawan = Karyawan::all();
    }
    public function render()
    {
        return view('livewire.karyawan.index');
    }
}
