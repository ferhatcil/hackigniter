<div class="empty">
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">Time Based SQL Injection</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-profile-17" class="nav-link" data-bs-toggle="tab">a glass of code</a>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tabs-home-17">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo base_url("Vulnerabilities/timeBasedSqli") ?>" method="POST">
                                        <div class="form-group mb-3 ">
                                            <label class="form-label">Kullanıcı Adı</label>
                                            <div>
                                                <input name="username" type="username" class="form-control" aria-describedby="emailHelp"
                                                       placeholder="Kullanıcı adınız">
                                                <small class="form-hint">Son baktığınız kullanıcı adlarını asla başkalarıyla paylaşmayacağız. Belki...</small>
                                            </div>
                                        </div>

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary btn-block">Ara</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-profile-17">
                        <code class="language-scss">
                            $username = $this->input->post("username");<br>
                            $username = strtolower($username);<br>
                            $username = str_replace('sleep', '', $username);<br>
                            $username = str_replace('and', '', $username);<br><br>
                            $query = "select username from hi_1 where username like '%" . $username . "%'";
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="empty">

</div>
