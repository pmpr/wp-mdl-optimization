<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630b114cca791             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\137\163\x70\145\x65\144"; const okeoeeywmosegiiy = "\146\141\x69\x6c\137\x73\141\146\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eysuawiooiswaseq; } if (function_exists("\x67\x65\164\x5f\156\x65\x74\167\157\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto suscosoukqeyyqgs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\x2f"); goto kiewcwsykccgocuc; suscosoukqeyyqgs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\164\x70\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); kiewcwsykccgocuc: eysuawiooiswaseq: return $ucaaeyusaoameywi; } }
