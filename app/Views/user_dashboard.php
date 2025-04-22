<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <h1><?= esc($pageTitle) // Passed from controller ?></h1>
    <p>Hello, <?= esc($username) // Passed from controller ?>. Welcome to your dashboard.</p>

    <h2>User Specific Content:</h2>
    <p><?= esc($extraUserInfo) // Passed from controller ?></p>
    <p>This content is visible to regular users.</p>
    <!-- Add more user-specific elements -->

<?= $this->endSection() ?>