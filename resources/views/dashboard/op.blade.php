@extends('dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="col-xl">
            <div class="card shadow mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Antrian Masuk Layanan</h6>
                    <button type="submit" class="btn btn-primary reset-confirm" data-form="ok"><i
                            class="bi bi-arrow-clockwise"></i> Reset Antrian</button>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="text-align: center">
                                <tr>
                                    <th>Nomor Antrian</th>
                                    <th>Mic</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center">
                                <!-- Menampilkan Antrian Masuk yang sesuai dengan tanggal saat ini -->
                                @if (Str::contains(auth()->user()->name, 'umum'))
                                    <tr id="tr-umum">
                                        <td id="umum" style="font-size: 20px; font-weight: bold;">
                                        </td>
                                        <td>

                                            <body onunload="responsiveVoice.cancel();">
                                                <button id="mic-umum" class="btn btn-primary" type="button"
                                                    value="Play"><i class="bi bi-mic"></i></button>
                                            </body>
                                        </td>
                                        <td>
                                            <!-- Button Ada untuk menghapus data antrian jika User yang dipanggil ada -->
                                            <button id="ada-umum" type="button" class="btn btn-success"><i
                                                    class="bi bi-check2-all"></i>
                                                Ada</button>

                                            <!-- MButton Lewati jika pengambil antrian belum datang maka akan diurutkan ke bawah lagi -->
                                            {{-- <button id="lewat-umum" type="button" class="btn btn-danger"><i
                                                    class="bi bi-skip-forward"></i>
                                                Lewati</button> --}}
                                        </td>
                                    </tr>
                                @endif
                                @if (Str::contains(auth()->user()->name, 'ktp'))
                                    <tr id="tr-ktp">
                                        <td id="ktp" style="font-size: 20px; font-weight: bold;">
                                        </td>
                                        <td>

                                            <body onunload="responsiveVoice.cancel();">
                                                <button id="mic-ktp" class="btn btn-primary" type="button"
                                                    value="Play"><i class="bi bi-mic"></i></button>
                                            </body>
                                        </td>
                                        <td>
                                            <!-- Button Ada untuk menghapus data antrian jika User yang dipanggil ada -->
                                            <button id="ada-ktp" type="button" class="btn btn-success"><i
                                                    class="bi bi-check2-all"></i>
                                                Ada</button>

                                            <!-- MButton Lewati jika pengambil antrian belum datang maka akan diurutkan ke bawah lagi -->
                                            {{-- <button id="lewat-ktp" type="button" class="btn btn-danger"><i
                                                    class="bi bi-skip-forward"></i>
                                                Lewati</button> --}}
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <select hidden="">
    </select>
    <audio id="tingtong" src="/dashboardAssets/1.mp3"></audio>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <script>
        var trUmum = $('#tr-umum');
        var tdUmum = $('#umum');
        var antrianUmum = 'A-1';
        tdUmum.text(antrianUmum);

        var trKtp = $('#tr-ktp');
        var tdKtp = $('#ktp');
        var antrianKtp = 'B-1';
        tdKtp.text(antrianKtp);

        function increment(str) {
            var count = str.match(/\d*$/);
            antrian = str.substr(0, count.index) + (++count[0]);
            return antrian;
        };

        $("#ada-umum").click(function(e) {
            let incrementCode = increment(antrianUmum)
            tdUmum.text(incrementCode);
            antrianUmum = incrementCode;
        });

        $("#ada-ktp").click(function(e) {
            let incrementCode = increment(antrianKtp)
            tdKtp.text(incrementCode);
            antrianKtp = incrementCode;
        });

        $("#mic-umum").click(function(e) {
            play();
            callAntrian(antrianUmum);
        });

        $("#mic-umum").blur(function(e) {
            responsiveVoice.cancel();
        });

        $("#mic-ktp").click(function(e) {
            play();
            callAntrian(antrianKtp);
        });

        $("#mic-ktp").blur(function(e) {
            responsiveVoice.cancel();
        });

        function play() {
            var bell = document.getElementById('tingtong');

            // mainkan suara bell antrian
            bell.pause();
            bell.currentTime = 0;
            bell.play();

            // set delay antara suara bell dengan suara nomor antrian
            return durasi_bell = bell.duration * 770;
        }

        function callAntrian(antrian) {
            // mainkan suara nomor antrian
            return setTimeout(function() {
                let voice = antrian.includes("A") ? responsiveVoice.speak(
                    `Nomor Antrian ${antrian} Menuju ke loket 1`,
                    "Indonesian Female", {
                        rate: 0.9,
                        pitch: 1,
                        volume: 2
                    }) : responsiveVoice.speak(`Nomor Antrian ${antrian} Menuju ke loket 6`,
                    "Indonesian Female", {
                        rate: 0.9,
                        pitch: 1,
                        volume: 2
                    });
            }, durasi_bell);
        }
    </script>
@endsection
