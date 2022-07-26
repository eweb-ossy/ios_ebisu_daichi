<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>404｜ゑびすミートダイチ</title>
    <link rel="stylesheet" href="css/404.css?<?= time() ?>">
</head>
<body>
    <?php require('include/header.php'); ?>
    <section>
        <h1>404<span>ページが見つかりません。</span></h1>
    </section>
    <?php $page = 'index'; require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <?php require('include/onlineshop_link.php'); ?>
    <script src="js/404.js?<?= time() ?>"></script>
</body>