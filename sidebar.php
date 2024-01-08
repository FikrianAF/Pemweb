<!-- Sidebar -->
    <!-- Border pada sidebar dan juga spasi jarak header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Peletakan tombol sidebar diubah ke arah pojok kiri -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" sty;e="width=250px">
                <!-- Penyesuaian lebar ukuran kanvas -->
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- Menu Sidebar -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ?
                                'active link-light text-bg-success' : 'link-dark'; ?>" aria-current="page" href="index.php?x=home">
                                <i class="bi bi-house-door-fill"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='order') ? 
                                'active link-light text-bg-success': 'link-dark' ; ?>" href="index.php?x=order">
                                <i class="bi bi-cart2"></i> Order</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='customer') ? 
                              'active link-light text-bg-success': 'link-dark' ; ?>" href="index.php?x=customer">
                                <i class="bi bi-person"></i> Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='product') ? 
                                'active link-light text-bg-success': 'link-dark' ; ?>" href="index.php?x=product">
                                <i class="bi bi-inbox-fill"></i> Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x']=='report') ? 
                                'active link-light text-bg-success': 'link-dark' ; ?>" href="index.php?x=report">
                                <i class="bi bi-clipboard2-data-fill"></i> Report</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- End Sidebar -->