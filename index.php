<!doctype html>
<html lang="en-gb">

<?php include 'components/globals/head.php' ?>

<body class="font-sans text-p">
<a class="skip-to-the-main-content hidden" href="#content" title="Skip to the main content" aria-label="Skip to the main content" tabindex="0">Skip to main content</a>

<?php include 'components/globals/header.php' ?>

<?php include 'components/banner.php' ?>

<main id="content" role="main" class="mb-10">
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



    <section class="my-10">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="relative">
                        <img src="images/Applications.jpg" alt="Applications" class="w-full h-full rounded-2xl brightness-75">
                        <div class="absolute bottom-0 left-0 p-4 md:p-8">
                            <div class="">
                                <h3 class="text-small-h3 lg:text-h3 font-bold text-brand-white mb-5">Applications</h3>
                                <h2 class="text-small-h2 lg:text-h2 font-bold text-brand-white mb-5">Ready to bake</h2>
                                <p class="hidden md:block text-brand-white w-6/12 mb-5 text-small-p lg:text-p">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <a href="#" title="View recipes" aria-label="View recipes" tabindex="0" class="p-2 text-small-p md:p-4 md:text-p bg-brand-light-green rounded-lg inline-block transition-all group duration-300">View recipes
                                    <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-brand-black"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer role="contentinfo" class="bg-brand-dark-green">
    <section class="py-10 bg-no-repeat bg-cover bg-center" style="background-image: url('./images/hear-about-us-bg.jpg')">
        <div class="container">
            <div class="grid grid-cols-12 gap-y-5 md:gap-10">
                <div class="col-span-12 md:col-span-6">
                    <h3 class="text-h3 text-brand-light-green font-bold mb-5">News</h3>
                    <div class="grid grid-cols-12 gap-y-5 md:gap-5">
                        <div class="col-span-12 md:col-span-6">
                            <article class="rounded-2xl overflow-hidden">
                                <a href="#" class="group">
                                    <img src="images/news-1.jpg" alt="news image" class="w-full h-auto">
                                    <div class="bg-brand-white p-4">
                                        <p class="text-small-p lg:text-p text-brand-grey mb-2">8 March 2022</p>
                                        <h4 class="text-small-h4 lg:text-h4 text-brand-dark-green font-bold group-hover:underline">Lorem Ipsum is simply dummy text.</h4>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <article class="rounded-2xl overflow-hidden">
                                <a href="#" class="group">
                                    <img src="images/news-2.jpg" alt="news image" class="w-full h-auto">
                                    <div class="bg-brand-white p-4">
                                        <p class="text-small-p lg:text-p text-brand-grey mb-2">8 March 2022</p>
                                        <h4 class="text-small-h4 lg:text-h4 text-brand-dark-green font-bold group-hover:underline">Lorem Ipsum is simply dummy text.</h4>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-5 lg:col-start-8">
                    <h3 class="text-h3 text-brand-light-green font-bold mb-5">Hear about it first</h3>
                    <p class="text-p text-brand-white mb-5">Sign up to our newsletter for news, products and more</p>
                    <form method="post" action="#" id="hear-about-us-form">
                        <fieldset class="">
                            <label for="your-name" class="">
                                <input type="text" class="w-full mb-3 rounded-lg p-2" id="your-name" name="your_name" value="" placeholder="Your Name*" required/>
                            </label>
                            <label for="email" class="email">
                                <input type="email" class="w-full mb-3 rounded-lg p-2" id="email" name="email" value="" placeholder="Your email*" required/>
                            </label>
                            <label for="company" class="company">
                                <input type="text" class="w-full mb-3 rounded-lg p-2" id="company" name="company" value="" placeholder="Company"/>
                            </label>
                        </fieldset>
                        <input type="submit" value="Sign up" title="Form submit" class="bg-brand-light-green p-3 rounded-lg cursor-pointer w-full lg:w-auto"/>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 text-footer-p text-brand-white">
        <div class="container">
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <h5 class="text-brand-light-green text-h5 font-bold inline-block md:mb-5 footer-header">Registered Head Office <i class="fa fa-chevron-down ml-2 sm:!hidden" aria-hidden="true"></i></h5>
                    <div class="hidden sm:block">
                        <address class="text-brand-white mb-5 text-footer-p">Silbury Marketing Ltd<br>
                            9 Manor Park, Banbury,<br>
                            OX16 3TB, UK
                        </address>
                        <div>
                            <a href="tel:01482644006" title="Head Office Phone" aria-label="Head Office Phone" class="block mb-3"><i class="fa fa-phone mr-2" aria-hidden="true"></i> +44 (0)1482 644006</a>
                            <a href="mailto:office@intexcomfort.com" title="email" aria-label="email" class="block mb-5"><i class="fa fa-envelope mr-2" aria-hidden="true"></i> office@intexcomfort.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <h5 class="text-brand-light-green text-h5 font-bold inline-block md:mb-5 footer-header">Technical Satelite Office <i class="fa fa-chevron-down ml-2 sm:!hidden" aria-hidden="true"></i></h5>
                    <div class="hidden sm:block">
                        <address class="text-brand-white mb-5 text-footer-p">Silbury Marketing Ltd<br>
                            Innovation Centre, Innovation Way,<br>
                            Europarc, Grimsby DN37 9TT, UK
                        </address>
                        <div class="">
                            <a href="tel:01482644006" title="Head Office Phone" aria-label="Head Office Phone" class="block mb-3"><i class="fa fa-phone mr-2" aria-hidden="true"></i> +44 (0)1482 644006</a>
                            <a href="mailto:office@intexcomfort.com" title="email" aria-label="email" class="block mb-5"><i class="fa fa-envelope mr-2" aria-hidden="true"></i> office@intexcomfort.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <h5 class="text-brand-light-green text-h5 font-bold inline-block md:mb-5 footer-header">Helpful Links <i class="fa fa-chevron-down ml-2 sm:!hidden" aria-hidden="true"></i></h5>
                    <div class="hidden sm:block">
                        <ul>
                            <li class="mb-2"><a href="#" title="Brexit Information" aria-label="Brexit Information" tabindex="0">Brexit Information</a></li>
                            <li class="mb-2"><a href="https://silbury.co.uk/modern-slavery-policy" title="Modern Slavery Act (2015)" aria-label="Modern Slavery Act" tabindex="0">Modern Slavery Act</a></li>
                            <li class="mb-2"><a href="#" title="RSPO Sustainability" aria-label="RSPO Sustainability" tabindex="0">RSPO Sustainability</a></li>
                            <li class="mb-2"><a href="https://silbury.co.uk/palm-oil-policy" title="Palm Oil Policy" aria-label="Palm Oil Policy" tabindex="0">Palm Oil Policy</a></li>
                            <li class="mb-  2"><a href="https://silbury.co.uk/whistleblowing" title="Whistleblowing" aria-label="Whistleblowing" tabindex="0">Whistleblowing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <h5 class="text-brand-light-green text-h5 font-bold md:mb-5">Our Rapeseed oil is</h5>
                    <a href="#" title="red tractor" aria-label="red tractor" tabindex="0" target="_blank" class="inline-block"><img src="images/red-tractor.png" alt="red tractor"></a>
                    <a href="#" title="sedex" aria-label="sedex" tabindex="0" target="_blank" class="inline-block"><img src="images/sedex.png" alt="sedex"></a>
                    <a href="#" title="ica" aria-label="RSPO ica" tabindex="0" target="_blank" class="inline-block"><img src="images/ica.png" alt="ica"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 text-footer-p text-brand-white">
        <div class="container">
            <div class="grid grid-cols-12 lg:gap-4">
                <div class="col-span-12 md:col-span-4 lg:col-span-3">
                    <p class="mb-2">&copy; Silbury 2023 All rights reserved.</p>
                </div>
                <div class="col-span-12 md:col-span-8 lg:col-span-6">
                    <nav class="footer-nav" role="navigation">
                        <ul class="mb-2">
                            <li class="inline-block mr-5"><a href="#" title="Accessibility" aria-label="Accessibility" tabindex="0">Accessibility</a></li>
                            <li class="inline-block mr-5"><a href="#" title="Terms & Conditions" aria-label="Terms & Conditions" tabindex="0">Terms & Conditions</a></li>
                            <li class="inline-block mr-5"><a href="#" title="Privacy Policy" aria-label="Privacy Policy" tabindex="0">Privacy Policy</a></li>
                            <li class="inline-block"><a href="#" title="Site Map" aria-label="Site Map" tabindex="0">Site Map</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-span-12 lg:col-span-3">
                    <a href="https://bluestormdesign.co.uk/" title="Bluestorm" aria-label="Bluestorm" tabindex="0" target="_blank"><p>Website designed by <img src="images/bluestorm.png" alt="Bluestorm logo" class="inline-block"></p></a>
                </div>
            </div>
        </div>
    </section>
</footer>

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