<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832ec5ea4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\Search; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Container; class Search extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp', [$this, 'gkkosewoqeoogcek']); } public function gkkosewoqeoogcek() { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if (!$mumyimcwkaemyyue->goecwaaykqoaaagg() && $mumyimcwkaemyyue->gouusicsisumuiei() && !$mumyimcwkaemyyue->esqicqsuigywkaqw()) { if ($iwewcwusemqaiggk = $this->caokeucsksukesyo()->owicscwgeuqcqaig()->aeakcoksauwcayom()) { $biaomokkgwiiqocg = History::symcgieuakksimmu(); $dsamqkqqkgwgoskg = $biaomokkgwiiqocg->iekyeyicoyyawomk()->akkkoiiymmamsauc($iwewcwusemqaiggk, Constants::yoayaissyomokiui); if (Constants::cqymgkkgeosmoowe !== $biaomokkgwiiqocg->ogegcqqcukiaqscy(Constants::ciywsqoeiymemsys, $dsamqkqqkgwgoskg, Constants::sgoswgskyiiwkyuo)) { global $wp_query; $eswwewegiumckaoo = 0; if ($wp_query) { $eswwewegiumckaoo = $wp_query->found_posts > 0 ? 1 : 0; } if (empty($dsamqkqqkgwgoskg)) { $icwicymcioeyeyek = [Constants::qiyqwyiiwykeccmo => 1, Constants::yoayaissyomokiui => $iwewcwusemqaiggk, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, History::imkkyggguymaqgqi => $eswwewegiumckaoo]; } else { $icwicymcioeyeyek = (array) $dsamqkqqkgwgoskg; $icwicymcioeyeyek[Constants::qiyqwyiiwykeccmo]++; $icwicymcioeyeyek[History::imkkyggguymaqgqi] = $eswwewegiumckaoo; } $biaomokkgwiiqocg->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); } } } } }
