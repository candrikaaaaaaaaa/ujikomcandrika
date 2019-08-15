@extends('layouts.app')
@section('content')

    <div class = "container">
	<span style="color: white;"><h4> Pasien</h4></span><br />
        <a href="{{ route ('pasien.create') }}" class="btn btn-outline-info">Tambah Data</a>
        <p></p>
       <table class ="table table-hover table-dark">
            <thead>
                <tr>
                                        <th scope="col">Kode Pasien</th>
                                        <th scope="col">Nama Pasien</th>
										<th scope="col">Alamat Pasien</th>
										<th scope="col">Gender Pasien</th>
										<th scope="col">Umur Pasien</th>
										<th scope="col">Telepon Pasien</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($pasien as $data)
                                    <tr>
                                        
                                        <td>{{ $data->kode_pasien }}</td>
										<td>{{ $data->nama_pasien }}</td>
										<td>{{ $data->alamat_pasien}}</td>
										<td>{{ $data->gender_pasien}}</td>
										<td>{{ $data->umur}}</td>
										<td>{{ $data->tlp_pasien}}</td>
                                    
                                        <td>
                                            <a href="{{ route('pasien.edit',$data->id) }}"
                                           class="btn btn-outline-info">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('pasien.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-outline-info" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    

            @endforeach
        
    @endsection
