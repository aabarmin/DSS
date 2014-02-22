<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

    <div class="container-fluid container-site" id="page">
        <div class="row-fluid container-header">
            <div class="span1">
                <?php $this->widget('application.components.BMenuWidget', array(
                    'iconsPath' => Yii::app()->request->baseUrl.'/images/icons/',
                    'htmlOptions' => array(
                        'class' => 'menu_main'
                    ),
                    'items'=>array(
                        array('label'=>'', 'icon'=>'Compass.png', 'url'=>array('/taxonomy'), 'active'=>true),
                    ),
                )); ?>
            </div>
            <div class="span11">
                <?php /** @var BootActiveForm $form */
                $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                    'id'=>'searchForm',
                    'type'=>'search',
                    'htmlOptions'=>array(
                        'class'=>'pull-left',
                        'style' => 'padding-top: 10px;'
                    ),
                )); ?>

                <?php echo $form->textFieldRow(Yii::app()->BSiteFunctions->getSearchObject(), 'query', array('class'=>'input-xxlarge', 'prepend'=>'<i class="icon-search"></i>')); ?>
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Поиск')); ?>

                <?php $this->endWidget(); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span1">
                <?php $this->widget('application.components.BMenuWidget', array(
                    'iconsPath' => Yii::app()->request->baseUrl.'/images/icons/',
                    'htmlOptions' => array(
                        'class' => 'menu_main'
                    ),
                    'items'=>array(
                        array('label'=>'Проекты', 'icon'=>'Calendar.png', 'url'=>array('/taxonomy'), 'active'=>true),
                        array('label'=>'Инциденты', 'icon'=>'Bookmark.png', 'url'=>array('/taxonomy'), 'active'=>true),
                        array('label'=>'Решения', 'icon'=>'Dashboard.png', 'url'=>array('/taxonomy'), 'active'=>true),
                        array('label'=>'Рекомендации', 'icon'=>'Document.png', 'url'=>array('/taxonomy'), 'active'=>true),
                        array('label'=>'Статистика', 'icon'=>'Chart.png', 'url'=>array('/taxonomy'), 'active'=>true),
                        array('label'=>'Настройки', 'icon'=>'Settings.png', 'url'=>array('/taxonomy'), 'active'=>true),
                    ),
                )); ?>
            </div>
            <div class="span11">
                <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
                <?php endif?>

                <div class="row-fluid">
                    <div class="span9">
                        <div id="content">
                            <?php echo $content; ?>
                        </div><!-- content -->
                    </div>
                    <div class="span3">
                        <div id="sidebar">
                            <?php
                            $this->beginWidget('zii.widgets.CPortlet', array(
                                'title'=>'Operations',
                            ));
                            $this->widget('bootstrap.widgets.TbMenu', array(
                                'items'=>$this->menu,
                                'htmlOptions'=>array('class'=>'operations'),
                            ));
                            $this->endWidget();
                            ?>
                        </div><!-- sidebar -->
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div><!-- page -->

<?php $this->endContent(); ?>