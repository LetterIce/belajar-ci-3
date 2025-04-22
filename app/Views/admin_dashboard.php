<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <h1><?= esc($pageTitle) // Passed from controller ?></h1>
    <p>Hello, <?= esc($username) // Passed from controller ?>. You are logged in as an <?= esc($role) // Passed from controller ?>.</p>

    <h2>Admin Specific Content:</h2>
    <p><?= esc($extraAdminInfo) // Passed from controller ?></p>
    <p>Only administrators should see this section.</p>
    <!-- Add more admin-specific elements, tables, forms etc. -->

<?= $this->endSection() ?>