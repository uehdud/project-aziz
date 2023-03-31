<div>
    <button class="btn btn-primary" wire:click="openModal">New</button>
   <!-- Modal -->
   <div class="modal fade" id="modalOverlay" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Nama Kategori</label>
                        <input wire:model.defer="category_name" type="text" id="nameBasic" class="form-control"
                            placeholder="masukan nama kategori" />
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Tutup
                </button>
                <button wire:click="addCategory" type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
</div>
