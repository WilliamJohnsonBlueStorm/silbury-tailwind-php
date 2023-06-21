<?php include 'data/address-info.php' ?>


<?php foreach ($addresses as $address) { ?>
    <div class="col-span-12 sm:col-span-6 lg:col-span-3">
        <h5 class="text-brand-light-green text-h5 font-bold inline-block md:mb-5 footer-header"><?php echo $address['title']; ?><i class="fa fa-chevron-down ml-2 sm:!hidden" aria-hidden="true"></i></h5>
        <div class="hidden sm:block">
            <address class="text-brand-white mb-5 text-footer-p">
                <?php echo $address['addressLine1']; ?><br>
                <?php echo $address['addressLine2']; ?>,<br>
                <?php echo $address['postcode']; ?>, <?php echo $address['country']; ?>
            </address>
            <div>
                <a href="tel:<?php echo $address['phone']; ?>" title="<?php echo $address['phoneTitle']; ?>" aria-label="<?php echo $address['phoneTitle']; ?>" class="block mb-3"><i class="fa fa-phone mr-2" aria-hidden="true"></i><?php echo $address['phone']; ?></a>
                <a href="mailto:<?php echo $address['email']; ?>" title="<?php echo $address['emailTitle']; ?>" aria-label="<?php echo $address['emailTitle']; ?>" class="block mb-5"><i class="fa fa-envelope mr-2" aria-hidden="true"></i><?php echo $address['email']; ?></a>
            </div>
        </div>
    </div>
<?php } ?>