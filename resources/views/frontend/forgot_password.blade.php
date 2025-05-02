<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワードリセット</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            max-width: 450px;
            margin: 0 auto;
            padding: 0;
            background-color: #fff;
        }
        .reset-container {
            padding: 20px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .reset-header {
            text-align: center;
            margin: 40px 0;
        }
        .reset-header h1 {
            font-size: 22px;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
        }
        .form-control {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 0;
            padding: 10px;
            font-size: 14px;
            box-sizing: border-box;
        }
        .form-control::placeholder {
            color: #ccc;
        }
        .instructions {
            margin: 15px 0 30px 0;
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }
        .instruction-number {
            margin-right: 5px;
        }
        .send-btn {
            background-color: #555;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            width: fit-content;
            margin: 0 auto;
            display: block;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <div class="reset-header">
            <h1>パスワードリセット</h1>
        </div>
        
        <div class="reset-form">
            <div class="form-group">
                <label class="form-label">ご登録メールアドレス</label>
                <input type="email" class="form-control" placeholder="xxxx@xxx.xxx">
            </div>
            
            <div class="instructions">
                <p><span class="instruction-number">1.</span>メールアドレスを入力してください。</p>
                <p><span class="instruction-number">2.</span>以下ボタンをクリック後、ご登録されたメールアドレス宛にパスワードをリセットするURLを送信しますので、お手続きください。</p>
            </div>
            
            <button class="send-btn">メールを送信</button>
        </div>
    </div>
</body>
</html>