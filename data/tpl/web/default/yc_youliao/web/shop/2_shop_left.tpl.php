<?php defined('IN_IA') or exit('Access Denied');?>﻿    <div class="hbox stretch bodybox"> <!-- .aside -->
      <aside class="bg-light lter b-r b-b aside-md hidden-print nav-xs" id="nav">
            <div   data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333"> <!-- nav -->
              <nav class="nav-primary hidden-xs">
                <ul class="nav">
                   <li <?php  if($_GPC['do'] =="shop_index") { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('shop_index')?>" class="active"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span>店铺概览</span> </a> </li>
                    <!--商品开始-->
                    <li <?php  if($_GPC['do'] =="shop_goods" || $_GPC['do'] =="shop_goods_cate"  ) { ?>class="active"<?php  } ?>> <a href="#pages" >
                    <i class="fa fa-th-large icon"> <b class="bg-success"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>商品管理</span> </a>
                    <ul class="nav lt">
                        <li <?php  if($_GPC['do'] =="shop_goods" ) { ?>class="active"<?php  } ?> > <a href="<?php  echo $this->createWebUrl('shop_goods',array('op' =>'post'))?>" > <i class="fa fa-angle-right"></i> <span>添加商品</span> </a> </li>
                        <li <?php  if($_GPC['do'] =="shop_goods" ) { ?>class="active"<?php  } ?> > <a href="<?php  echo $this->createWebUrl('shop_goods')?>" > <i class="fa fa-angle-right"></i> <span>商品列表</span> </a> </li>

                        <li <?php  if($_GPC['do'] =="shop_goods" ) { ?>class="active"<?php  } ?> > <a href="<?php  echo $this->createWebUrl('shop_goods_cate',array('op' =>'post'))?>" > <i class="fa fa-angle-right"></i> <span>添加分类</span> </a> </li>
                        <li <?php  if($_GPC['do'] =="shop_goods" ) { ?>class="active"<?php  } ?> > <a href="<?php  echo $this->createWebUrl('shop_goods_cate')?>" > <i class="fa fa-angle-right"></i> <span>分类列表</span> </a> </li>
                    </ul>
                    </li>
                    <!--商品结束-->

                    <?php  $g=getIs_discount()?>
                    <?php  if($g== 1) { ?>
                    <!--优惠买单开始-->
                    <li <?php  if($_GPC['do'] =="shop_discount"  ) { ?>class="active"<?php  } ?>> <a href="#pages" >
                    <i class="fa fa-tags icon"> <b class="bg-success"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>优惠买单</span> </a>
                    <ul class="nav lt">
                        <li <?php  if($_GPC['do'] =="shop_discount" ) { ?>class="active"<?php  } ?> > <a href="<?php  echo $this->createWebUrl('shop_discount',array('op' =>'add'))?>" > <i class="fa fa-angle-right"></i> <span>添加优惠方案</span> </a> </li>
                        <li <?php  if($_GPC['do'] =="shop_discount" ) { ?>class="active"<?php  } ?> > <a href="<?php  echo $this->createWebUrl('shop_discount')?>" > <i class="fa fa-angle-right"></i> <span>优惠列表</span> </a> </li>
                        <li <?php  if($_GPC['do'] =="shop_discount" ) { ?>class="active"<?php  } ?> > <a href="<?php  echo $this->createWebUrl('shop_discount',array('op' =>'order'))?>" > <i class="fa fa-angle-right"></i> <span>买单记录</span> </a> </li>

                    </ul>
                    </li>
                    <!--优惠买单结束-->
                    <?php  } ?>

                    <!--拼团管理-->
                    <?php  $g=getIs_group();?>
                    <?php  if($g== 1) { ?>
                    <li <?php  if($_GPC['do'] =="shop_group") { ?>class="active"<?php  } ?>> <a href="#pages" >
                    <i class="fa fa-group icon"> <b class="bg-primary"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>拼团管理</span> </a>
                    <ul class="nav lt">
                        <li > <a href="<?php  echo $this->createWebUrl('shop_group')?>" > <i class="fa fa-angle-right"></i> <span>全部拼团</span> </a> </li>
                        <li > <a href="<?php  echo $this->createWebUrl('shop_group',array('gstatus' =>'1'))?>" > <i class="fa fa-angle-right"></i> <span>组团中</span> </a> </li>
                        <li > <a href="<?php  echo $this->createWebUrl('shop_group',array('gstatus' =>'2'))?>" > <i class="fa fa-angle-right"></i> <span>已完成</span> </a> </li>
                        <li > <a href="<?php  echo $this->createWebUrl('shop_group',array('gstatus' =>'3'))?>" > <i class="fa fa-angle-right"></i> <span>已失败</span> </a> </li>

                    </ul>
                    </li>
                    <?php  } ?>
                    <!--订单管理-->
                    <li <?php  if($_GPC['do'] =="shop_order") { ?>class="active"<?php  } ?>> <a href="#pages" >
                    <i class="fa fa-file-text icon"> <b class="bg-primary"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>订单管理</span> </a>
                    <ul class="nav lt">
                        <li <?php  if($_GPC['do'] =="shop_order") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_order', array( 'status' =>'-1'))?>" >  <i class="fa fa-angle-right"></i> <span>订单管理</span> </a>
                        </li>
                        <li <?php  if($_GPC['do'] =="shop_order") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_order', array( 'status' =>'-2', 'today' =>1))?>" > <i class="fa fa-angle-right"> </i> <span>今日订单</span> </a>
                        </li>
                        <li <?php  if($_GPC['do'] =="shop_order") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_order', array('status' => '0'))?>" > <i class="fa fa-angle-right"> </i> <span>待付款</span> </a>
                        </li>
                        <li <?php  if($_GPC['do'] =="shop_order") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_order', array('status' => '2'))?>" > <i class="fa fa-angle-right"> </i> <span>待使用</span> </a>
                        </li>

                        <li <?php  if($_GPC['do'] =="shop_order") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_order', array('status' => '3'))?>" > <i class="fa fa-angle-right"> </i> <span>已完成</span> </a>
                        </li>

                        <li <?php  if($_GPC['do'] =="shop_order") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_order', array('status' => '4'))?>" > <i class="fa fa-angle-right"> </i> <span>售后退款</span> </a>
                        </li>

                    </ul>
                    </li>
                    <?php  $g=getAdmin_type();?>
                    <?php  if($g== 1 || $g=="Y") { ?>



            <!--资金管理-->
                   <li <?php  if($_GPC['do'] =="shop_account") { ?>class="active"<?php  } ?>> <a href="#pages" >
                      <i class="fa fa-table icon"> <b class="bg-primary"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>资金管理</span> </a>
                    <ul class="nav lt">
                      <li <?php  if($_GPC['do'] =="shop_account") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_account')?>" >  <i class="fa fa-angle-right"></i> <span>资金记录</span> </a>
                      </li>
                        <li <?php  if($_GPC['do'] =="shop_account") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_account', array('op' => 'record'))?>" >  <i class="fa fa-angle-right"></i> <span>提现记录</span> </a>
                        </li>
                      <li <?php  if($_GPC['do'] =="shop_account") { ?>class="active"<?php  } ?>> <a href="<?php  echo $this->createWebUrl('shop_account', array('op' => 'post'))?>" > <i class="fa fa-angle-right"> </i> <span>提现申请</span> </a>
                      </li>


                    </ul>
				  </li>
                    <!--会员管理-->
                    <li <?php  if($_GPC['do'] =="shop_member" ||  $_GPC['do'] =="shop_admin") { ?>class="active"<?php  } ?>><a href="#pages" >
                    <i class="fa fa-user icon"> <b class="bg-info"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>粉丝管理</span> </a>
                    <ul class="nav lt">
                        <li > <a href="<?php  echo $this->createWebUrl('shop_member')?>" > <i class="fa fa-angle-right"></i> <span>粉丝管理</span> </a> </li>
                        <li ><a href="<?php  echo $this->createWebUrl('shop_admin')?>" > <i class="fa fa-angle-right"></i> <span>管理员管理</span> </a> </li>


                    </ul>
                    </li>


				 <li  <?php  if($_GPC['do'] =="shop_admin" || $_GPC['do'] =="shop_fun" || $_GPC['do'] =="shop_setting") { ?>class="active"<?php  } ?>> <a href="#pages"  > <i class="fa fa-cogs icon"> <b class="bg-danger"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i>
         <i class="fa fa-angle-up text-active"></i> </span> <span>系统设置</span> </a>
                    <ul class="nav lt">
                        <li>

                            <a href="<?php  echo $this->createWebUrl('shop_setting')?>" >
                                <i class="fa fa-angle-right"></i> <span>基础设置</span> </a>
                        </li>
                        <li>

                            <a href="<?php  echo $this->createWebUrl('shop_info',array('op' => 'post'))?>" >
                                <i class="fa fa-angle-right"></i> <span>店铺设置</span> </a>
                        </li>

                        <li>
                            <a href="<?php  echo $this->createWebUrl('shop_fun')?>" >
                                <i class="fa fa-angle-right"></i> <span>功能管理</span> </a>
                        </li>

                    </ul>
                  </li>
			  
<?php  } ?>
				
			    </ul>
           </ul>
              </nav>
              <!-- / nav --> </div>

          <footer class="footer lt hidden-xs b-t b-b b-light">
              <div id="chat" class="dropup">
                  <section class="dropdown-menu on aside-md m-l-n">
                      <section class="panel bg-white">
                          <header class="panel-heading b-b b-light">Active chats</header>
                          <div class="panel-body animated fadeInRight">
                              <p class="text-sm">No active chats.</p>
                              <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                          </div>
                      </section>
                  </section>
              </div>
              <div id="invite" class="dropup">
                  <section class="dropdown-menu on aside-md m-l-n">
                      <section class="panel bg-white">
                          <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header>
                          <div class="panel-body animated fadeInRight">
                              <p class="text-sm">No contacts in your lists.</p>
                              <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                          </div>
                      </section>
                  </section>
              </div>
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-default btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>

          </footer>
     
      </aside>

      <!-- /.aside -->
     


