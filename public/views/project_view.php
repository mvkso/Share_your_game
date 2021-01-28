
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/project_view.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <title>PROJECT VIEW</title>

</head>
<body>
<div class="base-container">
    <nav>
        <header>

            <img src="public/img/logo1.png">
            <button class="projects"><a href="projects" style="text-decoration: none">HOME</a></button>
            <button class="projects"><a href="discover" style="text-decoration: none">DISCOVER</a></button>
            <button class="projects"><a href="account" style="text-decoration: none">ACCOUNT</a></button>
            <button class="projects"><a href="logout" style="text-decoration: none">LOG OUT</a></button>

        </header>
    </nav>
    <main>
        <section class="projects_display" id="<?= $project->getId(); ?>">
            <h2 style="font-family:Verdana"><?=$project->getTitle(); ?></h2>
            <div class="photo">
                <img src="public/uploads/<?= $project->getImage() ?>" width="700" height="500">
            </div>
            <div class="text_part">

            <p style="font-family:Verdana"><?= $project->getDescription(); ?></p>
            </div>
        </section>

    </main>



</div>
</body>