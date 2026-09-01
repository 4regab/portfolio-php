<section class="intro" aria-label="Introduction">
    <h1 class="intro__headline">
        Hey, I am
        <span class="intro__name">
            <span class="intro__name-text"><?= htmlspecialchars($profile['short_name']) ?></span>
            <span class="intro__circle" aria-hidden="true"></span>
            <span class="intro__name-arrow" aria-hidden="true">&#8599;</span>
        </span>
        — <?= htmlspecialchars($profile['headline']) ?>
    </h1>
    <p class="intro__bio"><?= htmlspecialchars($profile['bio']) ?></p>
</section>

<section class="projects" id="projects" aria-labelledby="projects-heading">
    <header class="projects__header">
        <h2 id="projects-heading">Latest projects</h2>
        <a class="projects__all" href="/projects">
            All projects <span aria-hidden="true">&rarr;</span>
        </a>
    </header>

    <div class="projects__grid">
        <?php foreach (featured_projects() as $i => $project): ?>
            <a
                class="project-card"
                href="/projects/<?= htmlspecialchars($project['slug']) ?>"
                style="--card-bg: <?= htmlspecialchars($project['bg']) ?>; --card-fg: <?= htmlspecialchars($project['fg']) ?>"
            >
                <span class="project-card__badge"><?= htmlspecialchars($project['badge']) ?></span>
                <span class="project-card__mark" aria-hidden="true"><?= icon_svg($project['mark']) ?></span>
                <span class="project-card__meta">
                    <strong class="project-card__title"><?= htmlspecialchars($project['title']) ?></strong>
                    <span class="project-card__subtitle">/ <?= htmlspecialchars($project['subtitle']) ?></span>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
</section>
