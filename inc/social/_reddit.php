<?php defined('ABSPATH') || exit;

class social_reddit extends jk_wp_social_sharing
{

    public function get_reddit_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://reddit.com/submit?url=' . $post_url . '&title=' . $post_title);

    }

    public function the_reddit_share_link_render($post_id, $type = 'default')
    {

        $title = $this->get_social_sharing_title($post_id);

        $url = $this->get_social_sharing_url($post_id);

        $excerpt = $this->get_social_sharing_excerpt($post_id);

        $thumbnail = $this->get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url($this->get_reddit_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-reddit" style="background-color: #ff4500;">

                <i class="fab fa-reddit"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url($this->get_reddit_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-reddit">

                <?php echo esc_html('Reddit'); ?>

            </a>

        <?php

        endif;

    }

}
