<header class="header" id="header">
    <nav class="nav container">
        <a href="index.php" class="nav__logo"><img src="img/logo.jpg" alt=""></a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.php" class="nav__link active-link">Inicio</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">Acerca de</a>
                </li>
                <li class="nav__item">
                    <a href="index.php?places" class="nav__link">Places</a>
                </li>
                <li class="nav__item">
                    <a href="index.php?hotels" class="nav__link">Hotels</a>
                </li>
                <li class="nav__item">
                    <a href="index.php?restaurants" class="nav__link">Restaurants</a>
                </li>
            </ul>
                    <div class="nav__dark"> 
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                        <i class="ri-sun-line disable change-theme" id="theme-button2"></i>
                    </div>

            <i class="ri-close-line nav__close" id="nav-close"></i>
        </div>
        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-function-line <?php if (isset($_GET['hotels']) || isset($_GET['restaurants']) ||isset($_GET['places'])){echo 'black';} ?>"></i>
        </div>
   </nav>
</header>