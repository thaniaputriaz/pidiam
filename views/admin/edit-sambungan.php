<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<div class="wrapper flex">
    <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>
    <main class="w-screen border pl-5 bg-background-light">
        <header class="border py-3 px-4 mt-4 mb-4">
            <h1 class="font-bold text-3xl">Update Sambungan Baru</h1>
        </header>
        <div class="w-full border pr-3 py-3">
            <div class="  p-5 rounded-xl ">
                <form action="<?= BASE_URL ?>/admin/update/<?= $permohonan['id_permohonan']?>" method="post">
                    <div class="grid">
                        <div class="space-y-2  mb-3">
                            <label for="nik" class="mx-3 font-semibold">NIK</label>
                            <div class="relative">
                                
                                <input type="text" name="nik" class=" border rounded-xl px-3 py-1 w-100" value="<?= $permohonan['nik']?>" maxlength="16">
                            </div>
                        </div>
                        <div class="space-y-2  mb-3r">
                            <label for="" class="mx-3 font-semibold">Nomor hp</label>
                            <div class="relative">
                                <input type="text" class=" border rounded-xl px-3 py-1 w-100" value="<?= $permohonan['no_hp']?>" maxlength="13" name="no_hp">
                            </div>
                        </div>
                    </div>
                    <div class="space-y-2 mb-3">
                        <label for="" class="mx-3 font-semibold">Nama Lengkap</label>
                        <div class="relative">
                            
                            <input type="text" class=" border rounded-xl px-3 py-1 w-100" value="<?= $permohonan['nama']?>" name="nama" >
                        </div>
                    </div>
                    <div class="space-y-2  mb-3">
                        <label for="" class="mx-3 font-semibold">Alamat Lengkap</label>
                        <div class="relative">
                            
                            <input type="text" class=" border rounded-xl px-3 py-1 w-100" value="<?= $permohonan['alamat']?>" name="alamat">
                        </div>
                    </div>
                    <div class="space-y-2  mb-3">
                        <label for="" class="mx-3 font-semibold">Status Permohonan</label>
                        <div class="relative" class=" border rounded-xl px-3 py-1 w-100" value="<?= $permohonan['status_permohonan']?>">
                            
                            <select name="status_permohonan" id="status">
                                <?php
                                $status = ['DIAJUKAN','DISURVEI','MENUNGGU PEMBAYARAN','DIBAYAR','DIPASANG','AKTIF','DITOLAK'];
                                foreach ($status as $s) :;
                                ?>
                                <option value="<?= $s ?>"
                                    <?= $permohonan['status_permohonan'] == $s ? 'selected' : ''?>>
                                    <?= $s ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="pt-4 border">
                        <button type="submit" class=" bg-blue-700 text-white px-5 py-2 rounded-xl cursor-pointer" >
                            
                            <span>Send</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</div>
