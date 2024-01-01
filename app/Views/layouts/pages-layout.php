<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title><?= isset($pageTitle) ? $pageTitle : 'New Page Title' ?></title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="/assets/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/vendors/styles/style.css" />
    <?= $this->renderSection('stylesheets'); ?>
</head>

<body>

    <?= include('inc/header.php') ?>

    <?= include('inc/right-sidebar.php') ?>

    <?= include('inc/left-sidebar.php') ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div>
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
            <?= include('inc/footer.php') ?>
        </div>
    </div>
    <!-- js -->
    <script src="/assets/vendors/scripts/core.js"></script>
    <script src="/assets/vendors/scripts/script.min.js"></script>
    <script src="/assets/vendors/scripts/process.js"></script>
    <script src="/assets/vendors/scripts/layout-settings.js"></script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>