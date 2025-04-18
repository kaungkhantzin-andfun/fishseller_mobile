<div {{ $attributes->merge(['class' => 'menu-item']) }}>
    <img src="{{ asset($icon) }}" alt="{{ $label }}" class="menu-icon">
    <span class="menu-label">{{ $label }}</span>
</div>

<style>
.menu-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    background-color: #5A5A5A;
    border-radius: 8px;
    padding: 15px 10px;
    transition: background-color 0.3s ease;
}

.menu-item:hover {
    background-color: #444;
}

.menu-icon {
    width: 40px;
    height: 40px;
    object-fit: contain;
    margin-bottom: 8px;
}

.menu-label {
    font-size: 14px;
    color: #fff;
    text-align: center;
    line-height: 1.2;
}

@media (max-width: 640px) {
    .menu-item {
        width: 100%;
        height: 100%;
        padding: 12px 8px;
    }

    .menu-icon {
        width: 32px;
        height: 32px;
        margin-bottom: 6px;
    }

    .menu-label {
        font-size: 12px;
    }
}
</style>