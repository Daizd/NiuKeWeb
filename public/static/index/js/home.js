/**
 * 主页公共部分的js
 */

$('.icon_li').mouseover(function (event) {
    $('.img_hover').show()
})
//鼠标移出购物车隐藏购物车信息
$('.icon_li').mouseout(function (event) {
    $('.img_hover').hide()
})