<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>販売管理システム</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Hiragino Sans', 'Meiryo', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            padding-bottom: 80px; /* Space for bottom nav and copyright */
        }
        .header {
            background-color: #0d6efd;
            color: white;
            padding: 10px 15px;
            font-size: 16px;
        }
        .menu-item {
            border: none;
            background-color: white;
            padding: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration: none;
            color: #212529;
            margin-bottom: 10px;
            box-shadow: 0 4px 3px rgba(0,0,0,0.1);
        }
        .menu-item:hover {
            background-color: #f8f9fa;
            color: #212529;
        }
        .highlight {
            background-color: #fff8e1;
        }
        .bottom-nav {
            position: fixed;
            bottom: 24px; /* Position above the copyright */
            width: 100%;
            display: flex;
            background-color: white;
            border-top: 1px solid #e9ecef;
            justify-content: space-around;
            padding: 8px 0;
            z-index: 10;
        }
        .copyright {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 10px;
            padding: 4px 0;
            background-color: black;
            color: white;
            z-index: 5;
        }
        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #212529;
            font-size: 10px;
        }
        .nav-icon {
            font-size: 20px;
            margin-bottom: 2px;
        }
    </style>
</head>
<body>
    <div class="header">
        アカウント
    </div>
    
    <div class="container px-0">
        <div class="menu-container py-2 px-2">
            <div class="menu-item">
                <div>販売者情報管理</div>
                <i class="fas fa-angle-right"></i>
            </div>
            <div class="menu-item">
                <div>販売者名：目利 太郎</div>
                <i class="fas fa-angle-right"></i>
            </div>
            
            <div class="menu-item">
                <div>基本情報</div>
                <i class="fas fa-angle-right"></i>
            </div>
            
            <div class="menu-item">
                <div>アカウントとセキュリティ</div>
                <i class="fas fa-angle-right"></i>
            </div>
            
            <div class="menu-item highlight">
                <div>商品管理</div>
                <i class="fas fa-angle-right"></i>
            </div>
            
            <div class="menu-item">
                <div>注文管理</div>
                <i class="fas fa-angle-right"></i>
            </div>
            
            <div class="menu-item">
                <div>セール実行</div>
                <i class="fas fa-angle-right"></i>
            </div>
            
            <div class="menu-item">
                <div>セール<span class="highlight">商品管理</span></div>
                <i class="fas fa-angle-right"></i>
            </div>
            
            <div class="menu-item">
                <div>ログアウト</div>
                <i class="fas fa-angle-right"></i>
            </div>
        </div>
    </div>
    
    <div class="bottom-nav">
        <a href="#" class="nav-item">
            <i class="fas fa-home nav-icon"></i>
            <span>ホーム</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-th-large nav-icon"></i>
            <span>カテゴリ</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-shopping-cart nav-icon"></i>
            <span>カート</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-tag nav-icon"></i>
            <span>タグ</span>
        </a>
        <a href="#" class="nav-item">
            <i class="fas fa-user nav-icon"></i>
            <span>アカウント</span>
        </a>
    </div>
    
    <div class="copyright">
        Copyright 2025 designed by Andfun Yangon Co.,Ltd.
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Make all menu items clickable
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                alert('メニュー項目がクリックされました: ' + this.querySelector('div').innerText);
            });
        });
        
        // Make bottom navigation items clickable
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                alert('ナビゲーション項目がクリックされました: ' + this.querySelector('span').innerText);
            });
        });
    </script>
</body>
</html>