<?php include 'data/news.php' ?>

<div class="col-span-12 md:col-span-6">
    <h3 class="text-h3 text-brand-light-green font-bold mb-5">News</h3>
    <div class="grid grid-cols-12 gap-y-5 md:gap-5">
        <?php foreach ($articles as $article) { ?>
            <div class="col-span-12 md:col-span-6">
                <article class="rounded-2xl overflow-hidden">
                    <a href="<?php echo $article['url']; ?>" class="group">
                        <img src="<?php echo $article['img']; ?>" alt="<?php echo $article['title']; ?>" class="w-full h-auto">
                        <div class="bg-brand-white p-4">
                            <p class="text-small-p lg:text-p text-brand-grey mb-2"><?php echo $article['date']; ?></p>
                            <h4 class="text-small-h4 lg:text-h4 text-brand-dark-green font-bold group-hover:underline"><?php echo $article['title']; ?></h4>
                        </div>
                    </a>
                </article>
            </div>
        <?php } ?>
    </div>
</div>
