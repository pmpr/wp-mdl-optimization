<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693fe2664             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Cleanup; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; class Cleanup extends Engine { const gucqkiywkqyomkye = '/<!--\\[if[^]]*?]>.*?<!\\[endif]-->/is'; protected ?array $conditionals = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('wp_enqueue_scripts', [$this, 'miwoccuusaqkygsq'], 999); } public function kgewmaycsoykyaso() { if ($this->weysguygiseoukqw(Setting::wamuucmcqykegkoc)) { $this->kuieicsuscgmwigg('wp_head', 'rsd_link'); } if ($this->weysguygiseoukqw(Setting::aaisgiycykyqiqcm)) { $this->kuieicsuscgmwigg('wp_head', 'wlwmanifest_link'); } if ($this->weysguygiseoukqw(Setting::wkasasawguckeyuc)) { $this->kuieicsuscgmwigg('wp_head', 'wp_generator')->cecaguuoecmccuse('the_generator', '__return_empty_string'); } if ($this->weysguygiseoukqw(Setting::sqaukikimiwcqmew)) { $this->kuieicsuscgmwigg('wp_head', 'wp_shortlink_wp_head')->kuieicsuscgmwigg('template_redirect', 'wp_shortlink_header', 11); } if ($this->weysguygiseoukqw(Setting::iqmqemikwcuuiyom)) { $this->kuieicsuscgmwigg('wp_head', 'rest_output_link_wp_head')->kuieicsuscgmwigg('template_redirect', 'rest_output_link_header', 11); } } public function kgquecmsgcouyaya() { if ($this->weysguygiseoukqw(Setting::qwcseoyssyaciyqk) && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->swuauuwqoauayowm()) { $this->cecaguuoecmccuse('wp_enqueue_scripts', [$this, 'sskqqicoymkgosmg'], 999); } if ($this->weysguygiseoukqw(Setting::kwsmceiiwgggssgc)) { $this->miasamwyaiagioug([$this, 'igkyukqkywwwyyaa'])->miasamwyaiagioug([$this, 'iaqamwweqykkuysc'], 20); } if ($this->weysguygiseoukqw(Setting::aysyuueaueiamysu)) { $this->miasamwyaiagioug([$this, 'igqiyyuceqgcioqy'], 21); $this->cecaguuoecmccuse('wp_calculate_image_srcset', [$this, 'seuigwyyuosgeqco'], 21); } if ($this->weysguygiseoukqw(Setting::ewciuakccgwuuemi)) { $this->cecaguuoecmccuse('style_loader_src', [$this, 'smawyocmeseoacwc'], 999)->cecaguuoecmccuse('script_loader_src', [$this, 'smawyocmeseoacwc'], 999); } if ($this->weysguygiseoukqw(Setting::gwgacumguuaiiuio)) { $this->cecaguuoecmccuse('style_loader_tag', [$this, 'msmyuuusyygmgoec'], 10, 2)->cecaguuoecmccuse('script_loader_tag', [$this, 'msmyuuusyygmgoec'], 10, 2); } if ($this->weysguygiseoukqw(Setting::emeseeausaemuoeq)) { $this->cecaguuoecmccuse('wp_headers', [$this, 'ysoqmggkgeisayys'])->cecaguuoecmccuse('xmlrpc_enabled', '__return_false')->cecaguuoecmccuse('pings_open', '__return_false', 9999); } } public function ysoqmggkgeisayys($uykgysuswksgmwqy) { $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($uykgysuswksgmwqy, ['X-Pingback', 'x-pingback']); return $uykgysuswksgmwqy; } public function miwoccuusaqkygsq() { if ($this->isgmmgcaqsguwias()->asgqmkcukouykiie()->ocysssyiuaueqiei()) { $geoqacegumkcaskk = $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi(); if ($this->weysguygiseoukqw(Setting::uwcmcaucigmuiugg)) { $geoqacegumkcaskk->qkyugogwegiuiime('dashicons'); } if ($this->weysguygiseoukqw(Setting::gukmqsiumkmukaoe)) { $geoqacegumkcaskk->qkyugogwegiuiime('wc-blocks-style'); $geoqacegumkcaskk->qkyugogwegiuiime('wp-block-library'); $geoqacegumkcaskk->qkyugogwegiuiime('wp-block-library-theme'); $geoqacegumkcaskk->qkyugogwegiuiime('wc-blocks-vendors-style'); } if ($this->weysguygiseoukqw(Setting::kcgocyessaswyike) && $this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); if ($cgceoyqmmwumqyqa->ckeyeaouokcgeqeq() || $cgceoyqmmwumqyqa->gqoskmoekogyqwsc()) { $geoqacegumkcaskk->saisougiwmauksiy('zxcvbn-async'); $geoqacegumkcaskk->saisougiwmauksiy('password-strength-meter'); $geoqacegumkcaskk->saisougiwmauksiy('wc-password-strength-meter'); } } } } public function sskqqicoymkgosmg() { global $wp_scripts; if (isset($wp_scripts->registered['jquery']) && $wp_scripts->registered['jquery']) { $ugmuiugkaygmsagq = $wp_scripts->registered['jquery']->deps; $wp_scripts->registered['jquery']->deps = array_diff($ugmuiugkaygmsagq, ['jquery-migrate']); } } public function igqiyyuceqgcioqy(string $moooemyaqewumiay) : string { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu()) { $eouekqmooogkoqoo = "/(<(script|link|img|form)(?!.*?[\"']\\bcanonical\\b[\"'])([^>]*)(href|src|action)=[\"'])https?:\\/\\//i"; $moyaaaascoeowegu = '$1//'; $ksaameoqigiaoigg = (string) preg_replace($eouekqmooogkoqoo, $moyaaaascoeowegu, $moooemyaqewumiay); if ($ksaameoqigiaoigg) { $moooemyaqewumiay = $ksaameoqigiaoigg; } } return $moooemyaqewumiay; } public function seuigwyyuosgeqco(array $oseqkueswiwsceis) : array { if ($oseqkueswiwsceis) { foreach ($oseqkueswiwsceis as $ciyackuwsqkoqese => $egsumesakcaaukem) { $oseqkueswiwsceis[$ciyackuwsqkoqese]['url'] = str_replace(['http:', 'https:'], '', $egsumesakcaaukem['url']); } } return $oseqkueswiwsceis; } public function smawyocmeseoacwc($ogomymegcoacqisg) { if (is_string($ogomymegcoacqisg) && strpos($ogomymegcoacqisg, 'ver=' . $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::auugqowqueaocgsu))) { $ogomymegcoacqisg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->oiamiqcuyksmmomm('ver', $ogomymegcoacqisg); } return $ogomymegcoacqisg; } public function msmyuuusyygmgoec($nsmgceoqaqogqmuw, $eueuqacmukymcyya) { $nsmgceoqaqogqmuw = str_replace([" id='{$eueuqacmukymcyya}-css'", " id='{$eueuqacmukymcyya}-js'", " media='all'"], '', $nsmgceoqaqogqmuw); return preg_replace("/type=['\"]text\\/(javascript|css)['\"]/", '', $nsmgceoqaqogqmuw); } public function ccmkueckuuisqsmo($moooemyaqewumiay) { $smecmmgoykqcaieu = html_entity_decode($moooemyaqewumiay); if (preg_match_all('/href\\s*=\\s*(?:["\']([^"\']*)["\']|(\\S+))/', $smecmmgoykqcaieu, $meyiiwcswqmuggyg)) { foreach ($meyiiwcswqmuggyg[1] as $geecqyososceumsk) { $moooemyaqewumiay = str_replace($geecqyososceumsk, urldecode($geecqyososceumsk), $moooemyaqewumiay); } } return $moooemyaqewumiay; } public function init() { if ($this->weysguygiseoukqw(Setting::oeiwkesueukkqggs)) { $this->yguckmcqkqsysmwu(); } if ($this->weysguygiseoukqw(Setting::owgquqcyoseeeiqg)) { $this->yausywiikmmqckki(); } } public function yguckmcqkqsysmwu() { $this->kuieicsuscgmwigg('wp_print_styles', 'print_emoji_styles')->kuieicsuscgmwigg('wp_head', 'print_emoji_detection_script', 7); $this->ggmgmqswqkgecosg('comment_text_rss', 'wp_staticize_emoji')->ggmgmqswqkgecosg('the_content_feed', 'wp_staticize_emoji')->ggmgmqswqkgecosg('wp_mail', 'wp_staticize_emoji_for_email'); $this->cecaguuoecmccuse('emoji_svg_url', '__return_false')->cecaguuoecmccuse('wp_resource_hints', [$this, 'maykcmyyeqskgmew'], 10, 2); } public function yausywiikmmqckki() { global $wp; $wp->public_query_vars = array_diff($wp->public_query_vars, ['embed']); $this->kuieicsuscgmwigg('wp_head', 'wp_oembed_add_host_js')->kuieicsuscgmwigg('wp_head', 'wp_oembed_add_discovery_links')->kuieicsuscgmwigg('rest_api_init', 'wp_oembed_register_route'); $this->ggmgmqswqkgecosg('oembed_dataparse', 'wp_filter_oembed_result')->ggmgmqswqkgecosg('pre_oembed_result', 'wp_filter_pre_oembed_result'); $this->cecaguuoecmccuse('embed_oembed_discover', '__return_false')->cecaguuoecmccuse('rewrite_rules_array', [$this, 'yqoyaecogwskmeko']); } public function yqoyaecogwskmeko($acqqmqmcquukaqsc) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss => $squgkkgwywimowua) { if (false !== strpos($squgkkgwywimowua, 'embed=true')) { $gkyciwoiiisgywcs->unset($acqqmqmcquukaqsc, $ekuqiqmikiicgoss); } } return $acqqmqmcquukaqsc; } public function maykcmyyeqskgmew($auwuoyyagaiegwae, $ayegqaqygsqsmews) : array { if ('dns-prefetch' === $ayegqaqygsqsmews) { $ycoyiwsmwwiqwogw = $this->sscegwueamckwmcy('emoji_svg_url', 'https://s.w.org/images/core/emoji/2.2.1/svg/'); if ($ycoyiwsmwwiqwogw) { $auwuoyyagaiegwae = array_diff($auwuoyyagaiegwae, [$ycoyiwsmwwiqwogw]); } } return $auwuoyyagaiegwae; } private function qakkmcaacokcggca() : bool { return !empty($this->conditionals); } public function igkyukqkywwwyyaa(string $nsmgceoqaqogqmuw) : string { if (preg_match_all(self::gucqkiywkqyomkye, $nsmgceoqaqogqmuw, $meyiiwcswqmuggyg)) { foreach ($meyiiwcswqmuggyg[0] as $oskqwiqyoigkqgys) { $this->conditionals[] = $oskqwiqyoigkqgys; } $nsmgceoqaqogqmuw = preg_replace(self::gucqkiywkqyomkye, '', $nsmgceoqaqogqmuw); } return $nsmgceoqaqogqmuw; } public function iaqamwweqykkuysc(string $nsmgceoqaqogqmuw) : string { if ($this->qakkmcaacokcggca()) { foreach ($this->conditionals as $oskqwiqyoigkqgys) { if (preg_match('@^(?<opening><!--\\[if[^]]*?]>\\s*?(?:<!-->)?\\s*<script(?:\\s[^>]*?>))\\s*(?<content>.*?)\\s*(?<closing></script>\\s*(?:<!--)?\\s*?<!\\[endif\\]-->)$@is', $oskqwiqyoigkqgys, $meyiiwcswqmuggyg)) { $oskqwiqyoigkqgys = $meyiiwcswqmuggyg['opening'] . preg_replace('#(?<!\\\\)(\\$|\\\\)#', '\\\\$1', $meyiiwcswqmuggyg['content']) . $meyiiwcswqmuggyg['closing']; } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->owgcciayoweymuws()->wiecmkiugmyyqiqc('<html>', "{$oskqwiqyoigkqgys}<html>", $nsmgceoqaqogqmuw); } } return $nsmgceoqaqogqmuw; } }
