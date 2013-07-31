<?php
App::uses('AppModel', 'Model');
/**
 * BranchesImage Model
 *
 * @property Branch $Branch
 */
class BranchesImage extends AppModel {

/**
 * img field
 *
 */
var $actsAs = array(
        'MeioUpload' => array('filename')
    );


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descipcion' => array(
			'maxlength' => array(
				'rule' => array('maxlength',1000),
				'message' => 'Maximo 1000 caracteres',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'branch_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Branch' => array(
			'className' => 'Branch',
			'foreignKey' => 'branch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
