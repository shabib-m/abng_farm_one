<?php
/**
 * @file
 * template.php
 */

/**
 * Implements hook_links().
 */
function abng_farm_one_links__header_menu($menu){
  $menu['attributes']['class'] = array('abng-menu flex gap-x-3 font-bold text-lg text-gray-200');

  return theme_links($menu);
}

function abng_farm_one_form_contact_site_form_alter(&$form, &$form_state, $form_id) {

  $form['name'] = array(
    '#type' => 'textfield',
    '#title' => t('Your name'),
    '#maxlength' => 255,
    '#required' => TRUE,
    '#prefix'=>'<div class="abng-bg-op flex flex-col items-center md:flex-row md:justify-between grid grid-cols-3 md:gap-x-8"><div>',
    '#suffix'=>'',
    '#attributes' => array('class' => array('bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500')),
  );
  $form['mail'] = array(
    '#type' => 'email',
    '#title' => t('Your email address'),
    '#required' => TRUE,
    '#attributes' => array('class' => array('bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500')),
  );
  $form['subject'] = array(
    '#type' => 'textfield',
    '#title' => t('Subject'),
    '#maxlength' => 255,
    '#required' => FALSE,
    '#suffix'=>'</div>',
    '#attributes' => array('class' => array('bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500')),
  );
  $form['message'] = array(
    '#type' => 'textarea',
    '#title' => t('Message'),
    '#required' => TRUE,
    '#prefix'=>'<div class="col-span-2">',
    '#suffix'=>'',
    '#attributes' => array('class' => array('bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500')),

  );

  // $form['#suffix'] = '</div>';

  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Send message'),
    '#suffix'=>'</div>',
    '#attributes' => array('class' => array('text-white font-bold bg-sky-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800')),
  );

  return $form;
}

