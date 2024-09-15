<?php
/** @var \App\Kernel\View\View $view */
/** @var array $newsList */
/** @var array $latestNews */
/** @var int $currentPage */
/** @var int $totalPages */

$view->setTitle('Главная страница');
?>

<?php $view->component('start') ?>

<main>
    <div class="container">
        <?php if ($latestNews): ?>
            <section class="latest-news" style="background-image: url('/uploads/<?= $latestNews['image'] ?>');">
                <h1><?= htmlspecialchars($latestNews['title']) ?></h1>
                <p><?= htmlspecialchars($latestNews['announce']) ?></p>
            </section>
        <?php endif; ?>
        
        <section class="news-list">
            <h1 class="news-heading">Новости</h1><br>
            <div class="news-items">
            <?php foreach ($newsList as $news): ?>
                <a class="news-item" href="/news/<?= $news['id'] ?>">
                    <article  data-id="<?= $news['id'] ?>">                 
                        <div>
                            <p class="date"><?= date('d.m.Y', strtotime($news['date'])) ?></p>
                            <h3 class="title"><?= htmlspecialchars($news['title']) ?></h3>
                            <p class="announce"><?= htmlspecialchars($news['announce']) ?></p>
                        </div>
                        <div class="more-details">Подробнее -></div>                                            
                    </article> 
                </a>
            <?php endforeach; ?>
            </div>
            
        </section>

        <nav class="pagination">
            <ul>
                <?php if ($currentPage > 1): ?>
                    <li><a href="?page=<?= $currentPage - 1 ?>">&laquo; Предыдущая</a></li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li<?= $i == $currentPage ? ' class="active"' : '' ?>>
                        <a href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($currentPage < $totalPages): ?>
                    <li><a href="?page=<?= $currentPage + 1 ?>">Следующая &raquo;</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</main>

<?php $view->component('end') ?>