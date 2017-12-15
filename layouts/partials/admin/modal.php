<!-- Modal -->
<div id="add_project" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Tambah Paket</h4>
            </div>
            <div class="modal-body">
                <form action="../admin/proses/tambah-paket.php" method="POST" role="form">
                    <input type="text" placeholder="Nama Paket" name="nama_paketwisata">
                    <input type="text" placeholder="Lokasi" name="alamat_wisata">
                    <input type="text" placeholder="Harga" name="harga">
                    <textarea placeholder="Deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="add-project" data-dismiss="modal">Simpan</button>
            </div>
                </form>
        </div>
    </div>
</div>