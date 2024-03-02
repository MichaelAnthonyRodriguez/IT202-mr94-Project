<?php
  include('powerBank.php');
?>

<html>
    <head>
        <title>Portable Power Banks</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <!-- header -->
        <header>
            <img id="logo" src="images/logo.png"><h3>Portable Power Bank Central</h3>
            <ul class="menu">
                <a href="powerbankhome.html">Home</a>
                <a href="powerbankproducts.php">Products</a>
                <a href="powerbankship.html">Shipping</a>
            </ul>
        </header>
        <!-- main elements -->
        <main>
          <?php foreach ($powerBank as $bank) { ?>
          <tr>
            <hr>
            <?php if ($bank['powerBankID']==1){ echo "Capacity";}
            elseif($bank['powerBankID']==5){echo 'Solar';}
            elseif($bank['powerBankID']==9){echo 'Slim';}
            elseif($bank['powerBankID']==13){echo 'Fast';}
            elseif($bank['powerBankID']==17){echo 'wireless';}?>
            <figure><p><?php echo $bank['powerBankName']; ?></p></figure>
            <figure><picture><?php echo $bank['description']; ?></p></figure>
            <figure><p><?php echo $bank['mah']; ?>mah</p></figure>
            <figure><p>$<?php echo $bank['price']; ?></p></figure>
            <hr>
          </tr>
          <?php } ?>
        </main>
        <footer>Michael Anthony Rodriguez, Feb 16, 2024, IT-202-006, mr94@njit.edu</footer>
        <hr>
    </body>
</html>