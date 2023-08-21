<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    Senhas e definições:
    <?php
    function criptoNew()
    {
        $getTime = time();
        $getPasswordHash = password_hash($getTime, PASSWORD_DEFAULT);
        $getMd5 = strtoupper(md5($getPasswordHash));
        return $getMd5;
    }

    function nameHash()
    {
        $getTime = time();
        $getPasswordHash = password_hash($getTime, PASSWORD_DEFAULT);
        $getMd5 = md5($getPasswordHash);
        return $getMd5;
    }

    function hashCripto()
    {
        $getTime = time();
        $getPasswordHash = password_hash($getTime, PASSWORD_DEFAULT);
        return $getPasswordHash;
    }
    function setBase64($parameter)
    {
        return base64_encode($parameter);
    }
    function getBase64($parameter)
    {
        return base64_decode($parameter);
    }
    ?>

    <h5>Host = G<?= criptoNew(); ?></h5>
    <h5>Banco = M<?= criptoNew(); ?></h5>
    <h5>Usuário = H<?= criptoNew(); ?></h5>
    <h5>Senha = H<?= criptoNew(); ?></h5>
    <h5>----------------------------</h5>
    <h5>Usuário = <?= hashCripto(); ?></h5>
    <h5>Senha = <?= hashCripto(); ?></h5>
    <h5>Host = <?= hashCripto(); ?></h5>
    <h5>Banco = <?= hashCripto(); ?></h5>
    <h5>----------------------------</h5>
    <h5>Name: <?= nameHash(); ?></h5>
    <h5>----------------------------</h5>
    <h5>Host = <?= base64_encode('mysql02-farm1.kinghost.net'); ?></h5>
    <h5>Banco = <?= base64_encode('habilidade06'); ?></h5>
    <h5>Usuário = <?= base64_encode('habilida06_add4'); ?></h5>
    <h5>Senha = <?= base64_encode('Proderj@122333'); ?></h5>
    <h5>----------------------------</h5>
    <h5>Host = <?= base64_encode('localhost'); ?></h5>
    <h5>Banco = <?= base64_encode('seguro'); ?></h5>
    <h5>Usuário = <?= base64_encode('root'); ?></h5>
    <h5>Senha = <?= base64_encode(''); ?></h5>
</body>

</html>