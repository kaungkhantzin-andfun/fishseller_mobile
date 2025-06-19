<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご住所と連絡先</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            line-height: 1.6;
            background-color: white;
            margin: 0;
            padding: 0;
        }
        
        /* Header */
        .header {
            background-color: #007bff;
            color: white;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }
        
        .back-button {
            color: white;
            margin-right: 15px;
            font-size: 18px;
            text-decoration: none;
        }
        
        .header-title {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
        }
          /* Content Area */
        .content {
            margin-top: 60px;
            padding: 15px;
            padding-bottom: 70px;
        }
          /* Address Cards */
        .address-card {
            background-color: white;
            margin-bottom: 15px;
            padding: 15px;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }
        
        .address-label {
            display: inline-block;
            border: 1px solid #333;
            border-radius: 15px;
            padding: 2px 12px;
            font-size: 12px;
            margin-bottom: 8px;
        }
        
        .postal-code {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .address-full {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .phone-number {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .person-name {
            font-size: 14px;
            display: inline-block;
        }
        
        .default-tag {
            font-size: 12px;
            color: #6c757d;
            margin-left: 10px;
        }
        
        .edit-button {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #333;
            font-size: 20px;
            border: none;
            background: none;
            padding: 0;
            cursor: pointer;
        }
        
        /* Footer */
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: black;
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
    <header class="header">
        <a href="#" class="back-button">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="header-title">ご住所と連絡先</h1>
    </header>

    <!-- Content Area -->
    <div class="content">
        <!-- Address Card 1 -->
        <div class="address-card">
            <div class="address-label">住所1</div>
            <div class="postal-code">165-0026</div>
            <div class="address-full">東京都中野区新井1-15-2</div>
            <div class="phone-number">090-1234-5678</div>
            <div class="person-name">日利 太郎</div>
            <span class="default-tag">様宛て</span>
            <button class="edit-button">
                <i class="fas fa-pen"></i>
            </button>
        </div>

        <!-- Address Card 2 -->
        <div class="address-card">
            <div class="address-label">住所2</div>
            <div class="postal-code">486-0845</div>
            <div class="address-full">愛知県春日井市瑞穂川町8-8-1大東山ビル505</div>
            <div class="phone-number">080-1234-5678</div>
            <div class="person-name">日利 花子</div>
            <span class="default-tag">様宛て</span>
            <button class="edit-button">
                <i class="fas fa-pen"></i>
            </button>
        </div>

        <!-- Address Card 3 -->
        <div class="address-card">
            <div class="address-label">住所3</div>
            <div class="postal-code">101-0054</div>
            <div class="address-full">東京都千代田区神田錦町3-11精興竹橋共同ビル3F</div>
            <div class="phone-number">070-1234-5678</div>
            <div class="person-name">日利 強次</div>
            <span class="default-tag">様宛て</span>
            <button class="edit-button">
                <i class="fas fa-pen"></i>
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="copyright">
            Copyright 2025 designed by AndFun Yangon Co.,Ltd
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Edit button functionality
            const editButtons = document.querySelectorAll('.edit-button');
            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Add edit functionality here
                    console.log('Edit address clicked');
                });
            });
        });
    </script>
</body>
</html>
