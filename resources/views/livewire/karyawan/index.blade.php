<div>
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="d-flex align-items-center justify-content-between">
                <h6 class="mb-0 text-uppercase">Data karyawan </h6>
            <a href="/karyawan/create" wire:navigate class="btn btn-info">Create</a>
            </div>
            <hr>
                <div class="card">
                    <div class="card-body">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">EMail</th>
                                    <th scope="col">no_HP</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($karyawan) > 0 )
                                    @foreach($karyawan as $data)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->nip}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->no_hp}}</td>
                                        <td>{{$data->status}}</td>
                                        <td>
                                            <a href="{{Route('karyawanedit',$data->id)}}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{}}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" align="center">Belum ada data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
