<?php
$intern = [
  'name' => 'Priya',
  'referral' => 'nagabala2021',
  'donation' => 10.00,
  'rewards' => ['Bronze Badge', 'T-Shirt', 'Gift Voucher']
];

$leaderboard = [
  ['name' => 'Nagalakshmi', 'donation' => 1300],
  ['name' => 'Arun', 'donation' => 3000],
  ['name' => 'Priya', 'donation' => 3000]
];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Intern Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <h1>Intern Panel</h1>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Leaderboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <iconify-icon icon="marketeq:reward" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Rewards</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <iconify-icon icon="ri:logout-circle-r-line" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper py-4 px-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 text-center">
              <h1 class="h2 fw-semibold">Intern Dashboard</h1>
              <p class="text-muted h6">Track your referrals, donations, and unlocked rewards.</p><br><br>
            </div>
          </div>
       <!--  Header End -->
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
              <div class="card">
                  <div class="card-body">
                        <h5 class="card-title"><span class="material-symbols-outlined">person</span>&nbsp;&nbsp;<?= $intern['name'] ?></h5>
                        <span class="h6">Referral Code:<?= $intern['referral'] ?></span><br><br>
                        <span class="h6">Donation Raised: ₹<?= number_format($intern['donation'],2) ?></span>
                 </div>
                </div>
            </div>
           <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><span class="material-symbols-outlined">redeem</span>&nbsp;&nbsp; Rewards Unlocked</h5>
                        <span class="h6"><span class="material-symbols-outlined">rewarded_ads</span><?= $intern['rewards'][0] ?></span><br><br>
                        <span class="h6"><span class="material-symbols-outlined">laundry</span><?= $intern['rewards'][1] ?></span><br><br>
                        <span class="h6"><span class="material-symbols-outlined">featured_seasonal_and_gifts</span><?= $intern['rewards'][2] ?></span><br><br>
                    </div>
              </div>
           </div>
           <div class="col-lg-8">
               <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap align-middle mb-0">
                              <thead>
                                <tr class="border-2 border-bottom border-primary border-0">
                                  <th scope="col" class="ps-0">Leaderboard</th>
                                  <th scope="col" class="text-center">Donations</th>
                                </tr>
                              </thead>
                              <tbody class="table-group-divider">
                                <?php foreach($leaderboard as $entry): ?>
                                <tr>
                                  <th scope="row" class="ps-0 fw-medium"><?= htmlspecialchars($entry['name']) ?></th>
                                  <td class="text-center fw-medium border-0">₹<?= number_format($entry['donation']) ?></td>
                                </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                        </div>
                        <div>
                        <button class="btn btn-primary mb-3">Share Code</button>
                        <button class="btn btn-primary mb-3">Back to Home</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>
</html>