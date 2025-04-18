<div class=".footer-footer-menu-item">
    <div class="icon-container">
        <img src='{{ asset($icon) }}' alt='{{ $label }}' class="footer-menu-icon">
    </div>
    <div class="label-container">
        <span class="footer-menu-label">{{ $label }}</span>
    </div>
</div>

<style>
.footer-menu-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    border: 2px solid #005BFF;
    border-radius: 8px;
    background-color: #fff;
    transition: background-color 0.3s ease;
}

.footer-menu-item.active {
    background-color: #E6F0FF;
}

.icon-container {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 6px;
}

.footer-menu-icon {
    width: 34px;
    height: 34px;
}

.label-container {
    width: 70px;
    height: 20px;
    border: 1px dashed #000;
    display: flex;
    text-wrap: nowrap;
    align-items: center;
    justify-content: center;
    margin-bottom: 8px;
}

.footer-menu-label {
    font-size: 12px;
    color: #000;
    font-weight: bold;
}

@media (max-width: 640px) {
    .footer-menu-item {
        width: 60px;
        height: 60px;
    }

    .footer-menu-icon {
        width: 30px;
        height: 30px;
    }

    .label-container {
        width: 55px;
        height: 18px;
    }

    .footer-menu-label {
        font-size: 10px;
    }
}
</style>