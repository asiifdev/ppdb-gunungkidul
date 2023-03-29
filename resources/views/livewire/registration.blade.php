<div>
    <!--single form panel-->
    <div class="multisteps-form__panel js-active" data-animation="slideVert" wire:ignore.self>
        <div class="inner position-relative pb-100">
            <div class="wizard-topper">
                <div class="wizard-progress">
                    <span>1 of 4 Completed</span>
                    <div class="progress">
                        <div class="progress-bar">
                        </div>
                    </div>
                </div>
            </div>
            <form wire:submit.prevent="form">
                <div class="wizard-content-form">
                    <div class="wizard-form-field">
                        <div class="text-divider mb-2">
                            <h3 class="mb-2 font-weight-bold text-smti pe-2">Data Diri </h3>
                        </div>
                        <p class="mb-3">Informasi Pribadi</p>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <i data-toggle="tooltip" data-placement="bottom" wire:ignore
                                title="Masukkan NIK anda, Jika NIK terdaftar maka Form akan Otomatis terisi."
                                class="fa fa-info"></i>
                            <input type="number" wire:model="nik" class="form-control" placeholder="NIK">
                            <label>NIK</label>
                            @error('nik')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <input type="number" wire:model="nisn" class="form-control" placeholder="NISN">
                            <label>NISN</label>
                            @error('nisn')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <input type="text" wire:model="name" class="form-control" placeholder="Nama Lengkap">
                            <label>Nama Lengkap</label>
                            @error('name')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <input type="email" class="form-control" wire:model="email" placeholder="Alamat Email">
                            <label>Alamat Email</label>
                            @error('email')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <input type="text" class="form-control" wire:model="nohp" placeholder="Nomor Handphone">
                            <label>Nomor Handphone</label>
                            @error('nohp')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="wizard-form-input position-relative form-group has-float-label">
                                    <input type="text" class="form-control" wire:model="tempatlahir"
                                        placeholder="Tempat">
                                    <label>Tempat</label>
                                    @error('tempatlahir')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wizard-form-input position-relative form-group has-float-label">
                                    <input type="text" id="datepicker" class="form-control"
                                        value="{{ $tanggallahir }}" placeholder="Tanggal Lahir" readonly wire:ignore>
                                    <label>Tanggal Lahir</label>
                                    @error('tanggallahir')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div
                                    class="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                                    @error('agama')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <select id="agama" wire:model="agama" class="form-control">
                                        <option value="" selected>Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghuchu">Konghuchu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                                    @error('jeniskelamin')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <select id="jeniskelamin" wire:model="jeniskelamin" class="form-control">
                                        <option value="" selected>Jenis Kelamin
                                        </option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                                    @error('idjurusan')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <select id="idjurusan" wire:model="idjurusan" class="form-control">
                                        <option value="" selected>Pilih Jurusan
                                        </option>
                                        @foreach ($jurusan as $j)
                                            <option value="{{ $j->id }}">
                                                {{ $j->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p class="mb-3">Informasi Alamat Lengkap</p>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <i data-toggle="tooltip" data-placement="bottom" wire:ignore
                                title="Cukup Masukkan RT/RW,Nama jalan atau Gang" class="fa fa-info"></i>
                            <input type="text" class="form-control" wire:model="alamat" placeholder="Alamat">
                            <label>Alamat</label>
                            @error('alamat')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @error('idprovinsi')
                                    <span class="error text-danger">Pastikan Sudah memilih Provinsi</span><br>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                @error('idkabupaten')
                                    <span class="error text-danger">Pastikan Sudah memilih Kabupaten</span><br>
                                @enderror
                            </div>
                        </div>
                        <div class="row" wire:ignore>
                            <div class="col-md-6">
                                <div
                                    class="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                                    <select id="provinsi" wire:model="idprovinsi" class="form-control">
                                        <option value="" selected>Provinsi</option>
                                        @foreach ($provinsi as $p)
                                            <option value="{{ $p->id }}">
                                                {{ $p->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div
                                    class="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                                    {{-- @error('idkabupaten')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror --}}
                                    <select id="kabupaten" wire:model="idkabupaten" class="form-control">
                                        <option value="" selected>Kabupaten</option>
                                        @foreach ($kabupaten as $k)
                                            <option value="{{ $k->id }}">{{ $k->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @error('idkecamatan')
                                    <span class="error text-danger">Pastikan Sudah memilih Kecamatan</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                @error('idkelurahan')
                                    <span class="error text-danger">Pastikan Sudah memilih Kelurahan</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row" wire:ignore>
                            <div class="col-md-6">
                                <div
                                    class="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                                    {{-- @error('idkecamatan')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror --}}
                                    <select id="kecamatan" wire:model="idkecamatan" class="form-control">
                                        <option value="" selected>Kecamatan</option>
                                        @foreach ($kecamatan as $k)
                                            <option value="{{ $k->id }}">{{ $k->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{-- @error('idkelurahan')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror --}}
                                <div
                                    class="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                                    <select id="kelurahan" wire:model="idkelurahan" class="form-control">
                                        <option value="" selected>Kelurahan</option>
                                        @foreach ($kelurahan as $k)
                                            <option value="{{ $k->id }}">{{ $k->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-divider mb-2 mt-2">
                            <h3 class="mb-2 font-weight-bold text-smti pe-2">Data Sekolah </h3>
                        </div>
                        <p class="mb-3">Pilih Asal Sekolah</p>
                        <div
                            class="wizard-form-input position-relative form-group has-float-label mt-0 n-select-option">
                            @error('idsekolah')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                            <select id="sekolah" wire:model="idsekolah" class="form-control">
                                <option value="" selected readonly>Asal Sekolah</option>
                                @foreach ($sekolah as $s)
                                    <option value="{{ $s->id }}">{{ $s->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row" id="detailsekolah">
                            <div class="col-md-6">
                                <div class="wizard-form-input position-relative form-group has-float-label mt-0">
                                    <input type="text" class="form-control" wire:model="npsn" id="npsn"
                                        placeholder="NPSN" readonly>
                                    <label>NPSN</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wizard-form-input position-relative form-group has-float-label mt-0">
                                    <input type="text" class="form-control" wire:model="alamatsekolah"
                                        id="alamatsekolah" placeholder="Alamat Sekolah" readonly>
                                    <label>Alamat Sekolah</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-divider mb-2 mt-2">
                            <h3 class="mb-2 font-weight-bold text-smti pe-2">Data Orang Tua </h3>
                        </div>
                        <div class="row">
                            <p class="mb-3">Nama Orang Tua</p>
                            <div class="col-md-6">
                                <div class="wizard-form-input position-relative form-group has-float-label mt-0">
                                    <input type="text" class="form-control" wire:model="namaayah" id="namaayah"
                                        placeholder="Nama Ayah">
                                    <label>Nama Ayah</label>
                                    @error('namaayah')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wizard-form-input position-relative form-group has-float-label mt-0">
                                    <input type="text" class="form-control" wire:model="namaibu" id="namaibu"
                                        placeholder="Nama Ibu">
                                    <label>Nama Ibu</label>
                                    @error('namaibu')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="mb-3">Pekerjaan Orang Tua</p>
                            <div class="col-md-6">
                                <div class="wizard-form-input position-relative form-group has-float-label mt-0">
                                    <input type="text" class="form-control" wire:model="pekerjaanayah"
                                        id="pekerjaanayah" placeholder="Pekerjaan Ayah">
                                    <label>Pekerjaan Ayah</label>
                                    @error('pekerjaanayah')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wizard-form-input position-relative form-group has-float-label mt-0">
                                    <input type="text" class="form-control" wire:model="pekerjaanibu"
                                        id="pekerjaanibu" placeholder="Pekerjaan Ibu">
                                    <label>Pekerjaan Ibu</label>
                                    @error('pekerjaanibu')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="mb-3">Informasi Kontak</p>
                            <div class="col-md-12">
                                <div class="wizard-form-input position-relative form-group has-float-label mt-0">
                                    <input type="text" class="form-control" wire:model="nohportu" id="nohportu"
                                        placeholder="Nomor HP">
                                    <label>Nomor HP</label>
                                    @error('nohportu')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="clearfix"></div> --}}
                    </div>
                </div>
                <div class="wizard-footer">
                    <div class="wizard-imgbg">
                        <img src="{{ asset('assets/img/v3.png') }}" alt="">
                    </div>
                    <div class="actions">
                        <ul>
                            <li>
                                <button class="" title="NEXT" id="form_pertama" type="submit">NEXT <i
                                        class="fa fa-arrow-right"></i></button>
                                <button class="js-btn-next" title="NEXT" id="nextForm" hidden>NEXT<i
                                        class="fa fa-arrow-right"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--single form panel-->
    <div class="multisteps-form__panel" data-animation="slideVert" wire:ignore.self>
        <div class="inner position-relative pb-100">
            <div class="wizard-topper">
                <div class="wizard-progress">
                    <span>2 of 4 Completed</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 40%;"></div>
                    </div>
                </div>
            </div>
            <div class="wizard-content-item text-center">
                <h2>Selamat</h2>
                <p>Formulir Data Diri yang anda Kirimkan sudah Kami terima. Sekarang masukkan Lampiran file Nilai kamu
                    disini</p>
            </div>
            <form wire:submit.prevent='lampiran'>
                <div class="wizard-identity wizard-content-form">
                    <div class="row" wire:ignore>
                        <div class="col-md-6">
                            <div class="wizard-identity-box identity-upload text-center">
                                <div class="upload-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div class="upload-option text-center">
                                    <label for="file-images" id="judul_raport">Upload Raport</label>
                                    <input id="file-images" style="visibility:hidden; display: none;" type="file" wire:model="raport">
                                    <span id="namafile_raport">Lampirkan File dengan Format .pdf atau .jpg</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wizard-identity-box text-center">
                                <div class="wizard-identity-icon">
                                    <img src="{{ asset('assets/img/vi1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-form-field mt-5">
                        <div class="text-divider mb-2">
                            <h3 class="mb-2 font-weight-bold text-smti pe-2">Detail Nilai </h3>
                        </div>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <input type="number" step="0.01" wire:model="nilaibahasaindonesia"
                                class="form-control" placeholder="Bahasa Indonesia">
                            <label>Bahasa Indonesia</label>
                            @error('nilaibahasaindonesia')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <input type="number" wire:model="nilaibahasainggris" class="form-control"
                                placeholder="Bahasa Inggris">
                            <label>Bahasa Inggris</label>
                            @error('nilaibahasainggris')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <input type="number" wire:model="nilaimatematika" class="form-control"
                                placeholder="Matematika">
                            <label>Matematika</label>
                            @error('nilaimatematika')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="wizard-form-input position-relative form-group has-float-label">
                            <input type="number" wire:model="nilaiipa" class="form-control" placeholder="IPA">
                            <label>IPA</label>
                            @error('nilaiipa')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="wizard-footer">
                    <div class="wizard-imgbg">
                        <img src="{{ asset('assets/img/v3.png') }}" alt="">
                    </div>
                    <div class="actions">
                        <ul>
                            <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK</span>
                            </li>
                            
                            <li>
                                <button class="" title="NEXT" id="form_kedua" type="submit">NEXT <i
                                        class="fa fa-arrow-right"></i></button>
                                <button class="js-btn-next" title="NEXT" id="nextForm" hidden>NEXT<i
                                        class="fa fa-arrow-right"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--single form panel-->
    <div class="multisteps-form__panel" data-animation="slideVert">
        <div class="inner position-relative pb-100">
            <div class="wizard-topper">
                <div class="wizard-progress">
                    <span>2 of 5 Completed</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%;"></div>
                    </div>
                </div>
            </div>
            <div class="wizard-content-item text-center">
                <h2>Tax Residency</h2>
                <p>Tell us about your Tax details. This is important
                    for both for us</p>
            </div>
            <div class="wizard-option-list wizard-content-form">
                <ul>
                    <li>
                        <div class="option-item-list">
                            <select>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                            </select>
                        </div>
                    </li>
                    <li class="nationality-list">
                        <div class="option-item-list">
                            <select>
                                <option>Nationality</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="option-item-list">
                            <select>
                                <option>Other Nationalities</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="option-item-list">
                            <select>
                                <option>Other Nationalities</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="option-item-list">
                            <select>
                                <option>Tax Identification Number</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                                <option>Occupational Group</option>
                            </select>
                        </div>
                    </li>
                    <li class="no-arrow">
                        <div class="n-activity">
                            <label>
                                <span class="n-title">Network Activity</span>
                                <input type="checkbox" class="net-check">
                                <span class="net-check-border"></span>
                            </label>
                        </div>
                    </li>
                </ul>
                <div class="upload-araa">
                    <div class="upload-text float-start">
                        <span>Proof your NTN Tax id certificate</span>
                    </div>
                    <div class="upload-option text-center float-end">
                        <label for="files">Upload PDF</label>
                        <input id="files" style="visibility:hidden; display: none;" type="file">
                    </div>
                </div>
                <div class="taxable-area">
                    <div class="row">
                        <div class="col-md-4">
                            <label>
                                <input type="checkbox" class="tax-check" checked value="Taxable in the US?">
                                <span class="checkbo-box-border"></span>
                                <span class="texable-option">
                                    Taxable in the US?
                                </span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label>
                                <input type="checkbox" class="tax-check" value="Taxable in the US?">
                                <span class="checkbo-box-border"></span>
                                <span class="texable-option">
                                    Taxable in the US?
                                </span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label>
                                <input type="checkbox" class="tax-check" value="Taxable in the US?">
                                <span class="checkbo-box-border"></span>
                                <span class="texable-option">
                                    Taxable in the US?
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wizard-footer">
                <div class="wizard-imgbg">
                    <img src="{{ asset('assets/img/v2.png') }}" alt="">
                </div>
                <div class="actions">
                    <ul>
                        <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK</span>
                        </li>
                        <li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--single form panel-->
    <div class="multisteps-form__panel" data-animation="slideVert">
        <div class="inner position-relative pb-100">
            <div class="wizard-topper">
                <div class="wizard-progress">
                    <span>4 of 5 Completed</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
            <div class="wizard-content-item text-center">
                <h2>Indentity Documents</h2>
                <p>Please take a salfie with your document so that it’s clearly
                    visible anddoses not cover your face.</p>
            </div>
            <div class="identity-option wizard-content-form">
                <ul>
                    <li>
                        <label>
                            <input type="checkbox" class="identity-check" checked="checked">
                            <span class="identity-label"></span>Investability Quotient Percentile
                            <span class="checkmark-border"></span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" class="identity-check">
                            <span class="identity-label"></span>Investability Quotient Percentile
                            <span class="checkmark-border"></span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" class="identity-check">
                            <span class="identity-label"></span>Investability Quotient Percentile
                            <span class="checkmark-border"></span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" class="identity-check">
                            <span class="identity-label"></span>Investability Quotient Percentile
                            <span class="checkmark-border"></span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" class="identity-check">
                            <span class="identity-label"></span>Investability Quotient Percentile
                            <span class="checkmark-border"></span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" class="identity-check">
                            <span class="identity-label"></span>Investability Quotient Percentile
                            <span class="checkmark-border"></span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="wizard-footer">
                <div class="wizard-imgbg">
                    <img src="{{ asset('assets/img/v4.png') }}" alt="">
                </div>
                <div class="actions">
                    <ul>
                        <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK</span>
                        </li>
                        <li><span class="js-btn-next" title="NEXT">NEXT <i class="fa fa-arrow-right"></i></span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!--single form panel-->
    <div class="multisteps-form__panel" data-animation="slideVert">
        <div class="inner position-relative pb-100">
            <div class="wizard-topper">
                <div class="wizard-progress">
                    <span>5 of 5 Completed</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
            <div class="wizard-content-item text-center">
                <h2>Submit Final</h2>
                <p>Please take a salfie with your document so that it’s clearly
                    visible anddoses not cover your face.</p>
            </div>
            <div class="wizard-submit-file-content wizard-content-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="n-summary">
                            <span>Notification Summary</span>
                            <label>
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark">Yes</span>
                            </label>
                            <label>
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark">Yes</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="n-activity tooltip-info">
                            <label>
                                <i data-toggle="tooltip" data-placement="bottom"
                                    title="If you want your invoice address to a compnay. Leave blank to use full name"
                                    class="fa fa-info"></i>
                                <input type="checkbox" class="net-check">
                                <span class="n-title">Network Activity</span>
                                <span class="net-check-border"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="n-checked">
                            <span>Daily Creative Challenge</span>
                            <label>
                                <input type="radio" value="Daily Creative Challenge">
                                <span class="checkmark">Announcements and special offers </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="n-checked">
                            <span>Daily Creative Challenge</span>
                            <label>
                                <input type="radio" value="Notification">
                                <span class="checkmark">Talent Notifications</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="n-select-option">
                            <select>
                                <option>Give Hours</option>
                                <option>Give Hours</option>
                                <option>Give Hours</option>
                                <option>Give Hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="n-select-option">
                            <select>
                                <option>Talent Notifications</option>
                                <option>Give Hours</option>
                                <option>Give Hours</option>
                                <option>Give Hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="n-select-option">
                            <select>
                                <option>Support for months</option>
                                <option>Give Hours</option>
                                <option>Give Hours</option>
                                <option>Give Hours</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wizard-footer">
                <div class="wizard-imgbg float-start">
                    <img src="{{ asset('assets/img/v5.png') }}" alt="">
                </div>
                <div class="actions">
                    <ul>
                        <li><span class="js-btn-prev" title="BACK"><i class="fa fa-arrow-left"></i> BACK</span>
                        </li>
                        <li><button type="submit" id="submit-form" title="NEXT">SUMBIT <i
                                    class="fa fa-arrow-right"></i></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.3.5/air-datepicker.min.js"></script>
<script>
    var id = {
        days: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', "Jum`at", 'Sabtu'],
        daysShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
        daysMin: ['Mg', 'Sn', 'Sl', 'Rb', 'Km', 'Jm', 'Sb'],
        months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
            'November', 'Desember'
        ],
        monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        today: 'Today',
        clear: 'Clear',
        timeFormat: 'hh:ii aa',
        firstDay: 0
    };
    // Simple DatePicker
    new AirDatepicker('#datepicker', {
        autoClose: true,
        locale: id,
        dateFormat(date) {
            return date.toLocaleString('id', {
                year: 'numeric',
                day: '2-digit',
                month: '2-digit'
            });
        },
        onSelect: function(date) {
            console.log(date.date);
            @this.tanggallahir = date.date
        }
    })
</script>
