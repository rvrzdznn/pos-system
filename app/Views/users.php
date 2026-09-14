<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POSLY | Users</title>

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
            <h1>User Accounts</h1>
            <p>Registered users and staff accounts in the POS system.</p>
        </div>

        <div class="table-card">

            <table>

                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Created At</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($users as $user): ?>

                        <tr>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['full_name']) ?></td>
                            <td><?= esc($user['created_at']) ?></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </main>

    <footer>
        POSLY &copy; <?= date('Y') ?> · CodeIgniter 4
    </footer>

</body>
</html>