<?php include 'data/socials.php' ?>

<div class="col-span-12 lg:col-span-3">
    <ul class="text-p">
        <?php foreach ($socials as $social) { ?>
            <li class="inline-block pr-4"><a href="<?php echo $social['url']; ?>" title="<?php echo $social['title']; ?>" aria-label="<?php echo $social['title']; ?>" tabindex="0" target="_blank"><i class="<?php echo $social['icon']; ?>" aria-hidden="true"></i></a></li>
        <?php } ?>
    </ul>
</div>