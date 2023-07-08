function wp_login_profile() { 
if ( is_user_logged_in() ) {
    $current_user = wp_get_current_user();
    if ( ($current_user instanceof WP_User) ) {
        echo esc_html( $current_user->display_name );
        echo get_avatar( $current_user->ID, 32 );
//         echo '<ul class = "logout-drp"><li><a href = "'. home_url() .'/wp-login.php?action=logout">Logout</a></li></ul>';
		echo '<ul class = "logout-drp"><li><a href="'. wp_logout_url( home_url() ) .'">Logout</a></li></ul>';
    }
}
}

add_shortcode('wpb_login', 'wp_login_profile');

jQuery(document).ready(function() {
  jQuery('.cstm-profile img.avatar').click(function() {
    jQuery(".cstm-profile ul.logout-drp").toggle();
  });
});


ul.logout-drp {
    list-style: none;
    position: absolute;
    margin-top: 10px;
    width: 100%;
    padding: 8px 15px;
    text-align: left;
    transition: .3s all ease;
    background: #fff;
    border-radius: 3px;
    display: none;
    z-index: 9;
}
ul.logout-drp a {
    color: #00B22D;
}

.cstm-profile img {
    border-radius: 50% !important;
    margin-left: 10px;
    cursor: pointer;
    position: relative;
    top: 6px;
}
