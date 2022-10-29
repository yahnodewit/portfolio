
<nav>
        <ul class="nav__nav-links nav-links">
            <li><a href="/#home">HOME</a></li>
            <li><a href="/#aboutme" id="link2">ABOUT ME</a></li>
            <li><a href="/#work" id="link3">WORK</a></li>
            <li><a href="/#contact" id="link4">CONTACT</a></li>
            <li class="<?= checkNav('project', $page); ?>"><a href="project">Project</a></li>
        </ul>

        <div class="nav__burger burger">
            <span class="burger__burger-line burger-line"></span>
        </div>
</nav>