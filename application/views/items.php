
        <!-- Start Menu Grid Area -->
        <section class="food__menu__grid__area section-padding--lg"  style="padding-top: 30px;">
            <div class="container">
                <?php if ($result) { ?>
                <div class="row mt--30">
                    <!-- Start Single Menu Item -->
                     
                    <?php   foreach ($result as $item) { ?>
                    <div class="col-lg-4 col-sm-12 col-md-6">
                        <div class="menu__grid__item wow fadeInLeft">
                            <div class="menu__grid__thumb">
                                <?php if ($item['offer']!=0) { ?>
                                    
                                <span style="background: #d50c0d;    padding: 9px 24px;    position: absolute;    float: right;    color: white;    font-size: 16px;    font-weight: 500;"><?=$item['offer']?>% Offer</span>
                                 <?php } ?>
                                <a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>">
                                    <img src="<?=base_url()?>asset/images/news/<?=$item['image']?>" alt="grid item images">
                                </a>
                            </div>
                            <div class="menu__grid__inner">
                                <div class="menu__grid__details">
                                    <h2><a href="<?=base_url()?>Welcome/menu_details/<?=$item['id']?>"><?=$item['title']?></a></h2>
                                    <ul class="grid__prize__list">
                                        <?php if ($item['offer']==0) { ?>
                                             <li><?=$item['price']?>Tk</li>
                                        <?php } else{ ?>
                                        <li><?=round($item['price']-($item['price']*$item['offer']/100))?> Tk</li>
                                        <li><del><?=$item['price']?>Tk</del></li>
                                    <?php } ?>
                                    </ul>
                                    <p><?=$item['description']?></p>
                                </div>
                                 <input type="hidden" name="quantity" value="1" class="form-control quantity" id="<?php echo $item['id']; ?>" />
                                <div class="grid__addto__cart__btn">
                                  <input style="    border: none;width: 100%;border-radius: 0px;" type="button" class="food__btn add_cart" data-productname="<?php echo $item['title']; ?>" data-productid="<?php echo $item['id']; ?>" value="Add to cart" <?php if($item['offer']!=0) { ?> data-price="<?=round($item['price']-($item['price']*$item['offer']/100))?>"  <?php } else{ ?> data-price="<?php echo $item['price']; ?>"  <?php } ?> ></input>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php   } ?>
         </div>
                                <?php } else{
                echo '<center><h1>No Item Found!</h1></center>';
            } ?>
                   
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="food__pagination d-flex justify-content-center align-items-center mt--130">
                            <li><?php echo $this->pagination->create_links(); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Grid Area -->
       