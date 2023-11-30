<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require_once('head.php'); 
        if(!empty($_SESSION['uid'])){
            header('location:admin/index.php');
        }
    ?>
    <style>
        .card {
            /* width: 300px;*/
            height: 400px;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }

        .card-inner {
            width: 100%;
            height: 100%;
            position: absolute;
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }

        .card-front,
        .card-back {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 20px;
        }

        .card-back {
            transform: rotateY(180deg);
        }

        h2 {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 50%;

        }

        .btn2_container {
            width: 150px;
            height: 56px;
            display: flex;
            position: relative;
            margin-right: 20px;
        }

        .two {
            position: absolute;
            height: 50px;
            width: 75px;
            background-color: grey;
            display: block;
            border: 2px solid #C7A17A;
            background-color: #C7A17A;
            transition: all 0.3s ease;
            clip-path: polygon(0 0, 50% 0, 100% 100%, 0% 100%);
        }

        .two {
            left: 00px;
        }

        .inactive2 {
            transform: translateX(calc(75px - 6px));
            border: 2px solid #010103;
            background-color: #010103;
            clip-path: polygon(50% 0, 100% 0, 100% 100%, 0% 100%);
        }
    </style>
</head>

<body>
    <?php require_once('header.php'); ?>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="btn2_container">
                    <h2 style="position: absolute;left: -100px;">Login</h2>
                    <span class="two"></span>
                    <h2 style="position: absolute;right: -100px;">Register</h2>
                </div>
            </div>
        </div>
        <div class="contact__area position-relative pt-120 pb-120">
            <span class="shape shape__1 position-absolute"><img src="assets/images/shape/hero-shape-2-1.png" alt=""></span>
            <span class="shape shape__2 position-absolute"><img src="assets/images/shape/hero-shape-2-2.png" alt=""></span>


            <div class="container">
                <div class="row">

                    <div class="col-xl-12">

                        <!-- <div class="contact__wrapper"> -->

                        <!-- <div class="row">  -->
                        <div class="card">
                            <div class="card-inner" id="card-inner">
                                <div class="card-front">
                                    <h2>Login</h2>
                                    <form id="login-form" method="get">
                                        <input type="email" name="email" data-rule-required="true" aria-required="true" placeholder="Enter Email">
                                        <input type="password" name="password" data-rule-required="true" aria-required="true" placeholder="Enter Password">
                                        <button type="submit" id="login-submit" class="site-btn">Login</button>
                                    </form>
                                </div>
                                <div class="card-back">
                                    <h2>Register</h2>
                                    <form id="register-form">
                                        <div class="row" style="">
                                            <div class="col-md-6">
                                                <input type="text" data-rule-required="true" aria-required="true" name="name" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" data-rule-required="true" aria-required="true" name="email" placeholder="Enter Email">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" data-rule-required="true" aria-required="true" name="uname" placeholder="Enter User Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" data-rule-required="true" aria-required="true" name="pwd" placeholder="Password">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" data-rule-required="true" aria-required="true" name="confpwd"  placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <button type="submit" class="site-btn mt-5">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once('footer.php'); ?>
    <script>
        document.getElementById("login-form").addEventListener("submit", function(e) {
            e.preventDefault();
            // Handle login logic here
            $('#login-form').length && $('#login-form').validate({
				submitHandler: function(e){
					return ($.ajax({
						type:"POST",
						url:'process/login.php',
						data: new FormData($("#login-form")[0]),
						async:false,
						cache:false,
						processData:false,
						contentType:false,
						success:function (e){
							if(e.trim()=="Success"){
								notyf.success("Login Success"),
                                location.href="./admin/"
							}
							else{
								notyf.error(e)
							}
						},
						error:function(e){
							console.log("ERROR:"+e);
						}
					}),!1);	
				},
			})
        });

        $('#register-form').submit(function(event){
			event.preventDefault();
			
			$('#register-form').length && $('#register-form').validate({
				submitHandler: function(e){
					return ($.ajax({
						type:"POST",
						url:'process/register.php',
						data: new FormData($("#register-form")[0]),
						async:false,
						cache:false,
						processData:false,
						contentType:false,
						success:function (e){
							if(e.trim()=="Success"){
								notyf.success("Registration Success"),
                                location.reload();
							} else{
								notyf.error("Registration Failed Try Again Later")
							}
						},
						error:function(e){
							console.log("ERROR:"+e);
						}
					}),!1);	
				},
			})
		});

       
        const btn2_ctn = document.getElementsByClassName("btn2_container")[0];
        const two = document.getElementsByClassName("two")[0];
        btn2_ctn.addEventListener("click", () => {
            two.classList.toggle("inactive2");
            const cardInner = document.getElementById("card-inner");
            cardInner.style.transform = cardInner.style.transform === "rotateY(180deg)"?"rotateY(0deg)":"rotateY(180deg)";
            // if (cardInner.style.transform === "rotateY(180deg)") {
            //     cardInner.style.transform = "rotateY(0deg)";
                
            // } else {
            //     cardInner.style.transform = "rotateY(180deg)";
                
            // }
        });
    </script>
</body>

</html>