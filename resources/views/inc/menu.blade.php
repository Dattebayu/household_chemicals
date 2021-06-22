 <nav class="header__inner">
    <div class="menu">
      <ul class="menu__items">
        <li class="menu__item">
          <a class="menu__link" href="{{ route('index') }}">Home</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="{{ route('allProduct') }}">All product</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="{{ route('categories') }}">Categories</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="{{ route('Cart') }}">Cart
          </a>
        </li>
        <li class="menu__item" class="menu__item-admin">
          <a class="menu__link" href="{{ route('adminPanel') }}">Admin panel</a>
        </li>
      </ul>
    </div>
  </nav>
