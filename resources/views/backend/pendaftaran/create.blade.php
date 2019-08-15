@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
							<label class="control-label col-lg-4">No Pendaftaran</label>
							<div class="col-lg-4">
								<input type="text" name="No_pendaftaran" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4">Tanggal Pendaftaran</label>
						<div class="col-lg-2">
						<input type="date" class="form-control" name="tanggal_pendaftaran" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kode dokter</label>
							<div class="col-lg-4">
								<input type="text" required name="kode_dokter" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Kode Pasien</label>
							<div class="col-lg-4">
								<input type="text" required name="kode_pasien" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Kode Poliklinik</label>
							<div class="col-lg-4">
								<input type="text" required name="kode_klinik" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Biaya</label>
							<div class="col-lg-4">
								<input type="text" required name="biaya" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Keterangan</label>
							<div class="col-lg-4">
								<input type="text" required name="keterangan" class="form-control" />
							</div>
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('pendaftaran.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
  	
</body>
</html>
©
@endsection