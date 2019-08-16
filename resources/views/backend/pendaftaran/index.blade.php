@extends('layouts.app')
@section('content')

    <div class = "container">
	<span style="color: white;"><h4> Pendaftaran</h4></span><br />
        <a href="{{ route ('pendaftaran.create') }}" class="btn btn-outline-info">Tambah Data</a>
        <p></p>
       <table class ="table table-hover table-dark">
            <thead>
                <tr>
                                        <th scope="col">No Pendaftaran</th>
                                        <th scope="col">Tanggal Pendaftaran</th>
										<th scope="col">Kode Dokter</th>
										<th scope="col">Kode Pasien</th>
										<th scope="col">Kode Poliklinik</th>
										<th scope="col">Biaya</th>
										<th scope="col">Keterangan</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($pendaftaran as $data)
                                    <tr>
                                        
                                        <td>{{ $data->No_pendaftaran }}</td>
										<td>{{ $data->tanggal_pendaftaran }}</td>
										<td>{{ $data->kode_dokter}}</td>
										<td>{{ $data->kode_pasien}}</td>
										<td>{{ $data->kode_klinik}}</td>
										<td>{{ $data->biaya}}</td>
										<td>{{ $data->keterangan}}</td>
                                    
                                        <td>
                                            <a href="{{ route('pendaftaran.edit',$data->id) }}"
                                           class="btn btn-outline-info">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('pendaftaran.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-outline-info" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    

            @endforeach
        
    @endsection
