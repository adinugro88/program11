<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Karyawan') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col">
            <h4>Data Karyawan</h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('karyawan.create') }}" class="btn btn-sm btn-primary">Tambah Karyawan</a>
        </div>
    </div>
    <hr>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomer HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                <span class="badge bg-{{ $item->status == 1 ? 'success' : 'danger' }}">
                                    {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('karyawan.edit', $item->id) }}"
                                        class="btn btn-sm btn-warning me-2"><i class="bi bi-pencil-square"></i></a>
                                    {{-- <form action="{{ route('karyawan.destroy', $item->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form> --}}
                                    <livewire:karyawan.delete :karyawan="$item" />
                                </div>
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
