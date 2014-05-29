=======================
Requirement:
 - Bootstrap 3+ 
 - jQuery UI
 - jQuery 1.7+

=======================

Example :
<code>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php 
				require_once 'transgrid/transgrid.php';
				$grid           		= new TransGrid ();
				$CONF ['table'] 		= 't_department';
				$CONF ['editable']     = true;
				$CONF ['field']        = array('department_id','department_name','department_status');
				$CONF ['limit']        = 10;
				$CONF ['edit_field']   = array('department_name','department_status');
				$CONF ['insert_field'] = array('department_name','department_status');
				$CONF ['search_field'] = array('department_name');
				$CONF ['status_field'] = 'department_status';
				$CONF ['tablehead']    = array('Department','Status');
				$CONF ['title']        = 'Settings &raquo; Department';
				$CONF ['sortable']     = true;
				$CONF ['order_field']  = 'urutan';

				echo $grid->CreateGrid($CONF);
				?>
			</div>
		</div>
	</div>	
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</code>

