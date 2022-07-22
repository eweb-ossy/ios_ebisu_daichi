<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>アンテナショップ｜ゑびすミートダイチ</title>
    <link rel="stylesheet" href="css/antenashop.css?<?= time() ?>">
</head>
<body>
    <div class="mv">
        <?php require('include/header.php'); ?>
        <div class="image">
            <div class="text">
                <h2>アンテナショップ</h2>
                <h3>Antenna Shop</h3>
            </div>
        </div>
    </div>
    <div class="mark">
        <img src="images/logo_shop_okatte.svg" alt="おかってマルシェ">
    </div>
    <section class="info">
        <div class="inner">
            <div class="text">
                <h3>栗原ならではの<br>おいしい地場産品と出会える<br>誰もが気兼ねなく立ち寄れるお店</h3>
                <p>台所の出入り口を意味する「お勝手口」から名付けられた「おかってマルシェ」は、 栗原ならではのおいしい地場産品と出会える場として、多くの人に愛されています。 お店では漢方和牛や漢方三元豚をはじめ、旬の野菜や果物、それらをふんだんに使用した お弁当の他、地酒やスイーツなどが豊富に並び、それらを味わえるレストランも併設。 地元の人々や観光で訪れる人々の中にはリピーターも多く、 おかってマルシェで出会える旬の味を楽しみにしています。</p>
            </div>
            <div class="photos">
                <img src="images/antenashop_info_photo01.jpg" loading="lazy" alt="">
                <img src="images/antenashop_info_photo02.jpg" loading="lazy" alt="">
                <img src="images/antenashop_info_photo03.jpg" loading="lazy" alt="">
                <img src="images/antenashop_info_photo04.jpg" loading="lazy" alt="">
                <img src="images/antenashop_info_photo05.jpg" loading="lazy" alt="">
                <img src="images/antenashop_info_photo06.jpg" loading="lazy" alt="">
                <img src="images/antenashop_info_photo07.jpg" loading="lazy" alt="">
                <img src="images/antenashop_info_photo08.jpg" loading="lazy" alt="">
                <img src="images/antenashop_info_photo09.jpg" loading="lazy" alt="">
            </div>
            <div class="note">
                <div class="image">
                    <img src="images/antenashop_info_tentyo.jpg" alt="">
                </div>
                <div class="text">
                    <p>目指したのは、誰もが気兼ねなく利用でき、ふらっと立ち寄りたくなるようなお店です。2019 年 7 月のリニューアルから現在までお店に携わり、お店づくりや品揃えなどに 工夫を凝らしてきました。お弁当がおいしかったとのお電話や、素敵なお店と声をかけて下さるなど、 生のお声が一番の励みになります。工場直営ならではの新鮮なお肉は、BBQ セットやギフトラインアップも 豊富で贈り物にも大人気です。</p>
                    <div class="name"><span>おかってマルシェ店長</span>高橋 千香子</div>
                </div>
            </div>
        </div>
    </section>
    <?php $page = 'index'; require('include/footer_nav.php'); ?>
    <?php require('include/footer.php'); ?>
    <?php require('include/onlineshop_link.php'); ?>
    <script src="js/antenashop.js?<?= time() ?>"></script>
</body>
</html>