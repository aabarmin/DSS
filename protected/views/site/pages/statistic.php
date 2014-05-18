<div class="container-fluid">
    <div class="row">
        <div class="span6">
            <?php $this->beginWidget('dss.widgets.BoxWidget', array(
                'title' => 'Проблемы за 14 дней'
            )); ?>

            <?php
            $this->widget('application.extensions.EFlot.EFlotGraphWidget',
                array(
                    'data'=>array(
                        array(
                            'label'=> 'Проблем',
                            'data'=> Problem::model()->statisticProblemsLast(),
                            'bars'=>array('show'=>true),
                        ),
                    ),
                    'options'=>array(
                        'legend'=>array(
                            'position'=>'nw',
                            'show'=>true,
                            'margin'=>10,
                            'backgroundOpacity'=> 0.5
                        ),
                        'xaxis' => array(
                            'mode' => 'categories',
                            'tickLength' => 0
                        ),
                        'series' => array(
                            'bars' => array(
                                'show' => true,
                                'barWidth' => 0.6,
                                'align' => 'center'
                            )
                        )
                    ),
                    'htmlOptions'=>array(
                        'style'=>'width:100%;height:400px;'
                    )
                )
            );
            ?>

            <?php $this->endWidget(); ?>
        </div>
        <div class="span6">
            <?php $this->beginWidget('dss.widgets.BoxWidget', array(
                'title' => 'Рекомендации и решения за 14 дней'
            )); ?>

            <?php
            $this->widget('application.extensions.EFlot.EFlotGraphWidget',
                array(
                    'data'=>array(
                        array(
                            'label'=> 'Решений и рекомендаций',
                            'data'=> Problem::model()->statisticRecommendationsSolutionsLast(),
                            'bars'=>array('show'=>true),
                        ),
                    ),
                    'options'=>array(
                        'legend'=>array(
                            'position'=>'nw',
                            'show'=>true,
                            'margin'=>10,
                            'backgroundOpacity'=> 0.5
                        ),
                        'xaxis' => array(
                            'mode' => 'categories',
                            'tickLength' => 0
                        ),
                        'series' => array(
                            'bars' => array(
                                'show' => true,
                                'barWidth' => 0.6,
                                'align' => 'center'
                            )
                        )
                    ),
                    'htmlOptions'=>array(
                        'style'=>'width:100%;height:400px;'
                    )
                )
            );
            ?>

            <?php $this->endWidget(); ?>
        </div>
    </div>
    <div class="row">
        <div class="span4">
            <?php $this->beginWidget('dss.widgets.BoxWidget', array(
                'title' => 'Проекты по статусам'
            )); ?>

            <?php
            $format_func = <<<EOD
                    js:function(label, series){
                        return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</div>';}
EOD;
            $this->widget('application.extensions.EFlot.EFlotGraphWidget',
                array(
                    'data'=> Project::model()->statisticByStatus(),
                    'options'=>array(
                        'series'=> array('pie'=>array(
                            'show'=>true,
                            'radius'=> 3/4,
                            'formatter'=> $format_func,
                        ),
                        ),
                        'legend'=> array('show'=>false),
                    ),
                    'htmlOptions'=>array('style'=>'width:100%;height:400px;')
                )
            );
            ?>

            <?php $this->endWidget(); ?>
        </div>
        <div class="span4">
            <?php $this->beginWidget('dss.widgets.BoxWidget', array(
                'title' => 'Проблемы по проектам'
            )); ?>

            <?php
            $format_func = <<<EOD
                    js:function(label, series){
                        return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</div>';}
EOD;
            $this->widget('application.extensions.EFlot.EFlotGraphWidget',
                array(
                    'data'=> Project::model()->statisticWithoutProblems(),
                    'options'=>array(
                        'series'=> array('pie'=>array(
                            'show'=>true,
                            'radius'=> 3/4,
                            'formatter'=> $format_func,
                        ),
                        ),
                        'legend'=> array('show'=>false),
                    ),
                    'htmlOptions'=>array('style'=>'width:100%;height:400px;')
                )
            );
            ?>

            <?php $this->endWidget(); ?>
        </div>
        <div class="span4">
            <?php $this->beginWidget('dss.widgets.BoxWidget', array(
                'title' => 'Классификация проектов по видам'
            )); ?>

            <?php
            $format_func = <<<EOD
                    js:function(label, series){
                        return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</div>';}
EOD;
            $this->widget('application.extensions.EFlot.EFlotGraphWidget',
                array(
                    'data'=> Project::model()->statisticByType(),
                    'options'=>array(
                        'series'=> array('pie'=>array(
                            'show'=>true,
                            'radius'=> 3/4,
                            'formatter'=> $format_func,
                        ),
                        ),
                        'legend'=> array('show'=>false),
                    ),
                    'htmlOptions'=>array('style'=>'width:100%;height:400px;')
                )
            );
            ?>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>