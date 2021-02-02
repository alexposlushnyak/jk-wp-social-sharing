<?php defined('ABSPATH') || exit;

class social_vk extends jk_wp_social_sharing
{

    public function get_vk_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://vkontakte.ru/share.php?url=' . $post_url . '&title=' . $post_title . '&description=' . $post_excerpt . '&image=' . $post_thumb);

    }

    public function the_vk_share_link_render($post_id, $type = 'default')
    {

        $title = $this->get_social_sharing_title($post_id);

        $url = $this->get_social_sharing_url($post_id);

        $excerpt = $this->get_social_sharing_excerpt($post_id);

        $thumbnail = $this->get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url($this->get_vk_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-vk" style="background-color: #4a76a8;">

                <i class="fab fa-vk"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url($this->get_vk_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-vk">

                <?php echo esc_html('VK'); ?>

            </a>

        <?php

        endif;

    }

}
