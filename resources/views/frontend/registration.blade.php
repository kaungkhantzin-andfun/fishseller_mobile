<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>登録フォーム</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', 'Noto Sans JP', sans-serif;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
            color: #333;
        }
        
        .form-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 5px;
        }
        
        .form-subtitle {
            text-align: center;
            color: #888;
            font-size: 0.9rem;
            margin-bottom: 25px;
        }
        
        .field-label {
            font-size: 0.9rem;
            margin-bottom: 5px;
            margin-top: 15px;
        }
        
        .form-control {
            border-radius: 0;
            padding: 10px;
            margin-bottom: 5px;
        }
        
        .name-group, .furigana-group, .address-group, .phone-group {
            display: flex;
            gap: 10px;
        }

        .phone-group .form-control {
            text-align: center;
        }

        .phone-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
        }

        .postal-code-search {
            color: black;
            font-size: 0.8rem;
            margin-left: 10px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .postal-code-search .search-icon {
            background-color: #333;
            color: white;
            border-radius: 3px;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 5px;
            font-size: 0.7rem;
        }
        
        .password-field {
            position: relative;
        }
        
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
            color: #999;
            font-size: 1.2rem;
        }
        
        .submit-btn {
            background-color: #333;
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            margin-top: 25px;
            margin-bottom: 15px;
        }
        
        .login-link {
            text-align: center;
            font-size: 0.9rem;
        }
        
        .login-link a {
            color: #0d6efd;
            text-decoration: none;
        }
        
        .postal-code-container {
            display: flex;
			gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="form-title">登録</h2>
        <p class="form-subtitle">アカウントを登録して商品を購入</p>
        
        <form name="register_form" id="register_form" method="POST">
            <!-- Name -->
            <div class="field-label">氏名</div>
            <div class="name-group">
                <input id="last_name" name="last_name" type="text" class="form-control" placeholder="姓">
                <input id="first_name" name="first_name" type="text" class="form-control" placeholder="名">
            </div>
            
            <!-- Furigana -->
            <div class="field-label">フリガナ</div>
            <div class="furigana-group">
                <input id="last_name" name="last_name" type="text" class="form-control" placeholder="セイ">
                <input id="first_name" name="first_name" type="text" class="form-control" placeholder="メイ">
            </div>
            
            <!-- Postal Code -->
            <div class="field-label">郵便番号</div>
            <div class="postal-code-container">
                <div><input name="postal_code" type="text" class="form-control" placeholder="1234567"></div>
				<div class="postal-code-search">  郵便番号検索
                    <div class="search-icon">
                       <i class="bi bi-box-arrow-up-right"></i>
                    </div> </div>
            </div>
            
            <!-- Address -->
            <div class="field-label">住所</div>
            <div class="address-group">
                <input id="prefectures" name="prefectures" type="text" class="form-control" placeholder="都道府県">
                <input id="municipalities" name="municipalities" type="text" class="form-control" placeholder="市区町村">
            </div>
            <input id="subsequent_addresses" name="subsequent_addresses" type="text" class="form-control" placeholder="以降の住所">
            <input id="building_names" name="building_names" type="text" class="form-control" placeholder="建物名等">
            
            <!-- Phone -->
            <div class="field-label">電話番号</div>
            <div class="d-flex align-items-center">
                <input id="ph_number1" name="phone_number" type="text" class="form-control" placeholder="000">
                <div class="phone-divider">−</div>
                <input name="ph_number2" type="text" class="form-control" placeholder="0000">
                <div class="phone-divider">−</div>
                <input type="text" name="ph_number3" class="form-control" placeholder="0000">
            </div>
            
            <!-- Email -->
            <div class="field-label">メールアドレス</div>
            <input id="email" name="email" type="email" class="form-control" placeholder="xxxxx@xxx.xxx">
            
            <!-- Password -->
            <div class="field-label">パスワード</div>
            <div class="password-field">
                <input name="password" type="password" class="form-control" placeholder="xxxxxxx" id="password">
                <span class="password-toggle" data-target="password">&#128065;&#xFE0F;</span>
            </div>
            
            <!-- Confirm Password -->
            <div class="field-label">パスワード確認</div>
            <div class="password-field">
                <input name="confirm_password" type="password" class="form-control" placeholder="xxxxxxx" id="confirm-password">
                <span class="password-toggle" data-target="confirm-password">&#128065;&#xFE0F;</span>
            </div>
            
            <!-- reCAPTCHA (simplified representation) -->
            <div class="mt-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="recaptcha">
                    <label class="form-check-label" for="recaptcha" style="font-size: 0.8rem;">
                        私はロボットではありません
                    </label>
                </div>
                <div style="text-align: right; font-size: 0.7rem; color: #888;">reCAPTCHA</div>
            </div>
            
            <!-- Submit Button -->
            <button name="submit" type="submit" class="submit-btn">登録</button>
            
            <!-- Login Link -->
            <div class="login-link">
                すでにアカウントをお持ちですか？ <a href="{{route('login')}}">ログイン</a>
            </div>
        </form>
    </div>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#register_form").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var fullName = $('#last_name').val() + $('#first_name').val();
                var fullFurigana = $('#last_name').val() + $('#first_name').val();
                var phoneNumber = $('#ph_number1').val() + $('#ph_number2').val() + $('#ph_number3').val();
                formData.append('full_name', fullName);
                formData.append('full_furigana', fullFurigana);
                formData.append('phone_number', phoneNumber);
                $.ajax({
                    url: "{{ route('register_store') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            window.location.href = "{{ route('login') }}";
                        } else {
                            if (response.message) {
                                alert(response.message);
                            }
                            var errors = response.errors;
                            var fields = [
                                'last_name', 'first_name', 'last_name_furigana', 'first_name_furigana',
                                'postal_code', 'prefectures', 'municipalities', 'subsequent_addresses',
                                'building_names', 'phone_number', 'email', 'password', 'confirm_password'
                            ];

                            fields.forEach(function(field) {
                                if (errors[field]) {
                                    $('#' + field)
                                        .closest('.input-box')
                                        .find('span.invalid-feedback')
                                        .addClass('d-block')
                                        .html(errors[field]);
                                } else {
                                    $('#' + field)
                                        .closest('.input-box')
                                        .find('span.invalid-feedback')
                                        .removeClass('d-block')
                                        .html('');
                                }
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>