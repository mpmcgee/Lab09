<?php
/*
 * Author: Matthew McGee, Danny Harris, Coltin Espich
 * Date: 10/30/2020
 * File: reset.class.php
 *Description:
 */

class Reset extends View{
    public function display() {

        //call the header method defined in the parent class to add the header
        parent::header();
        ?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row">RESET PASSWORD</div>

        <!-- middle row -->
        <div class="middle-row">
            <h3>Please enter a new password. Username is not changeable.</h3>
            <form method="POST" action="index.php?action=do_reset">
                <p>
                    <input id="username" value="<?= $_COOKIE['login']?>" name="username" type="text" required="required" placeholder="username" readonly/>
                    <br>
                </p>
                <p>
                    <input id="password" value="" name="password" type="password" required="required" placeholder="Password, 5 characters minimum"/>
                    <br>
                </p>
                <button type="submit" style="width: 560px; background-color: #333333; height: 50px; color: white"><span>RESET PASSWORD</span></button>
            </form>
        </div>
        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: right">Cancel password reset? <a href="index.php">Cancel Reset</a></span>
        </div>
        <!-- page specific content ends -->


        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }
}