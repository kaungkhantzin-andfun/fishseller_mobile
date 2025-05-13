<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文詳細</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
        }
        
        .header {
            background-color: #0d6efd;
            color: white;
            padding: 12px 15px;
            display: flex;
            align-items: center;
        }
        
        .header h1 {
            font-size: 1.25rem;
            margin: 0;
            font-weight: normal;
        }
        
        .back-button {
            margin-right: 15px;
            color: white;
            background: none;
            border: none;
            font-size: 1.5rem;
            padding: 0;
            line-height: 1;
        }
        
        .content {
            padding: 15px;
            background-color: white;
        }
        
        .order-card {
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 15px;
        }
        
        .product-info {
            display: flex;
            margin-bottom: 15px;
        }
        
        .product-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .product-details {
            flex: 1;
        }
        
        .product-name {
            font-size: 1rem;
            margin-bottom: 5px;
        }
        
        .product-price {
            color: #dc3545;
            font-size: 1.1rem;
            font-weight: bold;
        }
        
        .order-details {
            font-size: 0.9rem;
        }
        
        .order-details dl {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 5px;
        }
        
        .order-details dt {
            width: 35%;
            font-weight: normal;
        }
        
        .order-details dd {
            width: 65%;
            margin-bottom: 0;
        }
        
        .quantity-box {
            background-color: #f8f9fa;
            border-radius: 4px;
            padding: 10px;
            font-weight: bold;
            font-size: 1.2rem;
            min-width: 40px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: fit-content;
        }
        
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.75rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <button class="back-button">&#8592;</button>
        <h1>注文詳細</h1>
    </div>
    
    <!-- Content -->
    <div class="content">
        <div class="d-flex">
            <!-- Quantity Box on the left -->
            <div class="quantity-box me-3 align-self-start" style="min-width: 40px; text-align: center;">
                1
            </div>
            
            <!-- Order Card taking remaining space -->
            <div class="order-card flex-grow-1">
                <div class="product-info">
                    <img src="https://cdn.pixabay.com/photo/2018/04/15/17/45/fish-3322230_1280.jpg" alt="朝とれ ぶり" class="product-image">
                    <div class="product-details">
                        <div class="product-name">朝とれ ぶり</div>
                        <div class="product-price">¥ 3,000</div>
                    </div>
                </div>
                
                <div class="order-details">
                    <dl>
                        <dt>ユーザー名</dt>
                        <dd>XXXXX <span class="ms-2">&#128065;</span></dd>
                    </dl>
                    <dl>
                        <dt>注文日</dt>
                        <dd>YY/MM/DD</dd>
                    </dl>
                    <dl>
                        <dt>支払い方法</dt>
                        <dd>銀行振り込み</dd>
                    </dl>
                    <dl>
                        <dt>支払いステータス</dt>
                        <dd>振り込み済み</dd>
                    </dl>
                    <dl>
                        <dt>発送ステータス</dt>
                        <dd>発送済み</dd>
                    </dl>
                    <dl>
                        <dt>発送先住所</dt>
                        <dd>
                            165-0026<br>
                            東京都中野区新井1-15-2<br>
                            090-1234-5678<br>
                            目利　太郎　様宛て
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        Copyright 2025 designed by AndFun Yangon Co.,Ltd
    </div>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>