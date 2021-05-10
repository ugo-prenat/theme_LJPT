<?php
class SignLanguageVideosWidget extends WP_Widget {

    public function __construct() {
        parent::__construct('sign-language-videos-widget', 'Widget vidéos LSF');
    }

    public function widget($args, $instance) {
        ?> 
        <div class="widget-container sign-language-videos-widget">
            <div class="widget-title">
                <p class="title">Vidéos en LSF</p>
                <div class="img-container">
                    <img src="<?= get_template_directory_uri() . '/img/lsf.png' ?>">
                </div>
            </div>
            <p class="widget-description"><a href="https://www.youtube.com/channel/UCGJ_BrOb2h7baHLEveMdoHA" target="_blank">Ici</a> quelques règles de jeux en Langue des Signes Française pour lesquelles l’association a collaboré</p>
        </div>
        <?php
    }

    public function form($instance) {
        
    }

    public function update($newInstance, $oldInstance) {
        return [];
    }

}