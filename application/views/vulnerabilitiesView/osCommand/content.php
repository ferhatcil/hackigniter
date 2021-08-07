<div class="empty">
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">Os Command</a>
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
                                    <form action="<?php echo base_url("Vulnerabilities/osCommandCheck") ?>"
                                          method="POST">
                                        <div class="form-group mb-3 ">
                                            <label class="form-label">Lütfan bana bir şey söyle</label>
                                            <div>
                                                <input name="something" type="username" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary btn-block">Gönder</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tabs-profile-17">
                        <code class="language-scss">
                            $something = $this->input->post("something");<br>
                            system($something);
                        </code>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>