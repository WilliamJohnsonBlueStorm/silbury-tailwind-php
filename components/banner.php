<?php include 'data/banner-footer-callouts.php' ?>

<section id="banner" role="banner" aria-labelledby="main-title" class="py-32 bg-cover bg-blend-overlay bg-brand-black" style="background-image: url('./images/background.jpg')">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h1 id="main-title" class="text-h1 text-center text-brand-white font-bold mb-5">The food industry manufacturing and supply experts.</h1>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <form method="post" action="#" id="find-product-large">
                    <fieldset class="search">
                        <label for="product-search" class="hidden">Product search</label>
                        <input type="text" class="w-10/12 md:w-11/12 p-3" id="product-search" name="product_search" value="" placeholder="Find a product"/><button type="submit" name="search button" class="w-2/12 md:w-1/12 p-3 bg-brand-light-green"><i class="fa fa-search"></i></button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="banner-footer bg-brand-dark-green text-brand-white">
    <div class="container">
        <div class="grid grid-cols-12 gap-2">
            <?php foreach ($bannerCallouts as $bannerCallout) { ?>
                <div class="col-span-6 lg:col-span-3 text-p py-5 flex items-center"><img src="<?php echo $bannerCallout['icon']; ?>" alt="<?php echo $bannerCallout['description']; ?>" class="inline-block pr-3"><?php echo $bannerCallout['description']; ?></div>
            <?php } ?>
        </div>
    </div>
</div>