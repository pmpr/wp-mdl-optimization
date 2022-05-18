<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284dbab4ba54             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\157\x70\x5f\x73\x70\145\145\144"; const okeoeeywmosegiiy = "\146\141\x69\154\137\x73\141\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto emqswoaawgeyosmi; } if (function_exists("\147\145\164\137\156\145\x74\x77\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto yuimwyoywaiiqacs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto ocywegekakimmwcq; yuimwyoywaiiqacs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\x70\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); ocywegekakimmwcq: emqswoaawgeyosmi: return $ucaaeyusaoameywi; } }
