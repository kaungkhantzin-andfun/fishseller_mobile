<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新しいクレジットカードを追加</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            line-height: 1.6;
            background-color: white;
            margin: 0;
            padding: 0;
        }
        
        .main-content-wrapper {
            padding-bottom: 100px; /* Space for fixed footer */
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
          /* Form styles */
        .form-container {
            padding: 15px;
            background-color: white;
        }
        
        .form-description {
            font-size: 12px;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.4;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }
        
        .required-mark {
            color: #dc3545;
            margin-left: 2px;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        
        .card-input-container {
            position: relative;
        }
        
        .card-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 20px;
        }
        
        .exp-date-container {
            display: flex;
            gap: 15px;
        }
          .exp-date-field {
            flex: 1;
        }
        
        /* Toggle switch */
        .toggle-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .toggle-label {
            font-size: 14px;
            color: #333;
        }
        
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }
        
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }
        
        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        
        input:checked + .slider {
            background-color: #2196F3;
        }
        
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        
        /* Submit button */
        .submit-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #666;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
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
        <h1 class="header-title">新しいクレジットカードを追加</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content-wrapper">
        <div class="form-container">
            <div class="form-description">
                <p>*がついている項目は入力が必須です。</p>
                <p>また、カードは本来支払うお金を追加します。</p>
            </div>
            
            <form>
                <!-- Card Name Field -->
                <div class="form-group">
                    <label class="form-label">カード名義人 <span class="required-mark">*</span></label>
                    <input type="text" class="form-control" placeholder="カードに書かれている通りに入力してください">
                </div>
                
                <!-- Card Number Field -->
                <div class="form-group">
                    <label class="form-label">カード番号 <span class="required-mark">*</span></label>
                    <div class="card-input-container">
                        <i class="fab fa-cc-mastercard card-icon" style="color: #ccc;"></i>
                        <input type="text" class="form-control" style="padding-left: 40px;">
                    </div>
                </div>
                
                <!-- Expiration Date Fields -->
                <div class="form-group">
                    <div class="exp-date-container">
                        <div class="exp-date-field">
                            <label class="form-label">月 (月2桁) <span class="required-mark">*</span></label>
                            <input type="text" class="form-control" placeholder="MM">
                        </div>
                        <div class="exp-date-field">
                            <label class="form-label">年 (年2桁) <span class="required-mark">*</span></label>
                            <input type="text" class="form-control" placeholder="YY">
                        </div>
                    </div>                </div>
                
                <!-- Default Use Toggle -->
                <div class="toggle-container">
                    <span class="toggle-label">通常利用</span>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
                
                <!-- Submit Button -->
                <button type="submit" class="submit-btn">追加する</button>
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
