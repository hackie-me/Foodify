<!-- Sidebar Navigation Left -->
<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="{{url("/")}}">
            <img src="{{url('/')}}/assets/img/foodify/logo.svg" alt="logo">
        </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{url("/")}}">
                <span>
                    <i class="material-icons fs-16">dashboard</i>Dashboard
                </span>
            </a>
        </li>
        <!-- /Dashboard -->
        <!-- product -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false"
               aria-controls="product"> <span><i class="fa fa-archive fs-16"></i>Menus </span>
            </a>
            <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
                <li><a href="{{url("menu/catalogue")}}">Menu Catalogue</a>
                </li>
                <li><a href="{{url("menu/list")}}">Menu List</a>
                </li>
                <li><a href="{{url("menu/grid")}}">Menu Grid</a>
                </li>
                <li><a href="{{url("menu/product/add")}}">Add Product</a>
                </li>
            </ul>
        </li>
        <!-- product end -->
        <!-- orders -->
        <li class="menu-item">
            <a href="{{url("orders")}}"> <span><i class="fas fa-clipboard-list fs-16"></i>Orders</span>
            </a>
        </li>
        <!-- orders end -->
        <!-- restaurants -->
        <li class="menu-item">
            <a href="{{url("/restaurants")}}"> <span><i class="fa fa-tasks fs-16"></i>Restaurants List</span>
            </a>
        </li>
        <!-- restaurants end -->
        <!-- Invoice -->
        <li class="menu-item">
            <a href="{{url('/')}}/invoice"> <span><i class="fas fa-file-invoice fs-16"></i>Invoice</span>
            </a>
        </li>
        <!-- Invoice end -->
        <!-- customers-->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false"
               aria-controls="customer"> <span><i class="fas fa-user-friends fs-16"></i>Customers </span>
            </a>
            <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
                <li><a href="{{url("/reviews")}}">Customers Review</a>
                </li>
                <li><a href="{{url("/customers")}}">Customers List</a>
                </li>
                <li><a href="{{url("/socials")}}">Social Activity</a>
                </li>
            </ul>
        </li>
        <!-- Customers  end -->
        <!-- sales -->
        <li class="menu-item">
            <a href="{{url("/sales")}}"> <span><i class="fa fa-briefcase fs-16"></i>Sales</span>
            </a>
        </li>

        <!-- Apps -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false"
               aria-controls="apps"> <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
            </a>
            <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
                <li><a href="{{url("/app/chat")}}">Chat</a>
                </li>
                <li><a href="{{url("/app/email")}}">Email</a>
                </li>
                <li><a href="{{url("/app/todo")}}">To-do List</a>
                </li>
            </ul>
        </li>
        <!-- /Apps -->
    </ul>
</aside>
