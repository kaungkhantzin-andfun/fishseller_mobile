@extends('frontend.include.layout')

@section('title', 'Wholesale Page')

@section('style')
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 37px 12px 130px 12px;
    }

    .dropdown-section {
        max-width: 334px;
        max-height: 183px;
        background-color: #E6E0E9;
        padding: 16px 18px;
        border-radius: 15px;
        margin: 0 auto;
    
    }

    .dropdown-items {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .dropdown-items div {
        width: 100%;
        width: 240px;
        height: 40px;
        margin-bottom: 16px;
    }


    .custom-select {
        appearance: none;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5"><path d="M0 0h10L5 5z" fill="black"/></svg>') no-repeat right 1rem center/10px 5px;
        padding: 0 14px;
        width: 240px;
        height: 40px;
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
        gap: 23px;
    }

    .custom-btn {
        background-color: #5A5A5A;
        color: white;
        padding: 10px 0px;
        border-radius: 10px;
        border: 1px solid #000;
        width: 137px;
        height: 40px;
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

    .add-on{
        margin-top: 5px;
        font-size: 12px;
        font-weight: 600;
        color: #000;
        text-align: end;
        padding-right: 30px;
    }

    .pricing-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 15px 5px;
        margin: 2px auto;
        font-family: sans-serif;
        
    }

    .pricing-table th,
    .pricing-table td {
        border: 1px solid #B3B3B3;
        padding: 13.5px;
        text-align: center;
        width: 72px;
        height: 34px;
        font-size: 16px;
        /* margin: 5px 15px; */
        /* min-width: 70px;
            min-height: 40px; */
    }

    .pricing-table th {
        background-color: #1A69C6;
        color: white;
        font-weight: bold;
    }


    .pricing-table td:first-child , .pricing-table th:first-child {
        background-color: #1A69C6;
        color: white;
        font-weight: bold;
    }

    .pricing-table th:first-child {
        font-size: 12px;
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
        max-width: 400px; /* Increased from 350px */
        max-height: 450px; /* Increased from 200px to match inline height */
    }

    .wholesale-menu-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        margin-top: 16px;
    }
    canvas{
    max-width: 400px !important;
    max-height: 380px !important;
}
</style>
@endsection

