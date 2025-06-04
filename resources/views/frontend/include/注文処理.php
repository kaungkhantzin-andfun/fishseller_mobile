<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文処理 - 魚売り</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
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

        .back-button {
            color: white;
            text-decoration: none;
            font-size: 24px;
            margin-right: 15px;
            display: flex;
            align-items: center;
        }

        .header-title {
            font-size: 18px;
            font-weight: normal;
            margin: 0;
        }        .content {
            margin-top: 56px;
            padding: 16px;
        }

        .order-detail {
            background-color: white;
            border-radius: 4px;
            margin-bottom: 16px;
            border: 1px solid #e0e0e0;
        }

        .order-image {
            width: 100%;
            max-width: 120px;
            height: auto;
            border-radius: 4px;
            margin-right: 16px;
        }

        .order-info {
            padding: 16px;
            border-bottom: 1px solid #e0e0e0;
        }

        .order-header {
            display: flex;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .order-title {
            font-size: 18px;
            margin: 0 0 8px 0;
            color: #333;
        }

        .order-price {
            color: #e53935;
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .info-label {
            color: #666;
        }

        .info-value {
            color: #333;
            font-weight: 500;
        }

        .status-section {
            padding: 16px;
            border-bottom: 1px solid #e0e0e0;
        }

        .status-dropdown {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .address-section {
            padding: 16px;
        }

        .address-title {
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
        }

        .address-text {
            font-size: 14px;
            line-height: 1.5;
            color: #333;            margin: 0;
        }

        .submit-button {
            display: block;
            background-color: #666;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            margin: 20px 0 60px 0;
        }

        .footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="注文一覧.html" class="back-button">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="header-title">注文処理</h1>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="order-detail">
            <div class="order-info">                <div class="order-header">
                    <img src="./images/products/buri-02.png" alt="朝どれぶり" class="order-image">
                    <div>
                        <h2 class="order-title">朝どれぶり</h2>
                        <p class="order-price">¥3,000</p>
                    </div>
                </div>
                <div class="info-row">
                    <span class="info-label">注文番号</span>
                    <span class="info-value">M00001</span>
                </div>
                <div class="info-row">
                    <span class="info-label">ユーザー名</span>
                    <span class="info-value">XXXXX</span>
                </div>
                <div class="info-row">
                    <span class="info-label">注文日</span>
                    <span class="info-value">YY/MM/DD</span>
                </div>
                <div class="info-row">
                    <span class="info-label">支払い方法</span>
                    <span class="info-value">クレカ支払い</span>
                </div>
            </div>

            <div class="status-section">
                <div class="info-row">
                    <span class="info-label">支払いステータス</span>
                    <select class="status-dropdown">
                        <option value="paid">クレカ決済済</option>
                        <option value="pending">支払い待ち</option>
                        <option value="failed">決済失敗</option>
                    </select>
                </div>
                <div class="info-row">
                    <span class="info-label">発送ステータス</span>
                    <select class="status-dropdown">
                        <option value="shipped">発送済（通常便）</option>
                        <option value="shipped-cool">発送済（クール便）</option>
                        <option value="preparing">発送準備中</option>
                        <option value="pending">未発送</option>
                    </select>
                </div>
            </div>

            <div class="address-section">
                <div class="address-title">発送先住所</div>
                <p class="address-text">
                    〒165-0026<br>
                    東京都中野区新井1-15-2<br>
                    田村 太郎<br>
                    090-1234-5678
                </p>
            </div>
        </div>        <button class="submit-button">更新する</button>
    </div>

    <!-- Footer -->
    <div class="footer">
        Copyright 2023 designed by AnFun Yangon Co.,Ltd
    </div>
</body>
</html>
