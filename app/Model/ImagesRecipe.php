<?php
App::uses('AppModel', 'Model');
/**
 * ImagesRecipe Model
 *
 * @property Recipe $Recipe
 */
class ImagesRecipe extends AppModel {

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
		'recipe_id' => array(
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
		'Recipe' => array(
			'className' => 'Recipe',
			'foreignKey' => 'recipe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
