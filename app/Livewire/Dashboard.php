<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Hasildetail;
use App\Models\Penghasilan;
use App\Models\Karyawan;

class Dashboard extends Component
{

    public $hasildetail, $penghasilan, $karyawan;
    public function render()
    {
        $this->hasildetail = Hasildetail::all();
        $this->penghasilan = Penghasilan::all();
        $this->karyawan = Karyawan::all();
        return view('livewire.dashboard');
    }
}
