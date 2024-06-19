@extends('layouts.master')
@section('content')
<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Data Pemesanan</span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik untuk tambah pemesanan">
                <a href="#" class="btn btn-primary er fs-6 px-4 py-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                    <i class="ki-outline ki-plus fs-2"></i>Tambah Data Pemesanan</a>
            </div>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th class="min-w-50px">No</th>
                            <th class="min-w-150px">Nama</th>
                            <th class="min-w-150px">Alamat</th>
                            <th class="min-w-150px">No HP</th>
                            <th class="min-w-150px">Tanggal Booking</th>
                            <th class="min-w-150px">Waktu</th>
                            <th class="min-w-150px">nama Paket</th>
                            <th class="min-w-150px">Keterangan</th>
                            <th class="min-w-150px">Total Harga</th>
                            <th class="min-w-150px">Status Pemesanan</th>
                            <th class="min-w-100px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <div class="d-flex justify-content-end flex-shrink-0">
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="ki-outline ki-pencil fs-2"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Data Pemesanan</h1>
                        <div class="text-muted fw-semibold fs-5">Tambah Data Pemesanan</div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Nama</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Isi nama sesuai dengan KTP">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama" name="nama" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Alamat</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Isi sesuai dengan KTP">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <input type="textarea" class="form-control form-control-solid" placeholder="Masukkan Alamat" name="alamat" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">No HP</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Isi nomor HP yang aktif">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <input type="number" class="form-control form-control-solid" placeholder="Masukkan No Handphone" name="no_hp" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tanggal Booking</span>
                            <span class="ms-1">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <input type="date" class="form-control form-control-solid" name="tanggal_booking" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Waktu</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Isi waktu WIB">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Waktu" name="waktu" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Nama Paket</label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Paket" name="nama_paket">
                            <option value="">Paket Biasa</option>
                            <option value="1">Paket Super</option>
                            <option value="2">Paket Dewa</option>
                            <option value="3">Paket Tiada 2nya</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Keterangan</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Contoh: Menggunakan kamera DSLR">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Keterangan" name="keterangan" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Total Harga</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Isi jumlah harga">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Total Harga" name="total_harga" required />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Status Pesanan</label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Status" name="status_pesanan">
                            <option value="">Terima</option>
                            <option value="1">Batal</option>
                            <option value="2">Tolak</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection