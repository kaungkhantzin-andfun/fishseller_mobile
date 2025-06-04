<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>特商法に基づく表示</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            line-height: 1.6;
            background-color: #fff;
        }
        
        .main-content-wrapper {
            padding-bottom: 100px; /* Space for fixed footer */
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
        
        .policy-content {
            padding: 10px 15px;
            font-size: 14px;
        }
        
        .company-name {
            font-size: 16px;
            font-weight: bold;
            margin: 15px 0 10px 0;
        }
        
        .info-line {
            margin-bottom: 8px;
        }
        
        .info-section {
            margin-bottom: 15px;
        }
        
        .notice-text {
            margin: 10px 0 15px 0;
        }
        
        .shipping-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        
        .shipping-table th {
            background-color: #f8f9fa;
            padding: 5px;
            text-align: center;
            font-size: 13px;
            border: 1px solid #dee2e6;
        }
        
        .shipping-table td {
            padding: 5px;
            text-align: right;
            font-size: 13px;
            border: 1px solid #dee2e6;
        }
        
        .shipping-table td:first-child {
            text-align: left;
        }
        
        .policy-note {
            margin: 15px 0;
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
        <h1 class="header-title">特商法に基づく表示</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content-wrapper">
        <div class="policy-content">
            <div class="company-name">株式会社Acompany</div>
            <div class="info-section">
                <div class="info-line"><strong>代表者名：</strong>染城 慎一</div>
                <div class="info-line"><strong>住所：</strong>〒817-1702</div>
                <div class="info-line">　　　長崎県対馬市上対馬町古里13-3</div>
                <div class="info-line"><strong>電話：</strong>0920-86-4516</div>
                <div class="info-line"><strong>営業時間：</strong>10:00～17:00</div>
                <div class="info-line"><strong>Email：</strong>miuhiroto131@gmail.com</div>
            </div>
            
            <div class="notice-text">
                各商品の紹介ページに記載している価格とします。<br>
                消費税、送料（以下に詳細）<br>
                ※3万円以上購入頂ければ送料無料
            </div>
            
            <div class="shipping-info">
                <table class="shipping-table">
                    <tr>
                        <th></th>
                        <th>60kg</th>
                        <th>80kg</th>
                        <th>100kg</th>
                        <th>120kg</th>
                    </tr>
                    <tr>
                        <td>九州・中国</td>
                        <td>1,540</td>
                        <td>1,980</td>
                        <td>2,300</td>
                        <td>2,695</td>
                    </tr>
                    <tr>
                        <td>四国・近畿</td>
                        <td>1,925</td>
                        <td>2,600</td>
                        <td>3,350</td>
                        <td>4,275</td>
                    </tr>
                    <tr>
                        <td>中部・北陸</td>
                        <td>1,665</td>
                        <td>2,010</td>
                        <td>2,420</td>
                        <td>3,015</td>
                    </tr>
                    <tr>
                        <td>信越・関東</td>
                        <td>1,795</td>
                        <td>2,140</td>
                        <td>2,560</td>
                        <td>3,155</td>
                    </tr>
                    <tr>
                        <td>北関東・南東北</td>
                        <td>2,065</td>
                        <td>2,400</td>
                        <td>2,800</td>
                        <td>3,415</td>
                    </tr>
                    <tr>
                        <td>東北</td>
                        <td>2,365</td>
                        <td>2,710</td>
                        <td>3,130</td>
                        <td>3,725</td>
                    </tr>
                    <tr>
                        <td>北海道</td>
                        <td>2,945</td>
                        <td>3,280</td>
                        <td>3,700</td>
                        <td>4,295</td>
                    </tr>
                </table>
            </div>
            
            <div class="policy-note">
                <p>ご注文から2日以内に発送します。<br>
                クレジットカード決済：ご注文時にお支払いが確定します。</p>
                
                <p>商品発送後の返品・交換・キャンセルには、基本的に対応しておりません。<br>
                商品に欠陥がある場合のみ交換が可能ですのでご連絡ください。</p>
                
                <p>商品は2〜3日以内にご確認ください。<br>
                商品に欠陥がある場合は、弊社で負担致します。<br>
                それ以外は、お客様のご負担になります。</p>
            </div>
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
