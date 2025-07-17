/**
* Template Name: Gp
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

 /**
   * NIK validation
   */
  function formatNIK(input) {
    // Hapus semua karakter selain angka
    var nik = document.getElementById('nik').input.value.replace(/\D/g, '');

    // Batasi NIK menjadi maksimal 16 digit
    if (nik.length > 16) {
        nik = nik.slice(0, 16);
    }

    // Jika kurang dari 16 digit, tambahkan tanda kurang (-) untuk menunjukkan kekurangan digit
    if (nik.length < 16) {
        nik = nik + '-'.repeat(16 - nik.length);
    }

    // Tampilkan hasil pemrosesan
    input.value = nik;
}
 

})()