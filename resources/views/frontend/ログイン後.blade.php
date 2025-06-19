<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>お魚アプリ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Hiragino Sans', 'Meiryo', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            padding-bottom: 80px; /* Space for bottom nav and copyright */
        }
        .search-container {
            background-color: #e9e3ee;
            padding: 10px;
            border-radius: 25px;
            margin: 10px;
            display: flex;
            align-items: center;
        }
        .search-input {
            border: none;
            background: transparent;
            width: 100%;
            padding: 5px 10px;
            font-size: 14px;
        }
        .search-input:focus {
            outline: none;
        }
        .banner {
            position: relative;
            margin-bottom: 15px;
            padding: 0 10px;
        }
        .banner img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 250px;
            border-radius: 8px;
        }
        .promo-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #f6a623;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 12px;
            transform: rotate(-5deg);
        }
        .start-date {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #000;
            color: white;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 12px;
        }
        .lightning {
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 24px;
            color: #f6a623;
        }
        .blue-banner {
            background-color: #0066a4;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .dark-banner {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .feature-grid {
            /* Remove custom flex styles for feature-grid */
            display: block;
            margin: 0;
            margin-bottom: 15px;
        }
        .feature-item {
            padding: 5px;
        }
        .feature-box {
            background-color: #555;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 12px;
        }
        .feature-box:hover {
            background-color: #777;
            cursor: pointer;
        }
        .feature-icon {
            font-size: 24px;
            margin-bottom: 5px;
        }
        .notification-card {
            background-color: #333;
            color: white;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            text-align: center;
        }
        .notification-card h4 {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .email-input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            background-color: #eee;
            color: #333;
        }
        .submit-button {
            background-color: #c50e1f;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            font-weight: bold;
        }
        /* Reusing bottom navigation and copyright from previous code */
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
        
        /* Media queries for responsive design */
        @media (max-width: 576px) {
            .banner img {
                max-height: 140px;
            }
            .promo-badge {
                width: 40px;
                height: 40px;
                font-size: 9px;
            }
            .start-date {
                width: 45px;
                height: 45px;
                font-size: 9px;
            }
            .feature-box {
                font-size: 11px;
                padding: 8px;
            }
            .feature-icon {
                font-size: 18px;
            }
            .search-container {
                padding: 6px;
                margin: 6px;
            }
        }
        
        @media (min-width: 992px) {
            .banner img {
                max-height: 300px;
            }
        }
    </style>
</head>
<body>
    <!-- Search Bar -->
    <div class="search-container">
        <div class="input-group">
            <span class="input-group-text bg-transparent border-0 px-2">
                <i class="fas fa-bars"></i>
            </span>
            <input type="text" class="form-control search-input border-0 bg-transparent" placeholder="お魚を検索" style="box-shadow:none;">
            <span class="input-group-text bg-transparent border-0 px-2">
                <i class="fas fa-search"></i>
            </span>
        </div>
    </div>
    
    <!-- Main Banner -->
    <div class="banner">
        <img src="https://images.unsplash.com/photo-1534043464124-3be32fe000c9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="鮮魚画像" loading="lazy" class="img-fluid rounded">
        <!-- Promo Badge -->
        <div class="promo-badge">
            <div>わすれ！</div>
        </div>
        <!-- Start Date Badge -->
      
    </div>
    
    <!-- Blue Banner Text -->
    <div class="blue-banner">
        先着100店舗限定 友達登録特典！<br>
        ①仲買人価格での購入保証<br>
        ②優先購入保証
    </div>
    
    <!-- Dark Banner Text -->
    <div class="dark-banner">
        対馬産魚介類の飲食店向直接通販
    </div>
    
    <!-- Feature Grid (Bootstrap grid) -->
    <div class="feature-grid container">
        <div class="row g-2">
            <div class="col-4 col-sm-4 col-md-2 feature-item">
                <div class="feature-box">
                    <i class="fas fa-fish feature-icon"></i>
                    <div>魚の雑学</div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-2 feature-item">
                <div class="feature-box">
                    <i class="fas fa-play-circle feature-icon"></i>
                    <div>対馬の魚</div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-2 feature-item">
                <div class="feature-box">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <div>卸売価格</div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-2 feature-item">
                <div class="feature-box">
                    <i class="fas fa-shopping-cart feature-icon"></i>
                    <div>注文</div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-2 feature-item">
                <div class="feature-box">
                    <i class="far fa-calendar-alt feature-icon"></i>
                    <div>予約管理</div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-2 feature-item">
                <div class="feature-box">
                    <i class="fas fa-bullhorn feature-icon"></i>
                    <div>集客管理</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Notification Card -->
    <div class="notification-card">
        <h4>新しい更新情報と割引を通知</h4>
        <input type="email" class="email-input" placeholder="あなたのメールアドレス">
        <button class="submit-button">登録する</button>
    </div>
    
    <!-- Bottom Navigation -->
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
    
    <!-- Copyright -->
    <div class="copyright">
        Copyright 2025 designed by Andfun Yangon Co., Ltd.
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Make feature items clickable
        document.querySelectorAll('.feature-box').forEach(item => {
            item.addEventListener('click', function() {
                alert('機能がクリックされました: ' + this.querySelector('div').innerText);
            });
        });
        
        // Make bottom navigation items clickable
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                alert('ナビゲーション項目がクリックされました: ' + this.querySelector('span').innerText);
            });
        });
        
        // Make submit button clickable
        document.querySelector('.submit-button').addEventListener('click', function() {
            const email = document.querySelector('.email-input').value;
            if (email) {
                alert('メールアドレスが登録されました: ' + email);
            } else {
                alert('メールアドレスを入力してください');
            }
        });
    </script>
</body>
</html>