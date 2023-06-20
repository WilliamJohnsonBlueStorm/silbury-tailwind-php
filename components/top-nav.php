<?php include 'data/navigation.php' ?>

<div id="top-navigation" class="hidden lg:block col-span-9 text-right">
    <nav role="navigation">
        <ul>
            <?php foreach ($topNavLinks as $topNavLink) { ?>
                <li class="inline-block pl-5 text-footer-p"><a href="<?php echo $topNavLink['url']; ?>" title="<?php echo $topNavLink['title']; ?>" aria-label="<?php echo $topNavLink['title']; ?>" tabindex="0" class="hover:underline"><?php echo $topNavLink['title']; ?></a></li>
            <?php } ?>
        </ul>
    </nav>
</div>