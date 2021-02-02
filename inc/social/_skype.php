<?php defined('ABSPATH') || exit;

class social_skype extends jk_wp_social_sharing
{

    public static function get_skype_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://web.skype.com/share?url=' . $post_url);

    }

    public static function the_skype_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_skype_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-skype" style="background-color: #00aff0;">

                <i class="fab fa-skype"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_skype_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-skype">

                <?php echo esc_html('Skype'); ?>

            </a>

        <?php

        endif;

    }

}
