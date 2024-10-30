<style>
    .mdp_table {
        min-width:800px;
        max-width:1080px;
        border:1px solif #EEEEEE;
        padding: 10px 10px 10px 10px;
        margin: 10px 10px 10px 10px;
    }
    
    .mdp_table tr {
        border: 1px solid #EEEEEE;
    }
    
    
    .mdp_table td {
        padding: 10px 10px 10px 10px;
        margin: 10px 10px 10px 10px;
    }
    
    .mdp_table td.left {
        width:200px;
    }
    
    
    .mdp_form input[type=text] {
        min-width: 400px;
        max-width: 600px;
    }
    
    
    .mdp_inner_table {
        width:600px;
        border:1px solif #EEEEEE;
        padding: 10px 10px 10px 10px;
        margin: 10px 10px 10px 10px;
        border:1px solid #EEEEEE;
    }
    
    .mdp_inner_table tr {
        border: 1px solid #EEEEEE;
    }
    
    .mdp_inner_table td {
        padding: 10px 10px 10px 10px;
        margin: 10px 10px 10px 10px;
    }
    .mdp_report {
        background:#cbdcc5;
        width:780px;
        border:1px solid #EEEEEE;
        padding: 10px 10px 10px 10px;
    }
    textarea    {
        width:800px;
        height: 300px;
    }
    
    .left_block   {
        float:left;
        display:inline-block;
        min-width:50%;
        max-width:70%;
        margin:20px 10px 10px 10px;
    }
    .right_block  {
        float:right;
        display:inline-block;
        width:20%;
        margin:20px 10px 10px 10px;
    }
    
    .mdp    {
        padding: 10px 10px 10px 10px;
    }
    
