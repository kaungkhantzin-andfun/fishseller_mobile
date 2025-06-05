<div class="header">
    <i class="fas fa-bars header-icon"></i>
    <span class="header-title">お魚を検索</span>
    <i class="fas fa-magnifying-glass header-icon"></i>
</div>

<style>
.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    max-width: 400px;
    height: 52px;
    background-color: #E7E0EB;
    border-radius: 26px;
    padding: 0 25px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
}

.header-icon {
    font-size: 20px;
    color: #000;
}

.header-title {
    font-size: 18px;
    font-weight: 500;
    color: #000;
}

@media (max-width: 400px) {
    .header {
        max-width: 90%;
        height: 48px;
        padding: 0 20px;
    }

    .header-icon {
        font-size: 18px;
    }

    .header-title {
        font-size: 16px;
    }
}
</style>