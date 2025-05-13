<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .content-container {
            max-width: 480px;
            margin: 0 auto;
            padding-bottom: 50px;
        }
        
        .header {
            background-color: #1976d2;
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            position: relative;
            width: 100%;
            box-sizing: border-box;
        }
        
        .header h1 {
            margin: 0;
            font-size: 18px;
            font-weight: normal;
        }
        
        .back-button {
            margin-right: 15px;
            color: white;
            background: none;
            border: none;
            padding: 0;
            font-size: 20px;
        }
        
        .dropdown-container {
            padding: 15px;
            display: flex;
            justify-content: center;
        }
        
        .dropdown-select {
            width: 180px;
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .item-list {
            padding: 0 15px;
            max-width: 480px;
            margin: 0 auto;
        }
        
        .item-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 10px;
        }
        
        .item-number {
            font-size: 18px;
            font-weight: bold;
            margin-right: 10px;
            color: #333;
            width: 20px;
        }
        
        .item-image {
            width: 80px;
            height: 60px;
            object-fit: cover;
            margin-right: 10px;
            background-color: #eee;
        }
        
        .item-details {
            flex-grow: 1;
        }
        
        .item-name {
            font-size: 16px;
            margin: 0 0 5px 0;
        }
        
        .item-price {
            color: #e53935;
            font-weight: bold;
            margin: 0;
        }
        
        .view-button {
            color: #777;
            margin-left: 10px;
            font-size: 18px;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            max-width: 480px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .pagination button {
            width: 36px;
            height: 36px;
            margin: 0 5px;
            border: 1px solid #ddd;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
        }
        
        .pagination button.active {
            background-color: #666;
            color: white;
            border-color: #666;
        }
        
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 12px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <button class="back-button">
            <i class="fas fa-arrow-left"></i>
        </button>
        <h1>注文管理</h1>
    </div>
    
    <div class="content-container">
        <!-- Dropdown for period selection -->
        <div class="dropdown-container">
            <div class="dropdown">
                <div class="dropdown-select" id="periodDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>期間選択</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <ul class="dropdown-menu" aria-labelledby="periodDropdown">
                    <li><a class="dropdown-item" href="#">今日</a></li>
                    <li><a class="dropdown-item" href="#">今週</a></li>
                    <li><a class="dropdown-item" href="#">今月</a></li>
                    <li><a class="dropdown-item" href="#">すべて</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Item list -->
        <div class="item-list">
            <div class="item-card">
                <div class="item-number">1</div>
                <img class="item-image" src="https://cdn.pixabay.com/photo/2023/08/24/08/36/fish-8210152_1280.jpg" alt="Fish 1">
                <div class="item-details">
                    <h3 class="item-name">朝どれ ぶり</h3>
                    <p class="item-price">¥ 3,000</p>
                </div>
                <div class="view-button">
                    <i class="fas fa-eye"></i>
                </div>
            </div>
            
            <div class="item-card">
                <div class="item-number">2</div>
                <img class="item-image" src="https://cdn.pixabay.com/photo/2018/04/15/17/45/fish-3322230_1280.jpg" alt="Fish 2">
                <div class="item-details">
                    <h3 class="item-name">朝どれ ぶり</h3>
                    <p class="item-price">¥ 3,000</p>
                </div>
                <div class="view-button">
                    <i class="fas fa-eye"></i>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="pagination">
            <button><i class="fas fa-chevron-left"></i></button>
            <button>1</button>
            <button class="active">2</button>
            <button>3</button>
            <button><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        Copyright 2023 designed by Andium Yangon Co. Ltd
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>