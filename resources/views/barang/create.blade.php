<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
        <form action="{{ route('barangs.store') }}" class="needs-validation was-validated" method="POST" novalidate="">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="KodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('KodeBarang') is-invalid @enderror" type="text" name="KodeBarang" id="KodeBarang" value="{{old('KodeBarang')}}"
                                placeholder="Enter Kode Barang" required="">
                                @error('KodeBarang')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="NamaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control  @error('NamaBarang') is-invalid @enderror" type="text" name="NamaBarang" id="NamaBarang" value="{{old('NamaBarang')}}"
                                placeholder="Enter Nama Barang" required="">
                                @error('NamaBarang')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="HargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control  @error('HargaBarang') is-invalid @enderror" type="number" name="HargaBarang" id="HargaBarang" value="{{old('HargaBarang')}}"
                                placeholder="Enter Harga Barang" required="">
                                @error('HargaBarang')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="DeskripsiBarang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control  @error('DeskripsiBarang') is-invalid @enderror" type="text" name="DeskripsiBarang" id="DeskripsiBarang" value="{{old('DeskripsiBarang')}}"
                                placeholder="Enter Deskripsi Barang" required="">
                                @error('DeskripsiBarang')
                                    <div class="invalid-feedback"> {{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <select name="satuan" id="satuan" class="form-select">
                            @foreach ($satuans as $satuan)
                            <option value="{{ $satuan->id }}" {{old('satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
                            @endforeach
                        </select>
                        @error('satuan')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @vite('resources/js/app.js')
</body>
</html>
