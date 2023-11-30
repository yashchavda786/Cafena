<?php
    extract($_REQUEST);
    include_once "process/connection.php";
    $qry = mysqli_query($con,"SELECT * FROM mas_contacts WHERE `id` = '$id'");
     $data = mysqli_fetch_assoc($qry);
 ?>
<div class="popup" style="padding: 50px;">
    <span id="closePopup" onclick="closePopup()" class="close-btn">&times;</span>
    
        <div class="row">
            <div class="col-xl-4">
                <h4>Name :  <?= $data['name'] ?></h4><br/>
            </div>
            <div class="col-xl-4">
                <h4>Email :  <?= $data['email'] ?></h4>
            </div>
            <div class="col-xl-4">
                <h4>Date :  <?= date('j-m-Y',strtotime($data['date'])) ?></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <h4>Message : </h4>
                <p>
                    <?= $data['message'] ?>
                </p>
            </div>
            
        </div>
        
    </form>
</div>