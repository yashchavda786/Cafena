<?php
    extract($_REQUEST);
    include_once "process/connection.php";
    $qry = mysqli_query($con,"SELECT * FROM mas_prd WHERE `prdid` = '$id'");
     $data = mysqli_fetch_assoc($qry);
 ?>
<div class="popup">
    <span id="closePopup" onclick="closePopup()" class="close-btn">&times;</span>
    <form id="editForm" onsubmit="updateProcess()">
        <div class="row">
            <div class="col-xl-6 mt-30">
                <div class="form-group">
                    <input type="text" class="form-control" name="prdnm" id="name" value="<?= $data['prdnm'] ?>" placeholder="Enter Product Name :">
                </div>
            </div>
            <div class="col-xl-6 mt-30">
                <div class="form-group">
                    <input type="file"  name="prdimg" placeholder="Enter Product Image :"><?php 
                        if(!empty($data['img'])){
                            ?>
                                <img src="process/<?= $data['img'] ?>" height="50" width="50">
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-xl-12 mt-30">
                <div class="form-group">
                    <input type="number" class="form-control" value="<?= $data['price'] ?>" name="price" id="subject" placeholder="Enter Product Price :">
                </div>
            </div>
            <div class="col-xl-12 mt-30">
                <div class="form-group">
                    <textarea name="desc" class="form-control"><?= $data['desc'] ?></textarea>
                </div>
            </div>
            <div class="col-xl-12 mt-20 text-center">
                <input type="hidden" name="prdid" value="<?= $data['prdid'] ?>"/>
                <button type="submit" class="site-btn">submit</button>
            </div>
        </div>
    </form>
</div>