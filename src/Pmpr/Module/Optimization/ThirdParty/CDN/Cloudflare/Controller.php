<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062d56cfb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; class Controller extends Common { protected bool $skipCache = false; public function oiscokkcegacmack() : bool { return $this->skipCache; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'kkaygaiqmugweqgm'], 0)->qcsmikeggeemccuu('template_redirect', [$this, 'sqmaoqkoccgweoqg'], PHP_INT_MAX)->qcsmikeggeemccuu('send_headers', [$this, 'iqgcumogqyumogqs'], PHP_INT_MAX); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_redirect', [$this, 'coucywogeigmkuki'], 2, PHP_INT_MAX); parent::kgquecmsgcouyaya(); } public function sqmaoqkoccgweoqg() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $kuukgwkwsqqiusug = $this->isgmmgcaqsguwias()->asgqmkcukouykiie(); if ($this->yusooeuwemoqcwmm() && !$this->oiscokkcegacmack()) { if ($kuukgwkwsqqiusug->giuymssyesugquuu() && !$kuukgwkwsqqiusug->ocysssyiuaueqiei()) { $this->qsouaiqcieykekci(); } else { $kikaokemyqugkuyw = $this->cewsyssgouimokas(); header_remove('Pragma'); header_remove('Expires'); header_remove('Cache-Control'); header("Cache-Control: {$kikaokemyqugkuyw}"); header('X-' . Constants::gcqgqqsiqcaosqqk . ': cache'); header('X-' . Constants::gcqgqqsiqcaosqqk . '-Active: 1'); header('X-' . Constants::gcqgqqsiqcaosqqk . "-Cache-Control: {$kikaokemyqugkuyw}"); } } else { $this->qsouaiqcieykekci(); } } } public function qsouaiqcieykekci() { header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0'); header('Pragma: no-cache'); header('Expires: ' . gmdate('D, d M Y H:i:s \\G\\M\\T', time())); header('X-' . Constants::gcqgqqsiqcaosqqk . ': no-cache'); header('X-' . Constants::gcqgqqsiqcaosqqk . '-Cache-Control: no-store, no-cache, must-revalidate, max-age=0'); } public function iqgcumogqyumogqs() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { if ($this->yusooeuwemoqcwmm()) { $kuukgwkwsqqiusug = $this->isgmmgcaqsguwias()->asgqmkcukouykiie(); if (!$kuukgwkwsqqiusug->ocysssyiuaueqiei() || $kuukgwkwsqqiusug->uuqqoaacemswasgw()) { $this->qsouaiqcieykekci(); $this->skipCache = true; } else { header_remove('Pragma'); header_remove('Expires'); header_remove('Cache-Control'); } } else { if (!$this->oiscokkcegacmack()) { header('X-' . Constants::gcqgqqsiqcaosqqk . ': disabled'); } } } } public function kkaygaiqmugweqgm() { $kuukgwkwsqqiusug = $this->isgmmgcaqsguwias()->asgqmkcukouykiie(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { if (!$this->yusooeuwemoqcwmm()) { $this->cecaguuoecmccuse('nocache_headers', function () { return ['X-' . Constants::gcqgqqsiqcaosqqk => 'disabled']; }, PHP_INT_MAX); } else { $this->cecaguuoecmccuse('nocache_headers', function () { return ['Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0', 'X-' . Constants::gcqgqqsiqcaosqqk . '-Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0', 'X-' . Constants::gcqgqqsiqcaosqqk => 'no-cache', 'Pragma' => 'no-cache', 'Expires' => gmdate('D, d M Y H:i:s \\G\\M\\T', time())]; }, PHP_INT_MAX); } } else { if (!$this->yusooeuwemoqcwmm()) { $this->cecaguuoecmccuse('nocache_headers', function () { return ['X-' . Constants::gcqgqqsiqcaosqqk => 'disabled']; }, PHP_INT_MAX); } else { if (!$kuukgwkwsqqiusug->ocysssyiuaueqiei() || $kuukgwkwsqqiusug->uuqqoaacemswasgw()) { $this->cecaguuoecmccuse('nocache_headers', function () { return ['Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0', 'X-' . Constants::gcqgqqsiqcaosqqk . '-Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0', 'X-' . Constants::gcqgqqsiqcaosqqk => 'no-cache', 'Pragma' => 'no-cache', 'Expires' => gmdate('D, d M Y H:i:s \\G\\M\\T', time())]; }, PHP_INT_MAX); } else { $this->cecaguuoecmccuse('nocache_headers', function () { $kikaokemyqugkuyw = $this->cewsyssgouimokas(); return [ 'Cache-Control' => $kikaokemyqugkuyw, 'X-' . Constants::gcqgqqsiqcaosqqk . '-Cache-Control' => $kikaokemyqugkuyw, 'X-' . Constants::gcqgqqsiqcaosqqk . '-Active' => '1', 'X-' . Constants::gcqgqqsiqcaosqqk => 'cache', ]; }, PHP_INT_MAX); } } } } public function cewsyssgouimokas() : string { $gwmoykoscesmagwm = $this->weysguygiseoukqw(Setting::wkcomsocigwgckie, 60); $cucoksuockocacmo = $this->weysguygiseoukqw(Setting::sqekigigmayskecy, 31536000); return "s-maxage={$cucoksuockocacmo}, max-age={$gwmoykoscesmagwm}"; } public function coucywogeigmkuki($igscmsiuisqaqwkk, $iueymcwwscwqkiyq) { if (!$this->ocksiywmkyaqseou(Cloudflare::suyoqewagugqoeuy . 'bypass_redirect_cache_buster', false, $igscmsiuisqaqwkk) && $this->yusooeuwemoqcwmm() && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($igscmsiuisqaqwkk, Cloudflare::kakkwkmmmaykeoeq)) { $igscmsiuisqaqwkk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Cloudflare::kakkwkmmmaykeoeq => '1'], $igscmsiuisqaqwkk); } } return $igscmsiuisqaqwkk; } }
