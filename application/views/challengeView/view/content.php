<div class="container-xl">
    <div class="card mb-12">
        <div class="card-header">
            <h3 class="card-title">Challenge Accepted</h3>
            <div class="col-auto ms-auto">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                       data-bs-target="#modal-report">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Bayrak Gönder
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                       data-bs-target="#modal-report" aria-label="Create new report">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bayrak Gönder</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo base_url("Challenge/sendFlag"); ?>" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Bayrak</label>
                                <input type="text" class="form-control" name="flag">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                İptal
                            </a>
                            <button type="submit" class="btn btn-primary btn-block">Gönder</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="list-group list-group-flush list-group-hoverable">
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <?php
                        if ($errorBasedSqlInjection) {
                            echo '<span class="badge bg-green"></span>';
                        } else {
                            echo '<span class="badge bg-red"></span>';
                        }
                        ?>
                    </div>
                    <div class="col-auto">
                        <span class="avatar"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                                       d="M0 0h24v24H0z"
                                                                                                       fill="none"/><path
                                        d="M16 16v-8"/><path
                                        d="M12 20a4 4 0 0 0 4 -4v-8a4 4 0 1 0 -8 0v8a4 4 0 0 0 4 4z"/></svg></span>
                    </div>
                    <div class="col text-truncate">
                        <a href="<?php echo base_url("Vulnerabilities/errorBasedSqli") ?>" class="text-body d-block">Error
                            Based SQL Injection (extractvalue)</a>
                        <small class="d-block text-muted text-truncate mt-n1">Tablodan elde edeceğin bayrağı hemen
                            bize
                            gönder.</small>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <?php
                        if ($timeBasedSqlInjection) {
                            echo '<span class="badge bg-green"></span>';
                        } else {
                            echo '<span class="badge bg-red"></span>';
                        }
                        ?>
                    </div>
                    <div class="col-auto">
                        <span class="avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"
                                                                                      fill="none"/><path
                                        d="M13 20v-16l-5 5"/></svg>
                        </span>
                    </div>
                    <div class="col text-truncate">
                        <a href="<?php echo base_url("Vulnerabilities/timeBasedSqli") ?>" class="text-body d-block">Time
                            Based SQL Injection</a>
                        <small class="d-block text-muted text-truncate mt-n1">Tablodan elde edeceğin bayrağı hemen
                            bize
                            gönder.</small>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <?php
                        if ($idor == 500) {
                            echo '<span class="badge bg-green"></span>';
                        } else {
                            echo '<span class="badge bg-red"></span>';
                        }
                        ?>
                    </div>
                    <div class="col-auto">

                        <span class="avatar"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                                       d="M0 0h24v24H0z"
                                                                                                       fill="none"/><path
                                        d="M8 8a4 4 0 1 1 8 0c0 1.098 -.564 2.025 -1.159 2.815l-6.841 9.185h8"/></svg></span>
                    </div>
                    <div class="col text-truncate">
                        <a href="<?php echo base_url("Vulnerabilities/idor") ?>" class="text-body d-block">IDOR
                            (Insecure Direct Object References)</a>
                        <small class="d-block text-muted text-truncate mt-n1">
                            ferhatcil hesabının 500₺'ye ihtiyacı var.
                        </small>
                        <small class="d-block text-muted text-truncate mt-n1">Giriş Bilgileri :
                            32992363894:pass</small>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <?php
                        if ($csrf == 500) {
                            echo '<span class="badge bg-green"></span>';
                        } else {
                            echo '<span class="badge bg-red"></span>';
                        }
                        ?>
                    </div>
                    <div class="col-auto">

                        <span class="avatar"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                                       d="M0 0h24v24H0z"
                                                                                                       fill="none"/><path
                                        d="M12 12a4 4 0 1 0 -4 -4"/><path d="M8 16a4 4 0 1 0 4 -4"/></svg></span>
                    </div>
                    <div class="col text-truncate">
                        <a href="<?php echo base_url("Vulnerabilities/csrf") ?>" class="text-body d-block">CSRF
                            (Cross-Site Request Forgery)</a>
                        <small class="d-block text-muted text-truncate mt-n1">ferhatcil hesabının 500₺'ye ihtiyacı
                            var.
                        </small>
                        <small class="d-block text-muted text-truncate mt-n1">Giriş Bilgileri :
                            (ferhatcil) 18362964212:1881</small>
                        <small class="d-block text-muted text-truncate mt-n1">Giriş Bilgileri :
                            56044987104:richierich</small>
                        <small class="d-block text-muted text-truncate mt-n1">Bu zafiyet ilerleyen zamanlarda daha
                            uygulanabilir hale getirilecektir.</small>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <?php
                        if ($xssToRce) {
                            echo '<span class="badge bg-green"></span>';
                        } else {
                            echo '<span class="badge bg-red"></span>';
                        }
                        ?>
                    </div>
                    <div class="col-auto">
                        <span class="avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"
                                                                                      fill="none"/><path
                                        d="M15 20v-15l-8 11h10"/></svg>
                        </span>
                    </div>
                    <div class="col text-truncate">
                        <a href="<?php echo base_url("Vulnerabilities/xss") ?>" class="text-body d-block">XSS (Cross
                            Site Scripting)</a>
                        <small class="d-block text-muted text-truncate mt-n1">798402077390 dizini içerisindeki
                            bayrağa
                            ihtiyacımız var.</small>
                        <small class="d-block text-muted text-truncate mt-n1">Giriş Bilgileri :
                            ferhatcil:1234 (admin)</small>
                        <small class="d-block text-muted text-truncate mt-n1">Giriş Bilgileri :
                            burakbozaci:1234 (user)</small>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <?php
                        if ($osCommand) {
                            echo '<span class="badge bg-green"></span>';
                        } else {
                            echo '<span class="badge bg-red"></span>';
                        }
                        ?>
                    </div>
                    <div class="col-auto">

                        <span class="avatar"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                                       d="M0 0h24v24H0z"
                                                                                                       fill="none"/><path
                                        d="M8 20h4a4 4 0 1 0 0 -8h-4v-8h8"/></svg></span>
                    </div>
                    <div class="col text-truncate">
                        <a href="<?php echo base_url("Vulnerabilities/osCommand") ?>" class="text-body d-block">OS
                            Command (Command Injection)</a>
                        <small class="d-block text-muted text-truncate mt-n1">426094998948 dizini içerisindeki
                            bayrağa
                            ihtiyacımız var.</small>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <?php
                        if ($missingFunction) {
                            echo '<span class="badge bg-red"></span>';
                        } else {
                            echo '<span class="badge bg-green"></span>';
                        }
                        ?>
                    </div>
                    <div class="col-auto">
                        <span class="avatar"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                                       d="M0 0h24v24H0z"
                                                                                                       fill="none"/><path
                                        d="M8 16a4 4 0 1 0 8 0v-1a4 4 0 1 0 -8 0"/><path
                                        d="M16 8a4 4 0 1 0 -8 0v8"/></svg></span>
                    </div>
                    <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Missing Function Level Access Control</a>
                        <small class="d-block text-muted text-truncate mt-n1">Sistemlerimizi teklikeye sokan
                            cyberdetails isimli kullanıcıyı en kısa sürede silmelisin.</small>
                        <small class="d-block text-muted text-truncate mt-n1">Giriş Bilgileri :
                            nazimhikmet:piraye</small>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>