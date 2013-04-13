<div id="sideMenu">
	<?php $this->widget('application.extensions.menu-master.EMenu', array('items' => array(
		10  => array(
			'name'   => 'Football',
			'link'   => 'index.php?r=selection/index&sportId=3',
//				'icon'   => 'th-large',
			'active' => 'dashboard',
			'sub'    => array(
				10 => array(
					'name'   => 'Jerseys',
					'link'   => 'index.php?r=article/category',
					'active' => 'demo/index',
				),
				20 => array(
					'name'   => 'Shorts',
					'link'   => $this->createUrl('demo/second'),
					'active' => 'demo/second',
				),
				30 => array(
					'name'   => 'Socks',
					'link'   => $this->createUrl('demo/second'),
					'active' => 'demo/second',
				),
				40 => array(
					'name'   => 'Track Suits',
					'link'   => $this->createUrl('demo/second'),
					'active' => 'demo/second',
				),
				50 => array(
					'name'   => 'Markers',
					'link'   => $this->createUrl('demo/second'),
					'active' => 'demo/second',
				),
				60 => array(
					'name'   => 'Polo Shirts',
					'link'   => $this->createUrl('demo/second'),
					'active' => 'demo/second',
				),
				70 => array(
					'name'   => 'Bags',
					'link'   => $this->createUrl('demo/second'),
					'active' => 'demo/second',
				)
			)
		),
		20  => array(
			'name'   => 'Basketball',
			'link'   => 'index.php?r=selection/catalogue&sportId=4',
//				'icon'   => 'text-width',
			'active' => 'demo',
			'sub'    => array(
				10 => array(
					'name'   => 'General',
					'link'   => $this->createUrl('demo/index'),
					'active' => 'demo/index',
				),
				20 => array(
					'name'   => 'Second',
					'link'   => $this->createUrl('demo/second'),
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