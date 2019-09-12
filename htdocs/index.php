<?php
    $siteSetting = Array(
        'type' => 'top',
        'title' => 'Top',
        'css' => Array('./style.css'),
        'js' => Array('./shared/js/index.js')
    );
?>

<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/shared/inc/header.php');
?>

<div class="main-wrapper">
    <main class="main">
        <div class="front-wrapper">
            <div class="front"></div>
        </div>
    </main>
</div>

<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/shared/inc/footer.php');
?>