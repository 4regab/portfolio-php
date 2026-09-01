<aside class="sidebar" aria-label="Site navigation">
    <a class="sidebar__brand" href="/">
        <span class="sidebar__avatar" aria-hidden="true"><?= icon_svg('person') ?></span>
        <div class="sidebar__identity">
            <strong class="sidebar__name"><?= htmlspecialchars($profile['name']) ?></strong>
            <span class="sidebar__title"><?= htmlspecialchars($profile['title']) ?></span>
        </div>
    </a>

    <nav class="sidebar__nav">
        <?php foreach ($nav_groups as $group): ?>
            <div class="nav-group">
                <p class="nav-group__label"><?= htmlspecialchars($group['label']) ?></p>
                <ul class="nav-group__list">
                    <?php foreach ($group['items'] as $item): ?>
                        <?php
                        $is_active = !$item['external']
                            && (
                                $item['href'] === $current_path
                                || ($item['href'] === '/projects' && str_starts_with($current_path, '/projects'))
                            );
                        ?>
                        <li>
                            <a
                                class="nav-link<?= $is_active ? ' is-active' : '' ?>"
                                href="<?= htmlspecialchars($item['href']) ?>"
                                <?= $item['external'] ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                                <?= $is_active ? 'aria-current="page"' : '' ?>
                            >
                                <span class="nav-link__icon"><?= icon_svg($item['icon']) ?></span>
                                <span class="nav-link__label"><?= htmlspecialchars($item['label']) ?></span>
                                <?php if ($item['badge'] !== null): ?>
                                    <span class="nav-link__badge"><?= htmlspecialchars($item['badge']) ?></span>
                                <?php elseif ($item['external']): ?>
                                    <span class="nav-link__external"><?= icon_svg('arrow') ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </nav>

    <div class="sidebar__footer">
        <div class="sidebar__meta">
            <a href="mailto:<?= htmlspecialchars($profile['email']) ?>"><?= htmlspecialchars($profile['email']) ?></a>
        </div>

        <div class="theme-switch" role="group" aria-label="Color theme">
            <button type="button" class="theme-switch__btn is-active" data-theme="blue" aria-pressed="true" title="Blue theme">
                <?= icon_svg('droplet') ?>
                <span>Blue</span>
            </button>
            <button type="button" class="theme-switch__btn" data-theme="light" aria-pressed="false" title="Light theme">
                <?= icon_svg('sun') ?>
            </button>
            <button type="button" class="theme-switch__btn" data-theme="dark" aria-pressed="false" title="Dark theme">
                <?= icon_svg('moon') ?>
            </button>
        </div>
    </div>
</aside>
