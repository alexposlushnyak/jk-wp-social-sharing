<?php defined('ABSPATH') || exit;

class social_whatsapp extends jk_wp_social_sharing
{

    public function get_whatsapp_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://api.whatsapp.com/send?text=*' . $post_title . '*%0A' . $post_excerpt . '%0A' . $post_url);

    }

    public function the_whatsapp_share_link_render($post_id, $type = 'default')
    {

        $title = $this->get_social_sharing_title($post_id);

        $url = $this->get_social_sharing_url($post_id);

        $excerpt = $this->get_social_sharing_excerpt($post_id);

        $thumbnail = $this->get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url($this->get_whatsapp_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-whatsapp" style="background-color: #25d366;">

                <i class="fab fa-whatsapp"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url($this->get_whatsapp_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-whatsapp">

                <?php echo esc_html('Whatsapp'); ?>

            </a>

        <?php

        endif;

    }

}
