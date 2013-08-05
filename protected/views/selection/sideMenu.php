<div id="sideMenu">
	<?php $this->widget('application.extensions.menu-master.EMenu', array('items' => array(
		10  => array(
			'name'   => 'Football',
			'link'   => 'index.php?r=selection/index&sportId=3&sex=m',
//				'icon'   => 'th-large',
			'active' => 'dashboard',
			'sub'    => array(
				10 => array(
					'name'   => 'Jerseys',
					'link'   => 'index.php?r=selection/index&sportId=3&sex=m',
					'active' => 'demo/index',
				),
				20 => array(
					'name'   => 'Shorts',
					'link'   => 'index.php?r=selection/index&sportId=3&sex=m',
					'active' => 'demo/second',
				),
				30 => array(
					'name'   => 'Socks',
					'link'   => 'index.php?r=selection/index&sportId=3&sex=m',
					'active' => 'demo/second',
				),
				40 => array(
					'name'   => 'Track Suits',
					'link'   => 'index.php?r=selection/index&sportId=3&sex=m',
					'active' => 'demo/second',
				),
				50 => array(
					'name'   => 'Markers',
					'link'   => 'index.php?r=selection/index&sportId=3&sex=m',
					'active' => 'demo/second',
				),
				60 => array(
					'name'   => 'Polo Shirts',
					'link'   => 'index.php?r=selection/index&sportId=3&sex=m',
					'active' => 'demo/second',
				),
				70 => array(
					'name'   => 'Bags',
					'link'   => 'index.php?r=selection/index&sportId=3&sex=m',
					'active' => 'demo/second',
				)
			)
		),
		20  => array(
			'name'   => 'Basketball',
			'link'   => 'index.php?r=selection/index&sportId=4&sex=m',
//				'icon'   => 'text-width',
			'active' => 'demo',
			'sub'    => array(
				10 => array(
					'name'   => 'General',
					'link'   => 'index.php?r=selection/index&sportId=4&sex=m',
					'active' => 'demo/index',
				),
				20 => array(
					'name'   => 'Second',
					'link'   => 'index.php?r=selection/index&sportId=4&sex=m',
					'active' => 'demo/second',
				)
			)
		),
		30  => array(
			'name'   => 'Handball',
			'link'   => $this->createUrl('/documentation'),
			'icon'   => 'list',
			'active' => 'documentation',
			'sub'    => array(
				10 => array(
					'name'   => 'General',
					'link'   => $this->createUrl('documentation/index'),
					'active' => 'documentation/feature',
				),
				20 => array(
					'name'   => 'Icon',
					'link'   => $this->createUrl('documentation/icon'),
					'active' => 'documentation/icon',
				)
			)
		),
		40  => array(
			'name'   => 'Volleyball',
			'link'   => $this->createUrl('/usage'),
			'icon'   => 'asterisk',
			'active' => 'usage',
		),
		100 => array(
			'name'   => 'American Football',
			'link'   => $this->createUrl('/download'),
			'icon'   => 'download',
			'active' => 'download',
		),
	))); ?>
</div>