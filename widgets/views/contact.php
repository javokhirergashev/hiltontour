<!-- CONTACT -->
<section class="section-contact">
    <div class="container">
        <div class="contact">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <div class="text">
                        <h2><?= Yii::t("app", "contact1")?></h2>
                        <ul>
                            <?php if (!empty($models)):?>
                                <?php foreach ($models as $model) :?>
                                    <li><i class=" fa ion-ios-location-outline"></i><?=$model->addres?></li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> <?=$model->first_phone?></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?=$model->email?></li>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-lg-offset-1">
                    <div class="contact-form">
                        <form action="https://landing.engotheme.com/html/skyline/demo/send_mail_contact.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="field-text" name="name" id="name" placeholder="Ism">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="field-text" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" class="field-text" name="email" id="phone" placeholder="Tel">
                                </div>
                                <div class="col-sm-6">
                                    <input type="date" class="field-text" name="email" id="date">
                                </div>
                                <div class="col-sm-12">
                                    <select style="height: 42px; border: 2px solid #232323; width: 100%;  margin-top: 15px; padding-left: 15px;padding-right: 15px;" name="message" id="select" >
                                        <option disabled selected>Tur kategoriyani tanlang</option>
                                        <?php if(!empty($tours)):?>
                                            <?php foreach ($tours as $tour):?>
                                                <option><?=$tour["title_".Yii::$app->language];?></option>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" onclick="booking()" class="btn btn-room">Yuborish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / CONTACT -->
<!-- MAP -->
<div class="section-map">
    <iframe width="1900" height="595" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1900&amp;height=595&amp;hl=en&amp;q=%20Namangan+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href='https://maps-generator.com/'>Maps Generator</a>
    </iframe>
</div>
<!-- END / MAP -->