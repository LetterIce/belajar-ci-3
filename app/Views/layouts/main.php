<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Style dasar dashboard -->
    <style>
        .stats-container {
            margin: 20px 0;
        }
        .stat-card {
            display: flex;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .stat-card-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 8px;
            margin-right: 15px;
            color: white;
            font-size: 24px;
        }
        .stat-card-detail {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .stat-card-number {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }
        .stat-card-label {
            color: #6c757d;
            font-size: 14px;
        }
        
        .bg-primary { background-color: #4e73df; }
        .bg-success { background-color: #1cc88a; }
        .bg-warning { background-color: #f6c23e; }
        .bg-info { background-color: #36b9cc; }
    </style>
    
    <!-- Render bagian styles tambahan dari template turunan -->
    <?= $this->renderSection('styles') ?>
</head>
<body>
    <?= $this->include('partials/header') // header dari folder layouts ?>

    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>
    
    <?= $this->include('partials/footer') // footer dari folder layouts ?>

    <!-- Bootstrap JS Bundle dengan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>