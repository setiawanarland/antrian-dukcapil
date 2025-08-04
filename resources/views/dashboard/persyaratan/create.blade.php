<!-- Modal -->
<div class="modal fade" id="tambah-persyaratan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Persyaratan Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/persyaratan/" method="POST">
                <div class="modal-body">
                    @csrf

                    <div class="mb-3">
                        <label for="layanan_id" class="form-label">Pilih Layanan</label>
                        <select
                            class="form-control selectpicker show-tick show-menu-arrow  @error('layanan_id') is-invalid @enderror"
                            id="layanan_id" name="layanan_id" data-live-search="true" data-size="5">
                            @foreach ($layanans as $layanan)
                                <option value="{{ $layanan->id }}" data-tokens="{{ $layanan->nama_layanan }}">
                                    {{ $layanan->nama_layanan }}</option>
                            @endforeach
                        </select>
                        @error('layanan_id')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="persyaratan" class="form-label">Nama Persyaratan</label>
                        <input type="text" class="form-control @error('persyaratan') is-invalid @enderror"
                            id="persyaratan" name="persyaratan">
                        @error('persyaratan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tambah-persyaratan form').submit(function(event) {
            event.preventDefault();
            var form = $(this);
            var layanan_id = form.find('#layanan_id').val();
            var persyaratan = form.find('#persyaratan').val();

            var error = false;

            if (!layanan_id) {
                form.find('#layanan_id').addClass('is-invalid');
                error = true;
            } else {
                form.find('#layanan_id').removeClass('is-invalid');
            }

            if (!persyaratan) {
                form.find('#persyaratan').addClass('is-invalid');
                error = true;
            } else {
                form.find('#persyaratan').removeClass('is-invalid');
            }

            if (!error) {
                form.unbind('submit').submit();
            }

        })

        // Selectpicker init
        $('.selectpicker').selectpicker();

        $('#antrian').on('change', function() {
            console.log($(this).find(':selected').data('id'));
            console.log($(this).find(':selected').val());
        });
    });
</script>
