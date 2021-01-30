
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/your_projects.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/statistics.js" defer></script>
    <title>YOUR PROJECTS</title>

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
        <button class="account"><a href="account">
                <span style="color: white; ">
                       GO TO YOUR ACCOUNT
                            </span>

            </a>
        </button>
        <section class="projects">
            <form id="projects_form" action="project_view" method="POST">
            <?php foreach ($projects as $project): ?>
                <div name="project_id" id="<?=$project->getId(); ?>" >
                    <img src="public/uploads/<?= $project->getImage() ?>" width="400" height="230">
                    <div>
                        <h2><?=$project->getTitle(); ?></h2>
                        <div class="social-section">
                            <i class="fas fa-heart"><?= $project->getLike();?></i>
                            <i class="fas fa-minus-square"><?= $project->getDislike();?></i>
                        </div>
                        <button class="submit_button" name="submit_button" type="submit" value="<?= $project->getId(); ?>">CHECK PROJECT</button>
                    </div>
                </div>
            <?php endforeach; ?>
            </form>

        </section>

    </main>



</div>
</body>