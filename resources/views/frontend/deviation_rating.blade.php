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

    .table-btn {
        background-color: #5A5A5A;
        color: white;
        padding: 3px;
        border-radius: 8px;
        border: 1px solid #000;
        font-size: 16px;
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
        font-family: sans-serif;
    }

    .pricing-table th,
    .pricing-table td {
        border: 2px solid #ccc;
        padding: 13px;
        text-align: center;
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

    .pricing-table td.btn-group {
        display: flex;
        justify-content: start;
        align-items: center;
        text-align: start;
        border: 0;
        margin: 0;
        padding: 0;
        gap: 5px;
    }
    .pricing-table td.btn-group span {
        min-width: 70px;
        text-align: center;
        border: 2px solid #ccc;
        padding: 13px 0px;
        text-align: center;
        
    }

    .pricing-table .highlight {
        border: 2px solid #ccc;
        font-size: 18px;
        font-weight: bold;
    }

    .pricing-table .market-button {
        border: none;
        background-color: transparent;
        font-size: 10px;
        text-align: center;
        cursor: pointer;
        padding: 0;
        width: 100%;
        height: 100%;
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

    .loading-spinner {
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid #ccc;
        border-top: 2px solid #2563eb;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="dropdown-section">
        <div class="dropdown-items">
            <div class="select-box" style="text-align: center;">
                <p>魚種を選択してください</p>
            </div>
            <div>
                <select id="fishType" class="custom-select">
                    <option value="生マイワシ">生マイワシ</option>
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
                <th style="font-size: 10px;">順位</th>
                <th style="font-size: 10px;">トン数</th>
                <th style="width: 137px;font-size: 10px;">市場</th>
            </tr>
        </thead>
        <tbody id="rankingTableBody" style="width: 137px;font-size: 10px;">
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
        </tbody>
    </table>

    <div class="button-group">
        <button id="loadMoreButton" class="custom-btn">もっと見る</button>
    </div>

    <div class="wholesale-menu-section">
        <x-menu-item icon="assets/icons/shop_cart.png" label="注文" />
        <x-menu-item icon="assets/icons/cart_white.png" label="タグ付け" />
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fishTypeSelect = document.getElementById('fishType');
        const searchButton = document.getElementById('searchButton');
        const rankingTableBody = document.getElementById('rankingTableBody');
        const loadMoreButton = document.getElementById('loadMoreButton');

        let currentPage = 1;


        axios.get('https://aquaticadventureshop.com/datacraw/fish')
            .then(response => {
                const fishTypes = Array.isArray(response.data) ? response.data : [];
                fishTypeSelect.innerHTML = fishTypes.map(type => `<option value="${type}">${type}</option>`).join('');
                if (fishTypes.includes('生マイワシ')) {
                    fishTypeSelect.value = '生マイワシ';
                }
            })
            .catch(error => {
                console.error('Error fetching fish types:', error);
                fishTypeSelect.innerHTML = '<option value="生マイワシ">生マイワシ</option>';
            });

        function showLoadingRow(count = 10) {
            let rows = '';
            for (let i = 0; i < count; i++) {
                rows += `
                    <tr class="loading-row">
                        <td><span class="loading-spinner"></span></td>
                        <td><span class="loading-spinner"></span></td>
                        <td><span class="loading-spinner"></span></td>
                    </tr>
                `;
            }
            return rows;
        }

        function fetchData(page, append = false) {
            const fishType = fishTypeSelect.value || '生マイワシ';
            if (!append) {
                rankingTableBody.innerHTML = showLoadingRow(10);
            } else {
                rankingTableBody.insertAdjacentHTML('beforeend', showLoadingRow(10));
            }

            axios.get('https://aquaticadventureshop.com/datashowrating', {
                    params: {
                        fish_type: fishType,
                        page: page,
                        per_page: 10
                    }
                })
                .then(response => {
                    console.log('API response:', response.data);
                    const data = Array.isArray(response.data) ? response.data : response.data.data || [];


                    const loadingRows = rankingTableBody.querySelectorAll('.loading-row');
                    loadingRows.forEach(row => row.remove());

                    if (!append && !data.length) {
                        rankingTableBody.innerHTML = '';
                    }

                    if (data.length === 0) {
                        rankingTableBody.innerHTML = '<tr><td colspan="4">データが見つかりません</td></tr>';
                        loadMoreButton.disabled = true;
                        return;
                    }

                    data.forEach((item, index) => {
                        const rank = (page - 1) * 10 + index + 1;
                        const row = `
                        <tr>
                            <td>${rank}</td>
                            <td>${item.quantity || 'N/A'}</td>
                            <td class="btn-group"><span>${item.market || 'N/A'}</span> <button class="table-btn">グラフ</button></td>
                        </tr>
                    `;
                        rankingTableBody.insertAdjacentHTML('beforeend', row);
                    });

                    loadMoreButton.disabled = data.length < 10;
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    rankingTableBody.innerHTML = '<tr><td colspan="4">データの取得に失敗しました</td></tr>';
                    loadMoreButton.disabled = true;
                });
        }

        searchButton.addEventListener('click', () => {
            currentPage = 1;
            fetchData(currentPage, false);
        });

        loadMoreButton.addEventListener('click', () => {
            currentPage++;
            fetchData(currentPage, true);
        });


        fetchData(currentPage, false);
    });
</script>
@endsection