<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お支払い完了 - 魚売り</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
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

        .content {
            margin-top: 80px;
            padding: 20px;
            text-align: center;
        }

        .message {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #333;
        }

        .button-group {
            display: flex;
            gap: 16px;
            max-width: 400px;
            margin: 0 auto;
        }

        .btn {
            flex: 1;
            padding: 12px;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
            min-width: 120px;
        }

        .btn-home {
            border: 1px solid #666;
            background: white;
            color: #333;
        }

        .btn-contact {
            background: #5A5A5A;
            color: white;
            border: none;
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

    <!-- Content -->
    <div class="content">
        <div class="message">
            お支払い処理が完了しました。<br>
            販売元からメールが届きますので、<br>
            ご確認下さい。
        </div>

        <div class="button-group">
            <a href="#" class="btn btn-home">ホーム</a>
            <a href="#" class="btn btn-contact">お問い合わせ</a>
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
