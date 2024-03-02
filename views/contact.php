<?php
   include("../fragment/header.php");
   ?>

<section >
<img src="../images/contact.jpg" class="d-block w-100" alt="" style="height:400px">
</section>

<section class="location">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.7766443467!2d77.30057527340229!3d12.954458672910592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1696928747862!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
       
        </section>

        <section class="row">
            <h3 class="text-danger p-4">Contact Us</h3>

            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>XYZ road,ABCD building</h5>
                        <p>Banglore,karnataka,IN</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+774-45655768743</h5>
                        <p>Monday to Friday, 10AM  to 6AM</p>
                    </span>  
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5>trends@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>  
                </div>
            </div>
            <div class="contact-col">
                <h3>
                <form action="" method="POST">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter your Email" required>
                    <input type="text"  name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="your message"></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>
            </div>
        </section>
        <?php
        include("../fragment/footer.php");
        ?>
