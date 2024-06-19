@extends('layouts.master')
@section('content')
<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="row g-5 gx-xl-10">
        <div class="page-heading">
            <h3>Dashboard</h3>
        </div>
        <div class="page-heading">
            <h1>Welcome, Admin!</h1>
        </div>
        <div class="col-xxl-6 mb-md-5 mb-xl-10">
            <div class="row g-5 g-xl-10">
                <div class="col-md-6 col-xl-6 mb-xxl-10">
                    <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                        <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                            <div class="mb-4 px-9">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">69700</span>
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%
                                    </span>
                                </div>
                                <span class="fs-6 fw-semibold text-gray-500">Total Pesanan</span>
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush h-md-50 mb-xl-10">
                        <div class="card-header pt-5">
                            <div class="card-title d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">1836</span>
                                    <span class="badge badge-light-danger fs-base">
                                        <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>2.2%</span>
                                </div>
                                <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Penjadwalan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6 mb-xxl-10">
                    <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                        <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                            <div class="mb-4 px-9">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">29420</span>
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%
                                    </span>
                                </div>
                                <span class="fs-6 fw-semibold text-gray-500">Total Karyawan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-5 g-xl-10 g-xl-10">
        <div class="col-xl-8">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-7">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Data Pemesanan</span>
                        <span class="text-gray-500 pt-2 fw-semibold fs-6">Statistics by Data Pemesanan</span>
                    </h3>
                    <div class="card-toolbar">
                        <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Remove</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Mute</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-5">
                    <div id="kt_charts_widget_15_chart" class="min-h-auto ps-4 pe-6 mb-3 h-350px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection