<nav id="navigation4" class="container navigation">
    <div class="nav-header">
        <a class="nav-brand" href="index.html">
            <img src="img/logos/logo-light.png" alt="logo" class="main-logo" id="light_logo">
            <img src="img/logos/logo.png" alt="logo" class="main-logo" id="main_logo">
        </a>
        <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
        <ul class="nav-menu align-to-right">
            <li class="nav-item {{ request()->is('home') ? 'active' : '' }}{{ request()->is('/') ? 'active' : '' }}">
                <a href="/">HOME</a>
            </li>
            <li class="nav-item {{ request()->is('parts') ? 'active' : '' }}">
                <a href="/abouts">ABOUT US</a>
            </li>
            <li class="nav-item {{ request()->is('shop') ? 'active' : '' }}">
                <a href="/products">PRODUCTS</a>
                <ul class="nav-dropdown">
                    <li>
                        <a href="about.html">About Us 01</a>

                        <div class="megamenu-panel">
                            <div class="megamenu-lists">
                                <ul class="megamenu-list list-col-4">
                                    <li class="megamenu-list-title"><a href="#">Multi Purpose 02</a></li>
                                    <li><a href="home-4.html">Home Page 04</a></li>
                                    <li><a href="home-5.html">Home Page 05</a></li>
                                    <li><a href="home-6.html">Home Page 06</a></li>
                                    <li><a href="index.html">Home Page 01</a></li>
                                    <li><a href="home-2.html">Home Page 02</a></li>
                                    <li><a href="home-3.html">Home Page 03</a></li>
                                    <li><a href="home-4.html">Home Page 04</a></li>
                                    <li><a href="home-5.html">Home Page 05</a></li>
                                    <li><a href="home-6.html">Home Page 06</a></li>
                                    <li><a href="index.html">Home Page 01</a></li>
                                    <li><a href="home-2.html">Home Page 02</a></li>
                                    <li><a href="home-3.html">Home Page 03</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="megamenu-panel panel-2">
                                <div class="megamenu-lists">
                                    <ul class="megamenu-list list-col-4">
                                        <li class="megamenu-list-title"><a href="#">Multi Purpose 02</a></li>
                                        <li><a href="home-4.html">Home  04</a></li>
                                        <li><a href="home-5.html">Home  05</a></li>
                                        <li><a href="home-6.html">Home  06</a></li>
                                        <li><a href="index.html">Home  01</a></li>
                                        <li><a href="home-2.html">Home  02</a></li>
                                        <li><a href="home-3.html">Home  03</a></li>
                                        <li><a href="home-4.html">Home  04</a></li>
                                        <li><a href="home-5.html">Home  05</a></li>
                                        <li><a href="home-6.html">Home  06</a></li>
                                        <li><a href="index.html">Home  01</a></li>
                                        <li><a href="home-2.html">Home  02</a></li>
                                        <li><a href="home-3.html">Home  03</a></li>
                                    </ul>
                                </div>
                            </div>
                    </li>


                    <li><a href="about-2.html">About Us 02</a></li>
                    <li><a href="team.html">Our Team 01</a></li>
                    <li><a href="team-2.html">Our Team 02</a></li>
                    <li><a href="team-3.html">Our Team 03</a></li>
                    <li><a href="team-single.html">Team Single</a></li>
                    <li><a href="partners.html">Our Partners</a></li>
                    <li><a href="about.html">About Us 01</a></li>
                    <li><a href="about-2.html">About Us 02</a></li>
                    <li><a href="team.html">Our Team 01</a></li>
                    <li><a href="team-2.html">Our Team 02</a></li>
                    <li><a href="team-3.html">Our Team 03</a></li>
                    <li><a href="team-single.html">Team Single</a></li>
                    <li><a href="partners.html">Our Partners</a></li>
                </ul>






            </li>
            <li class="nav-item {{ request()->is('parts') ? 'active' : '' }}">
                <a href="/business">BUSINESS PARTNERS</a>
            </li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                <a href="/contact">CONTACT</a>
            </li>
        </ul>
    </div>
</nav>