<?php include('header.php');?>

<!-- Header -->

<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        
        <!-- Hamburger -->
        <div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

        <!-- Navigation -->
        <nav class="header_nav">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a href="index.html">home</a></li>
                <li><a href="#">action</a></li>
                <li><a href="#">soul</a></li>
                <li><a href="#">fps</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">contact</a></li>
            </ul>
            <form action="index.php" method="get">
                    <label>Cari :</label>
                    <input type="text" name="cari">
                    <input type="submit" value="Cari">
                </form>
        </nav>
                
        <!-- Header Extra -->
        <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

            <!-- Language -->
            <div class="info_languages has_children">
                <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="dropdown_text">english</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                
                <!-- Language Dropdown Menu -->
                 <ul>
                     <li><a href="#">
                         <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">french</div>
                     </a></li>
                     <li><a href="#">
                         <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">japanese</div>
                     </a></li>
                     <li><a href="#">
                         <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">russian</div>
                     </a></li>
                     <li><a href="#">
                         <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">spanish</div>
                     </a></li>
                 </ul>

            </div>

            <!-- Currency -->
            <div class="info_currencies has_children">
                <div class="dropdown_text">usd</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                <!-- Currencies Dropdown Menu -->
                 <ul>
                     <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                     <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                     <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                     <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                 </ul>

            </div>

            <!-- Cart -->
            <div class="cart d-flex flex-row align-items-center justify-content-start">
                <div class="cart_icon"><a href="cart.html">
                    <img src="images/bag.png" alt="">
                    <div class="cart_num">2</div>
                </a></div>
            </div>

        </div>

    </div>
</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="menu_top d-flex flex-row align-items-center justify-content-start">

        <!-- Language -->
        <div class="info_languages has_children">
            <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
            <div class="dropdown_text">english</div>
            <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
            
            <!-- Language Dropdown Menu -->
             <ul>
                 <li><a href="#">
                     <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">french</div>
                 </a></li>
                 <li><a href="#">
                     <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">japanese</div>
                 </a></li>
                 <li><a href="#">
                     <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">russian</div>
                 </a></li>
                 <li><a href="#">
                     <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">spanish</div>
                 </a></li>
             </ul>

        </div>

        <!-- Currency -->
        <div class="info_currencies has_children">
            <div class="dropdown_text">usd</div>
            <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

            <!-- Currencies Dropdown Menu -->
             <ul>
                 <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                 <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                 <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                 <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
             </ul>

        </div>

    </div>
    <div class="menu_search">
        <form action="#" class="header_search_form menu_mm">
            <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li class="menu_mm"><a href="index.html">home</a></li>
            <li class="menu_mm"><a href="#">action</a></li>
            <li class="menu_mm"><a href="#">soul</a></li>
            <li class="menu_mm"><a href="#">fps</a></li>
            <li class="menu_mm"><a href="blog.html">blog</a></li>
            <li class="menu_mm"><a href="contact.html">contact</a></li>
        </ul>
    </nav>
    <div class="menu_extra">
        <div class="menu_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Sidebar -->

<div class="sidebar">
    
    <!-- Info -->
    <div class="info">
        <div class="info_content d-flex flex-row align-items-center justify-content-start">
            
            <!-- Language -->
            <div class="info_languages has_children">
                <div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="dropdown_text">english</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                
                <!-- Language Dropdown Menu -->
                 <ul>
                     <li><a href="#">
                         <div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">french</div>
                     </a></li>
                     <li><a href="#">
                         <div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">japanese</div>
                     </a></li>
                     <li><a href="#">
                         <div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">russian</div>
                     </a></li>
                     <li><a href="#">
                         <div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="dropdown_text">spanish</div>
                     </a></li>
                 </ul>

            </div>

            <!-- Currency -->
            <div class="info_currencies has_children">
                <div class="dropdown_text">usd</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                <!-- Currencies Dropdown Menu -->
                 <ul>
                     <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                     <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                     <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                     <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                 </ul>

            </div>

        </div>
    </div>

    <!-- Logo -->
    <div class="sidebar_logo">
        <img src="images/stars.png" width="160" height="160" margin-left=10%>
    </div>

    <!-- Sidebar Navigation -->
    <nav class="sidebar_nav">
        <ul>
            <li><a href="index.html">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">action<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">soul<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">fps<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="blog.html">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>
    </nav>

    <!-- Search -->
    <div class="search">
        <form action="#" class="search_form" id="sidebar_search_form">
            <input type="text" class="search_input" placeholder="Search" required="required">
            <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>

    <!-- Cart -->
    <div class="cart d-flex flex-row align-items-center justify-content-start">
        <div class="cart_icon"><a href="cart.html">
            <img src="images/bag.png" alt="">
            <div class="cart_num">2</div>
        </a></div>
        <div class="cart_text">bag</div>
        <div class="cart_price">$39.99 (1)</div>
    </div>
</div>