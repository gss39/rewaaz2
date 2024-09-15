<!-- for header .------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <title>CodePen - Pro Sidebar template</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css'>
    <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
    <link rel='stylesheet' href='./style.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz'
        crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <style>
        a {
            text-decoration: none;
        }

        .bg-primary {

            background-color: white;
        }

        .navbar-brand {

            color: white;
        }

        .btn-outline-success {
            --bs-btn-color: #ffffff;
            --bs-btn-border-color: #ffffff;
            --bs-btn-hover-color: #ffffff;
            --bs-btn-hover-bg: rgb(12 30 53);
            --bs-btn-hover-border-color: #ffffff;
            --bs-btn-focus-shadow-rgb: 25, 135, 84;
            --bs-btn-active-color: #000000;
            --bs-btn-active-bg: #ffffff;
            --bs-btn-active-border-color: #ffffff;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #ffffff;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #ffffff;
            --bs-gradient: none;
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: rgb(12 30 53) !important;
        }
    </style>
</head>

<body>

    <!-- ---------------------------------------------------------------------------------- -->

    <!-- partial:index.partial.html -->
    <div class='layout has-sidebar fixed-sidebar fixed-header'>
        <aside id='sidebar' class='sidebar break-point-sm has-bg-image'>
            <a id='btn-collapse' class='sidebar-collapser'><i class='ri-arrow-left-s-line'></i></a>
            <div class='image-wrapper'>
                <img src='assets/images/sidebar-bg.jpg' alt='sidebar background' />
            </div>
            <div class='sidebar-layout'>
                <div class='sidebar-header'>
                    <div class='pro-sidebar-logo'>
                        <div>P</div>
                        <h5>Dashboard</h5>
                    </div>
                </div>
                <div class='sidebar-content'>
                    <nav class='menu open-current-submenu'>
                        <ul>
                            <li class='menu-header'><span> GENERAL </span></li>
                            <li class='menu-item sub-menu'>
                                <a href='#'>
                                    <span class='menu-icon'>
                                        <i class='ri-vip-diamond-fill'></i>
                                    </span>
                                    <span class='menu-title'>Products</span>
                                    <span class='menu-suffix'>
                                        <span class='badge primary'>Hot</span>
                                    </span>
                                </a>
                                <div class='sub-menu-list'>
                                    <ul>
                                        <li class='menu-item'>
                                            <a href='insert.php'>
                                                <span class='menu-title'>Add product</span>
                                            </a>
                                        </li>
                                        <li class='menu-item'>
                                            <a href='products.php'>
                                                <span class='menu-title'>View product</span>
                                            </a>
                                        </li>
                                        <li class='menu-item sub-menu'>
                                            <a href='#'>
                                                <span class='menu-title'>Forms</span>
                                            </a>
                                            <div class='sub-menu-list'>
                                                <ul>
                                                    <li class='menu-item'>
                                                        <a href='#'>
                                                            <span class='menu-title'>Input</span>
                                                        </a>
                                                    </li>
                                                    <li class='menu-item'>
                                                        <a href='#'>
                                                            <span class='menu-title'>Select</span>
                                                        </a>
                                                    </li>
                                                    <li class='menu-item sub-menu'>
                                                        <a href='#'>
                                                            <span class='menu-title'>More</span>
                                                        </a>
                                                        <div class='sub-menu-list'>
                                                            <ul>
                                                                <li class='menu-item'>
                                                                    <a href='#'>
                                                                        <span class='menu-title'>CheckBox</span>
                                                                    </a>
                                                                </li>
                                                                <li class='menu-item'>
                                                                    <a href='#'>
                                                                        <span class='menu-title'>Radio</span>
                                                                    </a>
                                                                </li>
                                                                <li class='menu-item sub-menu'>
                                                                    <a href='#'>
                                                                        <span class='menu-title'>Want more ?</span>
                                                                        <span class='menu-suffix'>&#x1F914;
                                                                        </span>
                                                                    </a>
                                                                    <div class='sub-menu-list'>
                                                                        <ul>
                                                                            <li class='menu-item'>
                                                                                <a href='#'>
                                                                                    <span class='menu-prefix'>&#127881;
                                                                                    </span>
                                                                                    <span class='menu-title'>You made it
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class='menu-item sub-menu'>
                                <a href='#'>
                                    <span class='menu-icon'>
                                        <i class='ri-bar-chart-2-fill'></i>
                                    </span>
                                    <span class='menu-title'>Charts</span>
                                </a>
                                <div class='sub-menu-list'>
                                    <ul>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span style='text-decoration: none;' class='menu-title'>Pie chart</span>
                                            </a>
                                        </li>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>Line chart</span>
                                            </a>
                                        </li>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>Bar chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class='menu-item sub-menu'>
                                <a href='#'>
                                    <span class='menu-icon'>
                                        <i class='ri-shopping-cart-fill'></i>
                                    </span>
                                    <span class='menu-title'>E-commerce</span>
                                </a>
                                <div class='sub-menu-list'>
                                    <ul>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>Products</span>
                                            </a>
                                        </li>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>Orders</span>
                                            </a>
                                        </li>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>credit card</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class='menu-item sub-menu'>
                                <a href='#'>
                                    <span class='menu-icon'>
                                        <i class='ri-global-fill'></i>
                                    </span>
                                    <span class='menu-title'>Maps</span>
                                </a>
                                <div class='sub-menu-list'>
                                    <ul>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>Google maps</span>
                                            </a>
                                        </li>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>Open street map</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class='menu-item sub-menu'>
                                <a href='#'>
                                    <span class='menu-icon'>
                                        <i class='ri-paint-brush-fill'></i>
                                    </span>
                                    <span class='menu-title'>Theme</span>
                                </a>
                                <div class='sub-menu-list'>
                                    <ul>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>Dark</span>
                                            </a>
                                        </li>
                                        <li class='menu-item'>
                                            <a href='#'>
                                                <span class='menu-title'>Light</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
        </aside>
        <div id='overlay' class='overlay'></div>
        <div class='layout'>
            <!-- ---------------------------------------stop for headers---------------------------------------------------------------- -->