<div id="top" class='hide'></div>
<header class="main_header" :class="{ nav__on : isMenu }">

    <a href='/' class="logo img"></a>

    <nav class="main_nav">
        <ul class="nav_list">
            <li><a href="./" class="item">Home</a></li>
            <li><a href="./recruiting" class="item">Recruiting</a></li>
            <li><a href="./hr-solutions" class="item">HR Solutions</a></li>
            <li><a href="./about-polar" class="item">About Polar</a></li>
            <li><a href="./contact" class="item">Contact</a></li>
        </ul>
    </nav>

    <a href="/recruiting" class="btn btn_primary">Find Employees Now</a>

    <div class="burger img" @click="toggle_menu()"></div>

</header>
<div class="header_waypoint" style='position: relative; top: 5px;'></div>

<a id="back_to_top" class='hide' href="#top"></a>