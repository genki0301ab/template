<?php
    $siteSetting = Array(
        'type' => 'other',
        'title' => 'Other',
        'css' => Array(),
        'js' => Array()
    );
?>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/shared/inc/header.php');
?>

<div class="main-wrapper">
    <main class="main">
        <div class="contact-wrapper">
            <div class="contact">
                <h1>このページはその他のページです。</h1>
                <a href="./" style="text-decoration: underline; color: #ff0000;">トップページへ</a>
            </div>
        </div>
    </main>
</div>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/shared/inc/footer.php');
?>