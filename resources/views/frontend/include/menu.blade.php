<div class="menu-grid">
    <x-menu-item icon="assets/icons/fish.png" label="魚の雑学" url="{{ route('wholesaletable')}}"  />
    <x-menu-item icon="assets/icons/youtube.png" label="外野の魚" />
    <x-menu-item icon="assets/icons/badge.png" label="街方面格" url="{{ route('wholesale')}}" />
    <x-menu-item icon="assets/icons/shop_cart.png" label="注文" />
    <x-menu-item icon="assets/icons/calendar.png" label="予約管理" />
    <x-menu-item icon="assets/icons/megaphone.png" label="集客管理" />
</div>

<style>
.menu-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    width: 100%;
}

/* Add this to increase icon size */
.menu-grid img, 
.menu-grid .icon { /* Target both img tags and elements with icon class */
    width: 40px;
    height: 40px;
    object-fit: contain; /* This ensures the image maintains its aspect ratio */
}

@media (max-width: 400px) {
    .menu-grid {
        grid-template-columns: repeat(3, 1fr);
        width: 100%;
    }
}
</style>