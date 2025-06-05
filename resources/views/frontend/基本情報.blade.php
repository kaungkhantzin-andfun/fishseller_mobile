<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>基本情報</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Font Awesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #0d6efd;
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header h1 {
            font-size: 18px;
            margin: 0;
            margin-left: 10px;
        }
        
        .header .back-btn {
            color: white;
            font-size: 24px;
            cursor: pointer;
            text-decoration: none;
        }
        
        .content {
            margin-bottom: 70px;
        }
        
        .image-upload {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            margin: 15px;
        }
        
        .image-placeholder {
            border: 2px dashed #ccc;
            padding: 30px 20px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
        }
        
        .image-icon {
            color: #ccc;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .upload-text {
            color: #0d6efd;
            font-size: 14px;
            text-align: center;
        }
        
        #imageUpload {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        
        .preview-image {
            max-width: 100%;
            max-height: 200px;
            display: none;
            margin-bottom: 10px;
        }
        
        .info-card {
            background-color: white;
            border-radius: 5px;
            margin: 15px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .info-label {
            color: #666;
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .info-value {
            font-size: 16px;
            margin-bottom: 15px;
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        
        .form-control {
            border: none;
            border-radius: 0;
            padding: 0;
            font-size: 16px;
            box-shadow: none !important;
            color: #333;
        }
        
        .form-control:focus {
            border: none;
            outline: none;
        }
        
        .form-group {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <a href="#" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1>基本情報</h1>
    </div>
    
    <!-- Content -->
    <div class="content">
        <!-- Image Upload Section -->
        <div class="info-card">
            <div class="image-placeholder">
                <div class="image-icon">
                    <i class="fas fa-image" style="font-size: 40px; color: #ccc;"></i>
                    <i class="fas fa-arrow-up" style="font-size: 16px; color: #ccc; margin-left: -15px; margin-top: -20px; position: relative; top: -10px;"></i>
                </div>
                <div class="upload-text">
                    画像をここにドロップするか、<br>
                    ファイルを参照するには<br>
                    ここをクリック
                </div>
                <input type="file" id="imageUpload" accept="image/*" style="opacity: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
            </div>
            <img id="preview" class="preview-image">
            <div id="noImageText" class="text-center text-muted" style="font-size: 14px;">
                写真が登録されていません
            </div>
        </div>
        
        <!-- Information Cards -->
        <div class="info-card">
            <div class="info-label">販売者名（店舗、会社名）</div>
            <div class="form-group">
                <input type="text" class="form-control" value="xxxxxx">
            </div>
        </div>
        
        <div class="info-card">
            <div class="info-label">Email</div>
            <div class="form-group">
                <input type="email" class="form-control" value="xxxx@xxx.xxx">
            </div>
        </div>
        
        <div class="info-card">
            <div class="info-label">電話番号</div>
            <div class="form-group">
                <input type="tel" class="form-control" value="000-0000-0000">
            </div>
        </div>
        
        <div class="info-card">
            <div class="info-label">住所</div>
            <div class="form-group">
                <input type="text" class="form-control" value="〒 000-0000" style="margin-bottom: 10px;">
                <input type="text" class="form-control" value="東京都中野区新井1-15-2">
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        Copyright 2025 designed by AndFun Yangon Co.,Ltd
    </div>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            const imageUpload = document.getElementById('imageUpload');
            const dropArea = document.querySelector('.image-placeholder');
            const preview = document.getElementById('preview');
            const noImageText = document.getElementById('noImageText');
            
            // Add click event to the drop area
            dropArea.addEventListener('click', function(e) {
                // Prevent click event if it's from the file input itself
                if (e.target !== imageUpload) {
                    imageUpload.click();
                }
            });
            
            // Function to preview the selected image
            function previewImage() {
                if (imageUpload.files && imageUpload.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                        noImageText.style.display = 'none';
                    };
                    
                    reader.readAsDataURL(imageUpload.files[0]);
                }
            }
            
            // Set change event for the file input
            imageUpload.addEventListener('change', previewImage);
            
            // Enable drag and drop functionality
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, preventDefaults, false);
            });
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, unhighlight, false);
            });
            
            function highlight() {
                dropArea.style.borderColor = '#0d6efd';
            }
            
            function unhighlight() {
                dropArea.style.borderColor = '#ccc';
            }
            
            dropArea.addEventListener('drop', function(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files && files[0]) {
                    imageUpload.files = files;
                    previewImage();
                }
            });
        });
    </script>
</body>
</html>