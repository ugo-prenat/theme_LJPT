    
    <footer>
        <div class="gtc-container">
            <p>Consulter notre <a href="http://localhost/theme_ljpt/index.php/politique-de-confidentialite/">politique de confidentialité</a>.</p>
        </div>
        <div class="wp-login-container">
            <?php
                if(is_user_logged_in()) {
                    echo '<a href="' . wp_logout_url() . '"><img src="' . get_template_directory_uri() . '/img/logout.svg' . '"></a>';
                } else {
                    echo '<a href="' . wp_login_url() . '"><img src="' . get_template_directory_uri() . '/img/login.svg' . '"></a>';
                }
            ?>
        </div>
    </footer>
    
    <?php wp_footer() ?>
</body>
</html>