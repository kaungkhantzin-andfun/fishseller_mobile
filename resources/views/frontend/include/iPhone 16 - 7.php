<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>漁師の目利きへの出店</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
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

        .content {
            margin-top: 20px;
            padding: 16px;
            background: #F0EAF2;
            border-radius: 8px;
            margin-left: 16px;
            margin-right: 16px;
            font-size: 14px;
            line-height: 2;
            color: #333;
        }

        .content-text {
            margin: 8px 0;
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
        <li class="breadcrumb-item">漁師の目利きへの出店</li>
    </ul>

    <!-- Content -->
    <div class="content">
        <div class="content-text">漁師の目利き出店のご案内</div>
        <div class="content-text">出店のお申し込み・資料の請求</div>
        <div class="content-text">出店プラン・出店費用</div>
        <div class="content-text">出店までの流れ</div>
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
            <a href="#" class="nav-button">
                <i class="fas fa-shopping-cart"></i>
                <span>カート</span>
            </a>
            <a href="#" class="nav-button">
                <i class="fas fa-tag"></i>
                <span>タグ</span>
            </a>
            <a href="#" class="nav-button active">
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
