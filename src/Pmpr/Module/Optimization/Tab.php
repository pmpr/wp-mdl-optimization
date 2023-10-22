<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             653524d4a234f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\x5f\163\160\145\x65\144"; const okeoeeywmosegiiy = "\x66\x61\151\x6c\x5f\x73\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto mesesokuoomcioom; } if (function_exists("\147\x65\x74\x5f\156\x65\164\167\x6f\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto omyquyiguuaociwq; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto aqwoykqaquewcaki; omyquyiguuaociwq: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\160\163\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); aqwoykqaquewcaki: mesesokuoomcioom: return $ucaaeyusaoameywi; } }
