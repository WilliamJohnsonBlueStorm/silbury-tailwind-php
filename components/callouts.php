<?php include 'data/callouts.php' ?>

<div class="grid grid-cols-12 gap-y-5 md:gap-5">
    <?php foreach ($callouts as $callout) { ?>
        <div class="col-span-12 md:col-span-4">
            <a href="<?php echo $callout['url']; ?>" title="<?php echo $callout['title']; ?>" aria-label="<?php echo $callout['title']; ?>" tabindex="0" class="relative overflow-hidden block rounded-2xl group">
                <img src="<?php echo $callout['img']; ?>" alt="<?php echo $callout['title']; ?>" class="w-full h-96 object-cover object-center brightness-75 group-hover:brightness-100 group-hover:scale-110 transition-all">
                <div class="absolute bottom-0 left-0 p-4">
                    <h3 class="text-small-h3 lg:text-h3 font-bold text-brand-white mb-5"><?php echo $callout['title']; ?></h3>
                    <p class="text-brand-white text-small-p lg:text-p"><?php echo $callout['description']; ?></p>
                </div>
            </a>
        </div>
    <?php } ?>
</div>
