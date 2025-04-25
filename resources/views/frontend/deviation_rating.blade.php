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
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div id="loading" style="display: none; text-align: center; padding: 20px;">
        <span>Loading...</span>
    </div>

    <div class="dropdown-section">
        <div class="dropdown-items">
            <div class="select-box" style="text-align: center;">
                <p>魚種を選択してください</p>
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
                <th style="font-size: 10px;">順位</th>
                <th style="font-size: 10px;">トン数</th>
                <th colspan="2" style="width: 137px;font-size: 10px;">市場</th>
            </tr>
        </thead>
        <tbody style="width: 137px;font-size: 10px;">
            <tr>
                <td>1</td>
                <td>あなご</td>
                <td>XX</td>
                <td  class="custom-btn"><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>8</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>9</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
            </tr>
            <tr>
                <td>10</td>
                <td>xxx</td>
                <td>XX</td>
                <td><button class="market-button">YY</button></td>
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