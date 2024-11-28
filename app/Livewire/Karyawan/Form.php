<?php

namespace App\Livewire\Karyawan;

use Livewire\Component;
use App\Models\Karyawan;

class Form extends Component
{
    public $id, $nama, $alamat, $no_hp, $email, $status, $nip;

    protected $rules = [
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'email' => 'required',
        'status' => 'required',
        'nip' => 'required',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $data = Karyawan::find($id);
            $this->id = $data->id;
            $this->nama = $data->nama;
            $this->alamat = $data->alamat;
            $this->no_hp = $data->no_hp;
            $this->email = $data->email;
            $this->status = $data->status;
            $this->nip = $data->nip;
        }
    }

    public function save()
    {
        try {
            $this->validate();

            if ($this->id) {
                $data = Karyawan::find($this->id);
                $data->update([
                    'nama' => $this->nama,
                    'alamat' => $this->alamat,
                    'no_hp' => $this->no_hp,
                    'email' => $this->email,
                    'status' => $this->status,
                    'nip' => $this->nip,
                ]);
            } else {
                Karyawan::create([
                    'nama' => $this->nama,
                    'alamat' => $this->alamat,
                    'no_hp' => $this->no_hp,
                    'email' => $this->email,
                    'status' => $this->status,
                    'nip' => $this->nip,
                ]);
            }

            return $this->redirect(route('karyawan.index'), true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return session()->flash('error', $e->validator->errors()->first());
        }
    }

    public function render()
    {
        return view('livewire.karyawan.form');
    }
}
