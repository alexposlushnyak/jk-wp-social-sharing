<?php defined('ABSPATH') || exit;

class social_pinterest extends jk_wp_social_sharing
{

    public static function the_pinterest_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_pinterest_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-pinterest" style="background-color: #bd081c;">

                <i class="fab fa-pinterest-p"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_pinterest_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-pinterest">

                <?php echo esc_html('Pinterest'); ?>

            </a>

        <?php

        endif;

    }

    public static function get_pinterest_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.pinterest.com/pin/create/button/?url=' . $post_url . '&media=' . $post_thumb);

    }

}
