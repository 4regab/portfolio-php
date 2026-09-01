<!DOCTYPE html>
<html lang="en" data-theme="blue">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/portfolio.css">
    <script src="/assets/js/theme-init.js"></script>
</head>
<body class="page-<?= htmlspecialchars($page) ?>">
    <div class="stage">
        <?php require __DIR__ . '/sidebar.php'; ?>
        <main class="shell" id="main">
            <?php require __DIR__ . '/pages/' . $page . '.php'; ?>
        </main>
    </div>
    <script src="/assets/js/theme.js" defer></script>
</body>
</html>
