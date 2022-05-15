<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6280d28b3a80d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\x70\137\163\160\x65\145\144"; const okeoeeywmosegiiy = "\x66\x61\151\154\137\x73\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto emqswoaawgeyosmi; } if (function_exists("\x67\x65\x74\137\156\x65\x74\167\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto yuimwyoywaiiqacs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto ocywegekakimmwcq; yuimwyoywaiiqacs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\160\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); ocywegekakimmwcq: emqswoaawgeyosmi: return $ucaaeyusaoameywi; } }
