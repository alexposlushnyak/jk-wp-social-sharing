<?php defined('ABSPATH') || exit;

class jk_wp_social_sharing
{

    public function get_social_sharing_url($post_id)
    {

        return urlencode(get_permalink($post_id));

    }

    public function get_social_sharing_title($post_id)
    {

        return htmlspecialchars(urlencode(html_entity_decode(get_the_title($post_id), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

    }

    public function get_social_sharing_excerpt($post_id)
    {

        return htmlspecialchars(urlencode(html_entity_decode(get_the_excerpt($post_id), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

    }

    public function get_social_sharing_thumbnail($post_id)
    {

        return wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');

    }

}
