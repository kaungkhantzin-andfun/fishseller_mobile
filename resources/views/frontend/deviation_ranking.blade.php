{{-- <!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>偏差値ランキング</title>
    <style>
      /* Style for the first child of each row */
      td:first-child {
        background-color: #1a69c6 !important;
        font-size: 18px;
        color: white !important;
        font-weight: bold !important;
      }
      
      th {
        background-color: #1a69c6 !important;
        font-size: 18px;
        color: white !important;
        font-weight: bold !important;
        text-align: center !important;
      }
      
      td {
        background-color: white;
        text-align: center;
        padding: 8px !important;
        border: 1px solid #dee2e6 !important;
      }
      
      .table {
        border-collapse: separate;
        border-spacing: 0;
        margin-bottom: 15px;
      }
      
      .btn-nav {
        background-color: #5a5a5a !important;
        color: white !important;
        border-radius: 6px !important;
      }
      
      .nav-icon {
        margin-bottom: 5px;
      }
      
      .bottom-nav {
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
        padding-top: 10px;
        border-top: 1px solid #dee2e6;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
  </head>
  <body class="bg-light">
    <div
      class="container my-4 p-3 bg-white shadow rounded"
      style="max-width: 500px"
    >
    <div style="">
        <!-- Dropdowns -->
        <div class="mb-3">
          <select class="form-select mb-3">
            <option selected>栄養価を選択</option>
          </select>
          <select class="form-select">
            <option selected>魚種を選択</option>
          </select>
        </div>
  
        <!-- Tab Buttons -->
        <div class="d-flex justify-content-between w-100 mb-3">
          <button style="height: 47px;" class="btn btn-nav w-50 me-2">個別偏差値</button>
          <button style="height: 47px;" class="btn btn-nav w-50">偏差値ランキング</button>
        </div>
    </div>
    

      <!-- Ranking Table -->
      <div class="table-responsive">
        <table class="table table-bordered" ">
          <thead>
            <tr>
              <th width="25%">順位</th>
              <th width="50%">魚種名</th>
              <th width="25%">総合偏差値</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>あなご</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>2</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>3</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>4</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>5</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>6</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>7</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>8</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>9</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
            <tr>
              <td>10</td>
              <td>XXXX</td>
              <td>XX</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Load More -->
      <div class="text-center mb-3">
        <button class="btn btn-secondary btn-sm">もっと見る</button>
      </div>

      <!-- Action Buttons -->
      <div class="d-flex justify-content-between mb-3">
        <button
          class="btn btn-nav w-50 me-2"
          style="height: 80px;"
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              fill="currentColor"
              class="bi bi-cart"
              viewBox="0 0 16 16"
            >
              <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"
              />
            </svg>
          </div>
          <div>注文</div>
        </button>
        <button
          class="btn btn-nav w-50"
          style="height: 80px;"
        >
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              fill="currentColor"
              class="bi bi-tag-fill"
              viewBox="0 0 16 16"
            >
              <path
                d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"
              />
            </svg>
          </div>
          <div>タグ付け</div>
        </button>
      </div>

      <!-- Bottom Navigation -->
      <div class="bottom-nav text-center small">
        <div>
          <div class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
          </div>
          <div>ホーム</div>
        </div>
        <div>
          <div class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
            </svg>
          </div>
          <div>カテゴリ</div>
        </div>
        <div>
          <div class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg>
          </div>
          <div>カート <span class="badge bg-danger rounded-pill">2</span></div>
        </div>
        <div>
          <div class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
              <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
            </svg>
          </div>
          <div>タグ <span class="badge bg-danger rounded-pill">2</span></div>
        </div>
        <div>
          <div class="nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
          </div>
          <div>アカウント</div>
        </div>
      </div>
      
      <div class="bg-light text-center py-2 mt-3 small">
        <span>Copyright 2025 designed by Andfun Yanogn Co.,Ltd</span>
      </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html> --}}

@extends('frontend.include.layout')

@section('title', 'Deviation Ranking Page')

@section('style')
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 18px;
        }

        .dropdown-section {
            background-color: #E6E0E9;
            padding: 25px;
            border-radius: 16px;
            margin-bottom: 16px;
        }

        .dropdown-items {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 16px;
        }


        .dropdown-items div {
            width: 100%;
            max-width: 300px;
            margin-bottom: 10px;
        }

        .select-box {
            max-width: 250px;
        }

        .custom-select {
            appearance: none;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5"><path d="M0 0h10L5 5z" fill="black"/></svg>') no-repeat right 1rem center/10px 5px;
            padding: 14px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            position: relative;
            background-color: #fff;
        }

        .custom-select:focus {
            outline: none;
            border-color: #2563eb;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 16px;
        }

        .custom-btn {
            background-color: #5A5A5A;
            color: white;
            padding: 10px 0px;
            border-radius: 10px;
            border: 1px solid #000;
            max-width: 150px;
            min-width: 130px;
            font-size: 14px;
            cursor: pointer;
            margin: 0 auto;
        }

        .custom-btn-blue {
            background-color: #2563eb;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            border: none;
            font-size: 14px;
            cursor: pointer;
        }

        .pricing-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 15px 5px;
            /* margin: 20px auto; */
            font-family: sans-serif;
        }

        .pricing-table th,
        .pricing-table td {
            border: 2px solid #ccc;
            padding: 13px;
            text-align: center;
            /* min-width: 70px;
                        min-height: 40px; */
        }

        .pricing-table th {
            background-color: #0d6efd;
            color: white;
            font-weight: bold;
            font-size: 16px;
        }


        .pricing-table td:first-child {
            background-color: #0d6efd;
            color: white;
            font-weight: bold;
        }

        .pricing-table .highlight {
            border: 2px solid #ccc;
            font-size: 18px;
            font-weight: bold;
        }

        .bottom-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 16px;
        }

        .bottom-btn {
            flex: 1;
            margin: 0 8px;
        }

        .wholesale-menu-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-top: 16px;
        }
        
    </style>
@endsection
@section('content')
    <div class="container-fluid">

        <div id="loading" style="display: none; text-align: center; padding: 20px;">
            <span>Loading...</span>
        </div>


        <div class="dropdown-section">
            <div class="dropdown-items">
                <div class="select-box">
                    <select id="market" class="custom-select">
                        <option value="">栄養価を選択</option>
                    </select>
                </div>
                <div>
                    <select id="fishType" class="custom-select">
                        <option value="">魚種を選択</option>
                    </select>
                </div>
            </div>
            <div class="button-group">
                <button id="searchButton" class="custom-btn">仲買履歴</button>
                <button class="custom-btn">漁獲高ランキング</button>
            </div>
        </div>


        <table class="pricing-table">
            <thead>
                <tr>
                    <th>順位</th>
                    <th>魚種名</th>
                    <th>総合偏差値</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>あなご</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>xxx</td>
                    <td>XX</td>
                </tr>


            </tbody>
        </table>

        <div class="button-group">
            <button class="custom-btn">もっと見る</button>
        </div>


        <div class="wholesale-menu-section">
            <x-menu-item icon="assets/icons/shop_cart.png" label="注文" />
            <x-menu-item icon="assets/icons/cart_white.png" label="タグ付け" />
        </div>
    </div>
@endsection

@section('script')
@endsection
