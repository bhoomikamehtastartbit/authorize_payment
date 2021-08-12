<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<?php 
// Include configuration file  
require_once 'config.php'; 
?>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Charge <?php echo '$'.$itemPrice; ?> with Authorize.Net</h3>
		
        <!-- Product Info -->
        <p><b>Item Name:</b> <?php echo $itemName; ?></p>
        <p><b>Price:</b> <?php echo '$'.$itemPrice.' '.$currency; ?></p>
    </div>
    <div class="panel-body">
		
        <!-- Payment form -->
        <form action="payment.php" method="POST">
            <div class="form-group">
                <label>NAME</label>
                <input class="field" type="text" name="name" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input class="field" type="email" name="email" placeholder="Enter email" required="">
            </div>
            <div class="form-group">
                <label>CARD NUMBER</label>
                <input class="field" type="text" name="card_number" placeholder="1234 1234 1234 1234" autocomplete="off" required="">
            </div>
            <div class="row">
                <div class="left">
                    <div class="form-group">
                        <label>EXPIRY DATE</label>
                        <div class="col-1">
                            <input class="field" type="text" name="card_exp_month" placeholder="MM" required="">
                        </div>
                        <div class="col-2">
                            <input class="field" type="text" name="card_exp_year" placeholder="YYYY" required="">
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="form-group">
                        <label>CVC CODE</label>
                        <input class="field" type="text" name="card_cvc" placeholder="CVC" autocomplete="off" required="">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit Payment</button>
        </form>
    </div>
</div>


</body>
