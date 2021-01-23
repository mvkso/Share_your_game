
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer><</script>
    <title>PROJECTS</title>

</head>
<body>
    <div class="base-container">
        <nav>
            <header>
               
                    <img src="public/img/logo1.png">
                <button class="current_projects"><a href="projects" style="text-decoration: none">HOME</a></button>
                <button class="projects"><a href="contacts" style="text-decoration: none">CONTACTS</a></button>
                <button class="projects"><a href="discover" style="text-decoration: none">DISCOVER</a></button>
                <button class="projects"><a href="account" style="text-decoration: none">ACCOUNT</a></button>
                    <form>
                        <input placeholder="search">
                    </form>


            </header>
        </nav>
        <main>
            <section class="projects">
                <?php foreach ($projects as $project): ?>
                <div id="project 1">
                    <img src="public/uploads/<?= $project->getImage() ?>" width="400" height="230">
                        <div>
                    <h2><?=$project->getTitle(); ?></h2>
                    <p><?=$project->getDescription(); ?></p>
                    <div class="social-section">
                        <i class="fas fa-heart">600</i>
                        <i class="fas fa-minus-square">101</i>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </main>
        
        
       
    </div>

<template id="project-template">
    <div id="project 1">
        <img src="" width="400" height="230">
        <div>
            <h2>title</h2>
            <p>description</p>
            <div class="social-section">
                <i class="fas fa-heart">0</i>
                <i class="fas fa-minus-square">0</i>
            </div>
        </div>
    </div>
</template>
