<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>お問い合わせ｜ゑびすミートダイチ</title>
    <link rel="stylesheet" href="css/contact.css?<?= time() ?>">
</head>
<body>
    <div class="mv">
        <?php require('include/header.php'); ?>
        <div class="image">
            <div class="text">
                <h2>お問い合わせ</h2>
                <h3>Contact</h3>
            </div>
        </div>
    </div>
    <section class="contact">
        <div class="inner">
            <h2>下記フォームにご記入いただき、「確認画面」ボタンを押して内容をご確認のうえ、送信してください。</h2>
            <p>お問い合わせには、受付時間内に対応させていただいております。<br>【受付時間　9:00～17:00　月～土（祝日・年末始を除く）】<br>お客様からの個人情報、お寄せいただいた内容は厳重に取り扱い、プライバシー保護に努めております。</p>
            <form action="">
                <div class="row">
                    <div class="title">〈<span>＊</span>は必須〉</div>
                </div>
                <div class="row">
                    <div class="title">お名前<span>*</span></div>
                    <div class="field">
                        <input type="text" placeholder="山田 太郎" required>
                    </div>
                </div>
                <div class="row">
                    <div class="title">フリガナ<span>*</span></div>
                    <div class="field">
                        <input type="text" placeholder="ヤマダ タロウ" required>
                    </div>
                </div>
                <div class="row">
                    <div class="title">メールアドレス<span>*</span></div>
                    <div class="field">
                        <input type="email" placeholder="xxxxx@example.com" required>
                    </div>
                </div>
                <div class="row">
                    <div class="title">電話番号</div>
                    <div class="field">
                        <input type="email" placeholder="000-0000-0000">
                    </div>
                </div>
                <div class="row">
                    <div class="title">お問い合わせ内容<span>*</span></div>
                    <div class="field">
                        <textarea placeholder="お問い合わせ内容をご入力ください。" required></textarea>
                    </div>
                </div>
                <div class="link">
                    <a href="https://ebisu-gp.jp/privacypolicy.html">プライバシーポリシー</a>をご確認の上、送信してください。
                </div>
                <div class="submit-btn">
                    <button type="submit">送 信</button>
                </div>
            </form>
        </div>
    </section>
    <?php $page = 'index'; require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <?php require('include/onlineshop_link.php'); ?>
    <script src="js/contact.js?<?= time() ?>"></script>
</body>
</html>