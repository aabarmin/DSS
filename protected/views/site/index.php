<div class="container-fluid">
    <div class="row">
        <div class="span12">
            <?php $this->beginWidget('dss.widgets.BoxWidget', array(
                'title' => 'Статистика доступа пользователей'
            )); ?>

                <?php $this->widget('bootstrap.widgets.TbGridView',array(
                    'id'=>'project-grid',
                    'dataProvider'=> new CArrayDataProvider(Log::model()->findAll(array(
                        'order' => 'created desc'
                    ))),
                    'summaryText' => '',
                    'columns'=>array(
                        array(
                            'name' => '',
                            'type' => 'raw',
                            'value' => function($data, $row){
                                return $data->getLogString();
                            }
                        )
                    ),
                    'rowCssClassExpression' => function($row, $data){
                        return "row_style_".$data->controller_action;
                    }
                )); ?>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>