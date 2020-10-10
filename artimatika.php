<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Aritmatika</title>
</head>
<body>
    <h3>input angka</h3>
    <table>
        <form id="aritmatika" name="aritmatika" method="POST" action="proses hasil.php">
          <tr>
              <td>suku pertama</td>
              <td>
                  <input type="number" name="sukupertama" id="sukupertama">
                </td>
          </tr>
          <tr>
              <td>Suku Kedua</td>
              <td>
                  <input type="number" name="sukukedua" id="sukukedua">
              </td>
            </tr>
            <tr>
                <td>Suku ke N</td>
                <td>
                    <input type="number"  name="suku" id="suku">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="proses">
                </td>
            </tr>
        </form>
    </table>  
</body>
</html>