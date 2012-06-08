<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function buergerstiftung_form_search_block_form_alter(&$form, &$form_state, $form_id) {
  $form['search_block_form']['#attributes']['placeholder'] = t('Was suchen Sie?');
  // dsm($form);
}

/**
 * Returns HTML for a breadcrumb trail.
 *
 * @param $variables
 *   An associative array containing:
 *   - breadcrumb: An array containing the breadcrumb links.
 */
function buergerstiftung_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    $breadcrumb[0] = l(t('Startseite'), '<front>');
    $title = drupal_get_title();
    if (!empty($title)) {
      $breadcrumb[] = '<span class="breadcrumb-current">'. $title .'</span>';
    }
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}

/**
 * Implements hook_process_zone().
 */
function buergerstiftung_process_zone(&$vars) {
  $theme = alpha_get_theme();
  if ($vars['elements']['#zone'] == 'content') {
    $vars['messages'] = $theme->page['messages'];
    // $vars['breadcrumb'] = $theme->page['breadcrumb'];
  }
}

/**
 * Implements hook_process_region().
 */
function buergerstiftung_process_region(&$vars) {
  if (in_array($vars['elements']['#region'], array('content', 'menu', 'branding'))) {
    $theme = alpha_get_theme();
    // dsm($theme);

    switch ($vars['elements']['#region']) {
      case 'content':
        $vars['breadcrumb'] = $theme->page['breadcrumb'];
        $vars['title_prefix'] = $theme->page['title_prefix'];
        $vars['title'] = $theme->page['title'];
        $vars['title_suffix'] = $theme->page['title_suffix'];
        $vars['tabs'] = $theme->page['tabs'];
        $vars['action_links'] = $theme->page['action_links'];
        $vars['title_hidden'] = $theme->page['title_hidden'];
        $vars['feed_icons'] = $theme->page['feed_icons'];
        break;

      case 'menu':
        $vars['main_menu'] = $theme->page['main_menu'];
        $vars['secondary_menu'] = $theme->page['secondary_menu'];
        break;

      case 'branding':
        $vars['site_name'] = $theme->page['site_name'];
        $vars['linked_site_name'] = l($vars['site_name'], '<front>', array('attributes' => array('title' => t('Home')), 'html' => TRUE));
        $vars['site_slogan'] = $theme->page['site_slogan'];
        $vars['site_name_hidden'] = $theme->page['site_name_hidden'];
        $vars['site_slogan_hidden'] = $theme->page['site_slogan_hidden'];
        $vars['logo'] = $theme->page['logo'];
        $vars['logo_img'] = $vars['logo'] ? '<img src="' . $vars['logo'] . '" alt="' . check_plain($vars['site_name']) . '" id="logo" />' : '';
        $vars['linked_logo_img'] = $vars['logo'] ? l($vars['logo_img'], '<front>', array('attributes' => array('rel' => 'home', 'title' => check_plain($vars['site_name'])), 'html' => TRUE)) : '';
        break;
    }
  }
}