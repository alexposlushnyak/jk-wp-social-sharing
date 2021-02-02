<?php defined('ABSPATH') || exit;

class social_linkedin extends jk_wp_social_sharing
{

    public static function get_linkedin_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.linkedin.com/shareArticle?mini=true&url=' . $post_url . '&title=' . $post_title . '&summary=' . $post_excerpt . '&source=' . $post_url);

    }

    public static function the_linkedin_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_linkedin_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-linkedin">

                <i class="fab fa-linkedin"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_linkedin_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-linkedin" style="background-color: #007bb5;">

                <?php echo esc_html('Linkedin'); ?>

            </a>

        <?php

        endif;

    }

}
