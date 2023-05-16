<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan form 01</title>
</head>
<body>

    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
           NIM
            <input type="text" name="txNIM">
        </div>

        <div>
           Nama
            <input type="text" name="txNAMA">
        </div>
        
        <div>
           Jenis Kelamin 
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>

        <div>
          Jurusan
          <select name="txJurusan">
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
            <input type="checkbox" name="Musik">Musik
            <input type="checkbox" name="Tari">Tari
            <input type="checkbox" name="Menangis">Menangis
            <input type="checkbox" name="Lari">Lari
            <input type="checkbox" name="Tidur">Tidur
            <input type="checkbox" name="Dance">Dance
            <input type="checkbox" name="Membaca">Membaca
            <input type="checkbox" name="Bulutangkis">Bulutangkis
        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>
    
    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            console.log("NIM: "+nim);
            let nama = f.namedItem("txNAMA").value;
            console.log("NAMA: "+nama);
            let jk = f.namedItem("txJK").value;
            console.log("Jenis Kelamin: "+jk);
            let Jurusan = f.namedItem("txJurusan").value;
            console.log("Jurusan: "+Jurusan);

            let Hobi_Musik = f.namedItem("Musik").checked;
            let Hobi_Tari = f.namedItem("Tari").checked;
            let Hobi_Menangis = f.namedItem("Menangis").checked;
            let Hobi_Lari = f.namedItem("Lari").checked;
            let Hobi_Dance = f.namedItem("Dance").checked;
            let Hobi_Membaca = f.namedItem("Membaca").checked;
            let Hobi_Bulutangkis = f.namedItem("Bulutangkis").checked;

            console.log("Hobi: "+Hobi_Musik);
            console.log("Hobi: "+Hobi_Tari);
            console.log("Hobi: "+Hobi_Menangis);
            console.log("Hobi: "+Hobi_Lari);
            console.log("Hobi: "+Hobi_Dance);
            console.log("Hobi: "+Hobi_Membaca);
             console.log("Hobi: "+ Hobi_Bulutangkis);
            return false;
        }
    </script>
</body>
</html>