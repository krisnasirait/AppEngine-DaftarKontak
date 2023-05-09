<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kontak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Daftar Kontak</h1>
    <?php
    $contacts = [
        ['name' => 'Budi', 'phone' => '08123456789', 'email' => 'budi@example.com'],
        ['name' => 'Ani', 'phone' => '08129876543', 'email' => 'ani@example.com'],
        ['name' => 'Siti', 'phone' => '08512398765', 'email' => 'siti@example.com'],
    ];
    ?>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?php echo htmlspecialchars($contact['name']); ?></td>
                    <td><?php echo htmlspecialchars($contact['phone']); ?></td>
                    <td><?php echo htmlspecialchars($contact['email']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>