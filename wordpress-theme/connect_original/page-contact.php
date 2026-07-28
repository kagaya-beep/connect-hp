<?php get_header(); ?>

<section>
<div class="h2_container">
	<h2>お問い合わせ</h2>
</div>
</section>

<main>

<section class="wrap_1000 pt40">
<div class="privacy_box">
下記の項目をご入力の上、「メールを送信する」ボタンを押してください。<br>
「必須」と書かれた項目は必ず入力してくださいますよう、お願いいたします。<br>
<br>
三日たってもお返事がない場合は、何らかのトラブルでお問い合わせが届いていない場合がございます。<br>
その場合は、大変お手数ですがお電話にてお問い合わせくださいますようお願いいたします。<br>
<br>
<div class="contact_tel pb60">株式会社コネクト <a href="tel:018-874-8202" onclick="gtag('event', 'tap1', {'event_category': 'tap','event_label': 'label'});">018-874-8202</a></div>

<?php echo do_shortcode('[contact-form-7 id="b9aa873" title="お問い合わせ"]'); ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    if (params.get('type') !== 'recruit') {
        return;
    }

    const recruitRadio = document.querySelector('input[name="your-type"][value="求人へ応募"]');
    if (recruitRadio) {
        recruitRadio.checked = true;
        recruitRadio.dispatchEvent(new Event('change', { bubbles: true }));
    }

    const jobTitle = (params.get('job') || '').trim().slice(0, 100);
    const message = jobTitle
        ? `採用応募／${jobTitle}に応募希望`
        : '採用応募';
    const messageField = document.querySelector('textarea[name="other"]');

    if (messageField && !messageField.value.trim()) {
        messageField.value = message;
        messageField.dispatchEvent(new Event('input', { bubbles: true }));
        messageField.dispatchEvent(new Event('change', { bubbles: true }));
    }
});
</script>
</div>
</section>

<?php get_footer(); ?>
