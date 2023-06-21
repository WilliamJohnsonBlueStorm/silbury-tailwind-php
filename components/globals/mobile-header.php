<?php include 'data/navigation.php'; ?>
<?php include 'data/socials.php'; ?>

<header id="mobile-header" role="banner" class="hidden fixed top-0 right-0 bottom-0 left-0 bg-white overflow-auto">
    <div id="mobile-top-nav" class="bg-brand-dark-green py-2.5 text-brand-white">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-3">
                    <ul class="text-p">
                        <?php foreach ($socials as $social) { ?>
                            <li class="inline-block pr-4"><a href="<?php echo $social['url']; ?>" title="<?php echo $social['title']; ?>" aria-label="<?php echo $social['title']; ?>" tabindex="0" target="_blank"><i class="<?php echo $social['icon']; ?>" aria-hidden="true"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-3">
                <a href="/" title="home" aria-label="home" tabindex="0"><img src="images/logo.png" alt="Silbury logo" class="my-2.5"></a>
            </div>
            <div class="col-span-9 lg:hidden sm:flex flex items-center ml-auto">
                <a id="close-mobile-menu" class="right" href="#" title="Close Mobile Menu" aria-label="close Mobile Menu"><i class="fa fa-close"></i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <nav id="mobile-nav" role="navigation" class="text-small-p">
                    <ul class="py-10">
                        <?php foreach ($topNavLinks as $topNavLink) { ?>
                            <li class="py-3 border-b border-brand-grey"><a href="<?php echo $topNavLink['url']; ?>" title="<?php echo $topNavLink['title']; ?>" aria-label="<?php echo $topNavLink['title']; ?>" tabindex="0"><?php echo $topNavLink['title']; ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="">
                        <?php foreach ($mainNavLinks as $mainNavLink) { ?>
                            <li class="py-3 border-b border-brand-grey"><a href="<?php echo $mainNavLink['url']; ?>" title="<?php echo $mainNavLink['title']; ?>" aria-label="<?php echo $mainNavLink['title']; ?>" tabindex="0"><?php echo $mainNavLink['title']; ?></a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
