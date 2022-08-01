<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e79fd80d6bb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\137\x73\x70\x65\x65\144"; const okeoeeywmosegiiy = "\146\x61\x69\x6c\137\x73\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eywcgeccsmquugsw; } if (function_exists("\147\145\164\x5f\x6e\x65\x74\x77\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto iuieyqacggsykgus; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto wamkaouokmyoyuqu; iuieyqacggsykgus: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\160\163\72\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); wamkaouokmyoyuqu: eywcgeccsmquugsw: return $ucaaeyusaoameywi; } }
