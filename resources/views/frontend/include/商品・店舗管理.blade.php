<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品・店舗管理 - 魚売り</title>
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

        .header {
            background-color: #1976d2;
            color: white;
            padding: 12px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
        }

        .header-title {
            font-size: 18px;
            font-weight: normal;
            margin: 0;
            padding-left: 12px;
        }

        .content {
            margin-top: 56px;
            padding: 16px;
            background-color: #f5f5f5;
        }

        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-item {
            margin-bottom: 8px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            background: white;
            overflow: hidden;
        }

        .menu-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px;
            color: #333;
            text-decoration: none;
            background: white;
            transition: background-color 0.2s;
        }

        .menu-link:hover {
            background-color: #f8f9fa;
            color: #333;
        }

        .menu-text {
            font-size: 14px;
        }

        .menu-arrow {
            color: #666;
            font-size: 16px;
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
    <!-- Header -->
    <div class="header">
        <h1 class="header-title">商品・店舗管理</h1>
    </div>

    <!-- Content -->
    <div class="content">
        <ul class="menu-list">
            <li class="menu-item">
                <a href="基本情報.html" class="menu-link">
                    <span class="menu-text">基本情報</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="アカウントとセキュリティ.html" class="menu-link">
                    <span class="menu-text">アカウントとセキュリティ</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="商品・店舗管理.html" class="menu-link">
                    <span class="menu-text">商品・店舗管理</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="注文リスト.html" class="menu-link">
                    <span class="menu-text">注文リスト</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="販売者管理.html" class="menu-link">
                    <span class="menu-text">販売者管理</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="お問い合わせ管理.html" class="menu-link">
                    <span class="menu-text">お問い合わせ管理</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="ユーザー管理.html" class="menu-link">
                    <span class="menu-text">ユーザー管理</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="よくある質問編集.html" class="menu-link">
                    <span class="menu-text">よくある質問編集</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="管理者データーの更新.html" class="menu-link">
                    <span class="menu-text">管理者データーの更新</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
            <li class="menu-item">
                <a href="ログアウト.html" class="menu-link">
                    <span class="menu-text">ログアウト</span>
                    <i class="fas fa-chevron-right menu-arrow"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- Footer Navigation -->
    <div class="footer">
        <div class="nav-buttons">
            <a href="#" class="nav-button active">
                <i class="fas fa-home"></i>
                <span>ホーム</span>
            </a>
            <a href="#" class="nav-button">
                <i class="fas fa-th"></i>
                <span>カテゴリ</span>
            </a>
            <a href="#" class="nav-button">
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
