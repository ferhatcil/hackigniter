<header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row order-md-last">

            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div><?php echo $this->session->userdata['UserSession']->username ?></div>
                        <div class="mt-1 small text-muted">Hacker</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="https://github.com/ferhatcil" target="_blank" class="dropdown-item">Github</a>
                    <a href="https://cyberdetails.org" target="_blank" class="dropdown-item">cyberdetails.org</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo base_url("Logout"); ?>" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
        </div>
    </div>
</header>