
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>PROJECTS</title>

</head>
<body>
    <div class="base-container">
        <nav>
            <header>
               
                    <img src="public/img/logo1.png">
                <button class="current_projects"><a href="projects" style="text-decoration: none">HOME</a></button>
                <button class="projects"><a href="discover" style="text-decoration: none">DISCOVER</a></button>
                <button class="projects"><a href="account" style="text-decoration: none">ACCOUNT</a></button>
                <button class="projects">LOG OUT</button>


            </header>
        </nav>
        <main>
            <section class="projects">
                <form action="project_view" method="POST">
                    <?php foreach ($projects as $project): ?>
                        <div id="<?=$project->getId() ?>" >
                            <img src="public/uploads/<?= $project->getImage() ?>" width="400" height="230">
                            <div>
                                <h2><?=$project->getTitle(); ?></h2>
                                <div class="social-section">
                                    <i class="fas fa-heart">10</i>
                                    <i class="fas fa-minus-square">101</i>
                                </div>
                                <button name="submit_button" value="<?= $project->getId(); ?>">CHECK PROJECT</button>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </form>
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
