<?php
    extract($_REQUEST);
    include_once "process/connection.php";
    $qry = mysqli_query($con,"SELECT * FROM tbl_orders WHERE `id` = '$id'");
     $data = mysqli_fetch_assoc($qry);
 ?>
<div class="popup" style="padding: 50px;">
    <span id="closePopup" onclick="closePopup()" class="close-btn">&times;</span>
    
        <div class="row">
            <div class="col-xl-6">
                <h4>Name :  <?= $data['fnm'].' '.$data['lnm']  ?></h4><br/>
            </div>
            <div class="col-xl-6">
                <h4>Company :  <?= $data['company'] ?></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <h4>Address : </h4>
                <p>
                    <?= $data['street'] ?><br/>
                    <?= $data['town'] ?><br/>
                    <?= $data['country'] ?><br/>
                    <?= $data['zip'] ?>
                </p>
            </div>
            <div class="col-xl-6">
                <h4>Contact : </h4><br/>
                <h5>Phone : <?= $data['phone'] ?></h5><br/>
                <h5>Email : <?= $data['email'] ?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 text-right">Total Amount : <?= $data['total'] ?>&#8377;</div>
        </div>
    </form>
</div>