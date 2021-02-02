<?php defined('ABSPATH') || exit;

class social_facebook extends jk_wp_social_sharing
{

    public function get_facebook_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.facebook.com/sharer.php?u=' . $post_url);

    }

    public function the_facebook_share_link_render($post_id, $type = 'default')
    {

        $title = $this->get_social_sharing_title($post_id);

        $url = $this->get_social_sharing_url($post_id);

        $excerpt = $this->get_social_sharing_excerpt($post_id);

        $thumbnail = $this->get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url($this->get_facebook_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-facebook" style="background-color: #1877f2;">

                <i class="fab fa-facebook-f"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url($this->get_facebook_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-facebook">

                <?php echo esc_html('Facebook'); ?>

            </a>

        <?php

        endif;

    }

}
