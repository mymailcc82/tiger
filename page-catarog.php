<?php
/*
Template Name:  catalog
*/
 ?>
 <?php
$catalog_arr = array(
  0=> array(
    'title' => '建築・土木資材',
    'img' => 'catalog-01.png',
    'url' => 'https://www.kusystem.co.jp/wp/wp-content/themes/kusystem/catalog/HTML5/pc.html#/page/1'
  ),
  1=> array(
    'title' => '土木資材1',
    'img' => 'catalog-02.png',
    'url' => 'http://www.src-g.com/0004_5/HTML5/pc.html#/page/1'
  ),
  2=> array(
    'title' => '土木資材2',
    'img' => 'catalog-03.png',
    'url' => 'http://www.src-g.com/0004_4/HTML5/pc.html#/page/1'
  ),
  3=> array(
    'title' => '河川災害復旧資材<br class="pc-br">雨水対策資材',
    'img' => 'catalog-04.png',
    'url' => 'http://www.src-g.com/0006_2/HTML5/pc.html#/page/1'
  ),
  4=> array(
    'title' => '河川災害復旧資材2',
    'img' => 'catalog-05.png',
    'url' => 'http://www.src-g.com/0006/HTML5/pc.html#/page/1'
  ),

  5=> array(
    'title' => '保安用品販売・レンタル品',
    'img' => 'catalog-06.png',
    'url' => 'https://saas.actibookone.com/content/detail?param=eyJjb250ZW50TnVtIjoiMzIxOTIifQ==&detailFlg=1'
  ),
  6=> array(
    'title' => '保安用品<br class="pc-br">アラオ(株)',
    'img' => 'catalog-07.png',
    'url' => 'http://www.arao.co.jp/pdf/security_lineup.pdf'
  ),
  7=> array(
    'title' => '建築資材<br class="pc-br">アラオ(株)',
    'img' => 'catalog-08.png',
    'url' => 'http://www.arao.co.jp/pdf/building_lineup.pdf'
  ),
  8=> array(
    'title' => '足場用品<br class="pc-br">アラオ(株)',
    'img' => 'catalog-09.png',
    'url' => 'http://www.arao.co.jp/pdf/scaffolding_lineup.pdf'
  ),
  9=> array(
    'title' => '現場用品・測量用品他<br class="pc-br">レクノス',
    'img' => 'catalog-10.png',
    'url' => 'https://www.tra-net.jp/2021rechnos/html5.html#page=1'
  ),
  10=> array(
    'title' => '保安電設',
    'img' => 'catalog-11.png',
    'url' => 'http://www.src-g.com/0003/HTML5/pc.html#/page/1'
  ),
  11=> array(
    'title' => 'レンタル',
    'img' => 'catalog-12.png',
    'url' => 'https://www.nihonsafety.com/catalog/'
  ),
  12=> array(
    'title' => '防災用品',
    'img' => 'catalog-13.png',
    'url' => 'https://www.land-art.co.jp/user_data/packages/default/pdf/catalog/disaster_prevention_vol4.pdf'
  ),
  13=> array(
    'title' => '防災用品　トイレ関連<br class="pc-br">まいにち(株)',
    'img' => 'catalog-14.png',
    'url' => 'https://mylet.jp/doc/leaflet.pdf'
  ),
  14=> array(
    'title' => '防災用品　食料<br class="pc-br">尾西食品(株)',
    'img' => 'catalog-15.png',
    'url' => 'https://www.onisifoods.co.jp/products/pamphlet.html'
  ),
  15=> array(
    'title' => '猛暑対策・熱中症対策 2021',
    'img' => 'catalog-16.png',
    'url' => 'https://www.land-art.co.jp/user_data/packages/default/pdf/catalog/summer2021.pdf'
  ),
  16=> array(
    'title' => '安全用品　安全標識<br class="pc-br">ユニット(株)',
    'img' => 'catalog-17.png',
    'url' => 'http://www.unit-signs.co.jp/catalog/catalog/s/frame.html#page=1'
  ),
  17=> array(
    'title' => '工場・各種施設用　保安用品ユニット(株)',
    'img' => 'catalog-18.png',
    'url' => 'http://www.unit-signs.co.jp/catalog/catalog/sh/frame.html#page=1'
  ),
  18=> array(
    'title' => '安全標識<br class="pc-br">(株)つくし工房',
    'img' => 'catalog-19.png',
    'url' => 'http://tukusi.webcatalog.jp/catalog/html5.html#page=4'
  ),
  19=> array(
    'title' => '保安用品　LED用品<br class="pc-br">(株)キタムラ産業',
    'img' => 'catalog-20.png',
    'url' => 'http://copilog2.jp/bds_820457/views/detail/2'
  ),
  20=> array(
    'title' => '複合災害に備えて<br class="pc-br">コロナ＋１',
    'img' => 'catalog-21.png',
    'url' => 'http://www.src-g.com/0007_2/HTML5/pc.html#/page/1'
  ),
);

  ?>
<?php get_header();?>
<main class="page catalog">
  <div class="com-page-title">
    <h1>CATALOG<span>電子カタログ</span></h1>
  </div>
  <section class="sec01">
    <div class="content-width">
      <div class="catalog-wrap">
        <?php foreach ($catalog_arr as $catalog_arr_key => $catalog_arr_value): ?>
          <div class="catalog-wrap-item">
            <a href="<?php echo $catalog_arr_value['url'];?>" target="_blank">
              <div class="catalog-wrap-item-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/catalog/<?php echo $catalog_arr_value['img'];?>" alt="">
              </div>
              <p><?php echo $catalog_arr_value['title'];?></p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </section>
</main>

<?php get_footer();?>
