<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セール商品を編集</title>
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
        
        .main-content-wrapper {
            padding: 0 15px 70px; /* Space for fixed footer */
        }
        
        /* Header */
        .header {
            background-color: #1976d2; /* Blue color for header */
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            position: relative;
            max-width: 100%;
            height: 50px;
            margin-bottom: 20px;
        }
        
        .back-btn {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            padding: 0;
            margin-right: 10px;
            width: 24px;
        }
        
        .header-title {
            font-size: 16px;
            font-weight: normal;
            margin: 0;
            flex-grow: 1;
        }
          /* Form Styles */
        .form-container {
            padding: 0 15px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        
        .form-control:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 3px rgba(25, 118, 210, 0.1);
            outline: none;
        }
        
        /* Button Container */
        .button-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn-cancel {
            background-color: #f8f9fa;
            color: #212529;
            border: 1px solid #ced4da;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 4px;
            min-width: 120px;
            transition: all 0.2s ease;
        }
        
        .btn-cancel:hover {
            background-color: #e9ecef;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .btn-apply {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 4px;
            min-width: 120px;
            transition: all 0.2s ease;
        }
        
        .btn-apply:hover {
            background-color: #5a6268;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            font-size: 10px;
            padding: 5px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <button class="back-btn" onclick="history.back()">
            <i class="fas fa-arrow-left"></i>
        </button>
        <h1 class="header-title">セール商品を編集</h1>
    </div>    <!-- Main Content -->
    <div class="main-content-wrapper">
        <div class="form-container">
            <form>
                <!-- Product Name -->
                <div class="form-group">
                    <label for="productName" class="form-label">商品名</label>
                    <input type="text" id="productName" class="form-control" value="朝どれぶり" placeholder="商品名を入力">
                </div>
                
                <!-- Current Price -->
                <div class="form-group">
                    <label for="currentPrice" class="form-label">現在価格（円）</label>
                    <input type="text" id="currentPrice" class="form-control" value="1,000" placeholder="現在価格">
                </div>
                
                <!-- Sale Price -->
                <div class="form-group">
                    <label for="salePrice" class="form-label">セール（税別価格)</label>
                    <input type="text" id="salePrice" class="form-control" placeholder="0,000">
                </div>
                
                <!-- Buttons -->
                <div class="button-container">
                    <button type="button" class="btn-cancel" onclick="history.back()">キャンセル</button>
                    <button type="submit" class="btn-apply">更新価格を適用</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        Copyright 2025 designed by AndFun Yangon Co.,Ltd
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
