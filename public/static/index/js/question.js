$('.queue_ist').mouseover(function (event) {
    $(this).css('border','orangered solid 1px')
    $(this).find('.check').css('display','block')
})
//鼠标移出头像隐藏菜单列表
$('.queue_ist').mouseout(function (event) {
    $(this).css('border','#999 solid 1px')
    $(this).find('.check').css('display','none')
})