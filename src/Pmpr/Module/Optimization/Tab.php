<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d7c3928abb7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\137\x73\x70\x65\145\144"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\x5f\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto ewooakeuigcyuemu; } if (function_exists("\147\145\x74\x5f\x6e\x65\x74\167\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto ekmqouqsgsaukeiq; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto cugkqmkuyuwwqcec; ekmqouqsgsaukeiq: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\160\x73\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); cugkqmkuyuwwqcec: ewooakeuigcyuemu: return $ucaaeyusaoameywi; } }
