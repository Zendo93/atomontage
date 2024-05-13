<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <script src="./js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php
        include('header.php')
    ?>
    <div class="p-6">
        <table class="table-auto m-auto text-[0.65rem] sm:text-base">
            <thead>
                <tr>
                <th class="px-4 py-2">First Name</th>
                <th class="px-4 py-2">Last Name</th>
                <th class="px-4 py-2">City</th>
                <th class="px-4 py-2">State</th>
                <th class="px-4 py-2">ZIP</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require '../vendor/autoload.php';
                $database = new Dibi\Connection([
                    'driver'   => 'mysqli',
                    'host'     => 'localhost',
                    'port'     =>  4000,     
                    'username' => 'root',
                    'password' => 'admin',
                    'database' => 'atomontage',
                ]);
                
                $result = $database->query('SELECT * FROM user');
                $all = $result->fetchAll();

                foreach ($all as $key => $row): ?>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2"><?= $row['first_name']; ?></td>
                        <td class="border px-4 py-2"><?= $row['last_name']; ?></td>
                        <td class="border px-4 py-2"><?= $row['city']; ?></td>
                        <td class="border px-4 py-2"><?= $row['state']; ?></td>
                        <td class="border px-4 py-2"><?= $row['zip']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>