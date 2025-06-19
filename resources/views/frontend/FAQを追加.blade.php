<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ追加</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
            padding-bottom: 70px; /* Space for fixed footer */
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
        }

        .yellow-badge {
            background-color: #ffc107;
            color: black;
            padding: 5px 10px;
            border-radius: 20px;
            display: inline-block;
            font-weight: bold;
            font-size: 14px;
            margin: 15px 0;
        }

        .form-container {
            padding: 0 15px;
        }

        .input-field {
            margin-bottom: 20px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: white;
            border-top: 1px solid #dee2e6;
            padding: 10px 0 0 0;
        }

        .footer-buttons {
            display: flex;
            justify-content: space-around;
            text-align: center;
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
        }

        .btn-add-faq {
            background-color: #6c757d;
            border: none;
        }

        .btn-add-faq:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="#" class="text-white back-arrow">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="header-title">FAQを追加</h1>
    </div>

    <!-- Main Content -->
    <div class="form-container">
        <div class="yellow-badge">FAQを追加</div>

        <div class="input-field">
            <label for="faq-question" class="form-label">FAQ 質問 *</label>
            <input type="text" class="form-control" id="faq-question" placeholder="xxxxx" required>
        </div>

        <div class="input-field">
            <label for="faq-answer" class="form-label">FAQ 回答 *</label>
            <textarea class="form-control" id="faq-answer" rows="4" placeholder="xxxxx" required></textarea>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button class="btn btn-light me-2">キャンセル</button>
            <button class="btn btn-secondary btn-add-faq">FAQを追加</button>
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