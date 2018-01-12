<?php defined('IN_IA') or exit('Access Denied');?><style>
input[type="checkbox"] {
    margin: 4px;
}
tr, td, th{
    text-align: left;
}
#buttonidstable_seleid{
height: 32px !important;
}
#divids_seleid{
    left: 0 !important;
 top: 32px !important;
}
</style>
<script type="text/javascript" src="<?php echo STYLE;?>/js/frame/CheckboxSelect.js"></script>
<?php  if($item['goods_id']) { ?>
<div class='form-group'>
 <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'></span>商品地址</label>
    <div class="col-sm-9 col-xs-12">
     <input type="text" name="goodurltest" id="goodurltest" class="form-control"
     value="<?php  echo $_W['siteroot'];?>app/index.php?c=entry&id=<?php  echo $item['goods_id'];?>&shop_id=<?php  echo $item['shop_id'];?>&m=yc_youliao&do=detail&i=<?php  echo $_W['uniacid'];?>"  readonly/>
    </div>
</div>

<?php  } ?>

<div class="form-group">

    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span class="red">*</span>商品名称</label>
    <div class="col-sm-9 col-xs-12">
        <input type="text" name="goodsname" id="goodsname" class="form-control" value="<?php  echo $item['title'];?>" />
    </div>
</div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">商品价格</label>
    <div class="col-sm-8 col-md-3">
        <div class="input-group">
            <span class="input-group-addon"><span class="red">*</span>销售价</span>
            <input type="text" onkeyup="clearNoNum(this);" name="marketprice" id="marketprice" class="form-control" value="<?php  echo $item['marketprice'];?>" />
            <span class="input-group-addon">元</span>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">市场价</span>
            <input type="text" onkeyup="clearNoNum(this);" name="productprice" id="productprice" class="form-control" value="<?php  echo $item['productprice'];?>" />
            <span class="input-group-addon">元</span>
        </div>

    </div>
</div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span class="red">*</span>商品图</label>
    <div class="col-sm-9 col-xs-12">
        <?php  echo tpl_form_field_image('thumb', $item['thumb'], '', array('extras' => array('text' => 'readonly')))?>
        <div>建议上传长宽比例相等像素的图片,如780px*780px</div>
    </div>
</div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">其他图片</label>
    <div class="col-sm-9 col-xs-12">
        <?php  if($isapp==1) { ?>
        <?php  echo tpl_app_form_field_image('xsthumb', $item['xsthumb']);?>
        <?php  } else { ?>
        <?php  echo tpl_form_field_multi_image('piclist',$piclist)?>
        <?php  } ?>
        <div>建议上传长宽比例相等像素的图片,如780px*780px</div>
    </div>

</div>
<?php  if($category) { ?>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分类</label>
    <div class="col-sm-8">
        <div style="display:none;" >
            <input type="hidden" name="goods_cate" value="<?php  echo $item['goods_cate'];?>" />
            <input type="text" id="select_valueMonitoring_new" name="goods_cate" style="width: 60%" readonly="readonly">
        </div>
        <select multiple="multiple" class="form-control" style="margin-right:15px;" id="seleid"
                autocomplete="off">
            <?php  if(is_array($category)) { foreach($category as $row) { ?>
            <option value="<?php  echo $row['id'];?>"  ><?php  echo $row['name'];?></option>
            <?php  } } ?>
        </select>
    </div>
</div>
<?php  } ?>

<div class="line line-dashed line-lg pull-in"></div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">首单优惠</label>
    <div class="col-sm-5  col-md-4">
        <div class="input-group">
            <input type="text" onkeyup="clearNoNum(this);" name="isfirstcut" id="isfirstcut" class="form-control" value="<?php  echo $item['isfirstcut'];?>" />
            <span class="input-group-addon">元</span>
        </div>
        <span class="help-block">0或空则表示此商品不支持首单优惠</span>
    </div>
</div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">最高可使用</label>
    <div class="col-sm-5  col-md-4">
        <div class="input-group">
            <input type="text" onkeyup="clearNoNum(this);" name="credit" id="credit" class="form-control" value="<?php  echo $item['credit'];?>" />
            <span class="input-group-addon">积分</span>
        </div>
        <span class="help-block">0或空则表示此商品不支持积分抵扣
       1积分可抵扣<?php  if($cfg['credit2money']) { ?><?php  echo $cfg['credit2money'];?><?php  } else { ?>0.1<?php  } ?>元
        </span>
    </div>
</div>

<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">库存</label>
    <div class="col-sm-6 col-xs-12">
        <div class="input-group">
            <input type="text" name="total" id="total" class="form-control" value="<?php  echo $item['total'];?>" />
            <span class="input-group-addon">件</span>
        </div>
        <span class="help-block">当前商品的库存数量，售完即不可购买</span>
    </div>
</div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">减库存方式</label>
    <div class="col-sm-9 col-xs-12">
        <label for="totalcnf1" class="radio-inline"><input type="radio" name="totalcnf" value="0" id="totalcnf1" <?php  if(empty($item) || $item['totalcnf'] == 0) { ?>checked="true"<?php  } ?> /> 拍下减库存</label>
        &nbsp;&nbsp;&nbsp;
        <label for="totalcnf2" class="radio-inline"><input type="radio" name="totalcnf" value="1" id="totalcnf2"  <?php  if(!empty($item) && $item['totalcnf'] == 1) { ?>checked="true"<?php  } ?> /> 付款减库存</label>
        &nbsp;&nbsp;&nbsp;
        <label for="totalcnf3" class="radio-inline"><input type="radio" name="totalcnf" value="2" id="totalcnf3"  <?php  if(!empty($item) && $item['totalcnf'] == 2) { ?>checked="true"<?php  } ?> /> 永不减库存</label>
    </div>
