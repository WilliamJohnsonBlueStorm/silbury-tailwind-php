<?php include 'data/navigation.php' ?>

<div class="col-span-12 md:col-span-8 lg:col-span-6">
    <nav class="footer-nav" role="navigation">
        <ul class="mb-2">
            <?php foreach ($additionalFooterLinks as $additionalFooterLink) { ?>
                <li class="inline-block mr-5"><a href="<?php echo $additionalFooterLink['url']; ?>" title="<?php echo $additionalFooterLink['title']; ?>" aria-label="<?php echo $additionalFooterLink['title']; ?>" tabindex="0"><?php echo $additionalFooterLink['title']; ?></a></li>
            <?php } ?>
        </ul>
    </nav>
</div>