<?php 
function LocalBusinessHac(){
        $mdp_info = '<!--begin microdata project plugin-->';
            
                $mdp_info .=    '<span itemscope itemtype="http://schema.org/LocalBusiness">';

                $mdp_info .=    '<span itemscope itemtype="http://schema.org/HomeAndConstructionBusiness">';
        
        if(get_option('mdp_home_and_construction_type')){
                $mdp_info .=    '<span itemscope itemtype="http://schema.org/'.get_option('mdp_home_and_construction_type').'">';
        }
        
        /* name of business */
        if(get_option('mdp_home_and_construction_name')){
            
                if(get_option('mdp_home_and_construction_url')){
                        $mdp_info .=        '<a itemprop="url" href="'.get_option('mdp_home_and_construction_url').'" class="visuallyhidden"><span itemprop="name">'.get_option('mdp_home_and_construction_name').'</span></a>';
                }else{
                        $mdp_info .=        '<a itemprop="url" href="'.get_bloginfo('url').'" class="visuallyhidden"><span itemprop="name">'.get_option('mdp_home_and_construction_name').'</span></a>';
                }
            
        }else{
                if(get_option('mdp_home_and_construction_url')){
                        $mdp_info .=        '<a itemprop="url" href="'.get_option('mdp_home_and_construction_url').'" class="visuallyhidden"><span itemprop="name">'.get_bloginfo('name').'</span></a>';
                }else{
                        $mdp_info .=        '<a itemprop="url" href="'.get_bloginfo('url').'" class="visuallyhidden"><span itemprop="name">'.get_bloginfo('name').'</span></a>';
                }
        }
                
        /* description of business */
        if(get_option('mdp_home_and_construction_description')){
                $mdp_info .=        '<meta itemprop="description" content="'.get_option('mdp_home_and_construction_description').'" />';
        }else{
                $mdp_info .=        '<meta itemprop="description" content="'.get_bloginfo('description').'" />';
        }
        
        /* logo of business */
        if(get_option('mdp_home_and_construction_image')){
                $mdp_info .=        '<meta itemprop="image" content="'.get_option('mdp_home_and_construction_image').'" />';
        }
        
        /* wiki page or other site of business association */
        if(get_option('mdp_home_and_construction_sameas')){
                $mdp_info .=        '<meta itemprop="sameAs" content="'.get_option('mdp_home_and_construction_sameas').'" />';
        }
        
        $mdp_info .= '<span itemscope itemtype="http://schema.org/Place">';
        
        /* physical address */
        $mdp_info .=            PostalAddressHac();
        
        /* rating of business*/
        $mdp_info .=            AggregateRatingHac();
        
        $mdp_info .= '</span>';
        
        /* type of payments visa, master card, check, cash */
        if(get_option('mdp_home_and_construction_payment_accepted')){
                $mdp_info .=        '<meta itemprop="paymentAccepted" content="'.get_option('mdp_home_and_construction_payment_accepted').'" />';
        }
        
        /* price range of items*/
        if(get_option('mdp_home_and_construction_price_range')){
                $mdp_info .=        '<meta itemprop="priceRange" content="'.get_option('mdp_home_and_construction_price_range').'" />';
        }
        
        
        /* opening hours of business */
        if( (get_option('mdp_home_and_construction_dow')) && (get_option('mdp_home_and_construction_open')) && (get_option('mdp_home_and_construction_close')) ){
            
                $mdp_info .=         '<meta itemprop="openingHours" content="'.get_option('mdp_home_and_construction_dow').' '.get_option('mdp_home_and_construction_open').'-'.get_option('mdp_home_and_construction_close').'" />';
        
        }
        
        $mdp_info .=    seeksHac();
        
        $mdp_info .=    '</span>';
        
        $mdp_info .=    '</span>';
        
        
        if(get_option('mdp_home_and_construction_type')){
                $mdp_info .=    '</span>';
        }
        
        $mdp_info .=    '<!--end microdata project plugin-->';
        echo'
        <style>
        .visuallyhidden {
                border: 0;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
        }
        </style>';
        echo $mdp_info;
}


