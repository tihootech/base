<!-- sidebar left start-->
<div class="sidebar-right">
    <div class="sidebar-right-info">

        <div class="user-box">
            <div class="d-flex justify-content-center">
                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="" class="img-fluid rounded-circle">
            </div>
            <div class="text-center text-white mt-2">
                <h6>{{user('name')}}</h6>
                <p class="text-muted m-0">{{user('type')}}</p>
            </div>
        </div>

        <!--sidebar nav start-->
        <ul class="side-navigation">
            <li>
                <h3 class="navigation-title"> منوی اصلی </h3>
            </li>
            <li class="active">
                <a href="#/home"><i class="mdi mdi-gauge"></i> <span> داشبورد اصلی </span> </a>
            </li>
            <li class="menu-list">
                <a href="javascript:void(0)">
                    <i class="mdi mdi-account-card-details"></i>
                    <span> نام منو </span>
                </a>
                <ul class="child-list">
                    <li><a href="#/"> <i class="mdi mdi-plus"></i> آیتم 1 </a></li>
                    <li><a href="#/"> <i class="mdi mdi-format-list-bulleted"></i> آیتم 2 </a></li>
                </ul>
            </li>

        </ul><!--sidebar nav end-->
    </div>
</div><!-- sidebar left end-->
