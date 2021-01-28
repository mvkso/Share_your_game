
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/account.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>ACCOUNT</title>

</head>
<body>
    <div class="base-container">
        <nav>
            <header>
               
                    <img src="public/img/logo1.png">
                <button class="projects"><a href="projects" style="text-decoration: none">PROJECTS</a></button>
                <button class="projects"><a href="discover" style="text-decoration: none">DISCOVER</a></button>
                <button class="current_projects"><a href="account" style="text-decoration: none">ACCOUNT</a></button>
                <button class="projects"><a href="logout" style="text-decoration: none">LOG OUT</a></button>


            </header>
        </nav>
        <main>
            <button class="your_project"><a href="yourProjects" style="text-decoration: none">
                    <span style="color: white; ">
                        GO TO YOUR PROJECTS
                            </span>
                </a>
            </button>
            <section class="id">
           <section class="details">
            <div id="profile">
                <img src="public/img/uploads/<?=$user->getImage()?>" width="200" height="200">
                <h2 style="font-family:Verdana" id="name"><?= $user->getName(), $user->getSurname()?></h2>
                <p style="font-family:Verdana" id="age">Age: <?= $user->getAge()?></p>
                <p style="font-family:Verdana" id="location">Country: <?=$user->getCountry()?></p>
                <p style="font-family:Verdana" id="experience">Experience: <?=$user->getExperience()?></p>
                <div id="settings" width="30" height="30">
                    <a href="edit_account">
                        <img src="public/img/uploads/settingsIcon.png" width="30" height="30">
                    </a>
                </div>
           </section>
           <section class="aboutme">
            <div id="person_info">
                <h2 style="font-family:Verdana">About Me</h2>
                <p style="font-family:Verdana"><?=$user->getAboutme()?></p>
            </div>
            <div id="description">
                <h2 style="font-family:Verdana">Description</h2>
                <p style="font-family:Verdana"><?=$user->getDescription()?></p>
            </div>
           </section>
            </section>
            
        </main>
        
        
       
    </div>
</body>