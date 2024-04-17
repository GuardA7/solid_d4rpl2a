<h1id="colorfulText">SOLID_D4RPL2A</h1>

Tugas dan latihan SOLID Principles D4RPL2A (2024)


#colorfulText {
  animation: changeColor 5s infinite; /* Mengatur animasi perubahan warna */
}

@keyframes changeColor {
  0% { color: red; } /* Mulai dengan warna merah */
  25% { color: blue; } /* Berubah menjadi biru pada 25% waktu */
  50% { color: green; } /* Berubah menjadi hijau pada 50% waktu */
  75% { color: orange; } /* Berubah menjadi oranye pada 75% waktu */
  100% { color: purple; } /* Kembali ke warna awal pada 100% waktu */
}

function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

setInterval(function(){
  document.getElementById("colorfulText").style.color = getRandomColor(); /* Mengubah warna secara acak setiap beberapa waktu */
}, 1000); /* Ganti warna setiap 1 detik */
