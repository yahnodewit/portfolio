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
            <div class="project-info">
                <h1 class="title-subpage"><?php echo $project['title']?></h1>

                <div class="date-project">
                    <img src="./resources/images/clock-icon.png" alt="clock Icon"/>
                    <p class="normal-text"><?php echo $project['date']?></p>
                </div>
            </div>

            <div class="assignment">
                <div class="assignment-text">
                    <h5 class="h5"> Assignment: </h5>

                    <?php if (isset($project['assigment-text'])) : ?>
                        <p class="normal-text"><?php echo $project['assigment-text']?></p>
                    <?php endif; ?>
                </div>

                <?php if (isset($project['header-image'])) : ?>
                    <img src="./resources/images/<?php echo $project['header-image'];?>"/>
                <?php endif; ?>
            </div>

            <div class="result">
                <div class="result-info">
                    <h5 class="h5"> Result: </h5>

                    <?php if (isset($project['link-project'])) : ?>
                        <p><a class="normal-text" href="<?php echo $project['link-project']?>" target="blank">Visit project</a></p>
                    <?php endif; ?>

                    <?php if (isset($project['small-tags'])) : ?>
                        <div class="tags">
                            <?php for ($x = 0; $x <= count($project['small-tags']) - 1; $x++):?>
                                <button class="button-text rounded-fill"><?php echo $project['small-tags'][$x]?></button>
                            <?php endfor?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if ($project['project-type'] == "simple") : ?>
                    <?php if (isset($project['result-text'])) : ?>
                        <p class="normal-text"><?php echo $project['result-text']?></p>
                    <?php endif; ?>
                
                    <?php if (isset($project['picture-result'])) : ?>
                        <div class="project-images">
                            <?php for ($x = 0; $x <= count($project['picture-result']) - 1; $x++):?>
                                <img src="./resources/images/<?php echo $project['picture-result'][$x];?>"/>
                            <?php endfor?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endforeach?>
    </div>
</div>