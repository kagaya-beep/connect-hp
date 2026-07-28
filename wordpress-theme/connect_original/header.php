<!DOCTYPE html>
<html lang="ja"><head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BWTWB2DTEQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BWTWB2DTEQ');
  gtag('config', 'UA-84471403-2');
</script>


<script id="_bownow_ts">
var _bownow_ts = document.createElement('script');
_bownow_ts.charset = 'utf-8';
_bownow_ts.src = 'https://contents.bownow.jp/js/UTC_0857e2a02b0f21614cd1/trace.js';
document.getElementsByTagName('head')[0].appendChild(_bownow_ts);
</script>

<?php if (is_mobile()) :?>
<!--スマホからのアクセスのときのビューポート-->
<meta name="viewport" content="width=device-width,user-scalable=yes">
<?php else: ?>
<!--スマホ以外のデバイスからのアクセスのときのビューポート-->
<meta name="viewport" content="width=device-width,user-scalable=no">
<?php endif; ?>

<meta name="Keywords" content="ビジネスフォン,OA機器,wifi工事,LAN工事,電話工事,情報セキュリティ,防犯カメラ,通信サービス,見積もり無料,秋田">

<?php if ( is_category() ) : ?>
<meta name="description" content="「<?php single_cat_title(); ?>」お知らせ一覧です。新着情報やお知らせはこちらからどうぞ。">
<?php elseif ( is_month() ) : ?>
<meta name="description" content="<?php echo get_the_date( 'Y年n月' ); ?>のお知らせ一覧です。">
<?php elseif(is_page('phone') || page_is_ancestor_of('phone'))://親子関係をまとめて指定 ?>
<meta name="description" content="秋田県内でビジネスフォンの導入をお考えならコネクトにお任せください。スマートフォンの内線化や通話録音など最適なビジネスホンを提案いたします。">
<?php elseif(is_page('pbx') || page_is_ancestor_of('pbx'))://親子関係をまとめて指定 ?>
<meta name="description" content="秋田県内でクラウドPBX（クラウド型ビジネスフォン）ならスマートフォンから固定電話番号での発信・着信が可能になります。月々のコスト削減にもつながります。">
<?php elseif(is_page('oa') || page_is_ancestor_of('oa'))://親子関係をまとめて指定 ?>
<meta name="description" content="印刷コストの削減、多機能、丈夫で故障しにくい複合機（コピー機）や業務用パソコンをお探しなら、御社に合った各種OA機器の導入からサポートまでお任せください。">
<?php elseif(is_page('wifi') || page_is_ancestor_of('wifi'))://親子関係をまとめて指定 ?>
<meta name="description" content="企業向けWi-Fiの設置やネット回線が遅いなどでお困りならご相談ください。管理会社さまとの連携、請負から工事まで1社で行うため、中間コストをカットして提供いたします。">
<?php elseif(is_page('lan') || page_is_ancestor_of('lan'))://親子関係をまとめて指定 ?>
<meta name="description" content="オフィスの引越しに伴うLAN工事や電話工事、電話の増設、新規開業の電話・ネット開通時に生じる手続きなどもワンストップで対応いたします。">
<?php elseif(is_page('security') || page_is_ancestor_of('security'))://親子関係をまとめて指定 ?>
<meta name="description" content="オフィスの情報セキュリティ対策をトータルサポート。不正アクセス、ウィルス対策、迷惑メール対策など被害が起きる前にまとめて簡単に導入できる方法を丁寧に説明いたします。">
<?php elseif(is_page('security-camera') || page_is_ancestor_of('security-camera'))://親子関係をまとめて指定 ?>
<meta name="description" content="屋外、屋内への設置、録画など用途に合った防犯カメラ・監視カメラを提案させていただきます。請負から工事まで1社で行うため、中間コストをカットして提供できます。">
<?php elseif(is_page('data-communication') || page_is_ancestor_of('data-communication'))://親子関係をまとめて指定 ?>
<meta name="description" content="還元型通信サービスとはNTT東日本が提供する『フレッツ光』を、品質や料金を変えずに月々の通信費の一部を支援金とする還元型通信サービスです。コネクト光、ブラウブリッツ光、きょうされん光を取り扱っています。">
<?php elseif ( is_page(15) ) ://固定ページ ?>
<meta name="description" content="株式会社コネクトの会社情報はこちらをどうぞ。">
<?php elseif ( is_page(44) ) ://固定ページ ?>
<meta name="description" content="株式会社コネクトの個人情報保護方針はこちらをどうぞ。">

