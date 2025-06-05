<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文一覧 - 魚売り</title>
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
        }

        .content {
            margin-top: 56px;
            padding: 10px;
        }

        .order-card {
            background-color: white;
            border-radius: 4px;
            margin-bottom: 10px;
            border: 1px solid #e0e0e0;
        }

        .order-header {
            display: grid;
            grid-template-columns: 1fr auto;
            padding: 12px;
            gap: 10px;
        }

        .order-info {
            display: grid;
            gap: 4px;
        }

        .order-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #333;
        }

        .label {
            color: #333;
        }

        .value {
            color: #333;
        }

        .order-edit {
            align-self: center;
            color: #666;
            font-size: 18px;
        }

        .status-section {
            border-top: 1px solid #e0e0e0;
            padding: 12px;
        }

        .status-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
            font-size: 13px;
        }

        .status-badge {
            background-color: #1976d2;
            color: white;
            padding: 3px 12px;
            border-radius: 4px;
            font-size: 12px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin: 20px 0;
        }

        .page-button {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
            background-color: white;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .page-button.active {
            background-color: #666;
            color: white;
            border-color: #666;
        }

        .csv-export {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #666;
            color: white;
            padding: 8px 24px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .csv-export i {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="main.html" class="back-button">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="header-title">注文一覧</h1>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Order Cards -->
        <div class="order-card">
            <div class="order-header">
                <div class="order-info">
                    <div class="order-row">
                        <span class="label">注文番号</span>
                        <span class="value">M00001</span>
                    </div>
                    <div class="order-row">
                        <span class="label">注文日</span>
                        <span class="value">YY/MM/DD</span>
                    </div>
                    <div class="order-row">
                        <span class="label">ユーザー</span>
                        <span class="value">XXXX</span>
                    </div>
                    <div class="order-row">
                        <span class="label">購入額</span>
                        <span class="value">¥X,XXX</span>
                    </div>
                </div>
                <a href="#" class="order-edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </div>
            <div class="status-section">
                <div class="status-row">
                    <span class="label">支払いステータス</span>
                    <span class="status-badge">クレカ決済済</span>
                </div>
                <div class="status-row">
                    <span class="label">発送ステータス</span>
                    <span class="status-badge">発送済（通常便）</span>
                </div>
            </div>
        </div>

        <div class="order-card">
            <div class="order-header">
                <div class="order-info">
                    <div class="order-row">
                        <span class="label">注文番号</span>
                        <span class="value">M00002</span>
                    </div>
                    <div class="order-row">
                        <span class="label">注文日</span>
                        <span class="value">YY/MM/DD</span>
                    </div>
                    <div class="order-row">
                        <span class="label">ユーザー</span>
                        <span class="value">XXXX</span>
                    </div>
                    <div class="order-row">
                        <span class="label">購入額</span>
                        <span class="value">¥X,XXX</span>
                    </div>
                </div>
                <a href="#" class="order-edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </div>
            <div class="status-section">
                <div class="status-row">
                    <span class="label">支払いステータス</span>
                    <span class="status-badge">クレカ決済済</span>
                </div>
                <div class="status-row">
                    <span class="label">発送ステータス</span>
                    <span class="status-badge">発送済（クール便）</span>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <a href="#" class="page-button">&lt;</a>
            <a href="#" class="page-button active">1</a>
            <a href="#" class="page-button">2</a>
            <a href="#" class="page-button">3</a>
            <a href="#" class="page-button">&gt;</a>
        </div>

        <!-- CSV Export Button -->
        <a href="#" class="csv-export">
            <i class="fas fa-download"></i>
            <span>全注文をCSV出力</span>
        </a>
    </div>
</body>
</html>
