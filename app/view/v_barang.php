<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <?php
        // Head
        include 'head.php'
    ?>
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
                            Barang
                        </h2>

                        <!-- New Table -->
                        <div class="w-full overflow-x-auto border-1 bg-white p-4 rounded-lg dark:bg-gray-800 shadow-xs">
                            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                                <div class="w-full overflow-x-auto">
                                    <table class="w-full whitespace-no-wrap">
                                        <thead>
                                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="px-4 py-3"></th>
                                            <th class="px-4 py-3">Nama Barang</th>
                                            <th class="px-4 py-3">Satuan</th>
                                            <th class="px-4 py-3">Admin</th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                            <?php
                                                $no = 1;
                                                foreach ($data['items'] as $item) {
                                            ?>
                                                    <tr class="text-gray-700 dark:text-gray-400">
                                                        <td class="px-4 py-3 text-sm"><?php echo $no; ?></td>
                                                        <td class="px-4 py-3 text-sm"><?php echo $item['name']; ?></td>
                                                        <td class="px-4 py-3 text-sm"><?php echo $item['unit']; ?></td>
                                                        <td class="px-4 py-3 text-sm"><?php echo $item['admin_name']; ?></td>
                                                    </tr>
                                            <?php
                                                    $no++;
                                                }
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