</div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">销量</label>
    <div class="col-sm-6  col-md-2">
        <div class="input-group">
            <input type="text" name="sales" id="sales" class="form-control" value="<?php  echo $item['sales'];?>" />
            <span class="input-group-addon">件</span>
        </div>
        <span class="help-block">默认为实际销量</span>
    </div>
</div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">限购</label>
    <div class="col-sm-6  col-md-2">
        <div class="input-group">
            <input type="text" name="astrict" id="astrict" class="form-control" value="<?php  echo $item['astrict'];?>" />
            <span class="input-group-addon">件</span>
        </div>
        <span class="help-block">不填则表示不限购</span>
    </div>
</div>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否支持7天退货退款</label>
    <div class="col-sm-9 col-xs-12">
        <label for="iscanrefund" class="radio-inline"><input type="radio" name="iscanrefund" value="0" <?php  if($item['iscanrefund'] == 0) { ?>checked="true"<?php  } ?> />是</label>
        <label for="iscanrefund" class="radio-inline"><input type="radio" name="iscanrefund" value="1"  <?php  if($item['iscanrefund'] == 1) { ?>checked="true"<?php  } ?> />否</label>
        <p class="help-block">未超过7天且未消费，可申请退款，超过7天或已消费，将不能申请退款</p>
    </div>
</div>
<div class="line line-dashed line-lg pull-in"></div>
<div class="form-group inco">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">商品标签</label>
    <div class="col-sm-9 col-xs-12">
        <div class="input_form item_cell_flex checkbox good_inco_list">
            <div class="inco_append_box"><?php  $item['inco']=json_decode($item['inco'])?>
                <label><input type="checkbox" name="inco[]" <?php  if(in_array('超值实惠',(array)$item['inco'])) { ?>checked="checked"<?php  } ?> value="超值实惠" > 超值实惠</label>
                <label><input type="checkbox" name="inco[]" <?php  if(in_array('限时抢购',(array)$item['inco'])) { ?>checked="checked"<?php  } ?> value="限时抢购" > 限时抢购</label>
                <label><input type="checkbox" name="inco[]" <?php  if(in_array('回头客最多',(array)$item['inco'])) { ?>checked="checked"<?php  } ?> value="热卖推荐" > 热卖推荐</label>

                <?php  if(is_array($item['inco'])) { foreach($item['inco'] as $i) { ?>
                <?php  if(!in_array($i,array('超值实惠','限时抢购','热卖推荐'))) { ?>
                <label>
                    <input type="checkbox" name="inco[]"checked="checked" value="<?php  echo $i;?>" > <?php  echo $i;?>
                </label>
                <?php  } ?>
                <?php  } } ?>
            </div>
            <p class="add_btn_box">
				<span class="input_box_200">
					<input type="text" class="input_input input_box input_box_200">
				</span>
                <span class="font_13px_999 add_btn add_a_inco">添加一个标签</span>
            </p>
        </div>

    </div>
</div>

<?php  if($shop['is_hot'] ==1) { ?>
<!--<div class="form-group">-->
    <!--<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否首页推荐</label>-->
    <!--<div class="col-sm-6 col-xs-12">-->
        <!--<label for="is_hot" class="radio-inline"><input type="radio" class="cate_type" name="is_hot" value="1" id="is_hot" <?php  if($item['is_hot'] == 1) { ?>checked="true"<?php  } ?> /> 是</label>-->
        <!--<label for="is_hot" class="radio-inline"><input type="radio" name="is_hot" value="0" id="is_hot"  <?php  if($item['is_hot'] == 0) { ?>checked="true"<?php  } ?> /> 否</label>-->
    <!--</div>-->
<!--</div>-->
<?php  } ?>
<div class="form-group">
    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否上架销售</label>
    <div class="col-sm-6 col-xs-12">
        <label for="isshow1" class="radio-inline"><input type="radio" name="status" value="0" id="isshow1" <?php  if($item['status'] == 0) { ?>checked="true"<?php  } ?> /> 是</label>
        <label for="isshow2" class="radio-inline"><input type="radio" name="status" value="1" id="isshow2"  <?php  if($item['status'] == 1) { ?>checked="true"<?php  } ?> /> 否</label>
    </div>
</div>


<script>
    $(function(){
        /**-----1、实例的方式调用-----**/
        var box = new CheckboxSelect("seleid");
        box.onChange(function(newV,oldV){//值改变事件
            document.getElementById("select_valueMonitoring_new").value=newV;
            //document.getElementById("select_valueMonitoring_old").value=oldV;
        });
        box.setDefaultWord("请选择");//设置未选择值时的缺省字体
        setCheckboxOptionSelecteds("seleid","<?php  echo $item['goods_cate'];?>",",");//赋值

    });
    $('.add_a_inco').click(function(){
		var valueinput =  $(this).prev().find('input');
		var value = valueinput.val();
		if(value == ''){
            tip('请先在输入框输入标签名称');
            tip_close();
            return false;
		}
		var str = '<label><input type="checkbox" name="inco[]" value="'+value+'" checked="checked"> '+value+'</label>';
		$(this).parents('.input_form').find('.inco_append_box').append(str);
		valueinput.val('').focus();
	});
</script>