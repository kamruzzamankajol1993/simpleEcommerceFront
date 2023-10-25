<div class="mobile-menu">
    <a href="{{ route('index') }}" title="Home Page"><i class="fas fa-home"></i><span>Home</span></a>

    <button class="cart-btn" onclick="location.href = '{{ route('cart.index') }}';"  title="Cartlist"><i class="fas fa-shopping-basket"></i><span>cartlist</span><sup>({{ \Cart::getTotalQuantity()}})</sup></button>

</div>
