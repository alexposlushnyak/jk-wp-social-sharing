<?php defined('ABSPATH') || exit;

class social_telegram extends jk_wp_social_sharing
{

    public function the_telegram_share_link_render($post_id, $type = 'default')
    {

        $title = $this->get_social_sharing_title($post_id);

        $url = $this->get_social_sharing_url($post_id);

        $excerpt = $this->get_social_sharing_excerpt($post_id);

        $thumbnail = $this->get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url($this->get_telegram_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-telegram" style="background-color: #0088cc;">

                <i class="fab fa-telegram"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url($this->get_telegram_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-telegram">

                <?php echo esc_html('Telegram'); ?>

            </a>

        <?php

        endif;

    }

    public function get_telegram_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://telegram.me/share/url?url=' . $post_url . '&text=' . $post_excerpt);

    }

}