</style>
<?php screen_icon(); ?>
<div class="wrap">
        <div class="right_block">
                <h2>Contact Information</h2>
                <p>
                    Website: <a href="http://microdatapropject.org">http://microdatapropject.org</a><br>
                    Email: <a href="mailto:contact@microdataproject.org">contact@microdataproject.org</a><br>
                    Phone: 408-754-6000<br>
                    Address: PO Box 640871<br>
                    San Jose, California 95164<br>
                </p><p>
                    Author: Christopher Dubeau<br>
                    Author Website: <a href="http://christopherdubeau.com">http://christopherdubeau.com</a><br>
                    Contributor: Sid Creations<br>
                    Contributor Website: <a href="http://sidcreations.com">http://sidcreations.com</a><br>
                </p>
        </div>
        <div class="left_block">
        <h3><a href="http://www.google.com/webmasters/tools/richsnippets?q=<?php echo parse_url(get_bloginfo('url'), 1);?>" target="_blank">Preview your microdata</a></h3>
        <h2>MDP Local Business SEO Home and Construction</h2>
        <h3>Business Information</h3>
        <form action="options.php" method="post" class="mdp_form">
                <?php settings_fields($plugin_id.'_options'); ?>
                <table class="mdp_table">
                        <tr><td class="left">Status: </td><td><select name="mdp_home_and_construction_status">
                        
                        <?php if(get_option('mdp_home_and_construction_status') == '1'){?>
                            <option value="1">Enabled</option><option value="0">Disabled</option>
                        <?php } else { ?>
                            <option value="0">Disabled</option><option value="1">Enabled</option>
                        <?php } ?>
                        </select></td><td></td></tr>
                        <tr><td class="left">Business Type: </td><td><select name="mdp_home_and_construction_type">
                        <?php if(get_option('mdp_home_and_construction_type') !== ''){?>
                            <option value="<?php echo get_option('mdp_home_and_construction_type');?>"><?php echo get_option('mdp_home_and_construction_type');?></option>
                        <?php }else{ ?>
                            <option value="">Choose</option>
                            <?php } ?>
                        <option value="Electrician">Electrician</option>
                        <option value="GeneralContractor">GeneralContractor</option>
                        <option value="HVACBusiness">HVACBusiness</option>
                        <option value="HousePainter">HousePainter</option>
                        <option value="Locksmith">Locksmith</option>
                        <option value="MovingCompany">MovingCompany</option>
                        <option value="Plumber">Plumber</option>
                        <option value="RoofingContractor">RoofingContractor</option>
                        </select></td><td>Select your type of business.</td></tr>
                        <tr><td>Business Name: </td><td><input type="text" name="mdp_home_and_construction_name" value="<?php echo get_option('mdp_home_and_construction_name');?>"/></td><td>Will use the site name if left empty.</td></tr>
                        <tr><td>Business Description: </td><td><input type="text" name="mdp_home_and_construction_description" value="<?php echo get_option('mdp_home_and_construction_description');?>" placeholder="Very important, try to be as descriptive as possible."/></td><td>Keep less than 150 characters, will use site description if left empty.</td></tr>
                        <tr><td>Website Url: </td><td><input type="text" name="mdp_home_and_construction_url" value="<?php echo get_option('mdp_home_and_construction_url');?>" placeholder="<?php echo get_bloginfo('url');?>" /></td><td>Will use the website url if left empty.</td></tr>
                        <tr><td>Logo / Image Location: </td><td><input type="text" name="mdp_home_and_construction_image" value="<?php echo get_option('mdp_home_and_construction_image');?>" placeholder="<?php echo get_bloginfo('url');?>/images/logo.jpg"/></td><td>Not Required</td></tr>
                        <tr><td>Referance Url: </td><td><input type="text" name="mdp_home_and_construction_sameas" value="<?php echo get_option('mdp_sameas');?>" placeholder="http://wiki.<?php echo parse_url(get_bloginfo('url'), 1);?>"/></td><td>Not Required</td></tr>
                        <tr><td>Payments Accepted: </td><td><input type="text" name="mdp_home_and_construction_payment_accepted" value="<?php echo get_option('mdp_home_and_construction_payment_accepted');?>" placeholder="Visa, Master Card, Check, Cash"/></td><td>Not Required</td></tr>
                        <tr><td>Price Range: </td><td><input type="text" name="mdp_home_and_construction_price_range" value="<?php echo get_option('mdp_home_and_construction_price_range');?>" placeholder="for inexpensive $ for expensive $$$$$"/></td><td>Not Required</td></tr>
                        <tr><td class="left">Street Address: </td><td><input type="text" value="<?php echo get_option('mdp_home_and_construction_street_address');?>" name="mdp_home_and_construction_street_address" /></td><td>Can be left empty but not recommended.</td></tr>
                        <tr><td>City: </td><td><input type="text" name="mdp_home_and_construction_address_locality" value="<?php echo get_option('mdp_home_and_construction_address_locality');?>" /></td><td>Required.</td></tr>
                        <tr><td>State: </td><td><input type="text" name="mdp_home_and_construction_address_region" value="<?php echo get_option('mdp_home_and_construction_address_region');?>" /></td><td>Required.</td></tr>
                        <tr><td>Zip: </td><td><input type="text" name="mdp_home_and_construction_postal_code" value="<?php echo get_option('mdp_home_and_construction_postal_code');?>" /></td><td>Can be left empty but not recommended.</td></tr>
                        <tr><td>Country: </td><td><input type="text" name="mdp_home_and_construction_address_country" value="<?php echo get_option('mdp_home_and_construction_address_country');?>" /></td><td>Can be left empty but not recommended.</td></tr>
                        <tr><td>Email: </td><td><input type="text" name="mdp_home_and_construction_email" value="<?php echo get_option('mdp_home_and_construction_email');?>" /></td><td>Can be left empty but not recommended.</td></tr>
                        <tr><td>Telephone: </td><td><input type="text" name="mdp_home_and_construction_telephone" value="<?php echo get_option('mdp_home_and_construction_telephone');?>" /></td><td>Can be left empty but not recommended.</td></tr>
                        <tr><td>Fax: </td><td><input type="text" name="mdp_home_and_construction_fax_number" value="<?php echo get_option('mdp_home_and_construction_fax_number');?>" /></td><td>Can be left empty but not recommended.</td></tr>
                        <tr><td>Open: </td><td><input type="text" name="mdp_home_and_construction_open" value="<?php echo get_option('mdp_home_and_construction_open');?>" placeholder="9:00" /></td><td>Can be left empty but not recommended.</td></tr>
                        <tr><td>Close: </td><td><input type="text" name="mdp_home_and_construction_close" value="<?php echo get_option('mdp_home_and_construction_close');?>" placeholder="17:00" /></td><td>Can be left empty but not recommended.</td></tr>
                        <tr><td>Days of Week: </td><td><input type="text" name="mdp_home_and_construction_dow" value="<?php echo get_option('mdp_home_and_construction_dow');?>" placeholder="Mo, Tu, We, Th, Fr, Sa, Su or Mo - Fr" /></td><td>Can be left empty but not recommended must use two letter abbreviations.</td></tr>
                        <tr><td class="left">Rating Value: </td><td><input type="text" value="<?php echo get_option('mdp_home_and_construction_rating_value');?>" name="mdp_home_and_construction_rating_value" placeholder="5"/></td><td>From 1 to 5, required if using rating.</td></tr>
                        <tr><td>Best Rating: </td><td><input type="text" name="mdp_home_and_construction_best_rating" value="<?php echo get_option('mdp_home_and_construction_best_rating');?>" placeholder="5"/></td><td>From 1 to 5, required if using rating.</td></tr>
                        <tr><td>Worst Rating: </td><td><input type="text" name="mdp_home_and_construction_worst_rating" value="<?php echo get_option('mdp_home_and_construction_worst_rating');?>" placeholder="5"/></td><td>From 1 to 5, required if using rating.</td></tr>
                        <tr><td>Rating Count: </td><td><input type="text" name="mdp_home_and_construction_rating_count" value="<?php echo get_option('mdp_home_and_construction_rating_count');?>" placeholder="239"/></td><td>Required if using rating.</td></tr>
                        <tr><td colspan="3"><?php submit_button(); ?></td></tr>
                </table>
        </form>
        <h3><a href="http://www.google.com/webmasters/tools/richsnippets?q=<?php echo parse_url(get_bloginfo('url'), 1);?>" target="_blank">Preview your microdata</a></h3>
        </div>
</div>