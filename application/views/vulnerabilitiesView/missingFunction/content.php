<div class="empty">
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">Missing Function Level Access Control</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-profile-17" class="nav-link" data-bs-toggle="tab">a glass of hint</a>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tabs-home-17">
                        <div class="content">
                            <div class="container-xl">
                                <div class="row row-deck row-cards">
                                    <div class="row">
                                        <?php if (missingFunctionIsActive()) {
                                            print_r($usersForAdmin);
                                            ?>
                                            <div class="col-md-12">
                                                <div class="page-header">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                    <span style="background: #0ca678;color: white" class="avatar avatar-md">
                                        <?php echo $sessionUser = $this->session->userdata["user_session_missingFunction"]->username[0] ?>
                                    </span>
                                                        </div>
                                                        <div class="col">
                                                            <h2 class="page-title"><?php echo $sessionUser = $this->session->userdata["user_session_missingFunction"]->username ?></h2>
                                                            <div class="page-subtitle">
                                                                <div class="row">
                                                                    <div class="col-auto">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                                                             stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                            <line x1="3" y1="21" x2="21" y2="21"></line>
                                                                            <path d="M5 21v-14l8 -4v18"></path>
                                                                            <path d="M19 21v-10l-6 -4"></path>
                                                                            <line x1="9" y1="9" x2="9" y2="9.01"></line>
                                                                            <line x1="9" y1="12" x2="9" y2="12.01"></line>
                                                                            <line x1="9" y1="15" x2="9" y2="15.01"></line>
                                                                            <line x1="9" y1="18" x2="9" y2="18.01"></line>
                                                                        </svg>
                                                                        <a style="text-decoration: none" class="text-reset">Sibertime</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto d-none d-md-flex">
                                                            <a href="<?php echo base_url("Vulnerabilities/missingFunctionLogout"); ?>"
                                                               class="btn btn-danger">
                                                                Çıkış Yap
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <form class="card card-md" action="<?php echo base_url("Vulnerabilities/missingFunctionUpdateProfile"); ?>"
                                                      method="POST" autocomplete="off">
                                                    <div class="card-body">
                                                        <h2 class="card-title text-center mb-4">Şifre Değiştir</h2>
                                                        <div class="mb-3">
                                                            <label class="form-label">Eski Şifreniz</label>
                                                            <input name="oldPassword" type="text" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Yeni Şifreniz</label>
                                                            <input name="newPassword" type="text" class="form-control">
                                                        </div>
                                                        <div class="form-footer">
                                                            <button type="submit" class="btn btn-orange w-100">Değiştir</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="container-tight py-6">
                                                <form class="card card-md" action="<?php echo base_url("Vulnerabilities/missingFunctionLogin"); ?>"
                                                      method="POST" autocomplete="off">
                                                    <div class="card-body">
                                                        <h2 class="card-title text-center mb-4">Hackigniter CMS v1.5</h2>
                                                        <div class="mb-3">
                                                            <label class="form-label">Kullanıcı Adınız</label>
                                                            <input name="username" type="text" class="form-control">
                                                        </div>
                                                        <div class="mb-2">
                                                            <label class="form-label">
                                                                Hackigniter CMS Şifreniz
                                                            </label>
                                                            <div class="input-group input-group-flat">
                                                                <input name="password" type="password" class="form-control"
                                                                       autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="form-footer">
                                                            <button type="submit" class="btn btn-primary w-100">Oturum Aç</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <?php
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-profile-17">
                        <code class="language-scss">
                            Yazılımcının front-end'e eklemediği ve arka tarafta bulunan farklı bir method olabilir.
                            missingFunctionDeleteProfile()
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>