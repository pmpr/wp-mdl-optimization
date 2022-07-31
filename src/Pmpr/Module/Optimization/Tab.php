<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e6b0646cf09             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\x5f\x73\160\x65\x65\144"; const okeoeeywmosegiiy = "\146\x61\x69\x6c\x5f\163\141\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto cqeceeagmysoyoqg; } if (function_exists("\x67\x65\x74\137\156\x65\x74\x77\157\162\153") && get_network() && is_multisite() && !is_main_site()) { goto sickakeesgcgwisw; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto wmqegaqemgiggsce; sickakeesgcgwisw: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\160\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); wmqegaqemgiggsce: cqeceeagmysoyoqg: return $ucaaeyusaoameywi; } }
