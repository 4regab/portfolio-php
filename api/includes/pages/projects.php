<article class="content">
    <header class="content__header">
        <p class="content__eyebrow">Work</p>
        <h1 class="content__title">Projects</h1>
        <p class="content__lede">A short list of tools I built and still care about.</p>
    </header>

    <div class="project-list">
        <?php foreach ($projects as $i => $project): ?>
            <a
                class="project-list__item"
                href="/projects/<?= htmlspecialchars($project['slug']) ?>"
                style="--card-delay: <?= $i * 50 ?>ms"
            >
                <span class="project-list__swatch" style="background: <?= htmlspecialchars($project['bg']) ?>; color: <?= htmlspecialchars($project['fg']) ?>">
                    <?= icon_svg($project['mark']) ?>
                </span>
                <span class="project-list__body">
                    <strong><?= htmlspecialchars($project['title']) ?></strong>
                    <span><?= htmlspecialchars($project['summary']) ?></span>
                </span>
                <span class="project-list__badge"><?= htmlspecialchars($project['badge']) ?></span>
            </a>
        <?php endforeach; ?>
    </div>
</article>
