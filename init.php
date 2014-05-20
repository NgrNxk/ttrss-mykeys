<?php
/*
 * Add this file to a directory named `mykeys` in the plugin directory. Reload 
 * TT-RSS and enable the plugin via Preferences→Plugins.
 * It is very important that the directory name and the name of the class are the same!
 */
class MyKeys extends Plugin {

    private $host;

    function about() {
        return [
            1.1,
            'Personal keyboard configuration',
            'aid',
	    false];
    }

    function api_version() {
        return 2;
    }

    function init($host) {
        $this->host = $host;

        $host->add_hook($host::HOOK_HOTKEY_MAP, $this);
    }

    function hook_hotkey_map($hotkeys) {
        $hotkeys['m s']    = 'search_dialog';
        $hotkeys['m h']    = 'help_dialog';

////			"navigation" => array(
//				"k" => "next_feed",
//				"j" => "prev_feed",
//				"n" => "next_article",
//				"p" => "prev_article",
//				"(38)|up" => "prev_article",
//				"(40)|down" => "next_article",
////				"^(38)|Ctrl-up" => "prev_article_noscroll",
////				"^(40)|Ctrl-down" => "next_article_noscroll",
//				"(191)|/" => "search_dialog",
////			"article" => array(
//				"s" => "toggle_mark",
//				"*s" => "toggle_publ",
//				"u" => "toggle_unread",
//				"*t" => "edit_tags",
//				"*d" => "dismiss_selected",
//				"*x" => "dismiss_read",
//				"o" => "open_in_new_window",
//				"c p" => "catchup_below",
//				"c n" => "catchup_above",
//				"*n" => "article_scroll_down",
//				"*p" => "article_scroll_up",
//				"*(38)|Shift+up" => "article_scroll_up",
//				"*(40)|Shift+down" => "article_scroll_down",
//				"a *w" => "toggle_widescreen",
//				"a e" => "toggle_embed_original",
//				"e" => "email_article",
//				"a q" => "close_article",
////			"article_selection" => array(
//				"a a" => "select_all",
//				"a u" => "select_unread",
//				"a *u" => "select_marked",
//				"a p" => "select_published",
//				"a i" => "select_invert",
//				"a n" => "select_none",
////			"feed" => array(
//				"f r" => "feed_refresh",
//				"f a" => "feed_unhide_read",
//				"f s" => "feed_subscribe",
//				"f e" => "feed_edit",
//				"f q" => "feed_catchup",
//				"f x" => "feed_reverse",
//				"f *d" => "feed_debug_update",
//				"f *c" => "toggle_combined_mode",
//				"f c" => "toggle_cdm_expanded",
//				"*q" => "catchup_all",
//				"x" => "cat_toggle_collapse",
////			"goto" => array(
//				"g a" => "goto_all",
//				"g f" => "goto_fresh",
//				"g s" => "goto_marked",
//				"g p" => "goto_published",
//				"g t" => "goto_tagcloud",
//				"g *p" => "goto_prefs",
////			"other" => array(
//				"(9)|Tab" => "select_article_cursor", // tab
//				"c l" => "create_label",
//				"c f" => "create_filter",
//				"c s" => "collapse_sidebar",
//				"^(191)|Ctrl+/" => "help_dialog",

        return $hotkeys;
    }
}

