<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bahan Bakar</title>
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/responsive.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Shell</h1>
    <div class="container">
        <div class="php-style">
            <div>
                <center>
                    <img src="Assets/Royal_Dutch_Shell_Logo_1971.png" alt="">
                </center>
            </div>
        <?php
            class Shell {
            protected $V_Power_Nitro = 16510;
            protected $Diesel = 18310;
            protected $V_Power = 16130;
            protected $super = 15420;
            protected $ppn = 0.1;
            }
        
            class Beli extends Shell {
            public function setHasil($harga, $jumlah) {
                $total = $harga * $jumlah + ($harga * $jumlah * $this->ppn);
                echo "<h3>Struk anda:</h3>";
                echo "<p class='hasil'> Anda membeli bahan bakar tipe " . "<b>" . $_POST['shell'] . "</b></p>";
                echo "<p class='hasil'> Jumlah satuannya adalah" . "<b> Rp. " .  number_format($harga, 2, ',', '.') . "</b></p>";
                echo "<p class='hasil'> Dengan jumlah: " . "<b>" . $_POST['liter'] . " Liter</b></p>";
                echo "<p class='hasil'><b> Total yang harus anda bayar Rp. " . number_format($total, 2, ',', '.') . "</b></p>";
            }
        
            public function getHasil() {
                if (isset($_POST['submit'])) {
                $jumlah = $_POST['liter'];
                $tipe = $_POST['shell'];
        
                if (empty($tipe) || (!is_numeric($jumlah))) {
                    echo "<p class='hasil' style='color:red; text-align:center; margin-top:20px; font-weight:bold'>Tolong masukan semua data!</p>";
                } else {
                    $shell = new Beli();
        
                    if ($tipe == 'Shell Super') {
                    $harga = $shell->super;
                    } else if ($tipe == 'Shell V-Power') {
                    $harga = $shell->V_Power;
                    } else if ($tipe == 'Shell V-Power Diesel') {
                    $harga = $shell->Diesel;
                    } else if ($tipe == 'Shell V-Power Nitro') {
                    $harga = $shell->V_Power_Nitro;
                    } else {
                    $harga = 0;
                    }
        
                    $shell->setHasil($harga, $jumlah);
                }
                }
            }
            }
        
            $hasil = new Beli();
            echo $hasil->getHasil();
        ?>
        </div>
        
        <div class="form-style">
        <h2>Pengisian Shell</h2>
            <form action="" method="post">
            <label for="liter">Masukan Jumlah Liter:</label>
            <input id="liter" type="number" name="liter">
            <br>
            <label for="tipe">Pilih Tipe Bahan Bakar:</label>
            <select name="shell" id="tipe">
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select>
            <br>
            <input type="submit" name="submit">
            </form>
        </div>
    </div>
    <center>
        <p>RIZQYA-ADZRA || PPLG X-2</p>
    </center>
</body>
</html>