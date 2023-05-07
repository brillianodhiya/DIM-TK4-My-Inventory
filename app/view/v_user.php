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

                    // Show View
                    if($data['pageTitle'] == 'Daftar User') {
                ?>
                    <!-- List User  -->
                    <main class="h-full overflow-y-auto">
                        <div class="container px-6 mx-auto grid">
                            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                                Daftar semua pengguna yang terdaftar
                            </h2>

                            <!-- New Table -->
                            <div class="w-full overflow-x-auto border-1 bg-white p-4 rounded-lg dark:bg-gray-800 shadow-xs">
                                <a
                                    href="<?php echo $BASE_URL . 'addUser'; ?>"
                                    class="float-right mb-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                >
                                    Tambah User
                                </a>
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
                                                    <th class="px-4 py-3">Password</th>
                                                    <th class="px-4 py-3">Aksi</th>
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
                                                                <td class="px-4 py-3 text-sm"><?php if(strlen($user['password']) === 0) echo 'NO'; else echo 'YES'; ?></td>
                                                                <td class="px-4 py-3 text-sm">
                                                                    <div class="flex gap-2">
                                                                        <a
                                                                            href="<?php echo $BASE_URL . 'editUser?idUser=' . $user['id_user']; ?>"
                                                                            class="text-sm font-medium px-4 py-2 bg-gray-100 rounded-lg text-black shadow-xs"
                                                                        >
                                                                            Ubah
                                                                        </a>
                                                                        <a
                                                                            href="<?php echo $BASE_URL . 'deleteUser?idUser=' . $user['id_user']; ?>"
                                                                            class="text-sm font-medium px-4 py-2 bg-red-600 rounded-lg text-white shadow-xs hover\:bg-gray-100"
                                                                        >
                                                                            Hapus
                                                                        </a>
                                                                    </div>
                                                                </td>
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

                <?php
                    } else if($data['pageTitle'] == 'Tambah User' || $data['pageTitle'] == 'Ubah User') {
                        $userData = [];
                        $idUser = '';
                        $formAction = $BASE_URL . 'saveUser';
                        $isEditMode = false;

                        if($data['pageTitle'] == 'Ubah User') {
                            $userData = $data['user'];
                            $idUser = $data['user']['id_user'];
                            $formAction = $BASE_URL . 'updateUser';
                            $isEditMode = true;
                        }
                ?>
                    <!-- Add User -->
                    <main class="h-full overflow-y-auto">
                        <div class="container px-6 mx-auto grid">
                            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                                Form Tambah User
                            </h2>

                            <!-- New Table -->
                            <div class="border-1 bg-white p-4 rounded-lg dark:bg-gray-800 shadow-xs">
                                <div class="w-full overflow-hidden rounded-lg">
                                    <form action="<?php echo $formAction; ?>" method="post" onsubmit="checkPassword()">
                                        <label class="block text-sm">
                                            <span class="text-gray-700 dark:text-gray-400">Nama Depan</span>
                                            <input type="hidden" name="input_id_user" value="<?php echo $idUser; ?>" />
                                            <input
                                                name="input_first_name"
                                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Isi nama depan pengguna..."
                                                type="text"
                                                value="<?php if($isEditMode) echo $userData['first_name']; ?>"
                                                required
                                            />
                                        </label>

                                        <label class="block text-sm mt-4">
                                            <span class="text-gray-700 dark:text-gray-400">Nama Belakang</span>
                                            <input
                                                name="input_last_name"
                                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Isi nama belakang pengguna..."
                                                type="text"
                                                value="<?php if($isEditMode) echo $userData['last_name']; ?>"
                                                required
                                            />
                                        </label>

                                        <label class="block text-sm mt-4">
                                            <span class="text-gray-700 dark:text-gray-400">Nomor Telepon</span>
                                            <input
                                                name="input_phone"
                                                type="number"
                                                minlength="8"
                                                maxlength="15"
                                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Isi nomor telepon pengguna..."
                                                oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                value="<?php if($isEditMode) echo $userData['phone']; ?>"
                                                required
                                            />
                                        </label>

                                        <label class="block text-sm mt-4">
                                            <span class="text-gray-700 dark:text-gray-400">Alamat</span>
                                            <input
                                                name="input_address"
                                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Isi alamat pengguna..."
                                                type="text"
                                                value="<?php if($isEditMode) echo $userData['address']; ?>"
                                                required
                                            />
                                        </label>

                                        <label class="block mt-4 text-sm">
                                            <span class="text-gray-700 dark:text-gray-400">
                                              Role
                                            </span>
                                            <select name="role" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                <option value="" disabled selected>Pilih salah satu...</option>
                                                <?php
                                                    foreach ($data['roles'] as $role) {
                                                        $isRoleSame = ($userData['id_role'] === $role['id_role']);
                                                ?>
                                                    <option value="<?php echo $role['id_role'] ?>" <?php if($isEditMode && $isRoleSame) echo 'selected' ?>><?php echo $role['role_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </label>

                                        <label class="block text-sm mt-4">
                                            <span class="text-gray-700 dark:text-gray-400">Username</span>
                                            <input
                                                name="input_username"
                                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Isi username pengguna..."
                                                type="text"
                                                oninput="this.value = this.value.replace(/\s/g, '');"
                                                value="<?php if($isEditMode) echo $userData['username']; ?>"
                                                required
                                            />
                                        </label>

                                        <label class="block text-sm mt-4">
                                            <span class="text-gray-700 dark:text-gray-400">Password</span>
                                            <input
                                                name="input_password"
                                                type="password"
                                                minlength="6"
                                                id="password1"
                                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Isi password pengguna..."
                                                value="<?php if($isEditMode) echo $userData['password']; ?>"
                                                required
                                            />
                                        </label>

                                        <label class="block text-sm mt-4">
                                            <span class="text-gray-700 dark:text-gray-400">Konfirmasi Password</span>
                                            <input
                                                name="input_password_confirm"
                                                type="password"
                                                minlength="6"
                                                id="password2"
                                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                placeholder="Isi ulang password pengguna..."
                                                value="<?php if($isEditMode) echo $userData['password']; ?>"
                                                required
                                            />
                                        </label>

                                        <!-- button  -->
                                        <div class="flex justify-between float-right mt-8 gap-2">
                                            <a
                                                href="<?php echo $BASE_URL . 'user'; ?>"
                                                class="text-sm font-medium px-4 py-2 bg-gray-100 rounded-lg text-black shadow-xs"
                                            >
                                                Batalkan
                                            </a>
                                            <button
                                                name="btn_submit"
                                                type="submit"
                                                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                            >
                                                <?php if($isEditMode) echo 'Ubah Data'; else echo 'Simpan Data'; ?>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                <?php
                    }
                ?>
            </div>
        </div>

        <script type="text/javascript">
            function checkPassword() {
                var password = document.getElementById("password1").value;
                var rePassword = document.getElementById("password2").value;

                if(password !== rePassword) {
                    alert("Password tidak sama dengan konfirmasi password. Masukkan konfirmasi password yang sesuai.");
                    return false;
                }
            }
        </script>
    </body>
</html>
