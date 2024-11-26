<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Karyawan') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col">
            <h4>Create Data Karyawan</h4>
        </div>
    </div>
    <hr>

    <div class="card">
        <div class="card-body">
            <livewire:karyawan.form />
        </div>
    </div>
</x-app-layout>
