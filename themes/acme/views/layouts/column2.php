<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>


	<!-- start: Header -->
	<?php $this->widget('application.components.dss.widgets.MainNavbarWidget', array(
	
	)); ?>	
	<!-- start: Header -->
  
  <!--start: fluid-container-->
  <div class="container-fluid">
    <div class="row-fluid">
    
			<!-- start: Main Menu -->			
			<div id="sidebar-left" class="span1">
				<?php $this->widget('application.components.dss.widgets.MainMenuWidget', array(
	                    'htmlOptions' => array(
	                        'class' => 'menu_main'
	                    ),
	                    'route' => $this->route,
	                    'items'=>array(
	                    	array(
	                        	'label'=>'Главная', 
	                        	'icon'=>'fa-icon-tasks', 
	                        	'url'=>array('/')
							),
	                        array(
	                        	'label'=>'Таксономия', 
	                        	'icon'=>'fa-icon-tasks', 
	                        	'url'=>array('/taxonomy')
							),
	                    ),
	            )); ?>				
			</div>
			<a id="main-menu-toggle" class="hidden-phone open"><i class="fa-icon-reorder"></i></a>
			<!-- end: Main Menu -->    
     
    <noscript>
      <div class="alert alert-block span11">
        <h4 class="alert-heading">Warning!</h4>
        <p>You need to have 
        <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
      </div>
    </noscript> 
    <!-- start: Content -->
	<div id="content" class="span11">
		<div class="row-fluid">
			<?php echo $content; ?>
		</div>
    </div>
    <!-- end: Content -->
    <!-- start: Widgets Area -->
    <div id="widgets-area" class="span2 hidden-tablet hidden-phone">
      <ul class="nav tab-menu nav-tabs" id="myTab">
        <li class="active">
          <a href="#charts"></a>
        </li>
        <li>
          <a href="#users"></a>
        </li>
        <li>
          <a href="#messages"></a>
        </li>
        <li>
          <a id="close-widgets-area" href="#"></a>
        </li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="charts">
          <div class="bar-stat">
          <span class="title">Account balance</span> 
          <span class="value">$19 999,99</span> 
          <span class="chart green">7,3,2,6,6,3,9,0,1,4</span></div>
          <hr />
          <div class="bar-stat">
          <span class="title">Clients</span> 
          <span class="value">1278</span> 
          <span class="chart yellow">8,2,5,4,7,4,7,2,5,9</span></div>
          <hr />
          <div class="bar-stat">
          <span class="title">Orders</span> 
          <span class="value">5876</span> 
          <span class="chart blue">2,4,6,8,3,5,9,3,2,2</span></div>
          <hr />
          <div class="bar-stat">
          <span class="title">Messages</span> 
          <span class="value">673</span> 
          <span class="chart red">0,3,3,8,3,3,2,7,8,4</span></div>
          <hr />
          <div id="cpu-usage"></div>
          <ul class="progress-bars">
            <li>
              <span class="title">Free Memory</span>
              <div class="taskProgress progressSlim progressGreen">80</div>
            </li>
            <li>
              <span class="title">Free HDD Drive</span>
              <div class="taskProgress progressSlim progressYellow">20</div>
            </li>
            <li>
              <span class="title">Free SSD Drive</span>
              <div class="taskProgress progressSlim progressBlue">57</div>
            </li>
            <li>
              <span class="title">Transfer</span>
              <div class="taskProgress progressSlim progressRed">45</div>
            </li>
          </ul>
        </div>
        <div class="tab-pane" id="users">
          <ul class="users-list">
            <li>
              <a href="#">
              <span class="avatar">
                <img class="img-circle" src="img/avatar.jpg" alt="Avatar" />
              </span> 
              <span class="name">Łukasz Holeczek</span></a>
            </li>
            <li>
              <a href="#">
              <span class="avatar">
                <img class="img-circle" src="img/avatar2.jpg" alt="Avatar" />
              </span> 
              <span class="name">Megan Abott</span></a>
            </li>
            <li>
              <a href="#">
              <span class="avatar">
                <img class="img-circle" src="img/avatar3.jpg" alt="Avatar" />
              </span> 
              <span class="name">Kate Ross</span></a>
            </li>
            <li>
              <a href="#">
              <span class="avatar">
                <img class="img-circle" src="img/avatar4.jpg" alt="Avatar" />
              </span> 
              <span class="name">Julie Blank</span></a>
            </li>
            <li>
              <a href="#">
              <span class="avatar">
                <img class="img-circle" src="img/avatar5.jpg" alt="Avatar" />
              </span> 
              <span class="name">Jane Sanders</span></a>
            </li>
            <li>
              <a href="#">View all users</a>
            </li>
          </ul>
        </div>
        <div class="tab-pane" id="messages">
          <ul class="messages-list">
            <li>
              <a href="#">
              <div class="avatar">
                <img class="img-circle" src="img/avatar.jpg" alt="Avatar" />
              </div>
              <span class="name">Łukasz Holeczek</span> 
              <span class="date">25/6/2013</span> 
              <span class="title">Custom Bootstrap design for new client</span></a>
            </li>
            <li>
              <a href="#">
              <div class="avatar">
                <img class="img-circle" src="img/avatar2.jpg" alt="Avatar" />
              </div>
              <span class="name">Megan Abott</span> 
              <span class="date">25/6/2013</span> 
              <span class="title">Custom Bootstrap design for new client</span></a>
            </li>
            <li>
              <a href="#">
              <div class="avatar">
                <img class="img-circle" src="img/avatar3.jpg" alt="Avatar" />
              </div>
              <span class="name">Kate Ross</span> 
              <span class="date">25/6/2013</span> 
              <span class="title">Custom Bootstrap design for new client</span></a>
            </li>
            <li>
              <a href="#">
              <div class="avatar">
                <img class="img-circle" src="img/avatar4.jpg" alt="Avatar" />
              </div>
              <span class="name">Julie Blank</span> 
              <span class="date">25/6/2013</span> 
              <span class="title">Custom Bootstrap design for new client</span></a>
            </li>
            <li>
              <a href="#">
              <div class="avatar">
                <img class="img-circle" src="img/avatar5.jpg" alt="Avatar" />
              </div>
              <span class="name">Jane Sanders</span> 
              <span class="date">25/6/2013</span> 
              <span class="title">Custom Bootstrap design for new client</span></a>
            </li>
            <li>
              <a href="#">View all messages</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end: Widgets Area -->
    <a id="widgets-area-button" class="hidden-tablet hidden-phone open"></a></div>
    <!--/fluid-row-->
    <div class="modal hide fade" id="myModal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
      </div>
      <div class="modal-body">
        <p>Here settings can be configured...</p>
      </div>
      <div class="modal-footer">
      <a href="#" class="btn" data-dismiss="modal">Close</a> 
      <a href="#" class="btn btn-primary">Save changes</a></div>
    </div>
    <div class="clearfix"></div>
    <footer>
      <p>
      <span style="text-align:left;float:left">ɠ2013 
      <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">creativeLabs</a></span> 
      <span class="hidden-phone" style="text-align:right;float:right">Powered by: 
      <a href="http://admintemplates.co" alt="Bootstrap Admin Templates">ACME Dashboard</a></span></p>
    </footer>
  </div>
  <!--/.fluid-container-->  
  
  
  
  
  <!-- start: JavaScript-->
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.9.1.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-migrate-1.0.0.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.10.0.custom.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ui.touch-punch.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.cookie.js"></script> 
  <script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/fullcalendar.min.js'></script> 
  <script src='<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.dataTables.min.js'></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/excanvas.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.pie.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.stack.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flot.resize.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/gauge.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.chosen.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.uniform.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.cleditor.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.noty.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.elfinder.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.raty.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.iphone.toggle.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.uploadify-3.1.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.gritter.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.imagesloaded.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.masonry.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.knob.modified.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.sparkline.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/counter.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/raphael.2.1.0.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/justgage.1.0.1.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/retina.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/core.min.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/charts.js"></script> 
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/custom.js"></script> 
  <!-- end: JavaScript-->  

<?php $this->endContent(); ?>