<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            @php
                            $settings=DB::table('settings')->get();
                            @endphp
                            <li><i class="ti-headphone-alt"></i>@foreach($settings as $data){{$data->phone}} @endforeach</li>
                            <li><i class="ti-email"></i> @foreach($settings as $data){{$data->email}} @endforeach</li>
                        </ul>
                    </div>
                    <!-- End Top Left -->
                    <!--Top Right-->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="ti-location-pin"></i> <a href="">Thùng Rác</a></li> 
                            <li><i class="ti-alarm-clock"></i> <a href="#">Giao Dịch Hàng NGày</a></li>
                            <li class="ti-power-off"></i><a href="">Đăng Nhập /</a> <a href="">Dăng Kí</a></li>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        @php $settings=DB::table('settings')->get();
                        @endphp <a href=""><img src="@foreach($settings as $data) {{$data->logo}} @endforeach" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                    <div class="search-bar">
                            <select class="s1">
                                <option>Tất Cả Sản Phẩm</option>
                                <option>Dien thoai</option>
                                <option>Laptop</option>
                            </select>
                            
                            <form method="POST" action="">
                                @csrf
                                <input name="search" placeholder="Tìm Kiếm Sản Phẩm..." type="search">
                                <button class="btnn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
          
            <!--yeu thich--->
            <div class="col-lg-2 col-md-3 col-12">
                <div class="right-bar">
                    <div class="sinlge-bar shopping">
                         <a href="" class="single-icon"> <i class="fa fa-heart-o"></i> <span class="total-count">6</span></a>
                     </div>

                    <div class="sinlge-bar shopping">
                        <a href="" class="single-icon"><i class="ti-bag"></i> <span class="total-count">8</span></a>
                    </div> 
            </div>
        </div>

</div>
 </div>
</div>
<!------Menu--->
<div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="">Trang chủ</a></li>                                            
                                            <li class=""><a href="">Sản phẩm</a><span class="new">New</span></li>		
                                            <li class=""><a href="">Khuyến mãi</a></li>												                                               
                                            <li class=""><a href="">Tin tức</a></li>                                            							                                               
                                            <li class=""><a href="">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>