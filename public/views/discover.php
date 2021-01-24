
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/discover.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer><</script>
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
                    <button class="projects">LOG OUT</button>

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
                    <button class="add_project"><a href="addProject" ><span style="color: white; ">
                        + ADD PROJECT
                            </span></a>
                    </button>
                </div>

           </section>
        <section class="projects_display">
            <form class="projects_form" action="project_view" method="POST">

            </form>

        </section>
            
        </main>
        
        
       
    </div>
</body>

<template id="project-template">
    <div id="project 1">
        <img src="" width="400" height="230">
        <div>
            <h2>title</h2>
            <div class="social-section">
                <i class="fas fa-heart">0</i>
                <i class="fas fa-minus-square">0</i>
            </div>
            <button class="submit_button" type="submit">CHECK PROJECT</button>
        </div>
    </div>
</template>
