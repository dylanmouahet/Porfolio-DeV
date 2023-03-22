</div>
<!-- /content area -->


<!-- Footer -->
<div class="navbar navbar-sm navbar-footer border-top">
    <div class="container-fluid">
        <span>&copy; {{ Date('Y') }} <a href="https://dmsoft.net" target="_blanck">DM SOFT</a></span>

        <ul class="nav">
            <li class="nav-item ms-md-1">
                <b class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded"
                    target="_blank">
                    <div class="d-flex align-items-center mx-md-1">
                        <i class="ph-desktop"></i>
                        <span class="d-none d-md-inline-block ms-2">Version: {{ env('APP_VERSION') }}</span>
                    </div>
                </b>
            </li>
        </ul>
    </div>
</div>
<!-- /footer -->

</div>
<!-- /inner content -->

</div>
<!-- /main content -->

</div>
@stack('before_scripts')
<!-- /page content -->
<script src="{{ asset('assets_template/js/jquery/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@vite('resources/js/app.js')
<script src="{{ asset('js/script.js') }}"></script>
@if (session()->has('message'))
    <script>
        $(document).ready(function() {
            notif("{{ session()->get('message') }}", "{{ session()->get('type') }}");
        });
    </script>
@endif
@livewireScripts
@stack('scripts')


</body>

</html>
