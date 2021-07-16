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
                                    <a href="<?php echo base_url("Vulnerabilities/xssLogout"); ?>"
                                       class="btn btn-danger">
                                        Çıkış Yap
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($user->role == 0) {
                        ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Ticket Gönder</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url("Vulnerabilities/xssAddTicket"); ?>"
                                          method="post">
                                        <div class="form-group mb-3 row">
                                            <label class="form-label col-3 col-form-label">Başlık</label>
                                            <div class="col">
                                                <input name="title" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label class="form-label col-3 col-form-label">İçerik</label>
                                            <div class="col">
                                                <textarea name="content" class="form-control"
                                                          name="example-textarea-input" rows="6"
                                                          style="margin-top: 0px; margin-bottom: 0px; height: 149px;"></textarea>
                                            </div>
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-vcenter card-table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Başlık</th>
                                            <th class="w-1"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($tickets as $ticket) {
                                            echo "<tr>";
                                            echo "<td>$ticket->id</td>";
                                            echo "<td class='text-muted'>$ticket->title</td>";
                                            echo "<td><a href='xssTicketDetail/$ticket->id'>Detay</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php
                    } elseif ($user->role == 1) {
                        ?>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-vcenter card-table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Başlık</th>
                                            <th class="w-1"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($adminTickets as $ticket) {
                                            echo "<tr>";
                                            echo "<td>$ticket->id</td>";
                                            echo "<td class='text-muted'>$ticket->title</td>";
                                            echo "<td><a href='xssTicketDetail/$ticket->id'>Detay</td>";
                                            echo "</tr>";
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
                                    <h3 class="card-title">Dosya Yükle</h3>
                                </div>
                                <div class="card-body">
                                    <form id="test" action="<?php echo base_url("Vulnerabilities/xssFileUpload"); ?>"
                                          method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <div class="form-label">Custom File Input</div>
                                            <input name="xssfile" type="file" class="form-control">
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary">Yükle</button>
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
                    ?>
                    <div class="container-tight py-6">
                        <form class="card card-md" action="<?php echo base_url("Vulnerabilities/xssLogin"); ?>"
                              method="POST" autocomplete="off">
                            <div class="card-body">
                                <h2 class="card-title text-center mb-4">Hackigniter Help Desk</h2>
                                <div class="mb-3">
                                    <label class="form-label">Kullanıcı Adınız</label>
                                    <input name="username" type="text" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">
                                        Hackigniter HelpDesk Şifreniz
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