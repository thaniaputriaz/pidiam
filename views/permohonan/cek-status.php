
<h1>CEK STATUS PERMOHONAN</h1>
<form method="post" action="<?= BASE_URL ?>/permohonan/cek-status">
    <input type="text" name="id-permohonan" required>
    <button type="submit" name="cek-status">Cek Status</button>
</form>


<?php if (isset($showModal)): ?>
<div id="modalStatus" class="modal">
    <div class="modal-content">

        <h3>Status Permohonan</h3>
        <?php if($permohonan): ?>
        <p><strong>ID:</strong> <?= $permohonan['id_permohonan']?></p>
        <p><strong>Nama:</strong> <?= $permohonan['nama']?></p>
        <p><strong>Alamat:</strong> <?= $permohonan['alamat']?></p>
        <p><strong>Status:</strong> <?= $permohonan['status_permohonan']?></p>
        <?php else: ?>
        <p>Data tidak ditemukan</p>
        <?php endif; ?> 
        
        <button onclick="document.getElementById('modalStatus').style.display='none'">
            Tutup
        </button>
    </div>
</div>
<?php endif; ?>