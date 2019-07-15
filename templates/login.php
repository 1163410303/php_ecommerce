<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="data:image/ico;base64,aWNv">
    <title>COMP344 Assignment 1 2019  team 6</title>
    <link rel="stylesheet" href="../static/styles/pages/login.css">
</head>

    <body>

        <main class="main login-main" role="main">
            <article class="login-cont clearfix">

                <div class="login-pic-box">
                    <img src="../static/images/res/home1.jpg">
                </div>

                <div class="login-wrapper">
                    <div class="login-box">
                        <form  method="post" id="regloginform">
                            <h2 class="login-hd">
                                Online MQ-HIT Bookshop
                                  Team6
                            </h2>
                             <h2 class="alert">
                                <?php
                                $msg = $_GET['msg'];
                                if (msg) {
                                    echo "$msg";
                                }
                                ?>
                            </h2>
                            <div class="form-item">
                                <input class="input-txt"  aria-label="用户名" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="30" name="username" placeholder="username" value="" type="text" data-reactid=".0.1.0.1.0.1.0.5.0">
                            </div>
                            <div class="form-item">
                                <input class="input-txt" aria-describedby="" aria-label="密码" aria-required="true" name="password" placeholder="password" type="password">
                            </div>
<?php
$type = $_GET['type'];
if ($type) {
    echo <<<ENF
<div class="form-item">
<input class="input-txt" aria-describedby="" aria-label="邮箱" aria-required="true" name="email" placeholder="email address" type="text">
</div>
<div class="form-item">
<input class="input-txt" aria-describedby="" aria-label="postcode" aria-required="true" name="postcode" placeholder="postcode" type="text">
</div>
<div class="form-item">
<input class="input-txt" aria-describedby="" aria-label="credit card" aria-required="true" name="credit_number" placeholder="credit_card_number" type="text">
</div>
<div class="form-item">
<input class="input-txt" aria-describedby="" aria-label="credit expiry" aria-required="true" name="credit_expiry" placeholder="Format:20200607" type="text">
</div>
ENF;
}

?>
                            <div class="btn-wrapper">
                                <button class="btn-primary" onclick="form=document.getElementById('regloginform');
                                 <?php if ($_GET['type']=='register'){echo "form.action='func.php?action=register'";}
                                else{
                                    echo "form.action='login.php?type=register'";
                                }
                                ?>">
                            Register</button>
                                <button class="btn-primary" onclick="form=document.getElementById('regloginform');form.action='func.php?action=login'">Login</button>
                            </div>
                            <p class="agreenment">
                                <span>Welcome to register.</span><br>
                                <a class="agreenment-link"  target="_blank">If you already have an account, login directly.</a>
                            </p>
                        </form>
                    </div>
                </div>

            </article>
        </main>


    </body>   

</html>

