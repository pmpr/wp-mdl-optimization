<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a94e023bb4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\137\163\x70\145\x65\144"; const okeoeeywmosegiiy = "\146\141\x69\x6c\x5f\163\x61\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto yggmaskeguaqkusc; } if (function_exists("\147\145\164\137\156\145\164\167\157\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto uwaimsisescsgyqk; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto uqcsksaywyqeumig; uwaimsisescsgyqk: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\160\163\72\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); uqcsksaywyqeumig: yggmaskeguaqkusc: return $ucaaeyusaoameywi; } }
