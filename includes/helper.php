<?php

/**
 * Retrieve menu items as a flat array for custom markup.
 *
 * This function gets the registered menu items and formats them for easier use.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 *
 * @param string $menu_name The registered menu ID.
 * @return array $menu_items Array of WP_Post objects or an empty array if the menu doesn't exist.
 */
function get_theme_menu($menu_name)
{
    // Get menu locations
    $locations = get_nav_menu_locations();

    // Return an empty array if the menu doesn't exist
    if (!isset($locations[$menu_name])) {
        return [];
    }

    // Retrieve the menu object and items
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);

    // Process menu items
    foreach ($menu_items as &$item) {
        // Convert classes array to a space-separated string
        $item->classes = !empty($item->classes) ? implode(' ', array_filter($item->classes)) : '';

        // Ensure target and xfn attributes are set
        $item->target = $item->target ?? '';
        $item->xfn = $item->xfn ?? '';
    }
    unset($item); // Break reference with the last item

    return $menu_items;
}

/**
 * Retrieve the URL and alt text for a post's featured image.
 *
 * Checks if the specified post has a featured image and retrieves its full-size image URL and alt text.
 *
 * @param int $post_id The ID of the post to retrieve the featured image for.
 * @return array|bool Returns an array with 'url' and 'alt' keys if an image exists, otherwise false.
 */
function get_featured_image_data($post_id)
{
    // Return false if the post has no featured image
    if (!has_post_thumbnail($post_id)) {
        return false;
    }

    // Get featured image ID and its details
    $post_thumbnail_id = get_post_thumbnail_id($post_id);
    $featured_image_data = wp_get_attachment_image_src($post_thumbnail_id, 'full'); // Change 'full' to other sizes if needed
    $featured_image_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);

    return [
        'url' => $featured_image_data[0] ?? '',
        'alt' => $featured_image_alt ?: '',
    ];
}

/**
 * Get the current page URL.
 *
 * This function constructs the full URL of the current page, including HTTPS if applicable.
 *
 * @return string The full URL of the current page.
 */
function getCurrentUrl()
{
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') .
        "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
}