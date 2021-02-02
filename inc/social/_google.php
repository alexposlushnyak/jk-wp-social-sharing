<?php defined('ABSPATH') || exit;

class social_google extends jk_wp_social_sharing
{

    public function get_google_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://plus.google.com/share?url=' . $post_url);

    }

    public function the_google_share_link_render($post_id, $type = 'default')
    {

        $title = $this->get_social_sharing_title($post_id);

        $url = $this->get_social_sharing_url($post_id);

        $excerpt = $this->get_social_sharing_excerpt($post_id);

        $thumbnail = $this->get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url($this->get_google_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-google" style="background-color: #db4437;">

                <i class="fab fa-google"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url($this->get_google_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-google">

                <?php echo esc_html('Google'); ?>

            </a>

        <?php

        endif;

    }

}
