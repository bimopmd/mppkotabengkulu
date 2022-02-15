
@extends('layouts.master')
@section('title','Add Data Instansi')
@section('content')

<main id="main-container">
<!-- Page Content -->
<div class="content">
    <div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title"><a href="{{route('instansi.index')}}" onclick="Codebase.loader('show', 'bg-gd-cherry');
                setTimeout(function () {
                Codebase.loader('hide');
                }, 3000);">Menu Instansi</a> / Add Data Instansi </h3>
        <div class="block-options">
        <button type="button" class="btn-block-option">
            <i class="si si-wrench"></i>
        </button>
        </div>
    </div>
    <div class="block-content form-material">
        <div class="row justify-content-center py-10">
        <div class="col-xl-11">
            <form class="js-validation-bootstrap" action="{{route('instansi.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-6">
                <div class="form-material">
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{old('nama_instansi')}}" placeholder="......">
                    <label for="nama_instansi" @error('nama_instansi')
                    class="text-danger"
                    @enderror>Nama Instansi @error('nama_instansi')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
                <div class="col-6 form-group">
                <div class="form-material">
                    <label for="visi_misi_instansi" @error('visi_misi_instansi')
                    class="text-danger"
                    @enderror>Visi/ Misi Instansi @error('visi_misi_instansi')
                        | {{$message}}
                    @enderror <span class="text-danger">*</label>
                    <input id="visi_misi_instansi" type="hidden" class="form-control" id="visi_misi_instansi" name="visi_misi_instansi" value="{{old('visi_misi_instansi')}}" rows="5" placeholder="....">
                    <trix-editor input="visi_misi_instansi" class="form-control" ></trix-editor>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                <div class="form-material">
                    <input type="text" class="form-control" id="alamat_instansi" name="alamat_instansi" value="{{old('alamat_instansi')}}" placeholder="......">
                    <label for="alamat_instansi" @error('alamat_instansi')
                    class="text-danger"
                    @enderror>Alamat Instansi @error('alamat_instansi')
                        | {{$message}}
                    @enderror</label>
                </div>
                </div>
                <div class="col-6 form-group">
                <div class="form-material">
                    <label for="daftar_layanan_instansi" @error('daftar_layanan_instansi')
                    class="text-danger"
                    @enderror>Daftar Layabnan @error('daftar_layanan_instansi')
                        | {{$message}}
                    @enderror</label>
                    <input type="hidden" class="form-control" id="daftar_layanan_instansi" name="daftar_layanan_instansi" value="{{old('daftar_layanan_instansi')}}" rows="3" placeholder="......"></input>
                    <trix-editor input="daftar_layanan_instansi" class="form-control" ></trix-editor>

                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                <div class="form-material">
                    <label for="nope_instansi" @error('nope_instansi')
                    class="text-danger"
                    @enderror>No. Handphone @error('nope_instansi')
                        | {{$message}}
                    @enderror</label>
                    <input type="text" class="js-maxlength form-control" id="nope_instansi" name="nope_instansi" value="{{old('nope_instansi')}}" maxlength="13" placeholder="Try typing beyond max 13 chars..">
                </div>
                </div>
                <div class="col-6 form-group">
                <div class="form-material">
                    <label for="dasar_hukum_instansi" @error('dasar_hukum_instansi')
                    class="text-danger"
                    @enderror>Dasar Hukum @error('dasar_hukum_instansi')
                        | {{$message}}
                    @enderror</label>
                    <input type="hidden" class="form-control" id="dasar_hukum_instansi" name="dasar_hukum_instansi" value="{{old('dasar_hukum_instansi')}}" rows="3" placeholder="......"></input>
                    <trix-editor input="dasar_hukum_instansi" class="form-control" ></trix-editor>

                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                <div class="form-material">
                    <label for="web_instansi" @error('web_instansi')
                    class="text-danger"
                    @enderror>Link Website @error('web_instansi')
                        | {{$message}}
                    @enderror</label>
                    <input type="text" class="form-control" id="web_instansi" name="web_instansi" value="{{old('web_instansi')}}" placeholder="......">
                </div>
                </div>
                <div class="col-6 form-group">
                <div class="form-material">
                    <label for="persyaratan_layanan_instansi" @error('persyaratan_layanan_instansi')
                    class="text-danger"
                    @enderror>Persyaratan @error('persyaratan_layanan_instansi')
                        | {{$message}}
                    @enderror</label>
                    <input type="hidden" class="form-control" id="persyaratan_layanan_instansi" name="persyaratan_layanan_instansi" rows="3" value="{{old('persyaratan_layanan_instansi')}}" placeholder="......"></input>
                    <trix-editor input="persyaratan_layanan_instansi" class="form-control" ></trix-editor>

                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                <div class="form-material">
                    <label for="email_instansi" @error('email_instansi')
                    class="text-danger"
                    @enderror>e-Mail @error('email_instansi')
                        | {{$message}}
                    @enderror</label>
                    <input type="text" class="form-control" id="email_instansi" name="email_instansi" value="{{old('email_instansi')}}" placeholder="......">
                </div>
                </div>
                <div class="col-6">
                <div class="form-material">
                    <label for="biaya_layanan_instansi" @error('biaya_layanan_instansi')
                    class="text-danger"
                    @enderror>Biaya @error('biaya_layanan_instansi')
                        | {{$message}}
                    @enderror</label>
                    <input type="text" class="form-control" id="biaya_layanan_instansi" name="biaya_layanan_instansi" value="{{old('biaya_layanan_instansi')}}" placeholder=".....">
                </div>
                </div>
            </div>
            <div class=" form-group row">
                <div class="col-lg-6">
                <div class="form-material">
                    <label for="kategori_instansi" @error('kategori_instansi')
                    class="text-danger"
                    @enderror>Kategori Instansi @error('kategori_instansi')
                        | {{$message}}
                    @enderror </label>
                   <select class="js-select2 form-control" id="kategori_instansi" name="kategori_instansi" value="{{old('kategori_instansi')}}" style="width: 100%;" data-placeholder="Pilihan --">
                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                        <option value="Kesehatan">KESEHATAN</option>
                        <option value="Pemerintahan">PEMERINTAHAN</option>
                        <option value="BUMN">BUMN</option>
                        <option value="BUMD">BUMD</option>
                        <option value="Swasta">SWASTA</option>
                    </select>
                </div>
                </div>
                <div class="col-6">
                <div class="form-group row">
                    <label class="col-12"@error('alur_layanan_instansi')
                    class="text-danger"
                    @enderror>Alur @error('alur_layanan_instansi')
                        | {{$message}}
                    @enderror</label>
                    <div class="col-lg">
                    <img class="img-preview-alur img-fluid mb-2 col-sm-2 d-block">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="alur_layanan_instansi" name="alur_layanan_instansi" value="{{old('alur_layanan_instansi')}}" onchange="previewAlur()" data-toggle="custom-file-input">
                        <label class="custom-file-label" for="alur_layanan_instansi">Choose file</label>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6 form-group">
                <div class="form-material">
                    <label for="profile_instansi"@error('profile_instansi')
                    class="text-danger"
                    @enderror>Profile @error('profile_instansi')
                        | {{$message}}
                    @enderror</label>
                    <input type="hidden" class="form-control" id="profile_instansi" name="profile_instansi" value="{{old('profile_instansi')}}" rows="3" placeholder="......"></input>
                    <trix-editor input="profile_instansi" class="form-control" ></trix-editor>

                </div>
                </div>
                <div class="col-6">
                <div class="form-group row">
                    <label class="col-12"@error('logo_instansi')
                    class="text-danger"
                    @enderror>Logo Instansi @error('logo_instansi')
                        | {{$message}}
                    @enderror</label>
                    <div class="col-lg">
                    <img class="img-preview-logo img-fluid mb-2 col-sm-2 d-block">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo_instansi" name="logo_instansi" value="{{old('logo_instansi')}}" onchange="previewLogo()" data-toggle="custom-file-input">
                        <label class="custom-file-label" for="logo_instansi">Choose file</label>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6 form-group">
                <div class="form-material">
                    {{--  --}}
                </div>
                </div>
                <div class="col-6">
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto">
                    <button type="submit" class="btn btn-alt-primary">Create</button>
                    <a href="{{route('instansi.index')}}" class="btn btn-alt-danger">Back</a>
                    </div>
                </div>
                </div>
            </div>
        </form>
        </div>
        </div>

    </div>
    </div>
    <!-- Bootstrap Forms Validation -->
    <!-- Material Forms Validation -->
    <!-- END Material Forms Validation -->
</div>
<!-- END Page Content -->
</main>
@endsection

@section('preview-logo')
    <script>
        function previewLogo(){
            const image = document.querySelector('#logo_instansi');
            const imgPreview = document.querySelector('.img-preview-logo');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection

@section('preview-alur')
    <script>
        function previewAlur(){
            const image = document.querySelector('#alur_layanan_instansi');
            const imgPreview = document.querySelector('.img-preview-alur');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
