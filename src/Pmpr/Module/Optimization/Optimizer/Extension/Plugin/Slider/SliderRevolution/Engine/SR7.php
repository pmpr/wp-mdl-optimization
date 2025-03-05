<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832ec5ea4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Extension\Plugin\Slider\SliderRevolution\Engine; use Pmpr\Common\Foundation\Interfaces\Constants; class SR7 extends Common { protected $useMultiple = ['lh' => 'round', 'pos.x' => 'round', 'pos.y' => 'round', 'size.w' => 'round', 'size.h' => 'round', 'font.ls' => null, 'font.size' => 'round']; protected array $useSizes = []; protected int $level = 4; protected function qiccuiwooiquycsg() { $this->type = 'sr7-module'; $eyagkkkqkwcuygso = $this->slider->get_params(); $this->useSizes = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, 'uSize', null, []); $this->level = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, 'level', null, 4); } protected function tsioiooeoyeieqye(array $weyumiemecumqwiy) : string { return $weyumiemecumqwiy[Constants::gouqcwikiiygyasc] ?? ''; } protected function qooeaookuemoqecm($eqgoocgaqwqcimie, ?string $uusmaiomayssaecw = null) { if ($uusmaiomayssaecw !== null && is_array($eqgoocgaqwqcimie) && isset($eqgoocgaqwqcimie[$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$uusmaiomayssaecw]; } return $eqgoocgaqwqcimie; } public function euisqgeeigoksqui($eqgoocgaqwqcimie, $yqyousioqsoaouig) : bool { return $this->useSizes[$yqyousioqsoaouig] && !empty($eqgoocgaqwqcimie[$yqyousioqsoaouig]) && $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig) !== '#a'; } protected function uaskqakcsowgmccg($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig + 1]; } protected function wgogsacggwigyuee($momcykaoccoymeig) { return $this->breakpoints[$momcykaoccoymeig - 1]; } protected function ywogaocmueoimkuq($weyumiemecumqwiy) : bool { return 'slidebg' === $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'subtype'); } protected function gkyiccimoqwmoack($eyagkkkqkwcuygso, $yqyousioqsoaouig) : array { $eygasqqkgouqiuqk = []; $gyquugwkmmgwmkki = ['margin' => 'auto', 'display' => 'block', 'position' => 'relative']; switch ($eyagkkkqkwcuygso[Constants::squoamkioomemiyi] ?? '') { case 'standard': $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, 'size.width', $yqyousioqsoaouig, 'auto'); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, 'size.height', $yqyousioqsoaouig, 'auto'); $aqiccywoiqiskwaw = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, 'size.fullWidth', null, true); $kisgwkkagogawumc = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, 'size.fullHeight'); $eygasqqkgouqiuqk['max-height'] = $cswemwoyesycwkuq; if (!$kisgwkkagogawumc) { $cwugisscoiasuuyg = $cswemwoyesycwkuq / max(1, $qeswwaqqsyymqawg); if ($cwugisscoiasuuyg < $cswemwoyesycwkuq) { $cswemwoyesycwkuq = "calc(100vw * {$cwugisscoiasuuyg})"; } } $eygasqqkgouqiuqk['height'] = $cswemwoyesycwkuq; $gyquugwkmmgwmkki['height'] = '100%'; $eygasqqkgouqiuqk['margin'] = 'auto'; $eygasqqkgouqiuqk['display'] = 'block'; $eygasqqkgouqiuqk['position'] = 'absolute'; $eygasqqkgouqiuqk['overflow'] = 'hidden'; $gyquugwkmmgwmkki['width'] = $qeswwaqqsyymqawg; if (!$aqiccywoiqiskwaw) { $eygasqqkgouqiuqk['width'] = $qeswwaqqsyymqawg; $eygasqqkgouqiuqk['max-width'] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, 'size.maxWidth', null, 0); } else { $eygasqqkgouqiuqk['width'] = '100%'; $gyquugwkmmgwmkki['max-width'] = '100%'; } $eygasqqkgouqiuqk['background'] = $this->syckcsgsmwciwyyw($eyagkkkqkwcuygso, 'bg.color.string', null, 'transparent'); break; } return [$eygasqqkgouqiuqk, $gyquugwkmmgwmkki]; } protected function ecsmecuykayuiqas($weyumiemecumqwiy, $yqyousioqsoaouig) : array { $egkakcquemweqoum = []; $sqeykgyoooqysmca = $weyumiemecumqwiy[Constants::squoamkioomemiyi]; $ueamwqwegewocqgc = $weyumiemecumqwiy['subtype'] ?? ''; switch ($sqeykgyoooqysmca) { case Constants::mkousmkiawwousws: case Constants::qwqqkkoggeeyeogk: case Constants::TEXT: $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'size.w', $yqyousioqsoaouig, 'auto'); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'size.h', $yqyousioqsoaouig, 'auto'); $egkakcquemweqoum['min-width'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'size.minW', $yqyousioqsoaouig); $egkakcquemweqoum['min-height'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'size.minH', $yqyousioqsoaouig); switch ($sqeykgyoooqysmca) { case Constants::qwqqkkoggeeyeogk: if (isset($weyumiemecumqwiy['bg']['image'])) { $egkakcquemweqoum['top'] = '0'; $egkakcquemweqoum['background-image'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'bg.image.src'); $oiegiwogmwmawkeo = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'bg.image.size'); $egkakcquemweqoum['background-size'] = $oiegiwogmwmawkeo === 'percentage' ? $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'bg.image.sizeVal') : $oiegiwogmwmawkeo; $egkakcquemweqoum['background-repeat'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'bg.image.repeat', null, 'no-repeat'); $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'bg.image.pos.x', null, '0'); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'bg.image.pos.y', null, '0'); $egkakcquemweqoum['background-position'] = "{$iegmsyuiekaayqqy} {$ymsweociooeskgwg}"; } if (!$qeswwaqqsyymqawg || $qeswwaqqsyymqawg === 'auto') { $qeswwaqqsyymqawg = '100%'; } if (!$cswemwoyesycwkuq || $cswemwoyesycwkuq === 'auto') { $cswemwoyesycwkuq = '100%'; } $qoiwmokisgikggia = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'bg.color.string'); if ($qoiwmokisgikggia) { $egkakcquemweqoum['background'] = $qoiwmokisgikggia; } break; case Constants::mkousmkiawwousws: $egkakcquemweqoum['background-size'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'content.size', null, 'contain'); $egkakcquemweqoum['background-repeat'] = 'no-repeat'; $egkakcquemweqoum['background-position'] = "50% 50%"; $egkakcquemweqoum['background-image'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'content.src', null, ''); break; case Constants::TEXT: case Constants::gqmuoaykeqeuoukm: $eswoackiciccgasc = $sqeykgyoooqysmca !== Constants::gqmuoaykeqeuoukm && $ueamwqwegewocqgc !== Constants::gqmuoaykeqeuoukm; $qeswwaqqsyymqawg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'size.w', $yqyousioqsoaouig, 'auto', $eswoackiciccgasc); $cswemwoyesycwkuq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'size.h', $yqyousioqsoaouig, 'auto', $eswoackiciccgasc); $egkakcquemweqoum['background'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'bg.color.string', null, 'transparent'); $qgssmoqemoeqyuua = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'ws', $yqyousioqsoaouig); if ($qeswwaqqsyymqawg === 'auto') { $qgssmoqemoeqyuua = 'nowrap'; } if ($qgssmoqemoeqyuua) { $egkakcquemweqoum['white-space'] = $qgssmoqemoeqyuua; } $wwqyeeagywueicqa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'content.deco', null, 'none'); if ($wwqyeeagywueicqa !== 'nonce') { $egkakcquemweqoum['text-decoration'] = $wwqyeeagywueicqa; } $miaumeemcuuauoyk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'content.trans', null, 'none'); if ($miaumeemcuuauoyk !== 'nonce') { $egkakcquemweqoum['text-transform'] = $miaumeemcuuauoyk; } $egkakcquemweqoum['font-size'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'font.size', $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum['text-align'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'tA', $yqyousioqsoaouig, 'left'); $egkakcquemweqoum['font-family'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'font.family', null, 'initial'); $egkakcquemweqoum['font-weight'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'font.weight', $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum['line-height'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'lh', $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum['letter-spacing'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'font.ls', $yqyousioqsoaouig, $eswoackiciccgasc); $egkakcquemweqoum['color'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'color', $yqyousioqsoaouig, '#FFF'); break; } $iuikoekwkkmcimwq = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'tl.in.content.all.0.rZ'); if (is_numeric($iuikoekwkkmcimwq)) { $egkakcquemweqoum['transform'] = "rotate({$iuikoekwkkmcimwq}deg)"; } $egkakcquemweqoum['width'] = $qeswwaqqsyymqawg; $egkakcquemweqoum['height'] = $cswemwoyesycwkuq; $iegmsyuiekaayqqy = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'pos.x', $yqyousioqsoaouig, 'auto'); $ymsweociooeskgwg = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'pos.y', $yqyousioqsoaouig, 'auto'); $ywcogicgakiqmesa = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'pos.v', $yqyousioqsoaouig, 'top'); $uyyeawaokwsoigkk = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'pos.h', $yqyousioqsoaouig, 'left'); $egkakcquemweqoum = $this->kegiemoekkccwkoa($egkakcquemweqoum, $iegmsyuiekaayqqy, $ymsweociooeskgwg, $ywcogicgakiqmesa, $uyyeawaokwsoigkk); $egkakcquemweqoum['float'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'pos.float', $yqyousioqsoaouig); $egkakcquemweqoum['z-index'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'zIndex', null, 1); $egkakcquemweqoum['margin'] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, 'm', $yqyousioqsoaouig); $egkakcquemweqoum['padding'] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, 'p', $yqyousioqsoaouig); $egkakcquemweqoum['position'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'pos.pos'); $egkakcquemweqoum['vertical-align'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'vA', null, 'top'); $egkakcquemweqoum['display'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'display', $yqyousioqsoaouig, 'block'); $egkakcquemweqoum['border-radius'] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, 'radius'); $eeaqcswmqmqgkgcc = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'border.c'); if ($eeaqcswmqmqgkgcc) { $egkakcquemweqoum['border-width'] = $this->yqooukeogwwoqeau($weyumiemecumqwiy, 'border.w', $yqyousioqsoaouig); $egkakcquemweqoum['border-color'] = $eeaqcswmqmqgkgcc; $egkakcquemweqoum['border-style'] = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'border.s', $yqyousioqsoaouig); } break; } return $egkakcquemweqoum; } protected function yiiekkiwayooaqiy($weyumiemecumqwiy) : string { return $this->syckcsgsmwciwyyw($weyumiemecumqwiy, 'content.text', null, ''); } protected function usywmiiwiggsyium(string $mkomwsiykqigmqca, $eqgoocgaqwqcimie, $yqyousioqsoaouig) { $equckmqsamsmgcwy = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $yqyousioqsoaouig); $cqcuwemuusesmqsq = 1; if ($yqyousioqsoaouig !== null) { $icuyogeyaokmwusi = 4; if (is_array($eqgoocgaqwqcimie)) { $piuesceqiguuskme = $yqyousioqsoaouig; while (isset($this->useSizes[$piuesceqiguuskme]) && !$this->useSizes[$piuesceqiguuskme] && $piuesceqiguuskme > 0) { $piuesceqiguuskme--; } if ($equckmqsamsmgcwy === '#a' || !$equckmqsamsmgcwy || !$this->useSizes[$yqyousioqsoaouig] && isset($this->useMultiple[$mkomwsiykqigmqca])) { $uqmawqusmmkkkoaq = null; for ($ciyackuwsqkoqese = $piuesceqiguuskme; $ciyackuwsqkoqese >= $icuyogeyaokmwusi; $ciyackuwsqkoqese--) { if ($this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; break; } } if ($uqmawqusmmkkkoaq === null) { for ($ciyackuwsqkoqese = $piuesceqiguuskme; $ciyackuwsqkoqese < 4; $ciyackuwsqkoqese++) { if ($this->euisqgeeigoksqui($eqgoocgaqwqcimie, $ciyackuwsqkoqese)) { $uqmawqusmmkkkoaq = $ciyackuwsqkoqese; break; } } } if ($uqmawqusmmkkkoaq !== null && $icuyogeyaokmwusi === 0 && $piuesceqiguuskme === 0) { $cqcuwemuusesmqsq = max(1, (int) $this->slider->get_param(['size', 'width', 0])) / max(1, (int) $this->slider->get_param(['size', 'width', $uqmawqusmmkkkoaq], 1)); } $qsqwqsymmqeoqwcu = null; if ($uqmawqusmmkkkoaq !== null) { $qsqwqsymmqeoqwcu = $this->qooeaookuemoqecm($eqgoocgaqwqcimie, $uqmawqusmmkkkoaq) ?: null; } if (!$qsqwqsymmqeoqwcu) { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } if (!is_array($qsqwqsymmqeoqwcu)) { $qsqwqsymmqeoqwcu = $this->ooeaouwceyecskck($qsqwqsymmqeoqwcu, (float) $qsqwqsymmqeoqwcu, $cqcuwemuusesmqsq); } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } } else { $qsqwqsymmqeoqwcu = $equckmqsamsmgcwy; } return $qsqwqsymmqeoqwcu; } protected function gqkyomsuwooussyk($ocouqoqqcgauwkuq) : array { return $ocouqoqqcgauwkuq->get_bg_layer(); } protected function yqooukeogwwoqeau($weyumiemecumqwiy, $mkomwsiykqigmqca, $yqyousioqsoaouig = null) : string { $igqsaukqcqscimok = $this->syckcsgsmwciwyyw($weyumiemecumqwiy, $mkomwsiykqigmqca); $aqykuigiuwmmcieu = ''; if ($igqsaukqcqscimok) { $yguacsiqkqgiauaa = ['t', 'r', 'b', 'l']; foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $eqgoocgaqwqcimie = $igqsaukqcqscimok[$mcaisukqqyosuasi] ?? ''; if (null !== $yqyousioqsoaouig && is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie[$yqyousioqsoaouig] ?? ''; } if ($eqgoocgaqwqcimie && is_numeric($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie .= 'px'; } $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie} "; } } return rtrim($aqykuigiuwmmcieu); } }