<?php elseif ( is_category(1) ) ://投稿ページ ?>
<meta name="description" content="株式会社コネクトからのお知らせです。">
<?php elseif ( is_category(5) ) ://投稿ページ ?>
<meta name="description" content="コネクト光からのお知らせです。">

<?php elseif ( is_post_type_archive('useful') ) ://カスタム投稿アーカイブ ?>
<meta name="description" content="オフィスまわりのお役立ち情報はこちらからどうぞ。">
<?php elseif ( is_singular('useful') ) ://カスタム投稿シングル ?>
<meta name="description" content="オフィスまわりのお役立ち情報はこちらからどうぞ。">

<?php elseif ( is_single() ) : ?>
<meta name="description" content="<?php echo mb_substr(preg_replace("(\r\n|\r|\n|^ +)", "", strip_tags(apply_filters('the_content', $post->post_content))), 0, 120); ?>">
<?php else : ?>
<meta name="Description" content="秋田県秋田市／オフィスの事務機器（OA機器）総合販売のコネクトは、お客さまからのヒヤリングを大切にし、ビジネスフォンやOA機器の導入からアフターサービスまでワンストップで行います。幅広いニーズにお応えし、オフィスをコンサルタントいたします。" />
<?php endif; ?>

<?php
if (is_single()){
if(have_posts()): while(have_posts()): the_post();
echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";
echo '<meta property="og:description" content="'.mb_substr(get_the_excerpt(), 0, 100).'">';echo "\n";
echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";
echo '<meta property="og:type" content="article">';echo "\n";
echo '<meta property="article:publisher" content="https://www.facebook.com/%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%82%B3%E3%83%8D%E3%82%AF%E3%83%88-291072171049554/">';echo "\n";
endwhile; endif;
} else {
echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";
echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";
echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";
echo '<meta property="og:type" content="website">';echo "\n";
}
$str = $post->post_content;
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
if (is_single()){
if (has_post_thumbnail()){
$image_id = get_post_thumbnail_id();
$image = wp_get_attachment_image_src( $image_id, 'full');
echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
} else if ( preg_match( $searchPattern, $str, $imgurl )){
echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
} else {
echo '<meta property="og:image" content="http://connect-web.jp/images/ogp.jpg">';echo "\n";
}
} else {
echo '<meta property="og:image" content="http://connect-web.jp/images/ogp.jpg">';echo "\n";
}
?>

<meta name="copyright" content="Copyright (C)コネクト">
<title><?php global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_front_page() ) )
			echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/common.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css?ver=20260728-1620" media="all">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/slick/slick-theme.css" />
<?php if(is_page('cashless') || page_is_ancestor_of('cashless'))://親子関係をまとめて指定 ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<?php else: ?>
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/meanmenu/meanmenu.css" media="all">
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.easing@1/jquery.easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/meanmenu/jquery.meanmenu_custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/top_script.js"></script>
<?php if(is_page('pbx') || page_is_ancestor_of('pbx'))://親子関係をまとめて指定 ?>
<link href="https://connect-web.jp/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" media="print" onload="this.media='all'">
<link href="https://connect-web.jp/css/common2.css" rel="stylesheet" type="text/css" media="print" onload="this.media='all'">
<link rel="stylesheet" type="text/css" href="https://connect-web.jp/css/style3.css" media="all">
<link rel="stylesheet" type="text/css" href="https://connect-web.jp/css/aug23_index.css" media="all">
<?php else: ?>
<?php endif; ?>

<script>
$(function(){
  $('header nav').meanmenu();
});
</script>

</head>

<body>
<?php if ( is_home() && is_front_page() ) : ?>
<div class="loader-wrap">
<div class="loader">Loading...</div>
</div>
<?php endif; ?>

<div class="wrapper">

  <header>
