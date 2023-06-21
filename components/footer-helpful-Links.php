<?php include 'data/navigation.php' ?>

<div class="col-span-12 sm:col-span-6 lg:col-span-3">
    <h5 class="text-brand-light-green text-h5 font-bold inline-block md:mb-5 footer-header">Helpful Links <i class="fa fa-chevron-down ml-2 sm:!hidden" aria-hidden="true"></i></h5>
    <div class="hidden sm:block">
        <ul>
            <?php foreach ($footerNavLinks as $footerNavLink) { ?>
                <li class="mb-2"><a href="<?php echo $footerNavLink['url']; ?>" title="<?php echo $footerNavLink['title']; ?>" aria-label="<?php echo $footerNavLink['title']; ?>" tabindex="0"><?php echo $footerNavLink['title']; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>