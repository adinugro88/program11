<?php

namespace App\Livewire\Karyawan;

use Livewire\Component;

class Delete extends Component
{
    public $karyawan;

    public function mount($karyawan)
    {
        $this->karyawan = $karyawan;
    }

    public function delete()
    {
        $this->karyawan->delete();
        return $this->redirect(route('karyawan.index'), true);
    }

    public function render()
    {
        return view('livewire.karyawan.delete');
    }
}
