<!doctype html>
<html lang="en-gb">

<?php include 'components/globals/head.php' ?>

<body class="font-sans text-p">
<a class="skip-to-the-main-content hidden" href="#content" title="Skip to the main content" aria-label="Skip to the main content" tabindex="0">Skip to main content</a>

<?php include 'components/globals/header.php' ?>

<?php include 'components/banner.php' ?>

<main id="content" role="main" class="">
    <section class="my-10">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <h2 class="text-h2 font-bold text-brand-dark-green mb-5">We are Silbury</h2>
                    <p class="mb-5 text-p">Depend on Sillbury - the food industry manufacturing and supply experts</p>
                </div>
            </div>

            <?php include 'components/callouts.php' ?>

        </div>
    </section>

    <?php include 'components/market-sectors.php' ?>

    <?php include 'components/applications.php' ?>

    <?php include 'components/home-news-section.php' ?>

</main>

<?php include 'components/globals/footer.php' ?>

<header id="mobile-header" role="banner" class="hidden fixed top-0 right-0 bottom-0 left-0 bg-white overflow-auto">
    <div id="mobile-top-nav" class="bg-brand-dark-green py-2.5 text-brand-white">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-3">
                    <ul class="text-p">
                        <li class="inline-block pr-4"><a href="https://uk.linkedin.com/company/silbury-marketing-ltd" title="Silbury LinkedIn" aria-label="Silbury LinkedIn" tabindex="0" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="inline-block pr-4"><a href="https://twitter.com/silburyoils" title="Intex Facebook" aria-label="Silbury Facebook" tabindex="0" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="inline-block"><a href="#" title="Silbury Twitter" aria-label="Silbury Twitter" tabindex="0" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
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
                    <ul class="my-10">
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="About" aria-label="About" tabindex="0">About</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Applications" aria-label="Applications" tabindex="0">Applications</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Products" aria-label="Products" tabindex="0">Products</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Expertise" aria-label="Expertise" tabindex="0">Expertise</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Sustainability" aria-label="Sustainability" tabindex="0">Sustainability</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="News" aria-label="News" tabindex="0">News</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Contact" aria-label="Contact" tabindex="0">Contact</a></li>
                    </ul>
                    <ul class="mb-10">
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Manufacturing" aria-label="Manufacturing" tabindex="0">Manufacturing</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Foodservice" aria-label="Foodservice" tabindex="0">Foodservice</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Retail" aria-label="Retail" tabindex="0">Retail</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Bakery Ingredients" aria-label="Bakery Ingredients" tabindex="0">Bakery Ingredients</a></li>
                        <li class="py-3 border-b border-brand-grey"><a href="#" title="Specialist Applications" aria-label="Specialist Applications" tabindex="0">Specialist Applications</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js" integrity="sha512-/bOVV1DV1AQXcypckRwsR9ThoCj7FqTV2/0Bm79bL3YSyLkVideFLE3MIZkq1u5t28ke1c0n31WYCOrO01dsUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./scripts/scripts.js"></script>
</body>
</html>