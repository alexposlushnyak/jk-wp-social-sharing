<?php defined('ABSPATH') || exit;

class jk_wp_social_sharing
{

    public static function get_twitter_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://twitter.com/intent/tweet?text=' . $post_excerpt . '\x20' . $post_url);

    }

    public static function get_pinterest_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.pinterest.com/pin/create/button/?url=' . $post_url . '&media=' . $post_thumb);

    }

    public static function get_facebook_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.facebook.com/sharer.php?u=' . $post_url);

    }

    public static function get_vk_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://vkontakte.ru/share.php?url=' . $post_url . '&title=' . $post_title . '&description=' . $post_excerpt . '&image=' . $post_thumb);

    }

    public static function get_linkedin_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.linkedin.com/shareArticle?mini=true&url=' . $post_url . '&title=' . $post_title . '&summary=' . $post_excerpt . '&source=' . $post_url);

    }

    public static function get_odnoklassniki_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://connect.ok.ru/offer?url=' . $post_url . '&title=' . $post_title . '&imageUrl=' . $post_thumb);

    }

    public static function get_tumblr_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://tumblr.com/share/link?url=' . $post_url);

    }

    public static function get_google_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://plus.google.com/share?url=' . $post_url);

    }

    public static function get_digg_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://digg.com/submit?url=' . $post_url);

    }

    public static function get_reddit_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://reddit.com/submit?url=' . $post_url . '&title=' . $post_title);

    }

    public static function get_stumbleupon_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.stumbleupon.com/submit?url=' . $post_url);

    }

    public static function get_pocket_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://getpocket.com/edit?url=' . $post_url);

    }

    public static function get_whatsapp_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://api.whatsapp.com/send?text=*' . $post_title . '*%0A' . $post_excerpt . '%0A' . $post_url);

    }

    public static function get_xing_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://www.xing.com/app/user?op=share&url=' . $post_url);

    }

    public static function get_email_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('mailto:?subject=' . $post_title . '&body=' . $post_excerpt . '\n' . $post_url);

    }

    public static function get_telegram_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://telegram.me/share/url?url=' . $post_url . '&text=' . $post_excerpt);

    }

    public static function get_skype_share_link($post_title, $post_url, $post_thumb, $post_excerpt)
    {

        return esc_url('https://web.skype.com/share?url=' . $post_url);

    }

    public static function get_social_sharing_url($post_id)
    {

        return urlencode(get_permalink($post_id));

    }

    public static function get_social_sharing_title($post_id)
    {

        return htmlspecialchars(urlencode(html_entity_decode(get_the_title($post_id), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

    }

    public static function get_social_sharing_excerpt($post_id)
    {

        return htmlspecialchars(urlencode(html_entity_decode(get_the_excerpt($post_id), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

    }

    public static function get_social_sharing_thumbnail($post_id)
    {

        return wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');

    }

    public static function the_twitter_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_twitter_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-twitter" style="background-color: #1da1f2;">

                <i class="fab fa-twitter"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_twitter_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-twitter">

                <?php echo esc_html('Twitter'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_pinterest_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_pinterest_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-pinterest" style="background-color: #bd081c;">

                <i class="fab fa-pinterest-p"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_pinterest_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-pinterest">

                <?php echo esc_html('Pinterest'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_facebook_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_facebook_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-facebook" style="background-color: #1877f2;">

                <i class="fab fa-facebook-f"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_facebook_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-facebook">

                <?php echo esc_html('Facebook'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_vk_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_vk_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-vk" style="background-color: #4a76a8;">

                <i class="fab fa-vk"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_vk_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-vk">

                <?php echo esc_html('VK'); ?>

            </a>

        <?php

        endif;

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

    public static function the_odnoklassniki_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_odnoklassniki_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-odnoklassniki" style="background-color: #EE8108;">

                <i class="fab fa-odnoklassniki"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_odnoklassniki_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-odnoklassniki">

                <?php echo esc_html('Odnoklassniki'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_tumblr_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_tumblr_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-tumblr" style="background-color: #2c4762;">

                <i class="fab fa-tumblr"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_tumblr_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-tumblr">

                <?php echo esc_html('Tumblr'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_google_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_google_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-google" style="background-color: #db4437;">

                <i class="fab fa-google"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_google_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-google">

                <?php echo esc_html('Google'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_digg_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_digg_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-digg" style="background-color: #1B1A19;">

                <i class="fab fa-digg"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_digg_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-digg">

                <?php echo esc_html('Digg'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_reddit_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_reddit_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-reddit" style="background-color: #ff4500;">

                <i class="fab fa-reddit"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_reddit_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-reddit">

                <?php echo esc_html('Reddit'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_stumbleupon_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_stumbleupon_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-stumbleupon" style="background-color: #e94826;">

                <i class="fab fa-stumbleupon"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_stumbleupon_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-stumbleupon">

                <?php echo esc_html('Stumbleupon'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_pocket_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_pocket_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-pocket" style="background-color: #ee4056;">

                <i class="fab fa-get-pocket"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_pocket_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-pocket">

                <?php echo esc_html('Pocket'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_whatsapp_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_whatsapp_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-whatsapp" style="background-color: #25d366;">

                <i class="fab fa-whatsapp"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_whatsapp_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-whatsapp">

                <?php echo esc_html('Whatsapp'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_xing_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_xing_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-xing" style="background-color: #006567;">

                <i class="fab fa-xing"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_xing_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-xing">

                <?php echo esc_html('Xing'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_email_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_email_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-email" style="background-color: #db4437;">

                <i class="fa fa-envelope"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_email_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-email">

                <?php echo esc_html('Email'); ?>

            </a>

        <?php

        endif;

    }

    public static function the_telegram_share_link_render($post_id, $type = 'default')
    {

        $title = self::get_social_sharing_title($post_id);

        $url = self::get_social_sharing_url($post_id);

        $excerpt = self::get_social_sharing_excerpt($post_id);

        $thumbnail = self::get_social_sharing_thumbnail($post_id);

        if ($type === 'default'):

            ?>

            <a href="<?php echo esc_url(self::get_telegram_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-default share-link-telegram" style="background-color: #0088cc;">

                <i class="fab fa-telegram"></i>

            </a>

        <?php

        endif;

        if ($type === 'simple'):

            ?>

            <a href="<?php echo esc_url(self::get_telegram_share_link($title, $url, $thumbnail, $excerpt)); ?>"
               class="share-link share-link-simple share-link-telegram">

                <?php echo esc_html('Telegram'); ?>

            </a>

        <?php

        endif;

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
