<?php get_header(); ?>

<section>
<div class="h2_container">
	<h2>採用情報</h2>
</div>
</section>

<main>

<section class="wrap_1000 pt40">
<div class="wrap_1000 pt60">
<div class="recruit_wrap mb60">
<?php if(have_posts()): while(have_posts()):the_post(); ?>

<dl class="recruit_box pt30">
<dt>
<div class="recruit_tit mb20"><?php the_title(); ?></div>
</dt>
<dd><div class="t_r pb20"><a href="<?php the_permalink(); ?>" class="btn_open_l">詳細を見る ＞</a></div></dd>
 </dl>
<?php endwhile; else: ?><!-- whileを終了し、投稿がないなら以下を表示-->
</div>
<div class="t_c">
<p>
<br>
現在、採用情報を公開しています。<br>
募集内容や応募については、<a href="<?php echo esc_url(home_url('contact/?type=recruit')); ?>">お問い合わせフォーム</a>からご連絡ください。
<br>
<br>
<br>
<br>
<br>
<br>
</p>
</div>
<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>
