<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693fe2664             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\HTML\Error; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Optimization\Optimizer\Buffer\Engine; class Error extends Engine { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_head', [$this, 'kmsmywomieekqiim'])->qcsmikeggeemccuu('admin_head', [$this, 'kmsmywomieekqiim']); } public function kgquecmsgcouyaya() { $this->miasamwyaiagioug([$this, 'sgoscoukiqgqekue'], 999)->miasamwyaiagioug([$this, 'mymeukogowaugyea'], 999)->miasamwyaiagioug([$this, 'aukuumaqsugyuiky'], 50); } public function mymeukogowaugyea($moooemyaqewumiay) { $scwiymciagumsuiw = 'head'; $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); if (!$smuykqsageuocuos->has($moooemyaqewumiay, $scwiymciagumsuiw)) { $moooemyaqewumiay = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iukqsuaygeqgeieu($moooemyaqewumiay, 'html', '<head></head>'); } return $moooemyaqewumiay; } public function kmsmywomieekqiim() { if (!$this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(Constants::oiuckgigqssyiagw) && $this->weysguygiseoukqw(Setting::qoyskaoaaakosmaq)) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw('link', ['href' => 'data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=', 'rel' => 'icon', 'type' => 'image/x-icon']); } } public function sgoscoukiqgqekue($moooemyaqewumiay) : string { return (string) preg_replace('/(<img|<meta|<link|<br|<input|<hr|<base|<param|<area|<embed|<col|<track|<resource)(.[^>]*\\n*\\t*\\s*)(\\/>)/', '$1$2>', $moooemyaqewumiay); } public function aukuumaqsugyuiky($moooemyaqewumiay) { $meta_pattern = "#<meta[^h]*(http-equiv[^=]*=[^\\'\"]*[\\'\" ]Content-Type[\\'\"][ ]*[^>]*|)(charset[^=]*=[ ]*[\\'\" ]*[^\\'\"> ][^\\'\">]+[^\\'\"> ][\\'\" ]*|charset[^=]*=*[^\\'\"> ][^\\'\">]+[^\\'\"> ])([^>]*|)>(?=.*</head>)#Usmi"; if (!preg_match($meta_pattern, $moooemyaqewumiay, $meyiiwcswqmuggyg)) { return $moooemyaqewumiay; } $iywyaaqgucqckosi = preg_replace("{$meta_pattern}", '', $moooemyaqewumiay); if (empty($iywyaaqgucqckosi)) { return $moooemyaqewumiay; } if (preg_match('/<head\\b/i', $iywyaaqgucqckosi)) { $iywyaaqgucqckosi = preg_replace('/(<head\\b[^>]*?>)/i', "\${1}{$meyiiwcswqmuggyg[0]}", $iywyaaqgucqckosi, 1); if (empty($iywyaaqgucqckosi)) { return $moooemyaqewumiay; } return $iywyaaqgucqckosi; } if (preg_match('/<html\\b/i', $iywyaaqgucqckosi)) { $iywyaaqgucqckosi = preg_replace('/(<html\\b[^>]*?>)/i', "\${1}{$meyiiwcswqmuggyg[0]}", $iywyaaqgucqckosi, 1); if (empty($iywyaaqgucqckosi)) { return $moooemyaqewumiay; } return $iywyaaqgucqckosi; } $iywyaaqgucqckosi = preg_replace('/(<\\w+)/', "{$meyiiwcswqmuggyg[0]}\${1}", $iywyaaqgucqckosi, 1); if (empty($iywyaaqgucqckosi)) { return $moooemyaqewumiay; } return $iywyaaqgucqckosi; } }
