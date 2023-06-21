<?php
//Creating an $error variable and assigning it to an array
//Creating an $invalid & $success variable and assigning them to false
$errors = [];
$invalid = false;
$success = false;

//Checking to see if the form as been sent
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // if the form has been submitted, post the values that have been entered if not, post empty values
    $name = isset($_POST['your_name']) ? $_POST['your_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $company = isset($_POST['company']) ? $_POST['company'] : '';


    if (!$invalid) {
        $success = true;

        // Send admin email
        $msg = "Name: " . $name . "\n";
        $msg .= "Email: " . $email . "\n";
        $msg .= "Company Name: " . $company . "\n";


        mail("william.johnson@bluestormdesign.co.uk", "Website contact form", $msg);
    }

}
?>

<div class="col-span-12 md:col-span-6 lg:col-span-5 lg:col-start-8">
    <h3 class="text-h3 text-brand-light-green font-bold mb-5">Hear about it first</h3>
    <p class="text-p text-brand-white mb-5">Sign up to our newsletter for news, products and more</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="hear-about-us-form">
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