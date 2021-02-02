<?php defined('ABSPATH') || exit;

class social_odnoklassniki extends jk_wp_social_sharing
{

    public static function the_odnoklassniki_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_odnoklassniki_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-odnoklassniki" style="background-color: #EE8108;">

                <i class="fab fa-odnoklassniki"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_odnoklassniki_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-odnoklassniki">

                <?php echo esc_html('Odnoklassniki'); ?>

            </a>

        <?php

        endif;

    }

    public static function get_odnoklassniki_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://connect.ok.ru/offer?url=' . $post_url . '&title=' . $post_title . '&imageUrl=' . $post_thumb);

    }

}
