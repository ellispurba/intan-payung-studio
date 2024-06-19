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
                <a href="#" class="btn btn-primary er fs-6 px-4 py-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                    <i class="ki-outline ki-plus fs-2"></i>Tambah Paket Foto</a>
            </div>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th class="min-w-200px">No</th>
                            <th class="min-w-200px">Nama Paket</th>
                            <th class="min-w-150px">Foto 1</th>
                            <th class="min-w-150px">Foto 2</th>
                            <th class="min-w-100px text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <h5 class="text-gray-900 fw-bold text-hover-primary fs-6">1</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5 class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</h5>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{asset('admin/assets/media/avatars/300-14.jpg')}}" alt="" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{asset('admin/assets/media/avatars/300-14.jpg')}}" alt="" />
                                    </div>
                                </div>
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

<!--begin::Modal - New Target-->
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
                        <h1 class="mb-3">Data Paket Foto</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Nama Paket</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Isi nama peket dengan benar">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Paket" name="nama_paket" />
                    </div>
                    <div class="fv-row mb-10">
                        <label class="d-block fw-semibold fs-6 mb-5">
                            <span class="required">Foto 1</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Contoh: Masukkan foto dengan gaya.">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <style>
                            .image-input-placeholder {
                                background-image: url("{{asset('admin/assets/media/svg/files/blank-image.svg')}}");
                            }

                            [data-bs-theme="dark"] .image-input-placeholder {
                                background-image: url("{{asset('admin/assets/media/svg/files/blank-image-dark.svg')}}");
                            }
                        </style>
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
                            <div class="image-input-wrapper w-125px h-125px"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ubah Foto">
                                <i class="ki-outline ki-pencil fs-7"></i>
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Batal">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus Foto">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </span>
                        </div>
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    </div>
                    <div class="fv-row mb-10">
                        <label class="d-block fw-semibold fs-6 mb-5">
                            <span class="required">Foto 2</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Contoh: Masukkan foto dengan gaya.">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                            </span>
                        </label>
                        <style>
                            .image-input-placeholder {
                                background-image: url("{{asset('admin/assets/media/svg/files/blank-image.svg')}}");
                            }

                            [data-bs-theme="dark"] .image-input-placeholder {
                                background-image: url("{{asset('admin/assets/media/svg/files/blank-image-dark.svg')}}");
                            }
                        </style>
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
                            <div class="image-input-wrapper w-125px h-125px"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Ubah Foto">
                                <i class="ki-outline ki-pencil fs-7"></i>
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Batal">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus Foto">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </span>
                        </div>
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
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