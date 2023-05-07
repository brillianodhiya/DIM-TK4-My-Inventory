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
                        <h2
                            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                        >
                            Dashboard
                        </h2>

                        <!-- New Table -->
                        <div
                            class="border-1 bg-white p-4 rounded-lg dark:bg-gray-800 shadow-xs"
                        >
                            <h4 class="mb-4 font-semibold text-gray-700 dark:text-gray-200">
                                Keuntungan
                            </h4>
                            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                                <div class="w-full overflow-x-auto">
                                    <table class="w-full whitespace-no-wrap">
                                        <thead>
                                        <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                                        >
                                            <th class="px-4 py-3">Id</th>
                                            <th class="px-4 py-3">Nama Pengguna</th>
                                            <th class="px-4 py-3">Keuntungan</th>
                                        </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                                        >
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3 text-sm">1</td>

                                            <td class="px-4 py-3 text-sm">Hans Burger</td>
                                            <td class="px-4 py-3 text-sm">Rp 200.000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div
                            class="border-1 bg-white p-4 rounded-lg mt-4 dark:bg-gray-800 shadow-xs"
                        >
                            <h4 class="mb-4 font-semibold text-gray-700 dark:text-gray-200">
                                Stock Barang
                            </h4>
                            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                                <div class="w-full overflow-x-auto">
                                    <table class="w-full whitespace-no-wrap">
                                        <thead>
                                        <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                                        >
                                            <th class="px-4 py-3">Id</th>
                                            <th class="px-4 py-3">Nama Barang</th>
                                            <th class="px-4 py-3">Stock</th>
                                        </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                                        >
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3 text-sm">1</td>
                                            <td class="px-4 py-3 text-sm">Laptop</td>
                                            <td class="px-4 py-3 text-sm">4</td>
                                        </tr>
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