function PostalAddressHac(){

        $error = 0;
        
        $mdp_info .=    '<span itemprop="address" itemscope="http://schema.org/PostalAddress">';
        
        /* street address */
        if(get_option('mdp_home_and_construction_street_address')){
                $mdp_info .=          '<meta itemprop="streetAddress" content="'.get_option('mdp_home_and_construction_street_address').'" />';
        }
        
        /* city */
        if(get_option('mdp_home_and_construction_address_locality')){
                $mdp_info .=          '<meta itemprop="addressLocality" content="'.get_option('mdp_home_and_construction_address_locality').'" />';
        }else{
                $error = 1;
        }
        
        /* state */
        if(get_option('mdp_home_and_construction_address_region')){
                $mdp_info .=          '<meta itemprop="addressRegion" content="'.get_option('mdp_home_and_construction_address_region').'" />';
        }else{
            $error = 1;
        }
        
        /* zip code */
        if(get_option('mdp_home_and_construction_postal_code')){
                $mdp_info .=          '<meta itemprop="postalCode" content="'.get_option('mdp_home_and_construction_postal_code').'" />';
        }
        
        /* county is USA */
        if(get_option('mdp_home_and_construction_address_country')){
                $mdp_info .=          '<meta itemprop="addressCountry" content="'.get_option('mdp_home_and_construction_address_country').'" />';
        }
        
        /* email */
        if(get_option('mdp_home_and_construction_email')){
                $mdp_info .=          '<meta itemprop="email" content="'.get_option('mdp_home_and_construction_email').'" />';
        }
        
        /* telephone */
        if(get_option('mdp_home_and_construction_telephone')){
                $mdp_info .=          '<meta itemprop="telephone" content="'.get_option('mdp_home_and_construction_telephone').'" />';
        }
        
        /* fax */
        if(get_option('mdp_home_and_construction_fax_number')){
                $mdp_info .=          '<meta itemprop="faxNumber" content="'.get_option('mdp_home_and_construction_fax_number').'" />';
        }
        
        
        $mdp_info .=    '</span>';
        
        if($error == 0){
                return $mdp_info;
        }

}


function AggregateRatingHac(){
    
        $error = 0;
        
        $mdp_info .=    '<span itemprop="aggregateRating" itemscope="http://schema.org/AggregateRating">';
        
        /* total value i.e 1-5 should be 5 */
        if(get_option('mdp_home_and_construction_rating_value')){
                $mdp_info .=          '<meta itemprop="ratingValue" content="'.get_option('mdp_home_and_construction_rating_value').'" />';
        }else{
            $error = 1;
        }
        
        /* best rating */
        if(get_option('mdp_home_and_construction_best_rating')){
                $mdp_info .=          '<meta itemprop="bestRating" content="'.get_option('mdp_home_and_construction_best_rating').'" />';
        }else{
                $error = 1;
        }
        
        /* lowest rating */
        if(get_option('mdp_home_and_construction_worst_rating')){
                $mdp_info .=          '<meta itemprop="worstRating" content="'.get_option('mdp_home_and_construction_worst_rating').'" />';
        }else{
                $error = 1;
        }
        
        /* how many votes, count */
        if(get_option('mdp_home_and_construction_rating_count')){
                $mdp_info .=          '<meta itemprop="ratingCount" content="'.get_option('mdp_home_and_construction_rating_count').'" />';
        }else{
                $error = 1;
        }
        
        $mdp_info .=    '</span>';
        
        if($error == 0){
                return $mdp_info;
        }

}


function seeksHac(){
    
    $mdp_info .=    '<span itemprop="seeks" itemscope="http://schema.org/Demand">';
    
    $mdp_info .=        '<a itemprop="url" href="http://seo-services.sidcreations.com" class="visuallyhidden"><span itemprop="name">SEO Services</span></a>';
    
    $mdp_info .=        '<meta itemprop="description" content="Sid Creations is an seo company with seo services that gets your website ranked higher, indexed properly and viewed more on all search engines." />';
    
    $mdp_info .=    '</span>';
    
    return $mdp_info;

}

?>