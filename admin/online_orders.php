<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php" ?>
    <style>
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    include "header.php";
    $data = $mainobj->getOnlineOrderList();
    ?>

    <section class="about__area about__area--2 position-relative pt-125 pb-105">
        <div class="container">
            

            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($data)) {
                        foreach ($data as $dat) {
                            echo "<tr>";
                            echo "<td>" . $dat[1].' '.$dat[2]."</td>";
                            echo "<td>".$dat[4]."</td>";
                            echo "<td>" . $dat[9] . "</td>";
                            echo "<td> <button class='site-btn' onclick='createPopup(" . $dat[0] . ")'>View</button> </td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
            <div id="popup" class="popup-container">
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
    <script>
        

        function createPopup(id) {
            $.ajax({
                url: 'online_orderPopup.php?id=' + id,
                method: 'GET',
                dataType: 'html',
                success: function(data) {
                    $('#popup').html(data);
                    $('#popup').css('display', 'flex');
                    
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        }

        function closePopup() {
            $('#popup').css('display', 'none');
        }
        $(document).on('click', function(event) {
            if ($(event.target).is('#popup')) {
                $('#popup').hide();
            }
        });

        
    </script>
</body>

</html>