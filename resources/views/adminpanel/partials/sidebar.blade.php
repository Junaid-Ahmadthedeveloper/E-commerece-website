<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Admin Panel</span>
        </a>



					<li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('user_table')}}" >
        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Main Dashboard</span>
    </a>
</li>

    <li class="sidebar-item" id="products">
        <a class="sidebar-link" href="javascript:void(0);" onclick="toggleSubMenu('productsSubMenu')">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Products</span>
        </a>
        <ul class="sub-menu" id="productsSubMenu">
            <li ><a href="{{ route('electical_store')}}" style=" color:white;">Electronics</a></li>
            <li ><a href="{{ route('clothes_store')}}" style=" color:white;" >Clothes</a></li>
            <li ><a href="{{ route('jewlery_store')}}" style=" color:white;">Jewlery</a></li>
            <li ><a href="{{ route('toy_store')}}" style=" color:white;">Toys</a></li>
        </ul>
    </li>

<li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('order_tbl')}}" >
        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Orders</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('cart_tbl')}}" >
        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Add Cart</span>
    </a>
</li>

				</ul>


			</div>
		</nav>
