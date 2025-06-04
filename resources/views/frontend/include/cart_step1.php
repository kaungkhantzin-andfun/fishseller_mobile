<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート - 魚売り</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
            min-height: 100vh;
            padding-bottom: 60px;
        }

        .search-container {
            background-color: #ffffff;
            padding: 10px;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .search-form {
            position: relative;
            flex: 1;
            margin-left: 8px;
        }

        .search-input {
            width: 100%;
            padding: 8px 15px;
            padding-left: 40px;
            border-radius: 20px;
            border: none;
            font-size: 14px;
            background-color: #E7E0EB;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-size: 14px;
        }

        .menu-icon {
            font-size: 16px;
            color: #333;
            margin-right: 5px;
            cursor: pointer;
            padding: 5px;
            border-radius: 4px;
            transition: background-color 0.2s;
            border: none;
            background: none;
        }

        .menu-icon:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .breadcrumb {
            margin-top: 56px;
            padding: 12px 16px;
            background-color: white;
            font-size: 12px;
            list-style: none;
            display: flex;
            margin-bottom: 1px;
            border-bottom: 1px solid #eee;
        }

        .breadcrumb-item {
            color: #666;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
            padding: 0 8px;
        }

        .cart-items {
            padding: 0;
            background: white;
        }

        .cart-item {
            background: white;
            padding: 16px;
            margin-bottom: 1px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .item-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }

        .item-details {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .item-name {
            font-size: 14px;
            margin-bottom: 0;
        }

        .item-price {
            color: #333;
            font-weight: bold;
            font-size: 14px;
            white-space: nowrap;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 4px;
            margin-left: auto;
            margin-right: 8px;
        }

        .quantity-btn {
            width: 24px;
            height: 24px;
            border: none;
            background: #f5f5f5;
            border-radius: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #666;
        }

        .quantity-input {
            width: 24px;
            text-align: center;
            border: none;
            font-size: 14px;
            padding: 0;
        }

        .cart-actions {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .cart-btn {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: none;
            color: #666;
            font-size: 14px;
        }

        .cart-total {
            background: #f5f5f5;
            padding: 12px 16px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            font-size: 14px;
            gap: 8px;
            border-top: 1px solid #eee;
        }

        .total-label {
            font-size: 14px;
        }

        .total-amount {
            color: #333;
            font-weight: bold;
        }

        .next-button {
            display: block;
            width: calc(100% - 32px);
            margin: 16px;
            padding: 12px;
            background-color: #666;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
        }

        .footer {
            background-color: white;
            border-top: 1px solid #e0e0e0;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 900;
        }

        .nav-buttons {
            display: flex;
            justify-content: space-around;
            padding: 8px 0;
        }

        .nav-button {
            color: #666;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 10px;
        }

        .nav-button i {
            font-size: 20px;
            margin-bottom: 4px;
        }

        .nav-button.active {
            color: #333;
        }

        .copyright {
            background-color: black;
            color: white;
            text-align: center;
            padding: 5px;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <!-- Search Bar -->
    <div class="search-container">
        <i class="fas fa-bars menu-icon" onclick="toggleMenu()"></i>
        <div class="search-form">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="お魚を検索">
        </div>
    </div>

    <!-- Breadcrumb -->
    <ul class="breadcrumb">
        <li class="breadcrumb-item">ホーム</li>
        <li class="breadcrumb-item">カート</li>
    </ul>

    <!-- Cart Items -->
    <div class="cart-items">
        <div class="cart-item">
            <img src="https://cdn.pixabay.com/photo/2018/04/15/17/45/fish-3322230_1280.jpg" alt="朝どれ ぶり" class="item-image">
            <div class="item-details">
                <div>
                    <div class="item-name">朝どれ ぶり</div>
                    <div class="item-price">¥ 3,000</div>
                </div>
                <div class="cart-actions">
                    <div class="quantity-controls">
                        <button class="quantity-btn">-</button>
                        <input type="text" value="1" class="quantity-input" readonly>
                        <button class="quantity-btn">+</button>
                    </div>
                    <button class="cart-btn">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <img src="https://cdn.pixabay.com/photo/2018/04/15/17/45/fish-3322230_1280.jpg" alt="朝どれ ぶり" class="item-image">
            <div class="item-details">
                <div>
                    <div class="item-name">朝どれ ぶり</div>
                    <div class="item-price">¥ 3,000</div>
                </div>
                <div class="cart-actions">
                    <div class="quantity-controls">
                        <button class="quantity-btn">-</button>
                        <input type="text" value="1" class="quantity-input" readonly>
                        <button class="quantity-btn">+</button>
                    </div>
                    <button class="cart-btn">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <img src="https://cdn.pixabay.com/photo/2018/04/15/17/45/fish-3322230_1280.jpg" alt="朝どれ ぶり" class="item-image">
            <div class="item-details">
                <div>
                    <div class="item-name">朝どれ ぶり</div>
                    <div class="item-price">¥ 3,000</div>
                </div>
                <div class="cart-actions">
                    <div class="quantity-controls">
                        <button class="quantity-btn">-</button>
                        <input type="text" value="1" class="quantity-input" readonly>
                        <button class="quantity-btn">+</button>
                    </div>
                    <button class="cart-btn">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cart-item">
            <img src="https://cdn.pixabay.com/photo/2018/04/15/17/45/fish-3322230_1280.jpg" alt="朝どれ ぶり" class="item-image">
            <div class="item-details">
                <div>
                    <div class="item-name">朝どれ ぶり</div>
                    <div class="item-price">¥ 3,000</div>
                </div>
                <div class="cart-actions">
                    <div class="quantity-controls">
                        <button class="quantity-btn">-</button>
                        <input type="text" value="1" class="quantity-input" readonly>
                        <button class="quantity-btn">+</button>
                    </div>
                    <button class="cart-btn">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="cart-total">
            <span class="total-label">合計：</span>
            <span class="total-amount">¥ 12,000</span>
        </div>
    </div>

    <!-- Footer Navigation -->
    <div class="footer">
        <div class="nav-buttons">
            <a href="#" class="nav-button">
                <i class="fas fa-home"></i>
                <span>ホーム</span>
            </a>
            <a href="#" class="nav-button">
                <i class="fas fa-th"></i>
                <span>カテゴリ</span>
            </a>
            <a href="#" class="nav-button active">
                <i class="fas fa-shopping-cart"></i>
                <span>カート</span>
            </a>
            <a href="#" class="nav-button">
                <i class="fas fa-tag"></i>
                <span>タグ</span>
            </a>
            <a href="#" class="nav-button">
                <i class="fas fa-user"></i>
                <span>アカウント</span>
            </a>
        </div>
        <div class="copyright">
            Copyright 2025 designed by AndFun Yangon Co.,Ltd
        </div>
    </div>
</body>
</html>
