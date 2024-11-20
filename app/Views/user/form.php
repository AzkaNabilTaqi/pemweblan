<!-- application/views/tambah_mahasiswa.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="d-flex justify-content-center">
        <svg
        style="margin-left:-11.5em; padding:0em"
            width="120mm"
            height="8mm"
            viewBox="0 0 24 8"
            version="1.1"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg">
            <defs
                id="defs1" />
            <g
                inkscape:label="Layer 1"
                inkscape:groupmode="layer">
                <path
                    style="fill:#e79f09;stroke:#282828;stroke-width:0.969318;stroke-miterlimit:5.2"
                    d="M 7.8728528,4.0424247 A 3.6477332,3.4816077 0 0 1 4.238019,7.5240106 3.6477332,3.4816077 0 0 1 0.57747761,4.0670485 3.6477332,3.4816077 0 0 1 4.1864219,0.56101293 3.6477332,3.4816077 0 0 1 7.8724879,3.9931783" />
                <path
                    style="fill:#e79f09;stroke:#282828;stroke-width:0.904564;stroke-miterlimit:5.2"
                    d="M 7.8401237,3.9712796 H 130.815691 V 4.1918103 H 7.8401237 Z" />
            </g>
        </svg>
        <svg
            style="margin-left:-11.5em; padding:0em"
            width="120mm"
            height="8mm"
            viewBox="0 0 24 8"
            version="1.1"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg">
            <defs
                id="defs1" />
            <g
                inkscape:label="Layer 1"
                inkscape:groupmode="layer">
                <path
                    style="fill:#e79f09;stroke:#282828;stroke-width:0.969318;stroke-miterlimit:5.2"
                    d="M 7.8728528,4.0424247 A 3.6477332,3.4816077 0 0 1 4.238019,7.5240106 3.6477332,3.4816077 0 0 1 0.57747761,4.0670485 3.6477332,3.4816077 0 0 1 4.1864219,0.56101293 3.6477332,3.4816077 0 0 1 7.8724879,3.9931783" />
                <path
                    style="fill:#e79f09;stroke:#282828;stroke-width:0.904564;stroke-miterlimit:5.2"
                    d="M 7.8401237,3.9712796 H 130.815691 V 4.1918103 H 7.8401237 Z" />
            </g>
        </svg>
        <svg
            style="margin-left:-11.5em; padding:0em"
            width="120mm"
            height="8mm"
            viewBox="0 0 24 8"
            version="1.1"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg">
            <defs
                id="defs1" />
            <g
                inkscape:label="Layer 1"
                inkscape:groupmode="layer">
                <path
                    style="fill:#e79f09;stroke:#282828;stroke-width:0.969318;stroke-miterlimit:5.2"
                    d="M 7.8728528,4.0424247 A 3.6477332,3.4816077 0 0 1 4.238019,7.5240106 3.6477332,3.4816077 0 0 1 0.57747761,4.0670485 3.6477332,3.4816077 0 0 1 4.1864219,0.56101293 3.6477332,3.4816077 0 0 1 7.8724879,3.9931783" />
                <path
                    style="fill:#e79f09;stroke:#282828;stroke-width:0.904564;stroke-miterlimit:5.2"
                    d="M 7.8401237,3.9712796 H 130.815691 V 4.1918103 H 7.8401237 Z" />
            </g>
        </svg>
        <svg
            style="margin-left:-11.5em; padding:0em"
            width="120mm"
            height="8mm"
            viewBox="0 0 24 8"
            version="1.1"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:svg="http://www.w3.org/2000/svg">
            <defs
                id="defs1" />
            <g
                inkscape:label="Layer 1"
                inkscape:groupmode="layer">
                <path
                    style="fill:#e79f09;stroke:#282828;stroke-width:0.969318;stroke-miterlimit:5.2"
                    d="M 7.8728528,4.0424247 A 3.6477332,3.4816077 0 0 1 4.238019,7.5240106 3.6477332,3.4816077 0 0 1 0.57747761,4.0670485 3.6477332,3.4816077 0 0 1 4.1864219,0.56101293 3.6477332,3.4816077 0 0 1 7.8724879,3.9931783" />
                <path
                    style="fill:#e79f09;stroke:#282828;stroke-width:0.904564;stroke-miterlimit:5.2"
                    d="M 7.8401237,3.9712796 H 130.815691 V 4.1918103 H 7.8401237 Z" />
            </g>
        </svg>
    </div>
    <div class="timeline-container">
        <div class="timeline-line">
            <div class="timeline-node">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h3>Tambah User</h3>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <?php
        $errors = session()->getFlashdata('error');
        if ($errors): ?>
            <div class="alert alert-danger">
                Terdapat inputan yang tidak valid
            </div>
        <?php endif; ?>
        <?= form_open('user/save'); ?>

        <div class="form-group">
            <?= form_label('Username', 'username'); ?>
            <?= form_input([
                'name' => 'username',
                'id' => 'username',
                'class' => 'form-control' . (isset($errors['username']) ? ' is-invalid' : ''),
                'value' => set_value('username'),
                'placeholder' => 'Masukkan username'
            ]); ?>
            <?php if (isset($errors['username'])): ?>
                <div class="text-danger">
                    <?= ($errors['username'] ?? '') ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?= form_label('Email', 'email'); ?>
            <?= form_input([
                'name' => 'email',
                'id' => 'email',
                'class' => 'form-control' . (isset($errors['email']) ? ' is-invalid' : ''),
                'value' => set_value('email'),
                'placeholder' => 'Masukkan email'
            ]); ?>
            <?php if (isset($errors['email'])): ?>
                <div class="text-danger">
                    <?= ($errors['email'] ?? '') ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?= form_label('Password', 'password'); ?>
            <?= form_input([
                'name' => 'password',
                'id' => 'password',
                'class' => 'form-control' . (isset($errors['password']) ? ' is-invalid' : ''),
                'type' => 'password',
                'value' => set_value('password'),
                'placeholder' => 'Masukkan password'
            ]); ?>
            <?php if (isset($errors['password'])): ?>
                <div class="text-danger">
                    <?= ($errors['password'] ?? '') ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="form-group">
            <?= form_label('Confirm Password', 'confirmPassword'); ?>
            <?= form_input([
                'name' => 'confirmPassword',
                'id' => 'confirmPassword',
                'class' => 'form-control' . (isset($errors['confirmPass']) ? ' is-invalid' : ''),
                'type' => 'password',
                'value' => set_value('confirmPassword'),
                'placeholder' => 'Masukkan konfirmasi password'
            ]); ?>
            <?php if (isset($errors['confirmPass'])): ?>
                <div class="text-danger">
                    <?= ($errors['confirmPass'] ?? '') ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="form-group">
            <?= form_label('Display Name', 'displayName'); ?>
            <?= form_input([
                'name' => 'displayName',
                'id' => 'displayName',
                'class' => 'form-control' . (isset($errors['displayName']) ? ' is-invalid' : ''),
                'value' => set_value('displayName'),
                'placeholder' => 'Masukkan display name'
            ]); ?>
            <?php if (isset($errors['displayName'])): ?>
                <div class="text-danger">
                    <?= ($errors['displayName'] ?? '') ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="form-group">
            <?= form_label('Name', 'name'); ?>
            <?= form_input([
                'name' => 'name',
                'id' => 'name',
                'class' => 'form-control' . (isset($errors['name']) ? ' is-invalid' : ''),
                'value' => set_value('name'),
                'placeholder' => 'Masukkan nama'
            ]); ?>
            <?php if (isset($errors['name'])): ?>
                <div class="text-danger">
                    <?= ($errors['name'] ?? '') ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="form-group">
            <?= form_label('Nickname', 'nickname'); ?>
            <?= form_input([
                'name' => 'nickname',
                'id' => 'nickname',
                'class' => 'form-control' . (isset($errors['nickname']) ? ' is-invalid' : ''),
                'value' => set_value('nickname'),
                'placeholder' => 'Masukkan nickname'
            ]); ?>
            <?php if (isset($errors['nickname'])): ?>
                <div class="text-danger">
                    <?= ($errors['nickname'] ?? '') ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="form-group">
            <?= form_label('Website', 'web'); ?>
            <?= form_input([
                'name' => 'web',
                'id' => 'web',
                'class' => 'form-control' . (isset($errors['web']) ? ' is-invalid' : ''),
                'value' => set_value('web'),
                'placeholder' => 'Masukkan web'
            ]); ?>
            <?php if (isset($errors['web'])): ?>
                <div class="text-danger">
                    <?= ($errors['web'] ?? '') ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="form-group">
            <?= form_label('Bio', 'bio'); ?>
            <?= form_textarea([
                'name' => 'bio',
                'id' => 'bio',
                'class' => 'form-control' . (isset($errors['bio']) ? ' is-invalid' : ''),
                'value' => set_value('bio'),
                'placeholder' => 'Masukkan bio'
            ]); ?>
            <?php if (isset($errors['bio'])): ?>
                <div class="text-danger">
                    <?= ($errors['bio'] ?? '') ?>
                </div>
            <?php endif; ?>

        </div>

        <div class="form-group">
            <?= form_submit('submit', 'Tambah', ['class' => 'btn btn-primary']); ?>
        </div>

        <?= form_close(); ?>
    </div>
</body>

<style>
    .timeline-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        width: 100%;
        height: 50px;
        margin: 20px 0;
    }

    .timeline-line {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 4px;
        background-color: #3366cc;
        z-index: 1;
    }

    .timeline-node {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 2;
    }

    .node-dot {
        width: 20px;
        height: 20px;
        background-color: #ff9900;
        border-radius: 50%;
        position: relative;
    }

    .node-label {
        margin-top: 10px;
        color: #333;
        font-size: 14px;
        text-align: center;
    }
</style>

</html>