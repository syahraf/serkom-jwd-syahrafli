function ipkTerakhir() {
    // variabel untuk memilih elemen berdasarkan atribut "id"
    const kategori = document.getElementById("semester").value;
    const ipkTerakhir = document.getElementById("ipk");

    // Percabangan pada dropdown untuk memilih semester dan menampilkan ipk terakhir
    if (kategori == "1") {
        ipkTerakhir.value = 3.24
    } else if (kategori == "2") {
        ipkTerakhir.value = 2.92
    } else if (kategori == "3") {
        ipkTerakhir.value = 3.40;
    } else if (kategori == "4") {
        ipkTerakhir.value = 2.98
    } else if (kategori == "5") {
        ipkTerakhir.value = 3.12;
    } else if (kategori == "6") {
        ipkTerakhir.value = 3.45
    } else if (kategori == "7") {
        ipkTerakhir.value = 3.29;
    } else if (kategori == "8") {
        ipkTerakhir.value = 3.62;
    }

}