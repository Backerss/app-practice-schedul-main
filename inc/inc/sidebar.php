<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- Awesome ICON -->
        <link href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.min.css" rel="stylesheet">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./profile">
                <img class="navbar-brand-img brand-sm" src="" alt="" srcset="">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
                </svg>
            </a>
        </div>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Pages</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="/app-practice/page/home.php">
                    <i class="fa-duotone fa-house fa-xl"></i>
                    <span class="ml-3 item-text" style="font-weight:400">Deahboard</span>
                </a>
            </li>
            <?php if($row["user_role"] == "Admin") { ?>
            <li class="nav-item w-100">
                <a class="nav-link" href="/app-practice/page/trainer.php">
                <i class="fa-solid fa-user-gear fa-xl"></i>
                    <span class="ml-3 item-text" style="font-weight:400">ผู้ฝึกซ้อม</span>
                </a>
            </li>
            <?php } ?>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>System</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="../../page/auth/logout">
                    <i class="fa-duotone fa-right-from-bracket fa-xl"></i>
                    <span class="ml-3 item-text" style="font-weight:400">Sign out</span>
                </a>
            </li>
        </ul>


    </nav>
</aside>