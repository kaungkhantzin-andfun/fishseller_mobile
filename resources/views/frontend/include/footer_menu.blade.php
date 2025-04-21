<div class="footer-menu">
    <x-footer-menu-item label="ホーム" icon="assets/icons/home.png" url="{{ route('home')}}" />
    <x-footer-menu-item label="カテゴリ" icon="assets/icons/category.png"  />
    <x-footer-menu-item label="カート" icon="assets/icons/shop.png" />
    <x-footer-menu-item label="タグ" icon="assets/icons/cart.png" />
    <x-footer-menu-item label="アカウント" icon="assets/icons/user.png"/>

</div>



<style>
    .footer-menu {
        display: flex;
        justify-content: space-around;
        padding: 5px 10px;
    }
</style>
