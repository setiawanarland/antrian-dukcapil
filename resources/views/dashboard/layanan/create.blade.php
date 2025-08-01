<!-- Modal -->
<div class="modal fade" id="tambah-layanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Layanan Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/dashboard/layanan/" method="POST">
                <div class="modal-body">
                    @csrf

                    <div class="mb-3">
                        <label for="antrian_id" class="form-label">Pilih Antrian</label>
                        <select
                            class="form-control selectpicker show-tick show-menu-arrow  @error('antrian_id') is-invalid @enderror"
                            id="antrian_id" name="antrian_id" data-live-search="true" data-size="5">
                            @foreach ($antrians as $antrian)
                                <option value="{{ $antrian->id }}" data-tokens="{{ $antrian->nama_antrian }}">
                                    {{ $antrian->nama_antrian }}</option>
                            @endforeach
                        </select>
                        @error('antrian_id')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama_layanan" class="form-label">Nama Layanan</label>
                        <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror"
                            id="nama_layanan" name="nama_layanan">
                        @error('nama_layanan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 divPersyaratans">
                        <label for="persyaratans" class="form-label">Persyaratan</label>
                        <div class="entry input-group col-xs-3 mb-2">
                            <input class="form-control persyaratans" name="persyaratans[]" type="text"
                                placeholder="Tambah persyaratan" />
                            <span class="input-group-btn mr-1">
                                <button class="btn btn-success btn-add" type="button">
                                    <span class="fas fa-plus"></span>
                                </button>
                            </span>
                            @error('persyaratans')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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
        $('#tambah-layanan form').submit(function(event) {
            event.preventDefault();
            var form = $(this);
            var antrian_id = form.find('#antrian_id').val();
            var nama_layanan = form.find('#nama_layanan').val();
            var persyaratans = form.find('input[name^="persyaratans"]').val();

            var error = false;

            if (!antrian_id) {
                form.find('#antrian_id').addClass('is-invalid');
                error = true;
            } else {
                form.find('#antrian_id').removeClass('is-invalid');
            }

            $('input[name^="persyaratans"]').each(function() {
                if (!$(this).val()) {

                    $(this).addClass('is-invalid');
                    error = true;
                    return false;
                } else {
                    $(this).removeClass('is-invalid');
                    error = false;
                }
            });

            if (!nama_layanan) {
                form.find('#nama_layanan').addClass('is-invalid');
                error = true;
            } else {
                form.find('#nama_layanan').removeClass('is-invalid');
            }

            // if (!persyaratans) {
            //     form.find('.persyaratans').addClass('is-invalid');
            //     error = true;
            // } else {
            //     form.find('.persyaratans').removeClass('is-invalid');
            // }
            console.log(error);
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

        // Tambah field
        $(document).on('click', '.btn-add', function(e) {
            e.preventDefault();

            var controlForm = $('.divPersyaratans'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);

            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="fas fa-minus"></span>');
        }).on('click', '.btn-remove', function(e) {
            $(this).parents('.entry:first').remove();

            e.preventDefault();
            return false;
        });
    });
</script>
