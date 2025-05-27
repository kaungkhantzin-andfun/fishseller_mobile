<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>全ての商品</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            line-height: 1.6;
            background-color: white;
            margin: 0;
            padding: 0;
        }
        
        .main-content-wrapper {
            padding-bottom: 100px; /* Space for fixed footer */
        }        /* Search Bar */        
        .search-container {
            background-color: #E7E0EB; /* Light purple background as shown in image */
            padding: 8px 15px;
            display: flex;
            align-items: center;
            border-radius: 25px;
            margin: 10px 15px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        
        .search-form {
            position: relative;
            flex: 1;
            margin-left: 10px;
        }
        
        .search-input {
            width: 100%;
            padding: 8px 15px;
            padding-left: 35px;
            border-radius: 20px;
            border: none;
            font-size: 14px;
            background-color: transparent !important; /* Transparent background */
            color: #333;
            outline: none; /* Remove focus outline */
        }
          .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #555;
            font-size: 16px;
        }
        
        .menu-icon {
            font-size: 18px;
            color: #333;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .menu-icon:hover {
            color: #000;
        }
        
        /* Breadcrumbs */
        .breadcrumb-container {
            padding: 10px 15px;
            background-color: white;
            font-size: 12px;
        }
        
        .breadcrumb-link {
            color: #333;
            text-decoration: none;
        }
        
        .breadcrumb-separator {
            color: #6c757d;
            margin: 0 5px;
        }
          /* Category Header */
        .category-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 0;
            background-color: white;
        }
        
        .category-title {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
        }
        
        .view-options {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .view-option {
            font-size: 20px;
            color: #000;
            padding: 0;
            background: none;
            border: none;
        }
        
        .view-option.active {
            color: #000;
            font-weight: bold;
        }
        
        .sort-option {
            font-size: 20px;
            color: #000;
            padding: 0;
            background: none;
            border: none;
        }
          /* No price filter needed */        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            padding: 15px;
            background-color: white;
        }
        
        .product-card {
            background-color: white;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            box-shadow: none;
            padding: 5px;
        }
          .product-image-container {
            position: relative;
            padding-top: 100%; /* 1:1 Aspect Ratio */
            overflow: hidden;
            margin-bottom: 5px;
        }
        
        .product-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .product-badge {
            position: absolute;
            top: 0;
            left: 0;
            padding: 3px 8px;
            background-color: #dc3545;
            color: white;
            font-size: 10px;
            font-weight: bold;
        }
          .product-sold-out {
            position: absolute;
            top: 0;
            right: 0;
            padding: 3px 8px;
            background-color: #dc3545;
            color: white;
            font-size: 11px;
            font-weight: bold;
        }
        
        .product-info {
            padding: 0;
        }
        
        .product-name {
            font-size: 12px;
            margin-bottom: 3px;
            color: #333;
        }
        
        .product-price {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 8px;
        }
        
        .current-price {
            font-weight: bold;
            color: black;
            font-size: 14px;
        }
        
        .original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 12px;
        }
          .product-actions {
            display: flex;
            gap: 2px;
        }.cart-btn {
            background-color: #666;
            color: white;
            border: none;
            width: 50%;
            height: 30px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .fav-btn {
            border: 1px solid #dee2e6;
            background-color: white;
            width: 50%;
            height: 30px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .cart-btn i {
            font-size: 14px;
            color: white;
        }
        
        .fav-btn i {
            font-size: 14px;
            color: #6c757d;
        }
        
        .fav-btn i.active {
            color: #dc3545;
        }
        
        /* Pagination */
        .pagination-container {
            padding: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
        }
        
        .pagination-btn {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #dee2e6;
            margin: 0 3px;
            color: #6c757d;
            text-decoration: none;
            font-size: 14px;
        }
        
        .pagination-btn.active {
            background-color: #6c757d;
            color: white;
            border-color: #6c757d;
        }

        /* Footer */
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer-buttons {
            display: flex;
            justify-content: space-around;
            text-align: center;
            background-color: white;
            border-top: 1px solid #dee2e6;
            padding: 10px 0;
        }

        .footer-button {
            flex: 1;
            font-size: 12px;
            color: #6c757d;
            text-decoration: none;
        }

        .footer-button i {
            display: block;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .footer-button.active {
            color: black;
        }

        .copyright {
            background-color: black;
            color: white;
            text-align: center;
            font-size: 10px;
            padding: 5px 0;
            margin: 0;
        }
    </style>
</head>
<body>    <!-- Search Bar -->
    <div class="search-container">
        <i class="fas fa-bars menu-icon" onclick="toggleMenu()"></i>
        <div class="search-form">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="お魚を検索">
        </div>
    </div><!-- Breadcrumbs -->
    <div class="breadcrumb-container">
        <a href="#" class="breadcrumb-link">ホーム</a>
        <span class="breadcrumb-separator">＞</span>
        <span class="breadcrumb-link">商品</span>
    </div>

    <!-- Main Content -->
    <div class="main-content-wrapper">
        <!-- Category Header -->
        <div class="category-header">
            <h1 class="category-title">全ての商品</h1>
            <div class="view-options">
                <button class="view-option active">
                    <i class="fas fa-th"></i>
                </button>
                <button class="view-option">
                    <i class="fas fa-list"></i>
                </button>
                <button class="sort-option">
                    <i class="fas fa-sort-amount-down"></i>
                </button>
            </div>        </div>

        <!-- Product Grid -->
        <div class="product-grid">            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image-container">
                    <img src="https://cdn.pixabay.com/photo/2021/08/13/07/11/siamese-fighting-fish-6542427_1280.jpg" alt="朝どれ ぶり" class="product-image">
                </div>
                <div class="product-info">
                    <div class="product-name">朝どれ ぶり</div>
                    <div class="product-price">
                        <span class="current-price">¥ 3,000</span>
                    </div>
                    <div class="product-actions">
                        <button class="cart-btn">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                        <button class="fav-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>
            </div>            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image-container">
                    <img src="https://cdn.pixabay.com/photo/2021/08/13/07/11/siamese-fighting-fish-6542427_1280.jpg" alt="朝どれ ぶり" class="product-image">
                </div>
                <div class="product-info">
                    <div class="product-name">朝どれ ぶり</div>
                    <div class="product-price">
                        <span class="current-price">¥ 3,000</span>
                    </div>
                    <div class="product-actions">
                        <button class="cart-btn">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                        <button class="fav-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>
            </div>            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image-container">
                    <img src="https://cdn.pixabay.com/photo/2021/08/13/07/11/siamese-fighting-fish-6542427_1280.jpg" alt="朝どれ ぶり" class="product-image">
                </div>
                <div class="product-info">
                    <div class="product-name">朝どれ ぶり</div>
                    <div class="product-price">
                        <span class="current-price">¥ 3,000</span>
                    </div>
                    <div class="product-actions">
                        <button class="cart-btn">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                        <button class="fav-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div></div>            <!-- Product 4 (Sold Out) -->
            <div class="product-card">
                <div class="product-image-container">
                    <img src="https://cdn.pixabay.com/photo/2021/08/13/07/11/siamese-fighting-fish-6542427_1280.jpg" alt="朝どれ ぶり" class="product-image">
                    <div class="product-sold-out">SOLD OUT</div>
                </div>
                <div class="product-info">
                    <div class="product-name">朝どれ ぶり</div>
                    <div class="product-price">
                        <span class="current-price">¥ 3,000</span>
                    </div>
                    <div class="product-actions">
                        <button class="cart-btn" disabled>
                            <i class="fas fa-cart-plus"></i>
                        </button>
                        <button class="fav-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- No pagination shown in the image -->
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-buttons">
            <a href="#" class="footer-button active">
                <i class="fas fa-home"></i>
                <span>ホーム</span>
            </a>
            <a href="#" class="footer-button">
                <i class="fas fa-th-large"></i>
                <span>カテゴリ</span>
            </a>
            <a href="#" class="footer-button">
                <i class="fas fa-shopping-cart"></i>
                <span>カート</span>
            </a>
            <a href="#" class="footer-button">
                <i class="fas fa-tag"></i>
                <span>タグ</span>
            </a>
            <a href="#" class="footer-button">
                <i class="fas fa-user"></i>
                <span>アカウント</span>
            </a>
        </div>
        <div class="copyright">
            Copyright 2025 designed by AndFun Yangon Co.,Ltd
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleMenu() {
            // Add menu toggle functionality here
            console.log('Menu clicked');
            // You can implement sidebar menu or dropdown functionality
        }
    </script>
</body>
</html>
