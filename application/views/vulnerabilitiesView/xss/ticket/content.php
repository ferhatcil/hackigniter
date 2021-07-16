<div class="content">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="row">
                <?php if (xssUserIsActive()) {
                    ?>
                    <div class="col-md-12">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span style="background: #0ca678;color: white" class="avatar avatar-md">
                                        <?php echo $user->username[0]; ?>
                                    </span>
                                </div>
                                <div class="col">
                                    <h2 class="page-title"><?php echo $user->username; ?></h2>
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
                                    <a href="<?php echo base_url("Vulnerabilities/xss"); ?>"
                                       class="btn btn-primary">
                                        Anasayfa
                                    </a>
                                </div>
                                <div class="col-auto d-none d-md-flex">
                                    <a href="<?php echo base_url("Vulnerabilities/xssLogout"); ?>"
                                       class="btn btn-danger">
                                        Çıkış Yap
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($user->role == 0 or $user->role == 1) {
                        ?>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"><?php echo $ticket->title ?></div>
                                </div>
                                <div class="card-body">
                                    <?php echo $ticket->content ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <?php foreach ($comments as $c) {
                                ?>
                                <div class="card mt-1">
                                    <div class="card-body">
                                        <p><b><?php echo $c->username . '</b> : ' . $c->comment; ?></p>
                                    </div>
                                </div>
                                <?php
                            } ?>
                        </div>

                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Yorum Ekle</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url("Vulnerabilities/xssAddComment/"); ?>"
                                          method="post">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label col-3 col-form-label">İçerik</label>
                                            <div class="col">
                                                <textarea name="content" class="form-control"
                                                          name="example-textarea-input" rows="6"
                                                          style="margin-top: 0px; margin-bottom: 0px; height: 149px;"></textarea>
                                            </div>
                                            <input type="hidden" name="ticket" value="<?php echo $ticket->id; ?>">
                                        </div>
                                        <div class="mb-3">
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary">Gönder</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else {
                        redirect(base_url("Vulnerabilities/xssLogout"));
                    }
                    ?>
                    <?php
                } else {
                    redirect(base_url("Vulnerabilities/xss"));
                } ?>
            </div>
        </div>
    </div>
</div>