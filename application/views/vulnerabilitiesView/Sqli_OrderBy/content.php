<div class="empty">
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">SQL
                        Injection(OrderBy)</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-profile-17" class="nav-link" data-bs-toggle="tab">a glass of code</a>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tabs-home-17">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Sıralamak istediğiniz sütunu seçin</label>
                                <form action="<?php echo base_url("Vulnerabilities/Sqli_OrderBy"); ?>" method="post">
                                    <div class="form-selectgroup">
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="ID"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">ID</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="Author"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">Author</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <input type="checkbox" name="name" value="Text"
                                                   class="form-selectgroup-input">
                                            <span class="form-selectgroup-label">Text</span>
                                        </label>
                                        <label class="form-selectgroup-item">
                                            <button type="submit" class="btn btn-outline-primary w-100">Sırala</button>
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <?php foreach ($posts as $post) { ?>
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <p><?php echo $post->text ?></p>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <?php echo $post->author ?>
                                            <div class="col-auto ms-auto">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <span class="avatar avatar-sm avatar-rounded">SU</span>
                                                    <span class="avatar avatar-sm avatar-rounded">SA</span>
                                                    <span class="avatar avatar-sm avatar-rounded">MA</span>
                                                    <span class="avatar avatar-sm avatar-rounded">MA</span>
                                                    <span class="avatar avatar-sm avatar-rounded">NL</span>
                                                    <span class="avatar avatar-sm avatar-rounded">AA</span>
                                                    <span class="avatar avatar-sm avatar-rounded">+1875</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-profile-17">
                        <div class="container-xl">
                            <div class="card card-lg">
                                <div class="card-body ">
                                    <div class="row g-4">
                                        <div class="col-12 markdown">
                                            <p>Merhaba, order by dan sonra gelecek olan sütün adını dinamik bir şekilde
                                                çağırmalısın.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
