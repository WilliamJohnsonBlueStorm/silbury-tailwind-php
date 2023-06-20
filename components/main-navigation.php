<?php include 'data/navigation.php' ?>

<div id="header-navigation" class="hidden lg:block col-span-9 text-right">
    <nav role="navigation" class="text-footer-p">
        <ul>
            <?php foreach ($mainNavLinks as $mainNavLink) { ?>
                <li class="inline-block pl-8"><a href="<?php echo $mainNavLink['url']; ?>" title="<?php echo $mainNavLink['title']; ?>" aria-label="<?php echo $mainNavLink['title']; ?>" tabindex="0" class="hover:underline hover:text-brand-dark-green"><?php echo $mainNavLink['title']; ?></a></li>
            <?php } ?>
        </ul>
    </nav>
</div>