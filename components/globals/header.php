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
                <div class="col-span-6 lg:col-span-3 text-p py-5"><img src="images/icon-stringent.png" alt="stringent quality icon" class="inline-block pr-3">Stringent quality assurance</div>
                <div class="col-span-6 lg:col-span-3 text-p py-5"><img src="images/icon-personal.png" alt="friendly service icon" class="inline-block pr-3">Personal, friendly service</div>
                <div class="col-span-6 lg:col-span-3 text-p py-5"><img src="images/icon-money.png" alt="value for money icon" class="inline-block pr-3">Real value for money</div>
                <div class="col-span-6 lg:col-span-3 text-p py-5"><img src="images/icon-brc.png" alt="BRC Accredited icon" class="inline-block pr-3">BRC Accredited</div>
            </div>
        </div>
    </div>
</header>