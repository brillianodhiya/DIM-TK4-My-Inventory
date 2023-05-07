<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login - My Inventory</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="public/assets/css/tw.output.css"/>
        <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer
        ></script>
        <script src="public/assets/js/init-alpine.js"></script>
    </head>
    <body>
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
            <!-- Sidebar -->
            <?php
                // Desktop sidebar
                include 'sidebar.php';

                // Mobile sidebar
                include 'sidebar_mobile.php';
            ?>

            <!-- content  -->
            <div class="flex flex-col flex-1 w-full">
                <?php
                    // Header of page
                    include 'header.php';
                ?>

                <!-- main content  -->
                <main class="h-full overflow-y-auto">
                    <div class="container px-6 mx-auto grid">
                        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Daftar semua pengguna yang terdaftar
                        </h2>

                        <!-- New Table -->
                        <div class="w-full overflow-x-auto border-1 bg-white p-4 rounded-lg dark:bg-gray-800 shadow-xs">
                            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                                <div class="w-full overflow-x-auto">
                                    <table class="w-full whitespace-no-wrap">
                                        <thead>
                                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                <th class="px-4 py-3"></th>
                                                <th class="px-4 py-3">Role</th>
                                                <th class="px-4 py-3">Nama Pengguna</th>
                                                <th class="px-4 py-3">Username</th>
                                                <th class="px-4 py-3">Kontak</th>
                                                <th class="px-4 py-3">Alamat</th>
                                                <th class="px-4 py-3">Password</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                            <?php
                                                if(count($data['users']) === 0) {
                                                    echo 'DATA PENGGUNA KOSONG';
                                                } else {
                                                    $no = 1;
                                                    foreach ($data['users'] as $user) {
                                            ?>
                                                        <tr class="text-gray-700 dark:text-gray-400">
                                                            <td class="px-4 py-3 text-sm"><?php echo $no ?></td>
                                                            <td class="px-4 py-3 text-sm"><?php echo $user['role_name'] ?></td>
                                                            <td class="px-4 py-3 text-sm"><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></td>
                                                            <td class="px-4 py-3 text-sm"><?php echo $user['username'] ?></td>
                                                            <td class="px-4 py-3 text-sm"><?php echo $user['phone'] ?></td>
                                                            <td class="px-4 py-3 text-sm"><?php echo $user['address'] ?></td>
                                                            <td class="px-4 py-3 text-sm"><?php if(strlen($user['password']) === 0) echo 'NO'; else echo 'YES'; ?></td>
                                                        </tr>
                                            <?php
                                                        $no++;
                                                    } // end foreach
                                                } // end else
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
