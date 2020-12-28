$(function(){
  $('#slick-shop').slick({
    autoplay: true,
    //autoplaySpeed: 0,
    dots: true,
    infinite: true,
    centerMode: true,
    speed: 3000,
    pauseOnDotsHover: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: false,
    pauseOnHover: false,
    arrows: true,
    centerPadding: '0%',
    //cssEase: 'linear',
    centerMode: true,
    customPaging: function(slick,index) {
        // スライダーのインデックス番号に対応した画像のsrcを取得
        var targetImage = slick.$slides.eq(index).find('img').attr('src');
        // slick-dots > li　の中に上記で取得した画像を設定
        return '<img src=" ' + targetImage + ' "/>';
    },
    responsive: [
      {
       breakpoint: 767,
       settings: {
         
       }
     }
   ]
  });
});
