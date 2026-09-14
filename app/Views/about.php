<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POSLY | About</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

    <nav>
        <div class="brand">RVRPOS</div>

        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('customers') ?>">Customers</a>
        <a href="<?= base_url('users') ?>">Users</a>
        <a href="<?= base_url('about') ?>">About</a>
    </nav>

    <main class="container">

        <div class="page-header">
            <h1>About RVRPOS</h1>
            <p>Simple PoS system + Try lang po yung UI.</p>
        </div>

        <div class="cards">

            <div class="card">
                <h3>Customer Accounts</h3>
                <p>
                    Customer records are retrieved from a MySQL database.
                </p>
            </div>

            <div class="card">
                <h3>User Accounts</h3>
                <p>
                    User account information is stored in MySQL.
                </p>
            </div>

        </div>

    </main>

    <footer>
        POSLY &copy; <?= date('Y') ?> · CodeIgniter 4
    </footer>

</body>
</html>