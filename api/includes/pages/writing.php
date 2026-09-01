<article class="content">
    <header class="content__header">
        <p class="content__eyebrow">Notes</p>
        <h1 class="content__title">Writing</h1>
        <p class="content__lede">Articles on DEV and AWS Builder Center.</p>
    </header>

    <ul class="article-list">
        <?php foreach ($articles as $article): ?>
            <li>
                <a class="article-row" href="<?= htmlspecialchars($article['href']) ?>" target="_blank" rel="noopener noreferrer">
                    <div>
                        <strong><?= htmlspecialchars($article['title']) ?></strong>
                        <p><?= htmlspecialchars($article['summary']) ?></p>
                        <span class="article-row__source"><?= htmlspecialchars($article['source']) ?></span>
                    </div>
                    <span class="article-row__meta"><?= htmlspecialchars($article['date']) ?> <span aria-hidden="true">&#8599;</span></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</article>
