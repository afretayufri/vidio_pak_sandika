// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {

        // buat object ajax
        var xhr = new XHTMLttpRequest();

        // cek kesiapan ajax
        xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            console.log('xhr.responseText');
            container.innerHTML = xhr.responseText;
        }
    }

        // eksekusi ajax
        xhr.open('GET', 'ajax/mahasiswa.php?keyword' + keyword.value, true);
        xhr.send();
});