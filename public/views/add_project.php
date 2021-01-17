
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
                    <button class="projects">HOME</button>
                    <button class="projects">CONTACTS</button>
                    <button class="current_projects">DISCOVER</button>
                    <button class="projects">ACCOUNT</button>
                    <form>
                        <input placeholder="search">
                    </form>
                

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
                   <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
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