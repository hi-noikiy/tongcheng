<?php defined('IN_IA') or exit('Access Denied');?><link rel="stylesheet" href="<?php echo STYLE;?>css/channel.css">

<div class="scrollWap">
    <div class="leftP s-btn checked">最新发布</div>
    <div class="rightP">
        <ul class="itemWap">
            <?php  $list= commonGetData::getChannel(1,2);?>
            <?php  if(is_array($list)) { foreach($list as $mrow) { ?>
            <li class="s-item s-btn" data-id="<?php  echo $mrow['id'];?>" data-more="<?php  if($mrow['autourl'] != '') { ?><?php  echo $mrow['autourl'];?><?php  } else { ?><?php  echo $this->createMobileUrl('msglist',array('id'=>$mrow['id'],'flag'=>'1'));?><?php  } ?>"><?php  echo $mrow['name'];?></li>
            <?php  } } ?>
        </ul>
    </div>
</div>
<div class="s-listWap">
    <div id="conBox">
        <div id="lastest">
            <?php  if(is_array($lastedmessagelist)) { foreach($lastedmessagelist as $zdrow) { ?> <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('../mobile/channel_list', TEMPLATE_INCLUDEPATH)) : (include template('../mobile/channel_list', TEMPLATE_INCLUDEPATH));?> <?php  } } ?>
        </div>
        <div id="other">

        </div>
    </div>
    <div class="loading" style="display: none">
        <img src="<?php echo STYLE;?>images/loading.png" class="loadImg" alt="">
    </div>
    <a href="">
        <div class="moreBtn" style="display: none">
            查看更多
        </div>
    </a>
</div>
<script src="<?php echo STYLE;?>js/page.js"></script>
<script>
    function Scroll(wapClass) {
        this.index = 1
        this.scrollArr = []
        this.innerWidth = null
        this.wap = $('.' + wapClass)
        this.ul = $('.' + wapClass + ' ul')
        this.timer = null
        this.init()
    }
    Scroll.prototype.init = function () {
        var temp = 0
        var scrollWap = this.ul
        var _this = this
        scrollWap.children().each(function (i, v) {
            _this.scrollArr.push(temp)
            temp += v.offsetWidth
        })
        scrollWap.css({ width: temp + 'px' })
        this.innerWidth = temp - this.wap.width()
        this.autoScroll()
        this.swip()
    }
    Scroll.prototype.autoScroll = function () {
        var _this = this
        this.timer = setInterval(function () {
            if (_this.scrollArr[_this.index] > _this.innerWidth) {
                _this.index = 0
                _this.ul.css({
                    transform: 'translateX(' + - _this.innerWidth + 'px)'
                })
                return
            }
            _this.ul.css({
                transform: 'translateX(' + - _this.scrollArr[_this.index] + 'px)'
            })
            _this.index++
        }, 3000)
    }
    Scroll.prototype.swip = function () {
        var startX = 0,
            moveX = 0,
            distanceX = 0,
            oldX = 0
        var maxSwipe = 0 + 100
        var minSwipe = this.wap.width() - this.ul.width() - 100
        var maxTranslateX = 0
        var minTranslateX = this.wap.width() - this.ul.width()
        var _this = this
        this.wap.on('touchstart', function (e) {
            // 把滚动的取消
            clearInterval(_this.timer)
            _this.index = 0
            // 取消过度效果
            _this.ul.css({ transition: 'none' })
            startX = e.originalEvent.touches[0].clientX
        })
        this.wap.on('touchmove', function (e) {
            moveX = e.originalEvent.touches[0].clientX
            distanceX = moveX - startX
            if ((oldX + distanceX) < maxSwipe && (oldX + distanceX) > minSwipe) {
                _this.ul.css({
                    transform: 'translateX(' + (oldX + distanceX) + 'px)'
                })
            }
        })
        this.wap.on('touchend', function (e) {
            _this.ul.css({ transition: 'transform 0.3s' })
            _this.autoScroll()

            oldX += distanceX
            if (oldX > maxTranslateX) {
                oldX = maxTranslateX
                _this.ul.css({
                    transform: 'translateX(' + (oldX) + 'px)'
                })
            } else if (oldX < minTranslateX) {
                oldX = minTranslateX
                _this.ul.css({
                    transform: 'translateX(' + (oldX) + 'px)'
                })
            }
        })
    }
    var scroll = new Scroll('rightP')
    var url = createAppUrl('msglist', 'display');
    $('.s-btn').on('click', function () {
        $('.s-btn.checked').removeClass('checked')
        $(this).addClass('checked')
    })
    $('.s-btn').on('click', function () {
        var _this = $(this)
        $('.s-listWap .loading').show()
        $('.moreBtn').hide()
        if (_this.hasClass('leftP')) {
            $('#conBox #lastest').show()
            $('#conBox #other').hide()
        } else {
            $('#conBox #lastest').hide()
            $('#conBox #other').show().html('')
            var id = _this.data('id')
            var _url = url + '&id=' + id + '&flag=' + '1'
            getMsg(1, _url, function (str) {
                $('.s-listWap .loading').hide()
                $(str).appendTo($('#conBox #other'))
                $('.moreBtn').show().parent().attr('href', _this.data('more'))
            })
        }
    })
    function getMsg(page, url, cb) {
        var str = ''
        $.ajax({
            url: url + '&page=' + page + '&isajax=1' + '&num=<?php  echo $shownum;?>',
            type: "get",
            dataType: 'json',
            success: function (data) {
                var arrLen = data.length;
                if (arrLen > 0) {
                    $.each(data.list, function (index, v) {
                        str += info_str(v,data.isshang);
                    })
                } else if (data.str != null && data.str != '') {  // 自定义
                    str += data.str;
                } else {//无数据
                    str += '<div class="nopicDiv"> <img class="nopic" src="../addons/yc_youliao/public/images/tuan_pic3.png" /><span class="nonetext">亲，暂时没有更多啦~</span></div>';
                }
                cb(str)
            },
            error: function (xhr, type) {
                // alert('Ajax error!');
                // 即使加载出错，也得重置
                me.resetload();
            }

        })
    }

</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('../mobile/shang', TEMPLATE_INCLUDEPATH)) : (include template('../mobile/shang', TEMPLATE_INCLUDEPATH));?>
