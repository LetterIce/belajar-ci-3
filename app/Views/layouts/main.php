<?= $this->include('layouts/header') // Include header from layouts folder ?>

<!-- This is where page-specific content will be injected -->
<?= $this->renderSection('content') ?>

<?= $this->include('layouts/footer') // Include footer from layouts folder ?>