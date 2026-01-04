<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<div class="wrapper flex">
    <?php require_once __DIR__ . '/../layouts/navbar.php'; ?>
    <main>
        <div class="relative px-4 bg-background-light">
            <div class="mt-8 px-5 py-4  border">
                <h1 class=" font-bold text-3xl text-slate-900">Data Permohonan Sambungan Baru</h1>
            </div>
            <main class="  mt-4">
                <table class="border px-2 rounded-full">
                    <thead>
                        <tr class="bg-blue-300 py-3 ">
                            <th class="px-2 py-2 text-center">No</th>
                            <th class="px-2 py-2 text-center">ID Permohonan</th>
                            <th class="px-2 py-2 text-center">NIK</th>
                            <th class="px-2 py-2 text-center">Nama</th>
                            <th class="w-40 px-2 py-2 text-center">No_Hp</th>
                            <th class="px-2 py-2 text-center">alamat</th>
                            <th class="px-2 py-2 text-center">Status Permohonan</th>
                            <th class="px-2 py-2 text-center">Tgl Permohonan</th>
                            <th class="px-2 py-2 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($data as $d) ?>
                        <tr>
                            <td class="text-center py-2"><?= $i++ ?>.</td>
                            <td class="text-center py-2"><?= $d['id_permohonan'] ?></td>
                            <td class="text-center py-2"><?= $d['nik'] ?></td>
                            <td class="text-center py-2"><?= $d['nama'] ?></td>
                            <td class="text-center py-2"><?= $d['no_hp'] ?></td>
                            <td class="text-center py-2"><?= $d['alamat'] ?></td>
                            <td class="text-center py-2"><?= $d['status_permohonan'] ?></td>
                            <td class="text-center py-2"><?= $d['tanggal_permohonan'] ?></td>
                            <td class="text-center py-2">
                                <a href="">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </main>

</div> 



<main>

</main>