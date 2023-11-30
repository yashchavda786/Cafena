<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php" ?>
</head>

<body>
    <?php include "header.php" ?>
    <section class="about__area about__area--2 position-relative pt-125 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-green rounded">
                        <h2>Orders</h2>
                        <p>Total In Store Orders Recieved today: <h2 class="text-right"><?= $mainobj->getOrderCount()  ?></h2> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-green rounded">
                        <h2>Orders</h2>
                        <p>Total Online Orders Recieved today: <h2 class="text-right"><?= $mainobj->getOnlineOrderCount()  ?></h2> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-green rounded">
                        <h2>Contacts</h2>
                        <p>Total Contacts Recieved <h2 class="text-right"><?= $mainobj->getContactCount()  ?></h2></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>
</body>

</html>