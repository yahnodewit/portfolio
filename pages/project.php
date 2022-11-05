<div class="project_page">
    <div class="go-back">
        <div class="go-back-btn">
            <a href="/#work" class="go-back-link">
                <img src="./resources/images/goback.png" alt="go back Icon"/>
                <p class="button-text">GO BACK</p>
            </a>
        </div>
    </div>
    <div class="content">
        <?php foreach ($specificProject as $project):?>
            <h1 class="project-title"><?php echo $project['title']?></h1>
            <div class="date-project">
                <img src="./resources/images/clock-icon.png" alt="clock Icon"/>
                <h6 class="h6"><?php echo $project['date']?></h6>
            </div>
            <p> Assignment: </p>
        <?php endforeach?>
    </div>
</div>