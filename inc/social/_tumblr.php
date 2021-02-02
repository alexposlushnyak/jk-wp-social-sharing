<?php defined('ABSPATH') || exit;

class social_tumblr extends jk_wp_social_sharing
{

    public function get_tumblr_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://tumblr.com/share/link?url=' . $post_url);

    }

    public function the_tumblr_share_link_render($post_id, $type = 'default')
    {

        $title = $this->get_social_sharing_title($post_id);

        $url = $this->get_social_sharing_url($post_id);

        $excerpt = $this->get_social_sharing_excerpt($post_id);

        $thumbnail = $this->get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url($this->get_tumblr_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-tumblr" style="background-color: #2c4762;">

                <i class="fab fa-tumblr"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url($this->get_tumblr_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-tumblr">

                <?php echo esc_html('Tumblr'); ?>

            </a>

        <?php

        endif;

    }

}
