<article class="content">
    <header class="content__header">
        <p class="content__eyebrow">
            <a class="back-link" href="/projects">&larr; Projects</a>
        </p>
        <h1 class="content__title"><?= htmlspecialchars($project['title']) ?></h1>
        <p class="content__lede"><?= htmlspecialchars($project['summary']) ?></p>
        <p class="content__meta"><?= htmlspecialchars($project['badge']) ?> &middot; <?= htmlspecialchars($project['subtitle']) ?></p>
    </header>

    <?php if (!empty($project['image'])): ?>
        <figure class="shot">
            <img
                src="<?= htmlspecialchars($project['image']) ?>"
                alt="Screenshot of <?= htmlspecialchars($project['title']) ?>"
                width="1200"
                height="630"
                loading="eager"
            >
        </figure>
    <?php endif; ?>

    <div class="prose">
        <?php foreach ($project['body'] as $paragraph): ?>
            <p><?= htmlspecialchars($paragraph) ?></p>
        <?php endforeach; ?>
    </div>

    <ul class="link-row">
        <?php foreach ($project['links'] as $link): ?>
            <li>
                <a class="text-btn" href="<?= htmlspecialchars($link['href']) ?>" target="_blank" rel="noopener noreferrer">
                    <?= htmlspecialchars($link['label']) ?> <span aria-hidden="true">&#8599;</span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</article>
