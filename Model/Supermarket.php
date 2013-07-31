<?php
App::uses('AppModel', 'Model');
/**
 * Supermarket Model
 *
 */
class Supermarket extends AppModel {

/**
 * img field
 *
 */
var $actsAs = array(
        'MeioUpload' => array('filename')
    );

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Campo requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxlength' => array(
				'rule' => array('maxlength',50),
				'message' => 'Maximo 50 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),			
		),
		'description' => array(
			'maxlength' => array(
				'rule' => array('maxlength',1500),
				'message' => 'Maximo 1500 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
