<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan form 02</title>
</head>
<body>

    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
        <div>
           NIM
            <input type="text" id="nim" name="txNIM">
        </div>

        <div>
           Nama
            <input type="text" id="nama" name="txNAMA">
        </div>
        
        <div>
           Jenis Kelamin 
            <input type="radio" id="jk" name="txJK" value="L">Laki-Laki
            <input type="radio" id="jk" name="txJK" value="P">Perempuan
        </div>

        <div>
          Jurusan
          <select name="txJurusan" id="Jurusan">
            <option value="KAB">KAB</option>
            <option value="MTI">MTI</option>
            <option value="DKV">DKV</option>
            <option value="DGM">DGM</option>
            <option value="TIPAR">TIPAR</option>
            <option value="SK">SK</option>
        </select>
            
        </div>

        <div>
            Hobi 
            <input type="checkbox" id="txHobi" name="Musik">Musik
            <input type="checkbox" id="txHobi" name="Tari">Tari
            <input type="checkbox"id= "txHobi" name="Menangis">Menangis
            <input type="checkbox" id="txHobi" name="Lari">Lari
            <input type="checkbox" id="txHobi" name="Tidur">Tidur
            <input type="checkbox" id="txHobi" name="Dance">Dance
            <input type="checkbox" id="txHobi" name="Membaca">Membaca
            <input type="checkbox" id="txHobi" name="Bulutangkis">Bulutangkis
        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>
    
    <script>
        function checkform(){
            let f = document.getElementById("Latihan02").elements;
            let nim = f.nim.value;
            console.log("NIM: "+nim);
            let nama = f.nama.value;
            console.log("NAMA: "+nama);
            let jk = f.jk.value;
            console.log("Jenis Kelamin: "+jk);
            let Jurusan = f.Jurusan.value;
            console.log("Jurusan: "+Jurusan);

            let Hobi_Musik = f.txHobi[0].checked;
            let Hobi_Tari = f.txHobi[1].checked;
            let Hobi_Menangis = f.txHobi[2].checked;
            let Hobi_Lari = f.txHobi[3].checked;
            let Hobi_Dance = f.txHobi[4].checked;
            let Hobi_Membaca = f.txHobi[5].checked;
            let Hobi_Bulutangkis = f.txHobi[6].checked;

            console.log("Hobi Musik: "+Hobi_Musik);
            console.log("Hobi Tari: "+Hobi_Tari);
            console.log("Hobi Menangis: "+Hobi_Menangis);
            console.log("Hobi Lari: "+Hobi_Lari);
            console.log("Hobi Dance: "+Hobi_Dance);
            console.log("Hobi Membaca: "+Hobi_Membaca);
             console.log("Hobi Bulutabgkis: "+ Hobi_Bulutangkis);
            return false;
        }
    </script>
</body>
</html>