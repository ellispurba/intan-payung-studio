@extends('layouts.master')
@section('content')
<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Data Paket Foto</span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk tambah paket">
                <button type="button" class="btn btn-primary er fs-6 px-4 py-2" onclick="add_ajax()">
                    <i class="ki-outline ki-plus fs-2"></i> Tambah Paket
                </button>
            </div>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->harga}}</td>
                            <td>{{$item->kategori}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td><a href="javascript:void(0)" onclick="edit('{{ $item->paket_id }}')"><i class="fa fa-edit text-info"></i></a>
                                <a href="javascript:void(0)" onclick="hapus('{{ $item->paket_id }}')" style="color: red;"><i class="fas fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--begin::Modal - New Target-->
<div class="modal fade" id="m_modal_6" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form class="form" action="" method="POST" id="formAdd" enctype="multipart/form-data">
                    <input type="hidden" name="paket_id" value="">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3" id="m_modal_6_title">Data Paket Foto</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Nama Paket</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Paket" name="nama" />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Harga</span>
                        </label>
                        <input type="number" class="form-control form-control-solid" placeholder="Masukkan Harga" name="harga" />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Kategori</span>
                        </label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"  name="kategori">
                            <option value="">Pilih Kategori</option>
                            <option value="Graduation">Graduation</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Family">Family</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Deskripsi</span>
                        </label>
                        <textarea name="deskripsi" class="form-select form-select-solid"  placeholder="Deskripsi" data-parsley-required="true"></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Foto</span>
                        </label>
                        <input type="file" class="form-control form-control-solid"  name="foto" />
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Close</button>
                        <a href="#" onclick="save()" class="btn btn-primary ">
                            Simpan
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function resetForm() {
        $('#m_form_1_msg').hide();
        $('#formAdd')[0].reset();
        $('[name="kategori"] :selected').removeAttr('selected');
    }

    function add_ajax() {
        method = 'add';
        resetForm();
        $('#m_modal_6_title').html("Tambah Paket");
        $('#m_form_1_msg').hide();
        $('#m_modal_6').modal('show');
    }
    function save() {
        let url;

        if (method === 'add') {
            url = "{{ route('paket.store') }}";
        } else {
            url = "{{ route('paket.update') }}";
        }

        var formData = new FormData();
        formData.append('paket_id', $('[name="paket_id"]').val());
        formData.append('nama', $('[name="nama"]').val());
        formData.append('harga', $('[name="harga"]').val());
        formData.append('kategori', $('[name="kategori"]').val());
        formData.append('deskripsi', $('[name="deskripsi"]').val());
        formData.append('foto', $('[name="foto"]')[0].files[0]);
        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
        
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(data) {
                if (data.status) {
                    $('#m_modal').modal('hide');
                    Swal.fire({
                        title: 'Berhasil..',
                        text: 'Data Anda berhasil disimpan',
                        icon: 'success'
                    }).then(function() {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        text: data.message,
                        icon: 'warning'
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                swal("Oops", "Data gagal disimpan!", "error");
            }
        });
    }
    function edit(id) {
        method = 'edit';
        resetForm(); 
        $('#m_modal_6_title').html("Edit Paket Foto"); 

        $.ajax({
            url: "{{ url('paket/edit') }}/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                if (data.data) {
                    $('#formAdd')[0].reset();
                    $('[name="paket_id"]').val(data.data.paket_id);
                    $('[name="nama"]').val(data.data.nama);
                    $('[name="harga"]').val(data.data.harga);
                    $('[name="deskripsi"]').val(data.data.deskripsi);
                    $('[name="kategori"]').val(data.data.kategori).change();

                    $('#m_modal_6').modal('show'); 
                } else {
                    Swal.fire("Oops", "Gagal mengambil data!", "error");
                }
                mApp.unblockPage();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                mApp.unblockPage();
                Swal.fire("Error", "Gagal mengambil data dari server!", "error");
            }
        });
    }
    function hapus(id) {
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda yakin ingin hapus data ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "<span><i class='flaticon-interface-1'></i><span>Ya, Hapus!</span></span>",
            confirmButtonClass: "btn btn-danger m-btn m-btn--pill m-btn--icon",
            cancelButtonText: "<span><i class='flaticon-close'></i><span>Batal Hapus</span></span>",
            cancelButtonClass: "btn btn-metal m-btn m-btn--pill m-btn--icon",
            customClass: {
                confirmButton: 'btn btn-danger m-btn m-btn--pill m-btn--icon',
                cancelButton: 'btn btn-metal m-btn m-btn--pill m-btn--icon'
            }
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('paket') }}/" + id,
                    type: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status === true) {
                            Swal.fire({
                                title: "Berhasil..",
                                text: "Data Anda berhasil dihapus",
                                icon: "success"
                            }).then(function() {
                                location.reload();
                            });
                        } else {
                            Swal.fire("Oops", "Data gagal dihapus!", "error");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        Swal.fire("Oops", "Data gagal dihapus!", "error");
                    }
                });
            }
        });
    }
</script>
@endsection