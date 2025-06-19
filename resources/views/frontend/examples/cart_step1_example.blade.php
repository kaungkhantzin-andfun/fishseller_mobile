@extends('layouts.app')

@section('title', 'カート')

@section('content')
    <!-- Search Bar -->
    <div class="search-container">
        <i class="fas fa-bars menu-icon" onclick="toggleMenu()"></i>
        <div class="search-form">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="お魚を検索">
        </div>
    </div>

    <!-- Breadcrumb -->
    <ul class="breadcrumb">
        <li class="breadcrumb-item">ホーム</li>
        <li class="breadcrumb-item">カート</li>
    </ul>

    <!-- Cart Items -->
    <div class="cart-items">
        <div class="cart-item">
            <img src="{{ asset('assets/images/fish/buri.jpg') }}" alt="朝どれ ぶり" class="item-image">
            <div class="item-details">
                <div>
                    <div class="item-name">朝どれ ぶり</div>
                    <div class="item-price">¥ 3,000</div>
                </div>
                <div class="cart-actions">
                    <div class="quantity-controls">
                        <button class="quantity-btn">-</button>
                        <input type="text" value="1" class="quantity-input" readonly>
                        <button class="quantity-btn">+</button>
                    </div>
                    <button class="cart-btn">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Navigation -->
    @include('frontend.partials.footer-nav', ['active' => 'cart'])
@endsection

@push('styles')
<style>
    /* Your CSS here */
    body {
        font-family: 'Hiragino Kaku Gothic Pro', 'Meiryo', sans-serif;
        line-height: 1.6;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        padding-bottom: 60px;
    }
    
    /* Rest of your CSS */
</style>
@endpush
