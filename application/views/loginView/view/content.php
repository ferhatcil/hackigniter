<div class="container-tight py-6">
    <div class="text-center mb-4">
        <a href="."><img src="./static/logo.svg" height="36" alt=""></a>
    </div>
    <?php echo $error; ?>
    <form class="card card-md" action="<?php echo base_url("Login/Check") ?>" method="POST" autocomplete="off">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Hackigniter v1.0-pilot</h2>
            <div class="mb-3">
                <label class="form-label">Kullanıcı Adı</label>
                <input name="username" type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">
                    Şifre
                </label>
                <div class="input-group input-group-flat">
                    <input name="password" type="password" class="form-control" autocomplete="off">
                    <span class="input-group-text">
                </span>
                </div>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
            </div>
        </div>
    </form>
</div>