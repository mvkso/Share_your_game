
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/discover.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>DISCOVER</title>

</head>
<body>
    <div class="base-container">
        <nav>
            <header>
               
                    <img src="public/img/logo1.png">
                <button class="projects"><a href="projects" style="text-decoration: none">HOME</a></button>
                <button class="current_projects"><a href="discover" style="text-decoration: none">DISCOVER</a></button>
                <button class="projects"><a href="account" style="text-decoration: none">ACCOUNT</a></button>
                <button class="projects"><a href="logout" style="text-decoration: none">LOG OUT</a></button>

            </header>
        </nav>
        <main>
           <section class="search">
                <input placeholder="SEARCH">
                <div>
                    
<!--                    <div class="social-section">-->
<!--                        <i class="fas fa-angle-double-down"></i>-->
<!--                        FILTERS-->
<!--                        -->
<!--                        </div>-->
                    <button class="add_project" type="submit">
                        + ADD PROJECT
                    </button>
                </div>
               <section class="add_projects">
                   <h1>UPLOAD</h1>
                   <form action="project_view" method="POST" ENCTYPE="multipart/form-data">
                       <?php if(isset($messages)){
                           foreach ($messages as $message) {
                               echo $messages;
                           }

                       }
                       ?>
                       <input name="title" type="text" placeholder="title">
                       <textarea name="description" rows="5" placeholder="description"></textarea>
                       <input type="file" name="file" >
                       <button type="submit">SEND</button>
                   </form>
               </section>

           </section>
            
        </main>
        
        
       
    </div>
</body>