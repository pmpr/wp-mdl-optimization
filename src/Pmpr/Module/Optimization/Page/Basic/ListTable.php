<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf1b954785e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Page\Basic; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\WPListTable; use Pmpr\Module\Optimization\Page\Model; use Pmpr\Module\Optimization\Traits\CommonTrait; use WP_Post; use WP_Post_Type; use WP_Query; use WP_Taxonomy; class ListTable extends WPListTable { use CommonTrait; protected $type; public function __construct($sqeykgyoooqysmca, $ywmkwiwkosakssii = []) { $this->type = $sqeykgyoooqysmca; parent::__construct($ywmkwiwkosakssii); } public function gueasuouwqysmomu() { return $this->type; } public function get_columns() { return [self::qescuiwgsyuikume => __("\x54\x69\x74\154\145", PR__MDL__OPTIMIZATION), "\157\160\x74\x5f\163\x74\141\x74\x75\163" => __("\117\x70\x74\x20\123\164\141\164\165\163", PR__MDL__OPTIMIZATION)]; } protected function handle_row_actions($igqsaukqcqscimok, $column_name, $micmwmywmkguiyyk) : string { $ccowyogiqwikkkie = ''; if (!($micmwmywmkguiyyk === $column_name)) { goto maggecymmmesqmqs; } $ccowyogiqwikkkie = []; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto emeeocqaisksyioq; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); emeeocqaisksyioq: $meqocwsecsywiiqs = __("\x72\145\x4f\160\x74\x69\x6d\151\172\145", PR__MDL__OPTIMIZATION); $ccowyogiqwikkkie[] = ManipulateHTML::yuawgssgauywkiia($meqocwsecsywiiqs, "\x23", ["\x63\x6c\141\x73\x73" => "\x6f\x70\164\x2d\x70\x61\147\145\x2d\x61\x63\164\151\x6f\x6e\40\x70\162\x2d\143\x6f\156\146\151\162\x6d\141\x62\154\x65\55\141\x63\164\x69\157\x6e", "\141\x72\151\141\55\154\x61\142\145\x6c" => $meqocwsecsywiiqs, "\x64\x61\164\141\x2d\x63\x6f\x6e\146\151\x67" => ManipulateHTML::uskieqmcqyecigmy([self::squoamkioomemiyi => self::wyaqwomqwwaoiwas, self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::ssmskyqgcmeiayco => __("\x41\162\x65\40\x79\157\x75\40\x73\x75\162\x65\40\141\x62\x6f\x75\x74\x20\162\x65\x4f\x70\x74\x69\155\x69\172\x65\40\x74\150\x69\163\x20\160\x61\x67\x65\77", PR__MDL__OPTIMIZATION), "\142\165\164\164\157\156\x73" => ["\143\x61\x6e\x63\145\x6c", ["\143\154\x61\163\x73" => "\x6f\160\x74\55\x70\165\x72\x67\x65\x2d\x70\157\163\x74\55\x63\x61\143\150\x65\40\x62\164\156\x20\142\164\x6e\55\x70\162\151\x6d\141\162\171", self::qescuiwgsyuikume => $meqocwsecsywiiqs, "\x64\141\x74\141\55\160\x65\162\155\141\154\151\x6e\153" => $migiiksoiymissge, "\144\141\x74\141\x2d\x6d\x69\143\x72\157\155\157\144\141\x6c\55\x63\x6c\x6f\163\x65"]]])]); $ccowyogiqwikkkie = $this->row_actions($ccowyogiqwikkkie); maggecymmmesqmqs: return $ccowyogiqwikkkie; } protected function column_default($igqsaukqcqscimok, $column_name) { $aqykuigiuwmmcieu = ''; $meqocwsecsywiiqs = ''; $migiiksoiymissge = ''; if (!$igqsaukqcqscimok instanceof WP_Post) { goto csaksaisgawusswg; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($igqsaukqcqscimok); csaksaisgawusswg: switch ($column_name) { case self::qescuiwgsyuikume: $aqykuigiuwmmcieu = ManipulateHTML::yuawgssgauywkiia(ManipulateHTML::ciuuiyckmsygceis($meqocwsecsywiiqs), $migiiksoiymissge, [self::mgsccwumkcawaqcy => "\x5f\142\154\x61\x6e\x6b"]); goto ecgwgamiseokmise; case "\157\160\164\137\x73\x74\x61\x74\x75\163": $aqykuigiuwmmcieu = $this->ccioymuswicowwkw($migiiksoiymissge); goto ecgwgamiseokmise; } qkiyyywwuiuackao: ecgwgamiseokmise: return $aqykuigiuwmmcieu; } public function prepare_items() { if (!($jwsqucqyaoaasykk = Model::symcgieuakksimmu())) { goto cimascmiesomqgqs; } $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); $suaemuyiacqyugsm = $this->get_pagenum(); $ymqmyyeuycgmigyo = ManipulatePost::yyqgaciccoiwuwyq($sqeykgyoooqysmca); $weyoqgcesqgeusiu = $this->get_items_per_page("\x65\144\x69\x74\x5f{$ymqmyyeuycgmigyo}\x5f\160\145\162\137\x70\141\x67\x65"); $weyoqgcesqgeusiu = $this->sscegwueamckwmcy("\x65\144\x69\x74\137\x70\157\163\x74\163\x5f\160\145\162\137\160\141\x67\145", $weyoqgcesqgeusiu, $ymqmyyeuycgmigyo); $ywmkwiwkosakssii = [self::kkcqmwgccaygggcu => $suaemuyiacqyugsm, self::uouymeyqasaeckso => $ymqmyyeuycgmigyo, self::kcaoouwiygwwmiok => $jwsqucqyaoaasykk->mqiucouukiymaswc($ymqmyyeuycgmigyo), self::goqgcigmiawyauai => $weyoqgcesqgeusiu]; $gqgemcmoicmgaqie = new WP_Query($ywmkwiwkosakssii); $this->items = $gqgemcmoicmgaqie->get_posts(); if ($gqgemcmoicmgaqie->found_posts || $this->get_pagenum() === 1) { goto mcagemacuqyskogs; } $iueymcwwscwqkiyq = self::wmmucsiyiyusmssm; $uoiyqmsewicueqma = (array) ManipulatePost::wsqeykgqiemswysa($ymqmyyeuycgmigyo, $iueymcwwscwqkiyq, "\162\145\141\144\141\x62\154\x65"); if ($uoiyqmsewicueqma) { goto gyskcwykkyakeims; } $uuwmqqqiwksuaise = array_sum($uoiyqmsewicueqma); goto ossakckwskyqusmm; gyskcwykkyakeims: $uuwmqqqiwksuaise = $uoiyqmsewicueqma; ossakckwskyqusmm: goto aamgqoqyyooimqkm; mcagemacuqyskogs: $uuwmqqqiwksuaise = $gqgemcmoicmgaqie->found_posts; aamgqoqyyooimqkm: $qqkyekmackggcick = []; $wkkweuacukumqmya = $this->get_columns(); $osmkwgikieoyykwg = []; $this->_column_headers = [$wkkweuacukumqmya, $qqkyekmackggcick, $osmkwgikieoyykwg]; $this->set_pagination_args(["\164\157\x74\141\x6c\x5f\x69\164\x65\155\x73" => $uuwmqqqiwksuaise, self::ausqeuugegoygouq => $weyoqgcesqgeusiu]); cimascmiesomqgqs: } }
