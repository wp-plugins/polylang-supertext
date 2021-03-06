<?php

namespace Supertext\Polylang\Helper;

/**
 * This class wrapps all constant configurations
 * @package Supertext\Polylang\Helper
 * @author Michael Sebel <michael@comotive.ch>
 */
class Constant
{
  /**
   * @var string the used API base url
   */
  const API_URL = self::LIVE_API;
  /**
   * @var string development api endpoints
   */
  const DEV_API = 'https://192.168.0.6/Supertext/api/v1/';
  /**
   * @var string live api endpoints
   */
  const LIVE_API = 'https://www.supertext.ch/api/v1/';
  /**
   * @var string the settings option
   */
  const SETTINGS_OPTION = 'polylang_supertext_settings';
  /**
   * @var string name of the subsetting for user mapping
   */
  const SETTING_USER_MAP = 'userMap';
  /**
   * @var string name of the subsetting for language mapping
   */
  const SETTING_LANGUAGE_MAP = 'languageMap';
  /**
   * $var string name of the subsetting for custom field definitions
   */
  const SETTING_CUSTOM_FIELDS = 'customFields';
  /**
   * $var string name of the subsetting for shortcodes
   */
  const SETTING_SHORTCODES = 'shortcodes';
  /**
   * @var string name of the subsetting for language mapping
   */
  const SETTING_WORKING = 'isWorking';
  /**
   * @var string the default supertext api user
   */
  const DEFAULT_API_USER = 'public_user';
  /**
   * @var string the style handle
   */
  const STYLE_HANDLE = 'polylang-supertext-styles';
  /**
   * @var string the post style handle
   */
  const POST_STYLE_HANDLE = 'polylang-supertext-post-styles';
  /**
   * @var string the jstree style handle
   */
  const JSTREE_STYLE_HANDLE = 'polylang-supertext-jstree-styles';
  /**
   * @var string the global script handle
   */
  const GLOBAL_SCRIPT_HANDLE = 'polylang-supertext-global-library';
  /**
   * @var string the translation script handle
   */
  const TRANSLATION_SCRIPT_HANDLE = 'polylang-supertext-translation-library';
  /**
   * @var string the settings script handle
   */
  const SETTINGS_SCRIPT_HANDLE = 'polylang-supertext-settings-scripts';
  /**
   * @var string the jstree script handle
   */
  const JSTREE_SCRIPT_HANDLE = 'polylang-supertext-jstree-scripts';
}