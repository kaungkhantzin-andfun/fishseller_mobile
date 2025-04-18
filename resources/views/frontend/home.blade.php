@extends('frontend.include.layout')

@section('title', 'Home Page')
@section('style')
    <style>
        .banner-image {
            width: 100%;
            height: auto;
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 5px;
        }

        .notification-banner {
            background-color: rgba(0, 0, 0, .8);
            color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            text-align: center;
            width: 100%;
            max-width: 450px;
            margin: 10px auto;
        }

        .banner-title {
            font-size: 18px;
            font-weight: bold;
            margin: 0 0 10px;
        }

        .banner-description {
            text-align: center;
            text-wrap: wrap;
            font-size: 14px;
            margin: 0 0 15px;
            line-height: 1.4;
        }

        .banner-input-group {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .banner-input {
            padding: 10px;
            font-size: 14px;
            border: none;
            border-radius: 0;
            width: 200px;
            background-color: #ddd;
            color: #333;
        }

        .banner-input::placeholder {
            color: #666;
        }

        .banner-button {
            padding: 10px 20px;
            font-size: 14px;
            background-color: #e60012;
            color: #fff;
            border: none;
            border-radius: 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .banner-button:hover {
            background-color: #cc0010;
        }

        @media (max-width: 400px) {
            .notification-banner {
                padding: 15px;
                width: 100%;
            }

            .banner-title {
                font-size: 16px;
            }

            .banner-description {
                font-size: 12px;
            }

            .banner-input {
                width: 160px;
                padding: 8px;
                font-size: 12px;
            }

            .banner-button {
                padding: 8px 15px;
                font-size: 12px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container">

        {{-- banner image --}}
        <img src="{{ asset('assets/images/banners/1.png') }}" alt="banner-image" class="banner-image">

        {{-- menu --}}
        @include('frontend.include.menu')

        {{-- notification banner box --}}
        <div class="notification-banner">
            <h2 class="banner-title">新しい更新情報と割引を通知</h2>
            <p class="banner-description">メールアドレスを入力して送信してください。<br/> 最新情報をお知らせします。</p>
            <div class="banner-input-group">
                <input type="email" class="banner-input" placeholder="あなたのメルマガアドレス">
                <button class="banner-button">購読する</button>
            </div>
        </div>
    </div>
@endsection
