<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        {{ $title ?? env('APP_NAME') }} <span class="fw-normal">{{ isset($sub_title) ? " - " . $sub_title : "" }}</span>
                    </h4>
                </div>

            </div>

            {{-- <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="#" class="breadcrumb-item">Home</a>
                        <a href="#" class="breadcrumb-item">Link</a>
                        <span class="breadcrumb-item active">Current</span>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
