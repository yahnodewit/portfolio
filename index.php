<?php
    include("config/app.php");
    include("config/resources/resources.php");
    include("functions/filterProjects.php");
    include("snippets/layout/header.php");
    include("pages/". $page .".php");
    include("snippets/layout/footer.php");
?>