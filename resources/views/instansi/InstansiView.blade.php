@extends('layouts.master')
@section('title','MPP')
@push('css-custom')
<style>
    body{
        font-family: 'Nuninto';
    }
</style>
@endpush

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <br>
        <br>
        <div class="bg-image bg-image-bottom" style="background-image: url({{url('assets/media/photos/photo35.jpg')}});">
            <div class="bg-primary-dark-op">
            <div class="content content-top text-center overflow-hidden">
                <div class="pt-20 pb-20">
                <h1 class="font-w700 text-white mb-100 invisible" data-toggle="appear" data-class="animated fadeInUp">DATA INSTANSI</h1>
                </div>
            </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        {{-- @if (Instansi::has('success'))
        <script>
            Swal("success!", "{{$message}}" , "success");
        </script>
        @endif --}}
        <div class="content">
            <div class="row invisible" data-toggle="appear">
                <!-- Main Container -->
                <main id="main-container">
                    <!-- Page Content -->
                    <div class="content">
                    {{-- <h2 class="content-heading">DataTables Plugin</h2> --}}
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                        <h3 class="block-title"><small></small></h3>
                            <a href="{{route('instansi.create')}}" class="btn btn-primary" onclick="Codebase.loader('show', 'bg-gd-dusk');
                                    setTimeout(function () {
                                        Codebase.loader('hide');
                                    }, 3000);">
                                <i class="fa fa-plus mr-5"></i>Add Data
                            </a>
                        </div>
                        <div class="block-content block-content-full">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                <th class="text-center" style="width: 1%; background-color: rgb(190, 190, 190);">No.</th>
                                <th class="text-center" style="background-color: rgb(190, 190, 190);">Nama Instansi</th>
                                <th class="text-center" style="background-color: rgb(190, 190, 190);">website</th>
                                <th class="text-center" style="background-color: rgb(190, 190, 190);">Email</th>
                                <th class="text-center" style="background-color: rgb(190, 190, 190);">No. Handphone</th>
                                <th class="text-center" style="background-color: rgb(190, 190, 190);">Kategori</th>
                                <th class="text-center" style="background-color: rgb(190, 190, 190);">Logo Instansi</th>
                                <th class="text-center d-none d-sm-table-cell" style="width: 10%; background-color: rgb(190, 190, 190);">Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instansi as $no => $data)
                                <tr>
                                <td class="text-center">{{$no+1}}</td>
                                <td class="text-center font-w600">{{$data->nama_instansi}}</td>
                                <td class="text-center font-w600">{{$data->web_instansi}}</td>
                                <td class="text-center font-w600">{{$data->email_instansi}}</td>
                                <td class="text-center font-w600">{!!$data->nope_instansi!!}</td>
                                <td class="text-center font-w600">{{$data->kategori_instansi}}</td>
                                @if ($data->logo_instansi)
                                <td class="text-center font-w600" style="width:100px;70px">
                                    <img class="img-fluid options-item" src="{{asset('storage/' . $data->logo_instansi)}}" alt="">
                                    </td>
                                @else
                                    <td class="text-center font-w600">
                                    <img class="img-fluid options-item" src="\assets\file-default\default.jpg" alt="">
                                    </td>
                                @endif
                                <td class="text-center">
                                    {{-- <button href="{{url('master-data/instansi/'.$data->id.'')}}" class="btn btn-sm btn-success mr-5 mb-5" data-toggle="tooltip" data-placement="left" title="Detail Data"><i class="fa fa-eye"></i></button> --}}

                                    <a href="/dashboard/instansi/{{$data->id}}/edit" class="btn btn-sm btn-warning" data-placement="left" title="Ubah Data" data-toggle="tooltip"><i class="fa fa-gear"></i></a>

                                    <button href="#" data-id="{{$data->id}}" class="btn btn-sm btn-danger swal-hapus" data-placement="left" title="Hapus Data" data-toggle="tooltip"><i class="fa fa-trash"></i>
                                        <form action="{{route('instansi.destroy', $data->id)}}" method="POST" id="delete{{$data->id}}" class="d-inline">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->
                    </div>
                    <!-- END Page Content -->
                </main>
                <!-- END Main Container -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@push('script-tambahan')
<script>
$(".swal-hapus").click(function(e) {
    id = e.target.dataset.id;
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this! "+id+"",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            // Swal.fire(
            //     'Deleted!',
            //     'Your file has been deleted.',
            //     'success'
            //     )
                $('#delete'+id+'').submit();
        } else {
            // swal('Your Imaginary file is save');
        }
    })
})
</script>
@endpush
