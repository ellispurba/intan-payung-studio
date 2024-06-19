@extends('layouts.master')
@section('content')
<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="card-toolbar" d-flex" style="gap: 10px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover">
        <a href="#" class="btn btn-primary er fs-6 px-4 py-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target_tambah">
            <i class="ki-outline ki-plus fs-2"></i>Tambah Data Penjadwalan</a>
        <a href="#" class="btn btn-primary er fs-6 px-4 py-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target_edit">
            <i class="ki-outline ki-pencil fs-2"></i>Edit Data Penjadwalan</a>
        <a href="#" class="btn btn-primary er fs-6 px-4 py-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
            <i class="ki-outline ki-cross fs-2"></i>Reminder Data Penjadwalan</a>
    </div>


    <!-- modal -->
    <div class="modal fade" id="kt_modal_new_target_tambah" tabindex="-1" aria-hidden="true">
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
                            <h1 class="mb-3">Data Penjadwalan</h1>
                            <div class="text-muted fw-semibold fs-5">Tambah Data Penjadwalan</div>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Nama Pemesan</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Isi nama sesuai dengan KTP">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Pemesan" name="nama_pemesan" required />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Tanggal Booking</span>
                                <span class="ms-1">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <input type="date" class="form-control form-control-solid" name="tgl_booking" required />
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
                                <span class="required">Email</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Isi email yang aktif">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <input type="email" class="form-control form-control-solid" placeholder="Masukkan Email" name="email" required />
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
</div>
@endsection