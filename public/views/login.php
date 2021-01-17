<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>

</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.png">
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php if(isset($messages)){
                        foreach ($messages as $message) {
                            echo $messages;
                        }

                    }
                    ?>
                </div>
                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">
                <button>LOGIN</button>
                <button type="submit">SIGN UP</button>
            </form>
        </div>
    </div>
</body>