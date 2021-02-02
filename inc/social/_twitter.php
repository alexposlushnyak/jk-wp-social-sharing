<?php defined('ABSPATH') || exit;

class social_twitter extends jk_wp_social_sharing
{

    public static function get_twitter_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://twitter.com/intent/tweet?text=' . $post_excerpt . '\x20' . $post_url);

    }

    public static function the_twitter_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_twitter_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-twitter" style="background-color: #1da1f2;">

                <i class="fab fa-twitter"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_twitter_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-twitter">

                <?php echo esc_html('Twitter'); ?>

            </a>

        <?php

        endif;

    }

}
