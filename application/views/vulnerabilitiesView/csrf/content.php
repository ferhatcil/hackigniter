<div class="empty">
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">CSRF (Cross-Site Request Forgery)</a>
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
                                        <?php if (csrfUserIsActive()) {
                                            ?>
                                            <div class="col-md-12">
                                                <div class="page-header">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                    <span style="background: #0ca678;color: white" class="avatar avatar-md">
                                        <?php echo $sessionUser = $this->session->userdata["user_session_csrf"]->name[0] . $sessionUser = $this->session->userdata["user_session_csrf"]->surname[0]; ?>
                                    </span>
                                                        </div>
                                                        <div class="col">
                                                            <h2 class="page-title"><?php echo $sessionUser = $this->session->userdata["user_session_csrf"]->name . ' ' . $sessionUser = $this->session->userdata["user_session_csrf"]->surname; ?></h2>
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
                                                                        <a style="text-decoration: none" class="text-reset">Cyberdetails.org</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto d-none d-md-flex">
                                                            <a href="<?php echo base_url("Vulnerabilities/csrfLogout"); ?>"
                                                               class="btn btn-danger">
                                                                Çıkış Yap
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p>Ek Hesap</p>
                                                        <p><?php echo $user->ibanNumber ?></p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto ms-auto">
                                                                <?php echo $user->totalAmount ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <div class="card">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter card-table">
                                                            <thead>
                                                            <tr>
                                                                <th>Tarih</th>
                                                                <th>İşlem</th>
                                                                <th>Gönderici</th>
                                                                <th>Alıcı</th>
                                                                <th>Tutar</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            foreach ($transfers as $data) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $data->date ?></td>
                                                                    <td>Para Transferi</td>
                                                                    <td>
                                                                        <?php echo ($data->id1 == $this->session->userdata["user_session_csrf"]->ibanNumber) ? $data->name . ' ' . $data->surname : $data->id1; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo ($data->id2 == $this->session->userdata["user_session_csrf"]->ibanNumber) ? $data->name . ' ' . $data->surname : $data->id2; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo ($data->id1 == $this->session->userdata["user_session_csrf"]->ibanNumber) ? "-" . $data->amount : '+' . $data->amount; ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">EFT</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="<?php echo base_url("Vulnerabilities/csrfSendMoney"); ?>" method="post">
                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label col-3 col-form-label">Alıcı Adı</label>
                                                                <div class="col">
                                                                    <input name="name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label col-3 col-form-label">Alıcı Soyadı</label>
                                                                <div class="col">
                                                                    <input name="surname" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label col-3 col-form-label">IBAN</label>
                                                                <div class="col">
                                                                    <div class="input-group mb-2">
                                                                        <span class="input-group-text">TR</span>
                                                                        <input name="receiver" type="text" class="form-control"
                                                                               autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="form-label col-3 col-form-label">Tutar</label>
                                                                <div class="col">
                                                                    <input name="amount" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-footer">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="container-tight py-6">
                                                <form class="card card-md" action="<?php echo base_url("Vulnerabilities/csrfLogin"); ?>"
                                                      method="POST" autocomplete="off">
                                                    <div class="card-body">
                                                        <h2 class="card-title text-center mb-4">Hackigniter İnternet Şubesi</h2>
                                                        <div class="mb-3">
                                                            <label class="form-label">T.C. Kimlik Numaranız</label>
                                                            <input name="identityNumber" type="text" class="form-control">
                                                        </div>
                                                        <div class="mb-2">
                                                            <label class="form-label">
                                                                Hackigniter Şifreniz
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
                        GET requestleri ve SESSION işlemleri doğru kontrol edilmiyor. Uzak sunucudan gönderilen bir get isteği sonrası her şey değişebilir.<br> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>