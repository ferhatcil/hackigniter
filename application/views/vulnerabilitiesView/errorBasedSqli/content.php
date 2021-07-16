<?php echo (isset($errorMessage) ? $errorMessage : ''); ?>
<div class="empty">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Error Based SQL Injection</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url("Vulnerabilities/errorBasedSqli") ?>" method="POST">
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
