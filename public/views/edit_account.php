
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/edit_account.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>EDIT ACCOUNT</title>

</head>
<body>
    <div class="base-container">
        <nav>
            <header>
               
                    <img src="public/img/logo1.png">
                <button class="projects"><a href="projects" style="text-decoration: none">PROJECTS</a></button>
                <button class="projects"><a href="discover" style="text-decoration: none">DISCOVER</a></button>
                <button class="projects"><a href="account" style="text-decoration: none">ACCOUNT</a></button>
                <button class="projects"><a href="logout" style="text-decoration: none">LOG OUT</a></button>

            </header>
        </nav>
        <main>
               <section class="edit_account">

                   <form action="edit_account" method="POST" ENCTYPE="multipart/form-data">
                       <h1 style="font-family:Verdana">EDIT</h1>
                       <?php if(isset($messages)){
                           foreach ($messages as $message) {
                               echo $messages;
                           }

                       }
                       ?>
                       <input type="file"  name="image" >
                       <input name="age" type="text" placeholder="age">
                       <input name="country" type="text" placeholder="country">
                       <textarea name="experience" rows="5" placeholder="experience"></textarea>
                       <textarea name="aboutme" rows="5" placeholder="about me"></textarea>
                       <textarea name="description" rows="5" placeholder="description"></textarea>

                       <button type="submit">EDIT</button>
                   </form>
               </section>

           </section>
            
        </main>
        
        
       
    </div>
</body>