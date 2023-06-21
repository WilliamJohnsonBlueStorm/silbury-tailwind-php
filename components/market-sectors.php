<?php include 'data/sectors.php' ?>

<section class="my-10">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h2 class="text-h2 text-brand-dark-green font-bold mb-5">Our Market Sectors</h2>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-y-5 md:gap-5">
            <?php foreach ($sectors as $sector) { ?>
                <div class="col-span-12 md:col-span-4">
                    <a href="<?php echo $sector['url']; ?>" title="<?php echo $sector['title']; ?>" aria-label="<?php echo $sector['title']; ?>" tabindex="0" class="relative overflow-hidden block rounded-2xl group">
                        <img src="<?php echo $sector['img']; ?>" alt="<?php echo $sector['title']; ?>" class="w-full h-64 brightness-75 object-cover object-center group-hover:brightness-100 group-hover:scale-110 transition-all">
                        <h3 class="text-small-h3 lg:text-h3 text-brand-white font-bold absolute bottom-0 left-0 p-4"><?php echo $sector['title']; ?></h3>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>