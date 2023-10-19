<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65310fbf7f1f7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\x70\137\163\x70\x65\145\144"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\x5f\163\141\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto cceggewquoaemcwq; } if (function_exists("\147\x65\x74\x5f\x6e\145\x74\167\x6f\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto mesesokuoomcioom; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto iuwccksomkkouogy; mesesokuoomcioom: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\160\x73\72\x2f\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); iuwccksomkkouogy: cceggewquoaemcwq: return $ucaaeyusaoameywi; } }
