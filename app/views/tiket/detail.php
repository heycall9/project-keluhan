	<div class="container">
		<div class="">
			<?php Flasher::flash(); ?>
		</div>
	</div>
<div class="container w-75 mt-5 rounded p-4" style="background-color:gray; height: fit-content;">            

    <h2 class="text-light mb-0"> #<?= $data["ticket"]["id"] ?> </h2>
    <div class="d-flex">
        <h2 class="text-light mb-0"> <?= strtoupper(
            $data["ticket"]["topic"]
        ) ?> </h2>
        <div class="btn btn-danger ms-auto px-5 mx-2">close</div>
    </div>
    <div class="mt-4 text-light row" >
        <div class="col">
            <div class="row mt-3">
                <h5> Informasi status tiket</h5>
            </div>
            <div class="row">
                <h5><?= $data["ticket"]["status"] ?></h5>
            </div>
            <div class="row mt-3">
                <h5>Program Studi</h5>
            </div>
            <div class="row">
                <h5><?= $data["ticket"]["program_studi"] ?></h5>
            </div>
            <div class="row mt-3">
                <h5>Dibuat pada</h5>
            </div>
            <div class="row">
                <h5><?= $data["ticket"]["time_created"] ?></h5>
            </div>

        </div>
        <div class="col">
            <div class="row mt-3">
                <h5> Informasi mahasiswa</h5>
            </div>
            <div class="row">
                <h5><?= $data["ticket"]["fullname"] ?></h5>
            </div>
            <div class="row mt-3">
                <h5>Email</h5>
            </div>
            <div class="row">
                <h5><?= $data["ticket"]["email"] ?></h5>
            </div>
            <div class="row mt-3">
                <h5>No HP</h5>
            </div>
            <div class="row">
                <h5><?= $data["ticket"]["no_hp"] ?></h5>
            </div>

        </div>
        <div class="col"></div>
        <div class="col d-flex">
            <button type="button" class="btn btn-success mt-auto ms-auto me-3" data-bs-toggle="modal" data-bs-target="#teruskanModal">Teruskan Tiket</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="teruskanModal" tabindex="-1" aria-labelledby="teruskanModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= BASEURL ?>/TeruskanTiket/teruskanTiket" method="post" id="formTujuan" class="modal-body">
                <label class="text-dark" for="tujuan"> Pilih tujuan: </label>
                <select id="tujuan" name="tujuan">
                <?php foreach ($data["pimpinan"] as $pimpinan): ?>
                    <option value="<?= $pimpinan["id"] ?>">
                <?= $pimpinan["fullname"] ?>
                </option>
                <?php endforeach; ?>
                </select>
                <input type="hidden" name="idTiket" value="<?= $data["ticket"]["id"] ?>">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Teruskan</button>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>

<!-- Modal Cancel Button -->
<div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Leave Site?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Changes you made may not be saved.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="<?= BASEURL ?>" class="btn btn-danger" role="button">Leave</a>        
      </div>
    </div>
  </div>
</div>
