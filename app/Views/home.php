<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POSLY | Home</title>

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

        <section class="hero">

            <span class="tag">POS System</span>

            <h1>Technical Formative Assessment 2</h1>

            <p>
                Basic Point-of-Sale management
                system built with CodeIgniter 4. Manage customer and
                user account information.
            </p>

        </section>

        <section class="cards">

            <div class="card">
                <h3>Customer Accounts</h3>
                <p>
                    View customer names, contact information,
                    and account records.
                </p>
            </div>

            <div class="card">
                <h3>User Accounts</h3>
                <p>
                    View the registered users and staff accounts
                    of the POS system.
                </p>
            </div>

        </section>

    </main>

    <footer>
        POSLY &copy; <?= date('Y') ?> · CodeIgniter 4
    </footer>

</body>
</html>