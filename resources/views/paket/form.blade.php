<!-- Modal -->
<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="{{ route('paket.store') }}" >
            @csrf
            <div class="mb-3">
              <label for="id_paket" class="form-label">idPaket</label>
              <input name="idPaket" for="text" class="form-control" id="paket" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="id_outlet" class="form-label">id Outlet</label>
              <input name="id Outlet" for="text" class="form-control" id="id_outlet" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input name="jenis" for="text" class="form-control" id="jenis" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
              <label for="nama_paket" class="form-label">Nama Paket</label>
              <input name="nama_paket" for="email" class="form-control" id="nama_paket" aria-describedby="emailHelp">

            <div class="mb-3">
              <label for="harga" class="form-label">Harga </label>
              <input name="harga" for="email" class="form-control" id="harga" aria-describedby="emailHelp">

            <div class="mb-3">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
           </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
