<?php
/**
 * @var string $pageTitle Title of the page passed from controller
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Use the $pageTitle variable passed from the controller -->
    <title><?= isset($pageTitle) ? esc($pageTitle) : 'My Application' ?></title>
    <!-- Add CSS links (Bootstrap, custom, etc.) here -->
     <style>
         body { font-family: sans-serif; margin: 0; padding-bottom: 60px; /* Add padding for fixed footer */ }
         header { background-color: #333; color: white; padding: 10px 20px; display: flex; justify-content: space-between; align-items: center; }
         header a { color: white; text-decoration: none; margin-left: 15px; }
         .content { padding: 20px; }
         footer { background-color: #f2f2f2; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; border-top: 1px solid #ccc; }
         /* Add more styles for layout, sidebar etc. */
     </style>
</head>
<body>
    <header>
        <div>My Application</div>
        <div>
            <?php if (session()->get('isLoggedIn')): // Show only if logged in ?>
                <span>Welcome, <?= esc(session()->get('username')) ?>! (<?= esc(session()->get('role')) ?>)</span>
                <!-- Logout Button (Requirement 4) -->
                <a href="<?= site_url('/logout') ?>">Logout</a>
            <?php endif; ?>
        </div>
    </header>
    <!-- Optional Sidebar can go here -->
    <main class="content">
        <!-- Page specific content starts after this -->