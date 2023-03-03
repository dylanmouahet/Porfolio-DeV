</div>
<!-- /content area -->


<!-- Footer -->
<div class="navbar navbar-sm navbar-footer border-top">
    <div class="container-fluid">
        <span>&copy; {{ Date("Y") }} <a
                href="https://dmsoft.net" target="_blanck">DM SOFT</a></span>

        <ul class="nav">
            <li class="nav-item ms-md-1">
                <b
                    class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded"
                    target="_blank">
                    <div class="d-flex align-items-center mx-md-1">
                        <i class="ph-desktop"></i>
                        <span class="d-none d-md-inline-block ms-2">Version: {{ env("APP_VERSION") }}</span>
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
<!-- /page content -->
@vite("resources/js/app.js")
</body>

</html>
