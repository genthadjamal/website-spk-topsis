// $("#bahan, #finishing, #panjang, #lebar, #jumlah").on("input", () => {

//     // menyimpan value ke variabel
//     const bahan = $("#bahan").val();
//     const finishing = $("#finishing").val();
//     const panjang = $("#panjang").val();
//     const lebar = $("#lebar").val();
//     const jumlah = $("#jumlah").val();

//     // perhitungan hasil
//     const ukuran = panjang * lebar;
//     const result = bahan * 1;
//     const hasil = ukuran * result;

//     $("#hasilpanjang").html(panjang);
//     $("#hasillebar").html(lebar);
//     $("#hasiluk").html(ukuran);
//     $("#hasiljumlah").html(jumlah);
//     $("#hasilfinishing").html(finishing);

//     // mengubah value total 
//     // $("#harga").val(result);
//     // $("#total").html(hasil * jumlah);

//     $('#hasilbahan').autoNumeric('init');
//     $('#hasilbahan').autoNumeric('set', bahan);

//     $('#harga').autoNumeric('init');
//     $('#harga').autoNumeric('set', result);

//     $('#hasiltotal').autoNumeric('init');
//     $('#hasiltotal').autoNumeric('set', ((hasil * jumlah) / 10000));

//     $('#total').autoNumeric('init');
//     $('#total').autoNumeric('set', ((hasil * jumlah) / 10000));

//     $('#harga, #hasilbahan, #hasiltotal, #total').autoNumeric('update', {
//         aSep: '.',
//         aDec: ',',
//         aSign: 'Rp. '
//     });

// });

// const jumlah = document.getElementById("jumlah");
// const bahan = document.getElementById("bahan");
// const finishing = document.getElementById("finishing");

// const total = document.getElementById("harga");

// [bahan, finishing, jumlah].forEach((item) => {
//     item.addEventListener("input", (event) => {
//         const result = bahan.value * 1 + finishing.value * 1;
//         total.value = result * jumlah.value;
//     });
// });



// var rupiah = document.getElementById("total");
// rupiah.addEventListener("keyup", function (e) {
//     // tambahkan 'Rp.' pada saat form di ketik
//     // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
//     rupiah.value = formatRupiah(this.value, "Rp. ");
// });

// /* Fungsi formatRupiah */
// function formatRupiah(angka, prefix) {
//     var number_string = angka.replace(/[^,\d]/g, "").toString(),
//         split = number_string.split(","),
//         sisa = split[0].length % 3,
//         rupiah = split[0].substr(0, sisa),
//         ribuan = split[0].substr(sisa).match(/\d{3}/gi);

//     // tambahkan titik jika yang di input sudah menjadi angka ribuan
//     if (ribuan) {
//         separator = sisa ? "." : "";
//         rupiah += separator + ribuan.join(".");
//     }

//     rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
//     return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
// }

// $(document).ready(function () {
//     $("#moneyInput, #money_input, .currency_input, .money").maskMoney({
//         thousands: '.',
//         decimal: ',',
//         affixesStay: false,
//         precision: 0
//     });
// });