@section('content')
<div class="container">
    <div id="loading" style="display: none; text-align: center; padding: 20px;">
        <span>Loading...</span>
    </div>
    <div class="dropdown-section">
        <div class="dropdown-items">
            <div class="select-box">
                <select id="market" class="custom-select">
                    <option value="">市場を選択</option>
                </select>
            </div>
            <div class="select-box">
                <select id="fishType" class="custom-select">
                    <option value="">魚の種類を選択</option>
                </select>
            </div>
        </div>
        <div class="button-group" style="display: flex; gap: 10px;">
            <button id="searchButton" class="custom-btn">仲買履歴</button>
            <a href="{{ route('deviation_rating') }}" class="custom-btn"
                style="text-decoration: none; display: flex; align-items: center; justify-content: center;">
                漁獲高ランキング
            </a>
        </div>
    </div>
    <div class="add-on">（円）</div>
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
    <canvas id="myChart" style="width: 100%; height: 350px;"></canvas>
    <div class="dropdown-items">
        <div class="select-box">
            <select id="date" class="custom-select">
                <option value="">期間を選択</option>
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
        labels: ['4/21', '4/22', '4/23', '4/24', '4/25', '4/26', '4/27'],
        datasets: [
            {
                label: '大',
                data: Array(7).fill(0),
                borderColor: '#0000FF',
                backgroundColor: '#0000FF',
                tension: 0,
                fill: false,
                pointRadius: 0,
                pointHoverRadius: 0,
                pointBackgroundColor: '#0000FF',
                borderWidth: 2
            },
            {
                label: '中',
                data: Array(7).fill(0),
                borderColor: '#FF0000',
                backgroundColor: '#FF0000',
                tension: 0,
                fill: false,
                pointRadius: 0,
                pointHoverRadius: 0,
                pointBackgroundColor: '#FF0000',
                borderWidth: 2
            },
            {
                label: '小',
                data: Array(7).fill(0),
                borderColor: '#FFD700',
                backgroundColor: '#FFD700',
                tension: 0,
                fill: false,
                pointRadius: 0,
                pointHoverRadius: 0,
                pointBackgroundColor: '#FFD700',
                borderWidth: 2
            }
        ]
    };

    function getDynamicChartConfig(data) {
        const allData = data.datasets.flatMap(dataset => dataset.data).filter(val => val !== null && !isNaN(val));
        const maxDataValue = allData.length > 0 ? Math.max(...allData) : 100;
        const buffer = maxDataValue * 0.2 || 100;
        const yMax = Math.ceil((maxDataValue + buffer) / 100) * 100;
        const stepSize = Math.ceil(yMax / 10 / 100) * 100 || 100;

        return {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: '日付'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: yMax,
                        ticks: {
                            stepSize: stepSize
                        },
                        title: {
                            display: true,
                            text: '価格 (円)'
                        },
                        padding: {
                            top: 30
                        }
                    }
                },
                layout: {
                    padding: {
                        top: 20
                    }
                }
            },
            plugins: [{
                id: 'dataLabelPlugin',
                afterDatasetsDraw(chart) {
                    const { ctx, data } = chart;
                    chart.data.datasets.forEach((dataset, datasetIndex) => {
                        const meta = chart.getDatasetMeta(datasetIndex);
                        if (meta.hidden) return;
                        meta.data.forEach((point, index) => {
                            const value = dataset.data[index];
                            if (value !== null && value !== 0 && !isNaN(value)) {
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
    }

  
    let myChart = new Chart(ctx, getDynamicChartConfig(chartData));

    function toggleLoading(isLoading) {
       
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

           
            const urlParams = new URLSearchParams(window.location.search);
            const fishTypeFromUrl = urlParams.get('fishType');
            const marketFromUrl = urlParams.get('market');

            if (fishTypeFromUrl && marketFromUrl) {
                fishSelect.value = decodeURIComponent(fishTypeFromUrl);
                marketSelect.value = decodeURIComponent(marketFromUrl);
                fetchDataAndUpdateUI(); 
            }
        } catch (error) {
            console.error('Error loading dropdown data:', error);
            Swal.fire({
                icon: 'error',
                title: 'エラー',
                text: 'ドロップダウンオプションの読み込みに失敗しました: ' + (error.response?.statusText || error.message),
                timer: 2000,
                showConfirmButton: false
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        populateDropdowns();
    });

    
    async function fetchDataAndUpdateUI() {
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
            market: market || "八幡浜",
            fishType: fishType || "生ブリ(天然：イナダ・ワラサ含)",
            date: date || ''
        };

        toggleLoading(true);

        let errorMessages = [];
        let infoMessages = [];
        let successMessage = '';

        try {
          
            let tableDataLoaded = false;
            try {
                const tableResponse = await axios.get('https://aquaticadventureshop.com/fetch-data-search', {
                    params,
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                const tableData = tableResponse.data;
                if (tableData.success && Object.values(tableData.data).length > 0) {
                    const category = Object.values(tableData.data)[0];
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

                        tableDataLoaded = true;
                    }
                }

                if (!tableDataLoaded) {
                    const selectors = [
                        '.large-high', '.large-medium', '.large-low',
                        '.medium-high', '.medium-middle', '.medium-low',
                        '.small-high', '.small-middle', '.small-low'
                    ];
                    selectors.forEach(sel => document.querySelector(sel).textContent = '');
                    infoMessages.push('選択した条件に該当するテーブルデータが見つかりませんでした');
                }
            } catch (tableError) {
                console.error('Error fetching table data:', tableError);
                const selectors = [
                    '.large-high', '.large-medium', '.large-low',
                    '.medium-high', '.medium-middle', '.medium-low',
                    '.small-high', '.small-middle', '.small-low'
                ];
                selectors.forEach(sel => document.querySelector(sel).textContent = '');
                errorMessages.push('テーブルデータの取得に失敗しました: ' + (tableError.response?.statusText || tableError.message));
            }

            
            const chartResponse = await axios.get('https://aquaticadventureshop.com/fetch-data-week', {
                params,
                headers: {
                    'Accept': 'application/json'
                }
            });

            const chartDataResponse = chartResponse.data;
            if (chartDataResponse.success && Object.values(chartDataResponse.data).length > 0) {
                const dates = Object.keys(chartDataResponse.data).slice(0, 7);
                const largeData = [];
                const mediumData = [];
                const smallData = [];

                dates.forEach(date => {
                    const category = chartDataResponse.data[date];
                    if (category && category.length > 0) {
                        const prices = category[0];
                        largeData.push(parseFloat(prices.high) || 0);
                        mediumData.push(parseFloat(prices.medium) || 0);
                        smallData.push(parseFloat(prices.low_price) || 0);
                    } else {
                        largeData.push(0);
                        mediumData.push(0);
                        smallData.push(0);
                    }
                });

                chartData.labels = dates.map(date => date.split('-').slice(1).join('/'));
                chartData.datasets[0].data = largeData;
                chartData.datasets[1].data = mediumData;
                chartData.datasets[2].data = smallData;

                myChart.destroy();
                myChart = new Chart(ctx, getDynamicChartConfig(chartData));

                successMessage = '価格データが正常に表示されました';
            } else {
                clearTableAndChart();
                infoMessages.push('選択した条件に該当するチャートデータが見つかりませんでした');
            }
        } catch (chartError) {
            clearTableAndChart();
            errorMessages.push('チャートデータの取得に失敗しました: ' + (chartError.response?.statusText || chartError.message));
        } finally {
            toggleLoading(false);

            if (errorMessages.length > 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'エラー',
                    text: errorMessages.join('\n'),
                    timer: 2000,
                    showConfirmButton: false
                });
            } else if (infoMessages.length > 0) {
                Swal.fire({
                    icon: 'info',
                    title: 'データなし',
                    text: infoMessages.join('\n'),
                    timer: 1500,
                    showConfirmButton: false
                });
            } else if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'データ取得成功',
                    text: successMessage,
                    timer: 1000,
                    showConfirmButton: false
                });
            }
        }
    }

    document.getElementById('searchButton').addEventListener('click', function() {
        fetchDataAndUpdateUI();
    });

    function clearTableAndChart() {
        const selectors = [
            '.large-high', '.large-medium', '.large-low',
            '.medium-high', '.medium-middle', '.medium-low',
            '.small-high', '.small-middle', '.small-low'
        ];
        selectors.forEach(sel => document.querySelector(sel).textContent = '');
        chartData.datasets.forEach(dataset => {
            dataset.data = Array(7).fill(0);
        });
        myChart.destroy();
        myChart = new Chart(ctx, getDynamicChartConfig(chartData));
    }
</script>
@endsection