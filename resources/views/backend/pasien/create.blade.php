@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('pasien.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
							<label class="control-label col-lg-4">Kode Pasien</label>
							<div class="col-lg-4">
								<input type="text" name="kode_pasien" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4">Nama Pasien</label>
						<div class="col-lg-2">
						<input type="date" class="form-control" name="nama_pasien" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat Pasien</label>
							<div class="col-lg-4">
                            <textarea name="alamat_pasien" id="" class="form-control ckeditor" cols="30" rows="10"></textarea>
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Gender Pasien</label>
							<div class="col-lg-4">
								<input type="text" required name="gender_pasien" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Umur Pasien</label>
							<div class="col-lg-4">
								<input type="text" required name="umur" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Telepon pasien</label>
							<div class="col-lg-4">
								<input type="text" required name="tlp_pasien" class="form-control" />
							</div>
						</div>
                    
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('pasien.index')}}" role="button">Kembali</a>
              </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
  	
</body>
</html>

@endsection