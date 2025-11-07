# perbedaan Array dan Collection

## Array
Array adalah struktur data dasar yang menyimpan elemen-elemen dengan tipe data yang sama di memori berurutan. Array memiliki ukuran tetap, sehingga setelah dibuat, jumlah elemennya tidak bisa diubah.

## Collection
Collection adalah struktur data yang lebih fleksibel yang termasuk berbagai tipe seperti list, set, dan map. Collection dapat menampung elemen dengan jumlah dinamis, mendukung operasi tambahan seperti penambahan, penghapusan, dan pencarian yang lebih kompleks, serta dapat menyimpan objek dengan tipe berbeda tergantung implementasinya.

| Aspek              | Array                       | Collection                     |
|-------------------|-----------------------------|--------------------------------|
| Ukuran             | Tetap (fixed)               | Dinamis (bisa bertambah/berkurang) |
| Tipe Data Elemen   | Biasanya sama               | Bisa berbeda |
| Operasi            | Terbatas (akses, update)    | Lebih lengkap (add, remove, search, sort) |
| Contoh             | `$arr = [1, 2, 3];`        | `add`, `remove`, `size` atau ada di [ClassCollection.php](https://github.com/YoorySink/masihnyoba/blob/master/ClassCollection.php) |
