<div class="col-md-2 sidebar p-0">
    <ul class="nav flex-column mt-3">

        <li class="nav-item">
            <a class="nav-link <?= ($page == 'Dashboard') ? 'active' : '' ?>" href="index.php">
                <span data-feather="home"></span> Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= ($page == 'Customers') ? 'active' : '' ?>" href="customers.php">
                <span data-feather="shopping-cart"></span> Customers
            </a>
        </li>

    </ul>
</div>
