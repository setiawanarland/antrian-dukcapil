<!-- Modal Pengambilan Nomor Antrian -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('store.antrian') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="antrian_id" id="antrian_id" value="{{ $antrian->id }}">

          <!-- <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Kedatangan</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" placeholder="Tanggal Antrian">
            @error('tanggal')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div> -->

          <div class="mb-3">
            <label for="nama_lengkap" class="form-label">NIK</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan 16 digit NIK">
            @error('nama_lengkap')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap">
            @error('nama_lengkap')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
            @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="nomorhp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" id="nomorhp" name="nomorhp" placeholder="Masukkan nomor hp aktif">
            @error('nomorhp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <!-- <div class="pricing8 py-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                  <h3 class="mb-3">Pricing to make your Work Effective</h3>
                  <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
                </div>
              </div>

              <div class="row mt-3">

                <div class="col-md-4 ml-auto pricing-box align-self-center">
                  <div class="card mb-4">
                    <div class="card-body p-4 text-center">
                      <h5 class="font-weight-normal">Regular Plan</h5>
                      <sup>$</sup><span class="text-dark display-5">39</span>
                      <h6 class="font-weight-light font-14">MONTHLY</h6>
                      <p class="mt-4">For developers who only require the theme HTML/CSS files</p>
                      <ul class="list-group">
                        <li class="list-group-item">1 team member</li>
                        <li class="list-group-item">HTML/CSS</li>
                        <li class="list-group-item list-group-item-danger">Full source file</li>
                        <li class="list-group-item list-group-item-danger">Email support (24 hour turnaround)</li>
                        <li class="list-group-item list-group-item-danger">Dedicated priority</li>
                      </ul>
                    </div>
                    <a class="btn btn-info-gradiant p-3 btn-block border-0 text-white" href="/checkout">CHOOSE PLAN </a>
                  </div>
                </div>

                <div class="col-md-4 ml-auto pricing-box align-self-center">
                  <div class="card mb-4">
                    <div class="card-body p-4 text-center">
                      <h5 class="font-weight-normal">Master Plan</h5>
                      <sup>$</sup><span class="text-dark display-5">49</span>
                      <h6 class="font-weight-light font-14">MONTHLY</h6>
                      <p class="mt-4">For developers who want access to the original source files</p>
                      <ul class="list-group">
                        <li class="list-group-item">1 team member</li>
                        <li class="list-group-item">HTML/CSS</li>
                        <li class="list-group-item">Full source file</li>
                        <li class="list-group-item list-group-item-danger">Email support (24 hour turnaround)</li>
                        <li class="list-group-item list-group-item-danger">Dedicated priority</li>
                      </ul>
                    </div>
                    <a class="btn btn-danger-gradiant p-3 btn-block border-0 text-white" href="/checkout">CHOOSE PLAN </a>
                  </div>
                </div>

                <div class="col-md-4 ml-auto pricing-box align-self-center">
                  <div class="card mb-4">
                    <div class="card-body p-4 text-center">
                      <h5 class="font-weight-normal">Premium Plan</h5>
                      <sup>$</sup><span class="text-dark display-5">69</span>
                      <h6 class="font-weight-light font-14">MONTHLY</h6>
                      <p class="mt-4">For small teams creating products that require end users to pay</p>
                      <ul class="list-group">
                        <li class="list-group-item">15 team member</li>
                        <li class="list-group-item">HTML/CSS</li>
                        <li class="list-group-item">Full source file</li>
                        <li class="list-group-item">Email support (24 hour turnaround)</li>
                        <li class="list-group-item">Dedicated priority</li>
                      </ul>
                    </div>
                    <a class="btn btn-info-gradiant p-3 btn-block border-0 text-white" href="/checkout">CHOOSE PLAN </a>
                  </div>
                </div>

              </div>
            </div>
          </div> -->


          <div class="modal-footer">
            <button id="btnSimpan" type="submit" class="btn btn-primary float-end">Simpan</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>

<!-- Script untuk validasi jika form input belum terisi -->
<script>
  $(document).ready(function() {
    $('#exampleModal form').submit(function(event) {
      event.preventDefault();
      var form = $(this);
      var nama_lengkap = form.find('#nama_lengkap').val();
      var alamat = form.find('#alamat').val();
      var nomorhp = form.find('#nomorhp').val();
      var error = false;

      if (!nama_lengkap) {
        form.find('#nama_lengkap').addClass('is-invalid');
        error = true;
      } else {
        form.find('#nama_lengkap').removeClass('is-invalid');
      }

      if (!alamat) {
        form.find('#alamat').addClass('is-invalid');
        error = true;
      } else {
        form.find('#alamat').removeClass('is-invalid');
      }

      if (!nomorhp) {
        form.find('#nomorhp').addClass('is-invalid');
        error = true;
      } else {
        form.find('#nomorhp').removeClass('is-invalid');
      }

      if (!error) {
        form.unbind('submit').submit();
      }
    });
  });
</script>