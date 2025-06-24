<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 0;
            background-color: #fff;
        }
        .login-container {
            padding: 20px;
        }
        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }
        .login-header h2 {
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .login-header p {
            color: #888;
            font-size: 14px;
            margin: 0;
        }
        .login-form {
            margin-bottom: 15px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            font-size: 14px;
            margin-bottom: 5px;
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
        .password-container {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aaa;
        }
        .login-btn {
            width: 50%;
            padding: 5px;
            background-color: #555;
            border: 1px solid #000000;
            color: white;
            margin: 20px auto;
            font-size: 20px;
            display: block;
        }
        .login-btn:hover {
            background-color: #444;
        }
        .register-text {
            text-align: center;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .register-link {
            color: #0d6efd;
            text-decoration: none;
        }
        .social-login {
            margin-bottom: 20px;
        }
        .line-btn {
            background-color: white;
            color: #00C300;
            width: 60%;
            height: 50px;
            border: 1px solid #00C300;
            border-radius: 10px;
            display: flex;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            margin: 0 auto; 
            font-size: 16px;
        }
        .line-icon {
            margin-right: 10px;
            font-size: 18px;
        }
        .other-logins {
            display: flex;
            justify-content: center;
            margin: 15px 0;
        }
        .other-login-icon {
            margin: 5px 10px;
            cursor: pointer;
        }
        .google-icon {
            background: url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/icons/google.svg') no-repeat center center;
            background-size: 20px;
            background-color: white;
            border: 1px solid #ddd;
        }
        .facebook-icon {
            background: url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/icons/facebook.svg') no-repeat center center;
            background-size: 20px;
            background-color: #1877F2;
        }
        .save-login {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: 10px;
            font-size: 13px;
            width: 100%; 
        }
        .form-check-input {
            margin-right: 5px;
        }
        .forgot-password {
            font-size: 13px;
            width: 100%;
            justify-content: center;
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>ログイン</h2>
            <p>ようこそ</p>
        </div>
        
        <div class="login-form">
            <div class="form-group">
                <label class="form-label">メールアドレス</label>
                <input type="email" class="form-control" placeholder="xxxx@xxx.xxx">
            </div>
            
            <div class="form-group">
                <label class="form-label">パスワード</label>
                <div class="password-container">
                    <input type="password" class="form-control" placeholder="xxxxxxx">
                    <span class="password-toggle"><i class="fa-solid fa-eye-slash"></i></span>
                </div>
            </div>
            
            
            <button class="login-btn">ログイン</button>
        </div>
        
        <div class="register-text">
            アカウントをお持ちではありませんか? <a href="{{route('register')}}" class="register-link">登録</a>
        </div>
        
        <div class="social-login">
            <button class="line-btn">
                <img width="32" height="32" src="https://img.icons8.com/color/48/line-me.png" alt="line-me"/>
                LINEでログイン
            </button>
            
            <div class="other-logins">
                <div class="other-login-icon"><img width="32" height="32" src="https://img.icons8.com/color/48/google-logo.png" alt="google-logo"/></div>
                <div class="other-login-icon"><img width="32" height="32" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/></div>
            </div>
        </div>
        
        <div class="save-login">
            <input type="checkbox" id="save-login-checkbox" class="me-2">
            <label for="save-login-checkbox">
                <span>ログイン情報を保存</span>
            </label>
        </div>
        
        <div class="forgot-password">
            パスワードを忘れた場合
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.querySelector('.password-toggle').addEventListener('click', function() {
            const passwordInput = document.querySelector('input[type="password"]');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });
    </script>
</body>
</html>