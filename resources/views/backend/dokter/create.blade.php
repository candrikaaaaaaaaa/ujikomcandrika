@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
        <form action="{{ route ('dokter.store') }}">
      <div class="modal-body">
      <div class="form-group">
              <label for="">Kode Dokter</label>
                <select name="kode_dokter" class="form-control">
                  @foreach($pendaftaran as $data)
                    <option value="{{ $data->id }}">{{ $data->kode_dokter }}</option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                    <label for="">Nama Dokter</label>
                    <input class="form-control" type="text" name="Nama_dokter">
                </div>

                <div class="form-group">
                    <label for="">Spesialis</label>
                    <input class="form-control" type="text" name="spesialis">
                </div>

                <div class="form-group">
                    <label for="">Alamat Dokter</label>
                    <input class="form-control" type="text" name="Alamat_dokter">
                </div>
                <div class="form-group">
              <label for="">Kode Poliklinik</label>
                <select name="kode_klinik" class="form-control">
                  @foreach($pendaftaran as $data)
                    <option value="{{ $data->id }}">{{ $data->kode_klinik }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                    <label for="">Tarif</label>
                    <input class="form-control" type="text" name="Tarif">
                </div>
      </div>


      <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
        <a name="" id="" class="btn btn-md btn-warning" href="{{route('dokter.index')}}" role="button">Kembali</a>
        </form>
            </div>
          </div>
        </div>

  	
</body>
</html>

@endsection