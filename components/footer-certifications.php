<?php include 'data/certifications.php'; ?>

<div class="col-span-12 sm:col-span-6 lg:col-span-3">
    <h5 class="text-brand-light-green text-h5 font-bold md:mb-5">Our Rapeseed oil is</h5>
    <?php foreach ($certifications as $certification) { ?>
        <a href="<?php echo $certification['url']; ?>" title="<?php echo $certification['title']; ?>" aria-label="<?php echo $certification['title']; ?>" tabindex="0" target="_blank" class="inline-block max-h-10"><img src="<?php echo $certification['img']; ?>" alt="<?php echo $certification['title']; ?>"></a>
    <?php } ?>
</div>
