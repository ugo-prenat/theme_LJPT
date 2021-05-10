<?php
class PlayEqualityWidget extends WP_Widget {

    public function __construct() {
        parent::__construct('play-equality-widget', 'Widget jouer l\'égalité');
    }

    public function widget($args, $instance) {
        ?> 
        <div class="widget-container play-quality-widget">
            <div class="widget-title">
                <p class="title">Jouer l'égalité</p>
                <div class="img-container">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M478.021,19.912C477.971,8.806,468.89-0.006,458.015,0h-63.549c-11.046,0-20,8.954-20,20s8.954,20,20,20h15.274    l-68.412,68.412c-21.14-15.407-47.151-24.513-75.252-24.513c-57.133,0-105.641,37.614-122.077,89.376    c-62.102,8.789-110.025,62.287-110.025,126.776c0,63.805,46.91,116.854,108.051,126.485v21.312h-4.152c-11.046,0-20,8.954-20,20    c0,11.046,8.954,20,20,20h4.152V492c0,11.046,8.954,20,20,20c11.046,0,20-8.954,20-20v-4.152h4.152c11.046,0,20-8.954,20-20    c0-11.046-8.954-20-20-20h-4.152v-21.312c48.229-7.597,87.598-42.211,102.077-87.811c62.102-8.789,110.025-62.287,110.025-126.776    c0-28.102-9.106-54.113-24.513-75.252l68.412-68.412V83.56c0,11.046,8.954,20,20,20c11.046,0,20-8.954,20-20V20    C478.025,19.97,478.021,19.942,478.021,19.912z M162.025,388.102c-48.552,0-88.051-39.499-88.051-88.051    c0-40.251,27.148-74.279,64.095-84.738c1.574,60.752,45.673,111.101,103.563,122.337    C227.504,367.445,197.134,388.102,162.025,388.102z M178.045,213.465c40.448,7.465,71.292,42.664,72.012,85.071    C209.609,291.07,178.765,255.872,178.045,213.465z M290.032,296.687c-1.574-60.752-45.673-111.101-103.563-122.337    c14.129-29.796,44.499-50.452,79.608-50.452c48.552,0,88.051,39.499,88.051,88.051C354.127,252.2,326.979,286.228,290.032,296.687    z"/></g></g></svg>
                </div>
            </div>
            <p class="widget-description">L'égalité commence avec les jouets Visitez notre autre site : <a href="https://www.jouerlegalite.fr/" target="_blank">Jouer l’égalité</a></p>
        </div>
        <?php
    }

    public function form($instance) {
        
    }

    public function update($newInstance, $oldInstance) {
        return [];
    }

}