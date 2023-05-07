<aside
    class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
>
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
        >
            Team 2 DIM Project
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <a
                    class="inline-flex items-center w-full text-sm font-semibold <?php if($data['pageTitle'] == 'Beranda') echo 'text-gray-800' ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="<?php echo $BASE_URL; ?>"
                >
                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                        <path
                            d="M23.121,9.069,15.536,1.483a5.008,5.008,0,0,0-7.072,0L.879,9.069A2.978,2.978,0,0,0,0,11.19v9.817a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V11.19A2.978,2.978,0,0,0,23.121,9.069ZM15,22.007H9V18.073a3,3,0,0,1,6,0Zm7-1a1,1,0,0,1-1,1H17V18.073a5,5,0,0,0-10,0v3.934H3a1,1,0,0,1-1-1V11.19a1.008,1.008,0,0,1,.293-.707L9.878,2.9a3.008,3.008,0,0,1,4.244,0l7.585,7.586A1.008,1.008,0,0,1,22,11.19Z"
                        />
                    </svg>

                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                    class="inline-flex items-center w-full text-sm font-semibold <?php if($data['pageTitle'] == 'Daftar User') echo 'text-gray-800' ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="<?php echo $BASE_URL . 'user'; ?>"
                >
                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                        <path
                            d="m7.5 13a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5zm7.5 17v-.5a7.5 7.5 0 0 0 -15 0v.5a1 1 0 0 0 2 0v-.5a5.5 5.5 0 0 1 11 0v.5a1 1 0 0 0 2 0zm9-5a7 7 0 0 0 -11.667-5.217 1 1 0 1 0 1.334 1.49 5 5 0 0 1 8.333 3.727 1 1 0 0 0 2 0zm-6.5-9a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5z"
                        />
                    </svg>

                    <span class="ml-4">Data User</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="<?php echo $BASE_URL . 'barang'; ?>"
                >
                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                        <path
                            d="M19.5,16c0,.553-.447,1-1,1h-2c-.553,0-1-.447-1-1s.447-1,1-1h2c.553,0,1,.447,1,1Zm4.5-1v5c0,2.206-1.794,4-4,4H4c-2.206,0-4-1.794-4-4v-5c0-2.206,1.794-4,4-4h1V4C5,1.794,6.794,0,9,0h6c2.206,0,4,1.794,4,4v7h1c2.206,0,4,1.794,4,4ZM7,11h10V4c0-1.103-.897-2-2-2h-6c-1.103,0-2,.897-2,2v7Zm-3,11h7V13H4c-1.103,0-2,.897-2,2v5c0,1.103,.897,2,2,2Zm18-7c0-1.103-.897-2-2-2h-7v9h7c1.103,0,2-.897,2-2v-5Zm-14.5,0h-2c-.553,0-1,.447-1,1s.447,1,1,1h2c.553,0,1-.447,1-1s-.447-1-1-1ZM14,5c0-.553-.447-1-1-1h-2c-.553,0-1,.447-1,1s.447,1,1,1h2c.553,0,1-.447,1-1Z"
                        />
                    </svg>

                    <span class="ml-4">Barang</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="<?php echo $BASE_URL . 'sales'; ?>"
                >
                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                        <path
                            d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077ZM21.4,6.178l-.786,4.354A3,3,0,0,1,17.657,13H5.419L4.478,5H20.41A1,1,0,0,1,21.4,6.178Z"
                        />
                        <circle cx="7" cy="22" r="2"/>
                        <circle cx="17" cy="22" r="2"/>
                    </svg>
                    <span class="ml-4">Penjualan</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <a
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="<?php echo $BASE_URL . 'members'; ?>"
                >
                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                        <path
                            d="m7.5 13a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5zm7.5 17v-.5a7.5 7.5 0 0 0 -15 0v.5a1 1 0 0 0 2 0v-.5a5.5 5.5 0 0 1 11 0v.5a1 1 0 0 0 2 0zm9-5a7 7 0 0 0 -11.667-5.217 1 1 0 1 0 1.334 1.49 5 5 0 0 1 8.333 3.727 1 1 0 0 0 2 0zm-6.5-9a4.5 4.5 0 1 1 4.5-4.5 4.505 4.505 0 0 1 -4.5 4.5zm0-7a2.5 2.5 0 1 0 2.5 2.5 2.5 2.5 0 0 0 -2.5-2.5z"
                        />
                    </svg>
                    <span class="ml-4">Pelanggan</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <a
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="<?php echo $BASE_URL . 'purchasing'; ?>"
                >
                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                        <circle cx="7" cy="22" r="2"/>
                        <circle cx="17" cy="22" r="2"/>
                        <path
                            d="M23,3H21V1a1,1,0,0,0-2,0V3H17a1,1,0,0,0,0,2h2V7a1,1,0,0,0,2,0V5h2a1,1,0,0,0,0-2Z"
                        />
                        <path
                            d="M21.771,9.726a.994.994,0,0,0-1.162.806A3,3,0,0,1,17.657,13H5.418l-.94-8H13a1,1,0,0,0,0-2H4.242L4.2,2.648A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.829-2H17.657a5,5,0,0,0,4.921-4.112A1,1,0,0,0,21.771,9.726Z"
                        />
                    </svg>

                    <span class="ml-4">Pembelian</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <a
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="<?php echo $BASE_URL . 'suppliers'; ?>"
                >
                    <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                        <path
                            d="M19,5H16.9A5.009,5.009,0,0,0,12,1H5A5.006,5.006,0,0,0,0,6v9a4,4,0,0,0,3.061,3.877,3.5,3.5,0,1,0,6.9.123h4.082a3.465,3.465,0,0,0-.041.5,3.5,3.5,0,0,0,7,0,3.4,3.4,0,0,0-.061-.623A4,4,0,0,0,24,15V10A5.006,5.006,0,0,0,19,5Zm3,5v1H17V7h2A3,3,0,0,1,22,10ZM2,15V6A3,3,0,0,1,5,3h7a3,3,0,0,1,3,3V17H4A2,2,0,0,1,2,15Zm6,4.5a1.5,1.5,0,0,1-3,0,1.418,1.418,0,0,1,.093-.5H7.907A1.418,1.418,0,0,1,8,19.5ZM17.5,21A1.5,1.5,0,0,1,16,19.5a1.41,1.41,0,0,1,.093-.5h2.814a1.41,1.41,0,0,1,.093.5A1.5,1.5,0,0,1,17.5,21ZM20,17H17V13h5v2A2,2,0,0,1,20,17Z"
                        />
                    </svg>

                    <span class="ml-4">Supplier</span>
                </a>
            </li>
        </ul>
    </div>
</aside>