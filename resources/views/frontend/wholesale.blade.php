@extends('frontend.include.layout')

@section('title', 'Wholesale Page')

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


        .dropdown-items div{
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
        canvas {
            max-width: 350px;
            max-height: 200px;
        }
        .wholesale-menu-section{
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
        <!-- Dropdowns and Buttons -->
        <div class="dropdown-section">
            <div class="dropdown-items">
                <div class="select-box">
                    <select id="store" class="custom-select">
                        <option>店舗</option>
                        <option>店舗A</option>
                        <option>店舗B</option>
                    </select>
                </div>
                <div>
                    <select id="maker" class="custom-select">
                        <option>生マイワシ</option>
                        <option>メーカーA</option>
                        <option>メーカーB</option>
                    </select>
                </div>
            </div>
            <div class="button-group">
                <button class="custom-btn">仲買履歴</button>
                <button class="custom-btn">漁獲高ランキング</button>
            </div>
        </div>

        <!-- Table -->
        <table class="pricing-table">
            <thead>
                <tr>
                    <th >価格/型</th>
                    <th>高</th>
                    <th>中</th>
                    <th>低</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>大</td>
                    <td class="highlight">46</td>
                    <td class="highlight">46</td>
                    <td class="highlight">46</td>
                </tr>
                <tr>
                    <td>中</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>小</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <!-- Chart -->
        <canvas id="myChart"></canvas>

        <div class="dropdown-items">
            <div class="select-box">
                <select id="store" class="custom-select">
                    <option>期間選択</option>
                    <option>期間選択</option>
                    <option>期間選択</option>
                </select>
            </div>
        </div>

        <!-- Bottom Buttons -->
        <div class="wholesale-menu-section">
            <x-menu-item icon="assets/icons/shop_cart.png" label="注文" />
            <x-menu-item icon="assets/icons/cart_white.png" label="タグ付け" />
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const data = {
            labels: ['1.', '2.', '3.', '4.', '5.', '6.', '7.'],
            datasets: [{
                label: '価格 (円)',
                data: [46, 50, 40, 45, 60, 45, 50],
                borderColor: '#F24822',
                backgroundColor: '#F24822',
                tension: 0,
                fill: false,
                pointRadius: 5,
                pointHoverRadius: 7,
                pointBackgroundColor: '#F24822'
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 40,
                        max: 65,
                        ticks: {
                            stepSize: 5
                        }
                    }
                }
            },
            plugins: [{
                id: 'dataLabelPlugin',
                afterDatasetsDraw(chart) {
                    const { ctx, data } = chart;
                    chart.data.datasets.forEach((dataset, i) => {
                        const meta = chart.getDatasetMeta(i);
                        meta.data.forEach((bar, index) => {
                            ctx.fillStyle = '#000';
                            ctx.font = '12px sans-serif';
                            ctx.textAlign = 'center';
                            ctx.fillText(dataset.data[index], bar.x, bar.y - 10);
                        });
                    });
                }
            }]
        };

        new Chart(ctx, config);
    </script>
@endsection