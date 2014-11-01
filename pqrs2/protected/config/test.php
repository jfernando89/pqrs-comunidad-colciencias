<?php 
return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=pqrs_prueba',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '12345',
				'charset' => 'utf8',
			),
		),
	)
);
?>
