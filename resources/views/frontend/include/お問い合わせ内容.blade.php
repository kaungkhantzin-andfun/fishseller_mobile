<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ内容</title>
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
            position: absolute;
            left: 0;
            right: 0;
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
            margin: 15px 0 15px 15px;
        }

        .inquiry-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .inquiry-table th {
            text-align: left;
            padding: 10px 15px;
            border-bottom: 1px solid #dee2e6;
        }

        .inquiry-table td {
            padding: 10px 15px;
            border-bottom: 1px solid #dee2e6;
        }

        .action-cell {
            text-align: center;
            width: 60px;
        }

        .eye-icon {
            color: #6c757d;
            background-color: transparent;
            border: none;
            padding: 8px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        
        .eye-icon:hover {
            background-color: rgba(0, 0, 0, 0.05);
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
        <a href="#" class="text-white back-arrow">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="header-title">お問い合わせ内容</h1>
    </div>

    <!-- Main Content -->
    <div>
        <div class="yellow-badge">お問い合わせ内容</div>

        <div class="table-responsive px-2">
            <table class="inquiry-table">
                <thead>
                    <tr>
                        <th>名前</th>
                        <th>メールアドレス</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>xxxx</td>
                        <td>xxxx@xx.xxx</td>
                        <td class="action-cell">
                            <button class="eye-icon">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
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
            Copyright 2025 designed by Anofun Yanmgo Co.,Ltd
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>