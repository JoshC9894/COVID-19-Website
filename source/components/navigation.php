<style>
    header {
        margin-bottom: 20px;
        width: 100vw;
    }
    nav {
        padding: 32px;
        background-color: #0b0c0c;
    }
    .blueBar {
        width: 90vw;
        height: 20px;
        margin: 0 auto;
        background-color: #1d70b8;
    }

    .navItem .active {
        color: #0b0c0c;
    }
</style>

<header>
    <nav>
        <ul>
            <li class="navItem"> <a href="/COVID-19-Website/local-updates" class= <?php if ($CURRENT_INDEX == 0) {?>active<?php }?>> Nav Item 1 </a> </li>
            <li class="navItem"> <a href="/COVID-19-Website/about-covid-19" class= <?php if ($CURRENT_INDEX == 1) {?>active<?php }?>> Nav Item 2 </a> </li>
            <li class="navItem"> <a href="/COVID-19-Website/getting-tested" class= <?php if ($CURRENT_INDEX == 2) {?>active<?php }?>> Nav Item 3 </a> </li>
        </ul>
    </nav>
    <div class="blueBar"></div>
</header>