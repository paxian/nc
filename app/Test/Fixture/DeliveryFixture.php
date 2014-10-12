<?php
/**
 * DeliveryFixture
 *
 */
class DeliveryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'year' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'folio' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'referencia' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'estatus' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comentarioAsesor' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apaterno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'amaterno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'talonarios' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'asignacion' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'direccion' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'entreCalles' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'colonia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigoPostal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ciudad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zonaAsesor' => array('type' => 'integer', 'null' => true, 'default' => '29', 'length' => 4, 'unsigned' => false),
		'asesor' => array('type' => 'string', 'null' => true, 'default' => 'ICOTELM', 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'otroDomicilio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechaEntrega' => array('type' => 'date', 'null' => true, 'default' => null),
		'horaInicial' => array('type' => 'time', 'null' => true, 'default' => null),
		'horaFinal' => array('type' => 'time', 'null' => true, 'default' => null),
		'telefonos' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'observacionesOperador' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estatusPagare' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'year' => 1,
			'folio' => 1,
			'fecha' => '2014-10-12 10:48:00',
			'referencia' => 1,
			'estatus' => 'Lorem ipsum dolor sit amet',
			'comentarioAsesor' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apaterno' => 'Lorem ipsum dolor sit amet',
			'amaterno' => 'Lorem ipsum dolor sit amet',
			'talonarios' => 1,
			'asignacion' => 1,
			'direccion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'entreCalles' => 'Lorem ipsum dolor sit amet',
			'colonia' => 'Lorem ipsum dolor sit amet',
			'codigoPostal' => 'Lore',
			'ciudad' => 'Lorem ipsum dolor sit amet',
			'zonaAsesor' => 1,
			'asesor' => 'Lorem ipsum dolor sit amet',
			'otroDomicilio' => 'Lorem ipsum dolor sit amet',
			'fechaEntrega' => '2014-10-12',
			'horaInicial' => '10:48:00',
			'horaFinal' => '10:48:00',
			'telefonos' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'observacionesOperador' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estatusPagare' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1
		),
	);

}
