<?php 
        //error_reporting(0);
        if(isset($_POST['bayarhitung'])) {
            $nm_buah = $_POST['nama_buah'];
            $klts = $_POST['kualitas'];
            $jml = $_POST['jumlah'];

            if(isset($_POST['jumlah'])) {
                if($_POST['jumlah'] == ""){
                echo "<script>alert('Harus diisi')</script>";
        echo "<meta http-equiv='refresh' content='0; url=tes.php'>";
                }
                
            }

             if (($nm_buah == "Anggur") && ($klts == "A")) {
                $harga = 30000;
            } else if (($nm_buah == "Anggur") && ($klts == "B")) {
                $harga = 25000;
            } else if (($nm_buah == "Anggur") && ($klts == "C")) {
                $harga = 20000;
            } else 

            if (($nm_buah == "Apel") && ($klts == "A")) {
                $harga = 25000;
            } else if (($nm_buah == "Apel") && ($klts == "B")) {
                $harga = 20000;
            } else if (($nm_buah == "Apel") && ($klts == "C")) {
                $harga = 15000;
            } else 

            if (($nm_buah == "Jeruk") && ($klts == "A")) {
                $harga =15000;
            } else if (($nm_buah == "Jeruk") && ($klts == "B")) {
                $harga = 10000;
            } else if (($nm_buah == "Jeruk") && ($klts == "C")) {
                $harga = 7500;
            } else 

            if (($nm_buah == "Mangga") && ($klts == "A")) {
                $harga = 20000;
            } else if (($nm_buah == "Mangga") && ($klts == "B")) {
                $harga = 15000;
            } else if (($nm_buah == "Mangga") && ($klts == "C")) {
                $harga = 10000;
            } 

            $sub = $harga * $jml;

            // diskon
            
                $diskon = 0.10 * $sub;
            

            // total bayar
            $totbay = $sub - $diskon;

        }

?>

<html>

<head>
    <title>UTS Nomor 1</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="css/components.css" rel="stylesheet" type="text/css" /> -->
</head>

<body>

    <form name="form" method="POST">
        <table border="1" align="center">
            <tr>
                <td colspan="2">
                    <h2>TRANSAKSI PENYEWAAN KAMAR HOTEL</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td align="right">Nama Buah : </td>
                            <td align="left"><select name="nama_buah">
                                    <option value="Anggur"> Anggur </option>
                                    <option value="Apel"> Apel </option>
                                    <option value="Jeruk"> Jeruk </option>
                                    <option value="Mangga"> Mangga </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Kualitas : </td>
                            <td align="left">
                                <select name="kualitas">
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Jumlah : </td>
                            <td align="left">
                                <input type="text" size="10" name="jumlah"> Kg
                            </td>
                        </tr>
                    </table>
                </td>
            <tr>
                <td>
                    <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>
                                <center>
                                    <input type="submit" value="hitung" name="bayarhitung">                                    
                                </center>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td align="right">Total Harga : </td>
                            <td align="left">
                                <input type="text" size="10" value="<?php echo $sub; ?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Diskon : </td>
                            <td align="left"><input type="text" size="10" value="<?php echo $diskon; ?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Bayar : </td>
                            <td align="left"><input type="text" size="10" value="<?php echo $totbay;?>" disabled>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script> -->
</body>

</html>