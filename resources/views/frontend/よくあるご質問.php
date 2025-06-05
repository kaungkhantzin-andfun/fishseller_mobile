<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>よくあるご質問</title>
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
            padding-bottom: 70px; /* Space for fixed footer */
        }
        
        /* Header */
        .header {
            background-color: white;
            color: black;
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
            color: black;
            font-size: 18px;
            padding: 0;
            margin-right: 10px;
            width: 24px;
        }
        
        .header-title {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            flex-grow: 1;
        }
          /* FAQ Accordion */
        .accordion {
            margin-bottom: 20px;
            padding: 0 15px;
        }
        
        .accordion-item {
            border: 1px solid #eee;
            background-color: white;
            border-radius: 8px;
            margin-bottom: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .accordion-header {
            background-color: white;
            border-radius: 8px;
        }
        
        .accordion-button {
            padding: 15px;
            font-size: 14px;
            font-weight: bold;
            background-color: white;
            border: none;
            box-shadow: none;
            color: #333;
            border-radius: 8px !important;
        }
        
        .accordion-button:not(.collapsed) {
            background-color: white;
            box-shadow: none;
            color: #333;
        }
          .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,.125);
        }
        
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23333'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        .accordion-body {
            padding: 15px;
            font-size: 13px;
            color: #666;
            background-color: white;
            border-top: 1px solid #f0f0f0;
        }
          /* Contact Form */
        .contact-section {
            padding: 0 15px 15px;
        }
        
        .section-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 15px;
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
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        
        .form-control::placeholder {
            color: #aaa;
        }
        
        .name-fields {
            display: flex;
            gap: 10px;
        }
        
        .name-field {
            flex: 1;
        }
        
        .textarea-field {
            min-height: 120px;
            resize: none;
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
    <!-- Main Content -->
    <div class="main-content-wrapper">
        <div class="accordion" id="faqAccordion">
            <!-- Main FAQ Section -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingMain">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMain" aria-expanded="true" aria-controls="collapseMain">
                        よくあるご質問
                    </button>
                </h2>
                <div id="collapseMain" class="accordion-collapse collapse show" aria-labelledby="headingMain" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        よくあるご質問については、以下リストをご確認ください。
                    </div>
                </div>
            </div>
            
            <!-- About Shipping Method -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        商品の発送方法について
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        当店では全国配送サービスを提供しております。商品は注文確認後、1〜3営業日以内に発送されます。配送業者はヤマト運輸または佐川急便を利用しています。鮮度を保つために特殊な保冷パッケージで配送いたします。
                    </div>
                </div>
            </div>
            
            <!-- About Returns -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        商品の返品について
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        商品に問題がある場合は、到着後24時間以内にカスタマーサービスにご連絡ください。生鮮食品のため、お客様のご都合による返品はお受けできません。商品の品質には万全を期しておりますが、万が一不良品があった場合は、代替品の発送または返金で対応させていただきます。
                    </div>
                </div>
            </div>
            
            <!-- Change Delivery Address -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        お届け先を変更したい
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        お届け先の変更は発送前であれば可能です。マイページの「注文履歴」から該当する注文を選択し、「配送先変更」ボタンから新しい住所を入力してください。もしくはカスタマーサービスまでお電話またはメールでご連絡ください。発送後の住所変更はお受けできない場合がございます。
                    </div>
                </div>
            </div>
            
            <!-- Cancel Order -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        購入商品をキャンセルしたい
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        ご注文のキャンセルは発送準備が開始する前であれば可能です。マイページの「注文履歴」から該当する注文を選択し、「キャンセルリクエスト」ボタンをクリックしてください。または、カスタマーサービスまでご連絡ください。発送準備が既に開始されている場合はキャンセルできない可能性がございます。
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="contact-section">
            <div class="section-title">連絡先</div>
            <form>
                <div class="form-group">
                    <label class="form-label">お名前</label>
                    <div class="name-fields">
                        <input type="text" class="form-control name-field" placeholder="姓">
                        <input type="text" class="form-control name-field" placeholder="名">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">メールアドレス</label>
                    <input type="email" class="form-control" placeholder="xxx@xxx.xxx">
                </div>
                
                <div class="form-group">
                    <label class="form-label">ご質問内容</label>
                    <textarea class="form-control textarea-field" placeholder="xxxxxxx"></textarea>
                </div>
                
                <button type="submit" class="submit-btn">ご質問を送信</button>
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
