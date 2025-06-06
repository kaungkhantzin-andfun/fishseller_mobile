<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>住所を追加</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            line-height: 1.6;
            background-color: white;
        }
        
        .main-content-wrapper {
            padding-bottom: 100px; /* Space for fixed footer */
            background-color: #fff;
            padding-top: 10px;
        }

        .header {
            background-color: #0d6efd;
            color: white;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .header-title {
            padding-left: 30px;
            text-align: center;
            font-size: 16px;
            font-weight: normal;
            margin: 0;
        }

        .back-arrow {
            font-size: 18px;
            position: relative;
            z-index: 1;
            color: white;
            text-decoration: none;
        }
        
        .form-container {
            padding: 15px;
        }
        
        .form-label {
            font-size: 14px;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .form-control {
            border-radius: 4px;
            font-size: 14px;
            padding: 8px 12px;
            border: 1px solid #ced4da;
            margin-bottom: 15px;
        }
        
        .form-control::placeholder {
            color: #adb5bd;
        }
        
        .row {
            margin-left: -8px;
            margin-right: -8px;
        }
        
        .col {
            padding-left: 8px;
            padding-right: 8px;
        }
        
        .postal-code-container {
            position: relative;
        }
        
        .postal-search-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #000;
            color: #fff;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }
        
        .phone-input-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .phone-input {
            flex: 1;
            text-align: center;
        }
        
        .phone-separator {
            padding: 0 8px;
            color: #6c757d;
        }
        
        .submit-btn {
            background-color: #343a40;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 12px;
            text-align: center;
            font-size: 14px;
            width: 100%;
            margin: 20px 0;
            cursor: pointer;
        }
        
        .submit-btn:hover {
            background-color: #212529;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer-buttons {
            display: flex;
            justify-content: space-around;
            text-align: center;
            background-color: white;
            border-top: 1px solid #dee2e6;
            padding: 10px 0;
        }

        .footer-button {
            flex: 1;
            font-size: 12px;
            color: #6c757d;
            text-decoration: none;
        }

        .footer-button i {
            display: block;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .footer-button.active {
            color: black;
        }

        .copyright {
            background-color: black;
            color: white;
            text-align: center;
            font-size: 10px;
            padding: 5px 0;
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="#" class="back-arrow">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="header-title">住所を追加</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content-wrapper">
        <div class="form-container">
            <!-- Name Fields -->
            <div class="form-group">
                <label class="form-label">氏名</label>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="姓">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="名">
                    </div>
                </div>
            </div>
            
            <!-- Furigana Fields -->
            <div class="form-group">
                <label class="form-label">フリガナ</label>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="セイ">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="メイ">
                    </div>
                </div>
            </div>
            
            <!-- Postal Code -->
            <div class="form-group">
                <label class="form-label">郵便番号</label>
                <div class="postal-code-container">
                    <input type="text" class="form-control" placeholder="1234567">
                    <button class="postal-search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            
            <!-- Address Fields -->
            <div class="form-group">
                <label class="form-label">住所</label>
                <input type="text" class="form-control" placeholder="都道府県">
                <input type="text" class="form-control" placeholder="市区町村">
                <input type="text" class="form-control" placeholder="以降の住所">
                <input type="text" class="form-control" placeholder="ビル名等">
            </div>
            
            <!-- Phone Number -->
            <div class="form-group">
                <label class="form-label">電話番号</label>
                <div class="phone-input-group">
                    <input type="text" class="form-control phone-input" placeholder="000">
                    <span class="phone-separator">ー</span>
                    <input type="text" class="form-control phone-input" placeholder="0000">
                    <span class="phone-separator">ー</span>
                    <input type="text" class="form-control phone-input" placeholder="0000">
                </div>
            </div>
            
            <!-- Submit Button -->
            <button class="submit-btn">
                新しい住所を登録
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-buttons">
            <a href="#" class="footer-button active">
                <i class="fas fa-home"></i>
                <span>ホーム</span>
            </a>
            <a href="#" class="footer-button">
                <i class="fas fa-th-large"></i>
                <span>カテゴリ</span>
            </a>
            <a href="#" class="footer-button">
                <i class="fas fa-shopping-cart"></i>
                <span>カート</span>
            </a>
            <a href="#" class="footer-button">
                <i class="fas fa-tag"></i>
                <span>タグ</span>
            </a>
            <a href="#" class="footer-button">
                <i class="fas fa-user"></i>
                <span>アカウント</span>
            </a>
        </div>
        <div class="copyright">
            Copyright 2025 designed by AndFun Yangon Co.,Ltd
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
