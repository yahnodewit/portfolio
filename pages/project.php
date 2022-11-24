<div class="project_page">
    <div class="go-back">
        <div class="go-back-btn">
            <a href="/#work" class="go-back-link">
                <img src="/resources/images/goback.png" alt="go back Icon"/>
                <p class="button-text">GO BACK</p>
            </a>
        </div>
    </div>
    <div class="content">
        <?php foreach ($specificProject as $project):?>
            <div class="project-info">
                <h1 class="title-subpage"><?php echo $project['title']?></h1>

                <div class="date-project">
                    <img src="/resources/images/clock-icon.png" alt="clock Icon"/>
                    <p class="normal-text"><?php echo $project['date']?></p>
                </div>
            </div>

            <div class="assignment">
                <div class="assignment-text">
                    <?php if ($project['project-type'] == "on-my-own") : ?>
                        <?php if (isset($project['text'])) : ?>
                            <p class="normal-text"><?php echo $project['text']?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <?php if ($project['project-type'] != "on-my-own") : ?>
                        <h5 class="h5"> Assignment: </h5>

                        <?php if (isset($project['assigment-text'])) : ?>
                            <p class="normal-text"><?php echo $project['assigment-text']?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <?php if (isset($project['header-image'])) : ?>
                    <img src="/resources/images/<?php echo $project['header-image'];?>"/>
                <?php endif; ?>
            </div>

            <div class="result">
                <div class="result-info">
                    <h5 class="h5"> Result: </h5>

                    <?php if (isset($project['link-project'])) : ?>
                        <p><a class="normal-text visit-project" href="<?php echo $project['link-project']?>" target="blank">Visit project</a></p>
                    <?php endif; ?>

                    <?php if (isset($project['small-tags'])) : ?>
                        <div class="tags">
                            <?php for ($x = 0; $x <= count($project['small-tags']) - 1; $x++):?>
                                <button class="button-text rounded-fill"><?php echo $project['small-tags'][$x]?></button>
                            <?php endfor?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if ($project['project-type'] == "simple" || $project['project-type'] == "simple-video") : ?>
                    <?php if (isset($project['result-text'])) : ?>
                        <p class="normal-text"><?php echo $project['result-text']?></p>
                    <?php endif; ?>
                    
                    <?php if ($project['project-type'] == "simple") :?>
                        <?php if (isset($project['picture-result'])) : ?>
                            <div class="project-images">
                                <?php for ($x = 0; $x <= count($project['picture-result']) - 1; $x++):?>
                                    <img src="/resources/images/<?php echo $project['picture-result'][$x];?>"/>
                                <?php endfor?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <?php if ($project['project-type'] == "simple-video") :?>
                        <?php if (isset($project['video'])) : ?>
                            <div class="project-video">
                                    <iframe  src="<?php echo $project['video'];?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($project['project-type'] == "not-simple") : ?>
                    <?php if (isset($project['interTitles'])) : ?>
                        <div class="result-alineas">
                            <?php for ($i = 0; $i <= count($project['interTitles']) - 1; $i++):?>
                                <div class="result-alineas__alinea alinea">
                                    <div class="alinea__interText interText">
                                        <h6 class="h6-bold"><?php echo $project['interTitles'][$i]?></h6>

                                        <?php if ($project['interTitles'][$i] == "Design") : ?>
                                            <?php if (isset($project['link-design'])) : ?>
                                                <p><a class="normal-text visit-design" href="<?php echo $project['link-design']?>" target="blank">Visit Design of project</a></p>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        
                                        <?php if (isset($project['interTexts'])) : ?>
                                            <p class="normal-text"><?php echo $project['interTexts'][$i]?></p>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (isset($project['interPictures'])) : ?>
                                        <div class="pictures-inter">
                                            <?php foreach ($project['interPictures'][$i] as $projectPictures):?>
                                                <img src="/resources/images/<?php echo $projectPictures?>"/>
                                            <?php endforeach?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endfor?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if ($project['project-type'] == "on-my-own") : ?>
                    <?php if (isset($project['pictures-on-my-own'])) : ?>
                        <div class="pictures-on-my-own">
                            <?php for ($j = 0; $j <= count($project['pictures-on-my-own']) - 1; $j++):?>
                                <img src="/resources/images/<?php echo $project['pictures-on-my-own'][$j]?>"/>
                            <?php endfor?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endforeach?>
    </div>
</div>