<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b8710debefd             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\Optimization\Page\Model; class Manipulate extends BaseClass { public static function kcwoaesycwouwems() : bool { return ManipulateServer::get("\160\141\x67\x65") === Model::symcgieuakksimmu()->miwqiiqeegeqcwis(); } public static function qkaowsuomuucgcck() { $wymyeyweagqomiim = false; if (isset($_SERVER["\x48\124\124\x50\x53"])) { goto ikqqskkqqwmwssoo; } if (isset($_SERVER["\x53\105\122\126\x45\x52\x5f\x50\117\x52\124"]) && "\x34\64\x33" === (string) DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\x53\105\x52\126\105\x52\137\120\117\122\124"]))) { goto aomysykcgikegiau; } goto iwekmyyccgiyuecc; ikqqskkqqwmwssoo: $ueicioocowkieeme = DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\110\124\x54\120\123"])); if (!("\157\156" === strtolower($ueicioocowkieeme) || "\61" === (string) $ueicioocowkieeme)) { goto ogsaaqsaogcqiouy; } $wymyeyweagqomiim = true; ogsaaqsaogcqiouy: goto iwekmyyccgiyuecc; aomysykcgikegiau: $wymyeyweagqomiim = true; iwekmyyccgiyuecc: return $wymyeyweagqomiim; } public static function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\145\x6c\x65\155\145\156\x74\x6f\162\x2d\x70\162\145\x76\151\145\x77", "\x66\x6c\x5f\x62\165\x69\x6c\144\x65\x72", "\143\164\x5f\142\165\x69\x6c\144\x65\162", "\145\x74\x5f\x66\x62", "\164\166\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto ogqmesokykywseys; } $ksaameoqigiaoigg = true; goto cwwmimggaaecmucw; ogqmesokykywseys: awoaooyoeoyeeqee: } cwwmimggaaecmucw: return $ksaameoqigiaoigg; } public static function eaiyegoagkgeowae() : bool { $weksiguqgqscsoee = false; if (!function_exists("\147\x65\x74\137\143\x75\162\x72\145\x6e\x74\137\163\x63\x72\145\145\156")) { goto ykomgumacooyomsk; } ykomgumacooyomsk: return $weksiguqgqscsoee; } public static function yoqccqiiaagckoou($migiiksoiymissge) { $ywmkwiwkosakssii = []; if (!ManipulateSetting::esoowymaimwcuecq()) { goto mqkmcysgoiaouiwm; } $ywmkwiwkosakssii["\143\x6f\x6f\153\151\x65\x73"] = ["\130\104\x45\x42\125\107\x5f\x53\105\123\123\x49\x4f\x4e" => "\130\x44\105\102\125\107\x5f\x45\103\x4c\x49\120\123\105"]; mqkmcysgoiaouiwm: return wp_remote_get($migiiksoiymissge, $ywmkwiwkosakssii); } public static function maykkqauyaoqmqeu($aqykuigiuwmmcieu = self::NAMES) : ?array { return ManipulatePost::mwoyqeeigwqoamiw(["\157\165\164\160\165\x74" => $aqykuigiuwmmcieu, "\145\170\143\154\x75\x64\145" => ["\x6a\145\164\55\x6d\145\x6e\x75", "\x61\164\x74\141\143\150\x6d\145\156\164", "\x77\x63\137\160\x72\157\144\165\x63\164\137\164\x61\142", "\x6a\x65\x74\55\164\x68\x65\x6d\145\x2d\143\x6f\162\x65", "\x65\x6c\x65\155\145\x6e\164\157\x72\x5f\x6c\151\x62\162\141\x72\171", "\x61\x73\164\x72\141\55\141\144\166\141\x6e\143\x65\x64\55\x68\157\x6f\153"]]); } public static function imyuqaesowgauoam($sciomagaqmgggsiu = []) : array { $egeqeuwiswigogyk = ["\150\157\x6d\145" => ManipulateServer::gmigwwwmwemyaayy("\x2f")]; if (!ManipulatePage::eokiwumgqmymgyoa()) { goto kosaqwikueyksqmw; } $egeqeuwiswigogyk["\142\154\x6f\147"] = ManipulatePage::symuoymymumgwkaw(); kosaqwikueyksqmw: if ($sciomagaqmgggsiu) { goto gicyayswqyuoekcq; } $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw(); gicyayswqyuoekcq: foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!($migiiksoiymissge && !in_array($migiiksoiymissge, $egeqeuwiswigogyk))) { goto cuumeogeomowqisc; } $egeqeuwiswigogyk[] = $migiiksoiymissge; cuumeogeomowqisc: uiosisocuwokwkie: } iikiiioqiyegyaak: $wyoiwuqokyeeuguk = ManipulatePost::emcckouwaoassquc($sciomagaqmgggsiu); foreach ($wyoiwuqokyeeuguk as $post) { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $egeqeuwiswigogyk[] = $migiiksoiymissge; qmkaeeomgkwggoyo: } gcckqucukawcasgk: return (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\147\x65\164\x5f\160\165\x62\154\151\143\137\160\145\162\x6d\141\x6c\151\156\153\163"), $egeqeuwiswigogyk); } public static function asywsogcwameaaau(?string $omkysikckkcieckq) : bool { return ManipulatePost::igawqaomowicuayw("\157\x70\164\x69\x6d\x69\172\x61\164\151\157\156\x5f\x65\170\143\x6c\x75\144\145\137{$omkysikckkcieckq}"); } public static function yygaymuiikwoakuc($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $ymqmyyeuycgmigyo = null) : array { $migiiksoiymissge = ['', '']; $post = ManipulatePost::get($aokagokqyuysuksm); if (!$post) { goto gmwykkouysyaqwqm; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post, true); $cqeiqmmwywksgiko = ManipulatePost::ucwmcwqmqwaymkkc($post); $imqwkwqqwcysuice = $post->post_date; $gqwoukkugawigkik = $post->post_name; if (!in_array($cqeiqmmwywksgiko, ["\144\162\141\x66\x74", "\160\x65\x6e\x64\151\x6e\147"], true)) { goto csammceowmqwaamq; } $post->post_status = "\x70\165\x62\154\151\163\150"; $post->post_name = DecoratorSanitize::meqocwsecsywiiqs($post->post_name ? $post->post_name : $post->post_title, $post->ID); csammceowmqwaamq: if (is_null($ymqmyyeuycgmigyo)) { goto ocaguquugeamqckq; } $post->post_name = sanitize_title($ymqmyyeuycgmigyo ? $ymqmyyeuycgmigyo : $meqocwsecsywiiqs, $post->ID); ocaguquugeamqckq: $post->post_name = wp_unique_post_slug($post->post_name, $post->ID, $post->post_status, $post->post_type, $post->post_parent); $post->filter = "\163\x61\x6d\160\x6c\x65"; $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $migiiksoiymissge = str_replace("\x25{$sqeykgyoooqysmca->name}\x25", "\x25\160\x61\x67\145\156\141\155\145\x25", $migiiksoiymissge); if (!$sqeykgyoooqysmca->hierarchical) { goto cogywoqcqummsyus; } $xeciwimgioieayek = get_page_uri($post); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = strrev(stristr(strrev($xeciwimgioieayek), "\x2f")); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = DecoratorHook::sscegwueamckwmcy("\x65\144\151\x74\x61\142\x6c\145\137\163\x6c\165\x67", $xeciwimgioieayek, $post); if (empty($xeciwimgioieayek)) { goto eekcoeikaeaaeyii; } $xeciwimgioieayek .= "\57"; eekcoeikaeaaeyii: $migiiksoiymissge = str_replace("\x25\x70\x61\147\145\156\x61\155\145\x25", "{$xeciwimgioieayek}\x25\x70\x61\x67\145\156\x61\x6d\145\x25", $migiiksoiymissge); cogywoqcqummsyus: $migiiksoiymissge = [$migiiksoiymissge, DecoratorHook::sscegwueamckwmcy("\x65\144\151\x74\x61\142\x6c\145\x5f\163\x6c\165\x67", $post->post_name, $post)]; $post->post_status = $cqeiqmmwywksgiko; $post->post_date = $imqwkwqqwcysuice; $post->post_name = $gqwoukkugawigkik; unset($post->filter); gmwykkouysyaqwqm: return $migiiksoiymissge; } }