<nav id="g_menu_box" class="clearfix" ontouchstart="">
<a href="http://connect-web.jp/"><h1><div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo01.svg" alt="オフィスの事務機器（OA機器）総合販売｜コネクト"></div></h1></a >
<ul id="g_menu" class="clearfix">
    <li class="hvr-underline-center"><a href="javascript:void(0)">サービス</a>
    <ul>
    <li class="hvr-underline-center"><a href="<?php echo home_url('phone'); ?>">ビジネスフォン</a></li>
    <li class="hvr-underline-center"><a href="<?php echo home_url('pbx'); ?>">クラウドPBX</a></li>
    <li class="hvr-underline-center"><a href="<?php echo home_url('oa'); ?>">OA機器</a></li>
    <li class="hvr-underline-center"><a href="<?php echo home_url('wifi'); ?>">Wi-Fi工事</a></li>
    <li class="hvr-underline-center"><a href="<?php echo home_url('lan'); ?>">LAN・電話工事</a></li>
    <li class="hvr-underline-center"><a href="<?php echo home_url('data-communication'); ?>">還元型通信サービス</a></li>
    <li class="hvr-underline-center"><a href="<?php echo home_url('security'); ?>">情報セキュリティ</a></li>
    <li class="hvr-underline-center"><a href="<?php echo home_url('security-camera'); ?>">防犯カメラ</a></li>
        <li class="hvr-underline-center"><a href="<?php echo home_url('voice'); ?>">お客さまの声</a></li>
</ul>
</li>
    <li class="hvr-underline-center"><a href="javascript:void(0)">お知らせ</a>
    <ul>
    <li class="hvr-underline-center"><a href="<?php echo home_url('cat-news'); ?>">お知らせ</a></li>
     <li class="hvr-underline-center"><a href="<?php echo home_url('cat-topics'); ?>">トピックス</a></li>
                    <li class="hvr-underline-center"><a href="<?php echo home_url('cat-media'); ?>">メディア</a></li></ul>

    </li>
    <li class="lsize hvr-underline-center"><a href="<?php echo home_url('cat-useful'); ?>">お役立ち情報</a></li>
    <li class="hvr-underline-center"><a href="javascript:void(0)">会社概要</a>
    <ul>
        <li class="hvr-underline-center"><a href="<?php echo home_url('aboutus'); ?>">会社情報</a></li>
    </ul>
    </li>
    <li class="hvr-underline-center"><a href="<?php echo home_url('recruit'); ?>">採用情報</a></li>
 <li class="sp"><a href="<?php echo home_url('contact'); ?>">お問い合わせ</a></li>
 <li class="sp"><a href="<?php echo home_url('privacy'); ?>">個人情報保護方針</a></li>
<li class="sp">
<a href="https://download.teamviewer.com/download/TeamViewerQS_x64.exe?utm_source=google&utm_medium=cpc&utm_campaign=jp%7Cb%7Cpr%7C22%7Csep%7Cexact-tv-combi-download-sn%7Cnew%7Ct0%7C0&utm_content=exact-tv-combi%7Cgeneral&utm_term=teamviewer+quick+support" target="_blank">リモートサポートをご希望の方[TeamViewer]<br><img src="<?php bloginfo('template_directory'); ?>/images/goto_teamviewer_sp.png" alt="teamviewer"></a>
</li>

</ul>

<dl class="header_container pc">
<dt class="">
<dl class="head_tbl">
<dt><a href="<?php echo home_url('contact'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/icon_mail.png" alt="アイコン：お問い合わせ"></a></dt>
<dd class="head_telmark"><img src="<?php bloginfo('template_directory'); ?>/images/icon_tel.png" alt="アイコン：電話番号"></dd>
<dd class="">営業時間／月-金 | 9：00-18：00<a href="tel:018-874-8202" class="head_telnumber bahn">018-874-8202</a></dd>
</dl>
</dt>
    <dd class="pc head_team">リモートサポートをご希望の方<br>
<div class="head_team_box">
<a href="https://download.teamviewer.com/download/TeamViewerQS_x64.exe?utm_source=google&utm_medium=cpc&utm_campaign=jp%7Cb%7Cpr%7C22%7Csep%7Cexact-tv-combi-download-sn%7Cnew%7Ct0%7C0&utm_content=exact-tv-combi%7Cgeneral&utm_term=teamviewer+quick+support" target="_blank"><img class="" src="<?php bloginfo('template_directory'); ?>/images/goto_teamviewer02.png" alt="Teamviewer"></a></div><!--/head_team_box--></dd>
</dl>


</nav>

  </header>





<main>
