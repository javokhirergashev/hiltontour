<!-- TESTIMONOALS -->
<section class="testimonials">
    <div class="testimonials-h">
        <div class="testimonials-content">
            <div class="container">
                <div id="testimonials" class="owl-carousel owl-theme">
                   <?php if (!empty($models)):?>
                       <?php foreach ($models as $model):?>
                       <?php $img = app\models\StaticFunctions::getImage('testimonials',$model->id, $model->images)?>
                            <div class="item">
                            <div class="img-testimonials"><img style="width: 100px" src="<?=$img?>" alt="#"></div>
                            <p class="testimonials-p"><span>“</span>​‌ <?=$model['comment_'.Yii::$app->language];?><span>​‌​‌”</span> </p>
                            <h5 class="sky-h5"><?=$model->name?></h5>
                            <p class="testimonials-p1"><?=$model->email?></p>
                        </div>
                       <?php endforeach;?>
                   <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END / TESTIMONOALS -->