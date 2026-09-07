<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - About</title>
</head>

<body>

    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('about') ?>">About</a> |
        <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('users') ?>">User Accounts</a>
    </nav>

    <hr>

    <h1>About</h1>

    <p>
        This is the first version of our Point-of-Sale system
        built using CodeIgniter 4.
    </p>

    <p>
        Customer and user information currently uses static PHP
        arrays. A database can be added in a future version.
    </p>

</body>
</html>