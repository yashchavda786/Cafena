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
    $data = $mainobj->getProductList();
    ?>

    <section class="about__area about__area--2 position-relative pt-125 pb-105">
        <div class="container">
            <div class="d-flex mb-5" style="flex-direction: row-reverse;">
                <button type="submit" onclick="createPopup()" class="site-btn">Add Record</button>
            </div>

            <table id="table" class="table table-striped text-center">
                <thead>
                    <tr >
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Image-name</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($data)) {
                        foreach ($data as $dat) {
                            echo "<tr>";
                            echo "<td>" . $dat[1] . "</td>";
                            echo "<td><img src='process/" . $dat[2] . "' height='100' width='100'></td>";
                            echo "<td>" . $dat[3] . "</td>";
                            echo "<td> <button class='site-btn' onclick='editPopup(" . $dat[0] . ")'>Edit</button> <button class='site-btn' style='background:red;color:white;' onclick='deleteRecord(" . $dat[0] . ")'>Delete</button></td>";
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
        function createPopup() {
            $.ajax({
                url: 'createProduct.php', // Replace with your API endpoint
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

        function editPopup(id) {
            $.ajax({
                url: 'editProduct.php?id=' + id,
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

        function insertProcess() {
            event.preventDefault();
            $('#InsertForm').length && $('#InsertForm').validate({
                submitHandler: function(e) {
                    return ($.ajax({
                        type: "POST",
                        url: 'process/insertProduct.php',
                        data: new FormData($("#InsertForm")[0]),
                        async: false,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(e) {
                            if (e.trim() == "Success") {
                                notyf.success("Product Added Successfully"),
                                closePopup(),
                                createPopup();
                            } else {
                                console.log(e),
                                    notyf.error(e)
                            }
                        },
                        error: function(e) {
                            console.log("ERROR:" + e);
                        }
                    }), !1);
                },
            })
        }

        function updateProcess() {
            event.preventDefault();
            $('#editForm').length && $('#editForm').validate({
                submitHandler: function(e) {
                    return ($.ajax({
                        type: "POST",
                        url: 'process/updateProduct.php',
                        data: new FormData($("#editForm")[0]),
                        async: false,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(e) {
                            if (e.trim() == "Success") {
                                notyf.success("UPDATE Success"),
                                location.reload();
                            } else {
                                console.log(e),
                                    notyf.error(e)
                            }
                        },
                        error: function(e) {
                            console.log("ERROR:" + e);
                        }
                    }), !1);
                },
            })
        }

        function deleteRecord(id) {
            var conf = confirm('Are you sure to delete this record?');

            if (conf) {
                $.ajax({
                    url: 'process/deleteProduct.php?id=' + id,
                    method: 'GET',
                    dataType: 'html',
                    success: function(data) {
                        if (e.trim() == "Success") {
                            notyf.error(e)
                        }
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            }
        }
    </script>
</body>

</html>