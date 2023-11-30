<!DOCTYPE html>
<html>

<head>
    <?php
    require_once('head.php');
    ?>
    <style>
        h1 {
            color: black;
            /* padding-box:220px;
        padding-top:60px; */

        }

        .row {
            margin: 5px 0px;
        }

        .box {
            margin: 10px;
            height: 200px;
            border: 10px solid #C7A17A;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            transition: background-color 1s ease;
        }

        .box:hover {

            background-color: #C7A17A;

        }
        .occupied{
            background-color: #C7A17A;
        }
    </style>

</head>

<body>

    <?php require_once('header.php'); ?>
    <div class="container">
        <div class="row">
            <?php
                $tables = $mainobj->getTables();
                
                foreach($tables as $table){
                    if($table[1]=='OCCUPIED'){
                        $ocp = 'occupied';
                    }else{
                        $ocp = '';
                    }

                    echo "<div class='col-md-6'><a class='text-decoration-none' href='order.php?table=".$table[0]."'><div class='box $ocp'><h1>";
                    echo $table[0]."</h1></div></a></div>";
                }
            ?>
            <!-- <div class="col-md-6">
                <div class="box" onclick="colorChange(this,1)">
                    <h1>1</h1>
                </div>
            </div> -->
            
        </div>
        
    </div>



    <?php require_once('footer.php'); ?>
    <script type="module" src="assets/js/lightsout.js"></script>
    
</body>

</html>