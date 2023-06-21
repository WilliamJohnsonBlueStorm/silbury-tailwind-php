<header id="site-header">
    <div id="top-nav" class="bg-brand-dark-green py-2.5 text-brand-white">
        <div class="container">
            <div class="grid grid-cols-12">

                <?php include 'components/header-socials.php' ?>

                <?php include 'components/top-nav.php' ?>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-3">
                <a href="/" title="home" aria-label="home" tabindex="0"><img src="images/logo.png" alt="Silbury logo" class="my-2.5"></a>
            </div>

            <?php include 'components/main-navigation.php' ?>

            <div class="col-span-9 lg:hidden sm:flex flex items-center ml-auto">
                <a id="open-mobile-menu" class="text-right text-2xl" href="#" title="Open Mobile Menu" aria-label="Open Mobile Menu"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </div>
</header>
