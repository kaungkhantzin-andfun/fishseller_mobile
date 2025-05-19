<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品追加</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8f9fa;
        }
        
        .header {
            background-color: #0d6efd;
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
        }
        
        .back-btn {
            color: white;
            margin-right: 15px;
        }
        
        .form-container {
            padding: 15px;
            background-color: white;
        }
        
        .form-label {
            font-size: 0.9rem;
            margin-bottom: 3px;
            font-weight: 500;
        }
        
        .form-label::after {
            content: "*";
            color: red;
            margin-left: 2px;
        }
        
        .optional-label::after {
            content: "";
        }
        
        .image-upload {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            background-color: #f8f9fa;
            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 0.8rem;
            color: #6c757d;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .image-upload:hover {
            background-color: #e9ecef;
        }
        
        .image-upload i {
            font-size: 24px;
            margin-bottom: 5px;
        }
        
        .image-upload-container {
            position: relative;
        }
        
        .preview-image {
            width: 100%;
            height: 120px;
            object-fit: cover;
            display: none;
        }
        
        .btn-container {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-cancel {
            flex: 1;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
        }
        
        .btn-add {
            flex: 2;
            background-color: #6c757d;
            color: white;
        }
        
        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.7rem;
            margin-top: 20px;
        }
        
        .required-fields-note {
            font-size: 0.8rem;
            color: #6c757d;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="#" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h5 class="mb-0">商品追加</h5>
    </div>
    
    <div class="form-container">
        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label">商品名</label>
                <input type="text" class="form-control" placeholder="xxxxx">
            </div>
            <div class="col-6">
                <label class="form-label">カテゴリー</label>
                <select class="form-select">
                    <option selected>選択カテゴリー</option>
                    <option>カテゴリー1</option>
                    <option>カテゴリー2</option>
                    <option>カテゴリー3</option>
                </select>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label">価格</label>
                <input type="text" class="form-control" placeholder="0,000">
            </div>
            <div class="col-6">
                <label class="form-label">セール (希望割引率を記入)</label>
                <input type="text" class="form-control" placeholder="00%">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-4">
                <label class="form-label">数量</label>
                <input type="text" class="form-control" placeholder="0,000">
            </div>
            <div class="col-4">
                <label class="form-label">重量 (kg)</label>
                <input type="text" class="form-control" placeholder="0,000 kg">
            </div>
            <div class="col-4">
                <label class="form-label">長さ (cm)</label>
                <input type="text" class="form-control" placeholder="0,000 cm">
            </div>
        </div>
        
        <div class="mb-3">
            <label class="form-label">画像をアップロード</label>
            <div class="row">
                <div class="col-6">
                    <div class="image-upload-container">
                        <input type="file" id="image-upload-1" class="image-input" accept="image/*" hidden>
                        <label for="image-upload-1" class="image-upload">
                            <i class="fas fa-arrow-up-from-bracket"></i>
                            <div>画像をここにドロップするか、<br>ファイルを参照するには<br>ここをクリック</div>
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="image-upload-container">
                        <input type="file" id="image-upload-2" class="image-input" accept="image/*" hidden>
                        <label for="image-upload-2" class="image-upload">
                            <i class="fas fa-arrow-up-from-bracket"></i>
                            <div>画像をここにドロップするか、<br>ファイルを参照するには<br>ここをクリック</div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label">捕獲日</label>
                <input type="date" class="form-control" placeholder="年/月/日">
            </div>
            <div class="col-6">
                <label class="form-label">有効期限</label>
                <input type="date" class="form-control" placeholder="年/月/日">
            </div>
        </div>
        
        <div class="mb-3">
            <label class="form-label optional-label">説明</label>
            <textarea class="form-control" rows="4" placeholder="xxxxx"></textarea>
        </div>
        
        <div class="btn-container">
            <button class="btn btn-cancel">キャンセル</button>
            <button class="btn btn-add">商品を追加</button>
        </div>
    </div>
    
    <footer>
        Copyright 2025 designed by AndFun Yangon Co.,Ltd
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle file selection and drag-drop for image uploads
        document.addEventListener('DOMContentLoaded', function() {
            const fileInputs = document.querySelectorAll('.image-input');
            
            fileInputs.forEach(input => {
                const label = input.nextElementSibling;
                
                // Handle file selection
                input.addEventListener('change', function(e) {
                    handleFileSelect(e, input, label);
                });
                
                // Handle drag events
                label.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    label.style.backgroundColor = '#e9ecef';
                });
                
                label.addEventListener('dragleave', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    label.style.backgroundColor = '#f8f9fa';
                });
                
                label.addEventListener('drop', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    label.style.backgroundColor = '#f8f9fa';
                    
                    if (e.dataTransfer.files.length > 0) {
                        input.files = e.dataTransfer.files;
                        const event = new Event('change', { bubbles: true });
                        input.dispatchEvent(event);
                    }
                });
            });
            
            function handleFileSelect(e, input, label) {
                const file = input.files[0];
                if (file && file.type.match('image.*')) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        // Find any existing preview image
                        let previewImg = label.querySelector('.preview-image');
                        
                        // If no preview image exists, create one
                        if (!previewImg) {
                            previewImg = document.createElement('img');
                            previewImg.className = 'preview-image';
                            label.appendChild(previewImg);
                        }
                        
                        // Show the image and hide the upload text
                        previewImg.src = e.target.result;
                        previewImg.style.display = 'block';
                        
                        // Hide the upload icon and text
                        const iconElement = label.querySelector('i');
                        const textElement = label.querySelector('div');
                        if (iconElement) iconElement.style.display = 'none';
                        if (textElement) textElement.style.display = 'none';
                    };
                    
                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
</body>
</html>