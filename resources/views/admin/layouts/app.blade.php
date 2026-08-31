<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Admin Dashboard')
    </title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Page Specific CSS -->
    @stack('styles')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f7f7f6;
            color: #1f2937;
        }

        /* =========================
           SIDEBAR
        ========================== */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 260px;
            height: 100vh;
        background: linear-gradient(180deg, #fffaf7 0%, #fff3ed 55%, #ffe9df 100%);
            border-right: 1px solid #f2ddd3;
            padding: 25px 18px;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 5px 0 25px rgba(0, 0, 0, 0.08);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            
    color: #171717;
            text-decoration: none;
            padding: 0 10px;
            margin-bottom: 35px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, #f05c2f, #ff9a78);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
            box-shadow: 0 8px 20px rgba(240, 92, 47, 0.20);
        }

        .brand-name {
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .menu-title {
            color: #8b817d;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 12px;
            margin: 22px 0 10px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 12px 14px;
            border-radius: 10px;
            color: #3f3a38;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.25s ease;
        }

        .sidebar-menu a i {
            font-size: 18px;
            width: 22px;
        }

        .sidebar-menu a:hover {
            background: rgba(240, 92, 47, 0.08);
            color: #171717;
            transform: translateX(3px);
        }

        .sidebar-menu a.active {
background: linear-gradient(135deg, #f05c2f 0%, #ff8565 100%);
            color: white;
            box-shadow: 0 8px 20px rgba(240, 92, 47, 0.20);
        }

        .sidebar-bottom {
            position: absolute;
            left: 18px;
            right: 18px;
            bottom: 20px;
        }

        .upgrade-box {
            background: linear-gradient(135deg, rgba(240, 92, 47, 0.12), rgba(255, 154, 120, 0.08));
            border: 1px solid rgba(240, 92, 47, 0.12);
            border-radius: 14px;
            padding: 16px;
            color: #171717;
            margin-bottom: 15px;
        }

        .upgrade-box h6 {
            font-size: 13px;
            font-weight: 700;
        }

        .upgrade-box p {
            color: #8b6255;
            font-size: 11px;
            margin: 7px 0 12px;
        }

        .upgrade-btn {
            width: 100%;
            border: none;
            border-radius: 8px;
            padding: 8px;
            background: white;
            color: #f05c2f;
            font-size: 12px;
            font-weight: 700;
        }

        /* =========================
           MAIN CONTENT
        ========================== */

        .main-content {
            margin-left: 260px;
            min-height: 100vh;
        }

        /* =========================
           TOPBAR
        ========================== */

        .topbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }

        .page-title h4 {
            margin: 0;
            font-weight: 700;
            font-size: 20px;
        }

        .page-title small {
            color: #8b817d;
            font-size: 12px;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            width: 220px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 9px 15px 9px 38px;
            font-size: 13px;
            outline: none;
        }

        .search-box i {
            position: absolute;
            left: 13px;
            top: 10px;
            color: #8b817d;
        }

        .notification {
            position: relative;
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #475569;
        }

        .notification .badge {
            position: absolute;
            top: -3px;
            right: -3px;
            width: 17px;
            height: 17px;
            padding: 0;
            border-radius: 50%;
            font-size: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-info strong {
            display: block;
            font-size: 13px;
        }

        .profile-info small {
            color: #8b817d;
            font-size: 10px;
        }

        /* =========================
           CONTENT
        ========================== */

        .content {
            padding: 30px;
        }

        .welcome-card {
            background: linear-gradient(135deg, #fff6f2 0%, #ffe9df 100%);
            color: #171717;
            border: 1px solid #f4d8cb;
            color: white;
            border-radius: 18px;
            padding: 28px;
            position: relative;
            overflow: hidden;
            margin-bottom: 25px;
        }

        .welcome-card::before {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            background: rgba(240, 92, 47, 0.08);
            border-radius: 50%;
            right: -60px;
            top: -90px;
        }

        .welcome-card::after {
            content: "";
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(240, 92, 47, 0.05);
            border-radius: 50%;
            right: 100px;
            bottom: -100px;
        }

        .welcome-card h3 {
            color: black;
            font-size: 22px;
            font-weight: 700;
            position: relative;
            z-index: 2;
        }

        .welcome-card p {
            color: #745f58;
            font-size: 13px;
            margin: 7px 0 18px;
            position: relative;
            z-index: 2;
        }

        .welcome-btn {
            display: inline-block;
            background: white;
            color: #f05c2f;
            padding: 9px 17px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            position: relative;
            z-index: 2;
        }

        /* =========================
           STAT CARDS
        ========================== */

        .stat-card {
            background: white;
            border: 1px solid #eef0f4;
            border-radius: 16px;
            padding: 20px;
            height: 100%;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .icon-purple {
            background: #fff0ea;
            color: #f05c2f;
        }

        .icon-blue {
            background: #fff5ef;
            color: #d94d2b;
        }

        .icon-green {
            background: #eef5e9;
            color: #5f7f45;
        }

        .icon-orange {
            background: #ffedd5;
            color: #ea580c;
        }

        .growth {
            font-size: 11px;
            font-weight: 700;
            padding: 5px 8px;
            border-radius: 6px;
        }

        .growth.up {
            background: #dcfce7;
            color: #15803d;
        }

        .growth.down {
            background: #fee2e2;
            color: #dc2626;
        }

        .stat-card h6 {
            color: #64748b;
            font-size: 12px;
            margin-top: 18px;
            margin-bottom: 5px;
        }

        .stat-card h3 {
            font-size: 25px;
            font-weight: 800;
            margin: 0;
        }

        /* =========================
           CHART / TABLE CARDS
        ========================== */

        .dashboard-card {
            background: white;
            border: 1px solid #eef0f4;
            border-radius: 16px;
            padding: 22px;
            height: 100%;
        }

        .card-header-custom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card-header-custom h5 {
            font-size: 15px;
            font-weight: 700;
            margin: 0;
        }

        .card-header-custom span {
            font-size: 11px;
            color: #8b817d;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            font-size: 11px;
            color: #8b817d;
            font-weight: 600;
            border-bottom: 1px solid #eef0f4;
            padding: 10px 8px;
        }

        .table tbody td {
            font-size: 12px;
            padding: 13px 8px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
        }

        .customer {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .customer-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #fff0ea;
            color: #f05c2f;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
        }

        .status {
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
        }

        .status.completed {
            background: #dcfce7;
            color: #15803d;
        }

        .status.pending {
            background: #fef3c7;
            color: #b45309;
        }

        .status.cancelled {
            background: #fee2e2;
            color: #dc2626;
        }

        /* =========================
           MOBILE
        ========================== */

        .mobile-menu {
            display: none;
            border: none;
            background: transparent;
            font-size: 23px;
        }

        @media (max-width: 991px) {

            .sidebar {
                left: -260px;
            }

            .sidebar.show {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-menu {
                display: block;
            }

            .search-box {
                display: none;
            }

            .topbar {
                padding: 0 18px;
            }

            .content {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {

            .profile-info {
                display: none;
            }

            .welcome-card {
                padding: 22px;
            }

            .welcome-card h3 {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    {{-- =========================
         SIDEBAR
    ========================== --}}

    @include('admin.layouts.sidebar')


    {{-- =========================
         MAIN CONTENT
    ========================== --}}

    <main class="main-content">

        {{-- Header / Topbar --}}
        @include('admin.layouts.header')


        {{-- Page Content --}}
        <div class="content">

            @yield('content')

        </div>



    </main>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Page Specific JS -->
    @stack('scripts')

</body>

</html>