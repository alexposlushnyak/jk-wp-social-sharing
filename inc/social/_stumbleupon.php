<?php defined('ABSPATH') || exit;

class social_stumbleupon extends jk_wp_social_sharing
{

    public function get_stumbleupon_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.stumbleupon.com/submit?url=' . $post_url);

    }

    public function the_stumbleupon_share_link_render($post_id, $type = 'default')
    {

        $title = $this->get_social_sharing_title($post_id);

        $url = $this->get_social_sharing_url($post_id);

        $excerpt = $this->get_social_sharing_excerpt($post_id);

        $thumbnail = $this->get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url($this->get_stumbleupon_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-stumbleupon" style="background-color: #e94826;">

                <i class="fab fa-stumbleupon"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url($this->get_stumbleupon_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-stumbleupon">

                <?php echo esc_html('Stumbleupon'); ?>

            </a>

        <?php

        endif;

    }

}
