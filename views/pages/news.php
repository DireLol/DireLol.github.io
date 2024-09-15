<?php
/** @var \App\Kernel\View\View $view */
/** @var array $newsItem */

$view->setTitle($newsItem['title']);
?>

<?php $view->component('start') ?>

<main>
    <div class="container">
        <article class="news-detail">
            <h1><?= htmlspecialchars($newsItem['title']) ?></h1>
            <p class="date"><?= date('d.m.Y', strtotime($newsItem['date'])) ?></p>
            <img src="/uploads/<?= $newsItem['image'] ?>" alt="<?= htmlspecialchars($newsItem['title']) ?>">
            <div class="content">
                <?= nl2br(htmlspecialchars($newsItem['content'])) ?>
            </div>
        </article>
    </div>
</main>

<?php $view->component('end') ?>