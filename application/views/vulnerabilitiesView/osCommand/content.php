<div class="empty">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Os Command</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url("Vulnerabilities/osCommandCheck") ?>" method="POST">
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
