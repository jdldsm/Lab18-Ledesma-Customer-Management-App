<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $page ?> - Product Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            height: 100vh;
            background: #f8f9fa;
            border-right: 1px solid #ddd;
        }

        .sidebar .nav-link {
            font-size: 16px;
            padding: 12px 20px;
            color: #333;
        }

        .sidebar .nav-link.active {
            background: #e9ecef;
            font-weight: bold;
            border-left: 4px solid #007bff;
            color: #007bff;
        }

        .topbar {
            height: 60px;
            background: #017bff;
            color: #fff;
            padding: 15px 25px;
            font-size: 20px;
        }

        main {
            padding: 25px;
        }
    </style>
</head>
