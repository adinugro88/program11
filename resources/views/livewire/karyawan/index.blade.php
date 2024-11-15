<div>
    <?php

    namespace App\Livewire\Karyawan;

    use Livewire\Component;
    use App\Models\Karyawan ;

    class Index extends Component
    {

        public $karyawan,$index,$create;

        public function mount()
        {
            $this->karyawan = Karyawan::all();
        }
        public function render()
        {
            $this->index = true;
            $this->create = false;
            return view('livewire.karyawan.index');
        }

        public function create()
        {
            $this->index = false;
            $this->create = true;

            return view('livewire.karyawan.create');
        }
    }

</div>
