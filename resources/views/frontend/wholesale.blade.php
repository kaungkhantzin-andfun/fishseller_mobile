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
       
        <div id="loading" style="display: none; text-align: center; padding: 20px;">
            <span>Loading...</span>
        </div>

        
        <div class="dropdown-section">
            <div class="dropdown-items">
                <div class="select-box">
                    <select id="market" class="custom-select">
                        <option value="">Loading markets...</option>
                    </select>
                </div>
                <div>
                    <select id="fishType" class="custom-select">
                        <option value="">Loading fish types...</option>
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
                    <th>価格/型</th>
                    <th>高</th>
                    <th>中</th>
                    <th>低</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>大</td>
                    <td class="highlight large-high"></td>
                    <td class="highlight large-medium"></td>
                    <td class="highlight large-low"></td>
                </tr>
                <tr>
                    <td>中</td>
                    <td class="highlight medium-high"></td>
                    <td class="highlight medium-middle"></td>
                    
                    <td class="highlight small-high"></td>
                </tr>
                <tr>
                    <td>小</td>
                    <td class="highlight medium-low"></td>
                    <td class="highlight small-middle"></td>
                    <td class="highlight small-low"></td>
                </tr>
            </tbody>
        </table>

      
        <canvas id="myChart" style="width: 100%; height: 400px;"></canvas>
      
        <div class="dropdown-items">
            <div class="select-box">
                <select id="date" class="custom-select">
                    <option value="">Loading dates...</option>
                </select>
            </div>
        </div>

        
        <div class="wholesale-menu-section">
            <x-menu-item icon="assets/icons/shop_cart.png" label="注文" />
            <x-menu-item icon="assets/icons/cart_white.png" label="タグ付け" />
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const chartData = {
        labels: [
            '1', '2', '3',
            '4', '5', '6',
            '7', '8', '9'
        ],
        datasets: [{
            label: '価格 (円)',
            data: Array(9).fill(0),
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
        data: chartData,
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
                    beginAtZero: true,
                    min: 0,
                    max: 10000,
                    ticks: {
                        stepSize: 1000
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
                    meta.data.forEach((point, index) => {
                        const value = dataset.data[index];
                        if (value !== null && value !== 0) {
                            ctx.fillStyle = '#000';
                            ctx.font = '12px sans-serif';
                            ctx.textAlign = 'center';
                            ctx.fillText(value, point.x, point.y - 10);
                        }
                    });
                });
            }
        }]
    };

    const myChart = new Chart(ctx, config);

    function toggleLoading(isLoading) {
        document.getElementById('loading').style.display = isLoading ? 'block' : 'none';
    }

    
    async function populateDropdowns() {
        try {
            
            const marketsResponse = await axios.get('https://aquaticadventureshop.com/datacraw/market');
            const marketSelect = document.getElementById('market');
            marketSelect.innerHTML = '<option value="">市場を選択</option>';
            marketsResponse.data.forEach(market => {
                marketSelect.innerHTML += `<option value="${market}">${market}</option>`;
            });

          
            const fishResponse = await axios.get('https://aquaticadventureshop.com/datacraw/fish');
            const fishSelect = document.getElementById('fishType');
            fishSelect.innerHTML = '<option value="">魚の種類を選択</option>';
            fishResponse.data.forEach(fish => {
                fishSelect.innerHTML += `<option value="${fish}">${fish}</option>`;
            });

           
            const datesResponse = await axios.get('https://aquaticadventureshop.com/datacraw/date');
            const dateSelect = document.getElementById('date');
            dateSelect.innerHTML = '<option value="">期間を選択</option>';
            datesResponse.data.forEach(date => {
                dateSelect.innerHTML += `<option value="${date}">${date}</option>`;
            });
        } catch (error) {
            console.error('Error loading dropdown data:', error);
            Swal.fire({
                icon: 'error',
                title: 'エラー',
                text: 'ドロップダウンオプションの読み込みに失敗しました',
                timer: 2000,
                showConfirmButton: false
            });
        }
    }

   
    document.addEventListener('DOMContentLoaded', function() {
        populateDropdowns();
    });

    document.getElementById('searchButton').addEventListener('click', function () {
        const market = document.getElementById('market').value;
        const fishType = document.getElementById('fishType').value;
        const date = document.getElementById('date').value;

        if (!market) {
            Swal.fire({
                icon: 'warning',
                title: '市場を選択してください',
                text: '市場を選択してください',
                timer: 1500,
                showConfirmButton: false
            });
            return;
        }

        if (!fishType) {
            Swal.fire({
                icon: 'warning',
                title: '魚の種類を選択してください',
                text: '魚の種類を選択してください',
                timer: 1500,
                showConfirmButton: false
            });
            return;
        }

      
        const params = { 
            market,
            fishType,
            date: date || ''
        };

        toggleLoading(true);

        axios.get('https://aquaticadventureshop.com/fetch-data-search', {
            params,
            headers: { 'Accept': 'application/json' }
        })
        .then(response => {
            const data = response.data;
            if (data.success && Object.values(data.data).length > 0) {
                const category = Object.values(data.data)[0];
                if (category && category.length > 0) {
                    const prices = category[0].prices;

                    
                    document.querySelector('.large-high').textContent = prices.large.high ?? '';
                    document.querySelector('.large-medium').textContent = prices.large.medium ?? '';
                    document.querySelector('.large-low').textContent = prices.large.low_price ?? '';

                    document.querySelector('.medium-high').textContent = prices.medium.high ?? '';
                    document.querySelector('.medium-middle').textContent = prices.medium.middle_value ?? '';
                    document.querySelector('.medium-low').textContent = prices.medium.low_price ?? '';

                    document.querySelector('.small-high').textContent = prices.small.high ?? '';
                    document.querySelector('.small-middle').textContent = prices.small.middle_value ?? '';
                    document.querySelector('.small-low').textContent = prices.small.low_price ?? '';

                  
                    myChart.data.datasets[0].data = [
                        prices.large.high ?? 0,
                        prices.large.medium ?? 0,
                        prices.large.low_price ?? 0,
                        prices.medium.high ?? 0,
                        prices.medium.middle_value ?? 0,
                        prices.medium.low_price ?? 0,
                        prices.small.high ?? 0,
                        prices.small.middle_value ?? 0,
                        prices.small.low_price ?? 0
                    ];
                    myChart.update();

                    
                    Swal.fire({
                        icon: 'success',
                        title: 'データ取得成功',
                        text: '価格データが正常に表示されました',
                        timer: 1000,
                        showConfirmButton: false
                    });
                } else {
                    clearTableAndChart();
                    Swal.fire({
                        icon: 'info',
                        title: 'データなし',
                        text: '選択した条件に該当するデータが見つかりませんでした',
                        timer: 1500,
                        showConfirmButton: false
                    });
                }
            } else {
                clearTableAndChart();
                Swal.fire({
                    icon: 'error',
                    title: 'エラー',
                    text: data.error || 'データの取得に失敗しました',
                    timer: 2000,
                    showConfirmButton: false
                });
            }
            toggleLoading(false);
        })
        .catch(error => {
            clearTableAndChart();
            Swal.fire({
                icon: 'error',
                title: 'エラー',
                text: 'データの取得に失敗しました: ' + (error.response?.statusText || error.message),
                timer: 2000,
                showConfirmButton: false
            });
            toggleLoading(false);
        });
    });

    function clearTableAndChart() {
        const selectors = [
            '.large-high', '.large-medium', '.large-low',
            '.medium-high', '.medium-middle', '.medium-low',
            '.small-high', '.small-middle', '.small-low'
        ];
        selectors.forEach(sel => document.querySelector(sel).textContent = '');
        myChart.data.datasets[0].data = Array(9).fill(0);
        myChart.update();
    }
</script>
@endsection