/**
 * 主页公共部分的js
 */
//鼠标移进头像显示隐藏的退出列表
$('.icon_li').mouseover(function (event) {
    $('.img_hover').show()
})
//鼠标移出头像隐藏菜单列表
$('.icon_li').mouseout(function (event) {
    $('.img_hover').hide()
})
