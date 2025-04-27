<?php
/**
 * @var string $pageTitle Judul halaman yang dikirim dari controller
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Gunakan variabel $pageTitle yang dikirim dari controller -->
    <title><?= isset($pageTitle) ? esc($pageTitle) : 'My Application' ?></title>
     <style>
         body { font-family: sans-serif; margin: 0; padding-bottom: 60px;}
         header { background-color:rgb(50, 50, 50); color: white; padding: 10px 100px; display: flex; justify-content: space-between; align-items: center; }
         header a { color: white; text-decoration: none; margin-left: 15px; }
         .content { padding: 20px; }
         footer { background-color:rgb(240, 240, 240); text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%; border-top: 1px solid #ccc; }
         .btn-logout { 
             background-color: rgb(38, 83, 208); 
             color: white; 
             padding: 6px 12px; 
             border-radius: 4px; 
             display: inline-block;
             text-decoration: none;
             margin-left: 15px;
         }
         .btn-logout:hover { 
             background-color: darkblue; 
             color: rgb(197, 197, 197); 
         }
     </style>
</head>
<body>
    <header>
        <div>UTS Web Lanjut</div>
        <div>
            <?php if (session()->get('isLoggedIn')): // Tampilkan hanya jika sudah login ?>
                <span>Welcome, <?= esc(session()->get('username')) ?></span>
                <!-- Tombol Logout -->
                <a href="<?= site_url('/logout') ?>" class="btn-logout">Logout</a>
            <?php endif; ?>
        </div>
    </header>
    <main class="content">