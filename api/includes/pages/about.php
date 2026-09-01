<article class="content">
    <header class="content__header">
        <p class="content__eyebrow">About</p>
        <h1 class="content__title">About me</h1>
    </header>

    <div class="prose">
        <?php foreach ($profile['about'] as $paragraph): ?>
            <?php
            $safe = htmlspecialchars($paragraph);
            if (!empty($profile['kiro_ambassador'])) {
                $safe = str_replace(
                    'Kiro Ambassador',
                    '<a href="' . htmlspecialchars($profile['kiro_ambassador']) . '" target="_blank" rel="noopener noreferrer">Kiro Ambassador</a>',
                    $safe
                );
            }
            ?>
            <p><?= $safe ?></p>
        <?php endforeach; ?>
    </div>

    <section class="certs" aria-labelledby="certs-heading">
        <h2 id="certs-heading" class="certs__title">Certifications</h2>
        <ul class="certs__list">
            <?php foreach ($certifications as $cert): ?>
                <li class="certs__item">
                    <div class="certs__body">
                        <?php if (!empty($cert['url'])): ?>
                            <a class="certs__name" href="<?= htmlspecialchars($cert['url']) ?>" target="_blank" rel="noopener noreferrer">
                                <?= htmlspecialchars($cert['name']) ?> <span aria-hidden="true">&#8599;</span>
                            </a>
                        <?php else: ?>
                            <strong class="certs__name"><?= htmlspecialchars($cert['name']) ?></strong>
                        <?php endif; ?>
                        <p class="certs__issuer"><?= htmlspecialchars($cert['issuer']) ?></p>
                    </div>
                    <p class="certs__dates">
                        Issued <?= htmlspecialchars($cert['issued']) ?>
                        <?php if (!empty($cert['expires'])): ?>
                            · Expires <?= htmlspecialchars($cert['expires']) ?>
                        <?php endif; ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <dl class="fact-list">
        <div>
            <dt>Role</dt>
            <dd><?= htmlspecialchars($profile['title']) ?></dd>
        </div>
        <div>
            <dt>Based in</dt>
            <dd><?= htmlspecialchars($profile['location']) ?></dd>
        </div>
        <div>
            <dt>Email</dt>
            <dd><a href="mailto:<?= htmlspecialchars($profile['email']) ?>"><?= htmlspecialchars($profile['email']) ?></a></dd>
        </div>
        <div>
            <dt>Elsewhere</dt>
            <dd class="fact-list__links">
                <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a href="<?= htmlspecialchars($profile['linkedin']) ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                <a href="<?= htmlspecialchars($profile['devto']) ?>" target="_blank" rel="noopener noreferrer">DEV</a>
                <a href="<?= htmlspecialchars($profile['aws_community']) ?>" target="_blank" rel="noopener noreferrer">AWS Builder</a>
            </dd>
        </div>
    </dl>
</article>
