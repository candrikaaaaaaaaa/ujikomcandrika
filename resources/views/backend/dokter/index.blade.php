@extends('layouts.app')
@section('content')

    <div class = "container">
	<span style="color: white;"><h4> Dokter </h4></span><br />
        <a href="{{ route ('dokter.create') }}" class="btn btn-outline-info">Tambah Data</a>
        <p></p>
       <table class ="table table-hover table-dark">
            <thead>
                <tr>
                                        <th scope="col">Kode Dokter</th>
                                        <th scope="col">Nama Dokter</th>
										<th scope="col">Spesialis</th>
										<th scope="col">Alamat Dokter</th>

										<th scope="col">Kode Poliklinik</th>
                                        <th scope="col">Tarif</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($dokter as $data)
                                    <tr>
                                        
                                        <td>{{ $data->kode_dokter }}</td>
										<td>{{ $data->nama_dokter }}</td>
										<td>{{ $data->spesialis}}</td>
										<td>{{ $data->Alamat_dokter}}</td>
                                        
										<td>{{ $data->kode_klinik}}</td>
										<td>{{ $data->Tarif}}</td>
                                    
                                        <td>
                                            <a href="{{ route('dokter.edit',$data->id) }}"
                                           class="btn btn-outline-info">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('dokter.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-outline-info" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    

            @endforeach
        
    @endsection
