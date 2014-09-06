<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Comment $Comment
 * @property Post $Post
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Vous devez préciser un nom d\'utilisateur.',
				'required' => true,
				'last' => true,
			),
			'regexUsername' => array(
				'rule' => '/^[a-zA-Z0-0\-\_]{4,30}$/',
				'message' => 'Le nom d\'utilisateur ne peut contenir que les caractères suivant : a-zA-Z0-0-_ <br> Le nom d\'utilisateur doit comprendre entre 4 et 30 caractères.'
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Vous devez préciser un password.',
				'required' => true,
				'last' => true, 
			),
			'regexPassword' => array(
				'rule' => '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{6,})$/',
				'message' => 'Le mot de passe doit comprendre au minimum un lettre minuscule, une lettre majuscule, un chiffre et doit contenir au minimum 6 caractères.'
			)
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Vous devez préciser votre prénom.',
				'required' => true,
				'last' => true,
			),
			'regexName' => array(
				'rule' => '/^[éèêàâa-zA-z]{2,20}$/',
				'message' => 'Votre prénom ne doit contenir que des lettres minuscules et majuscules.<br>Il doit contenir entre 2 et 20 caractères.'
			)
		),
		'lastname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Vous devez préciser votre nom.',
				'required' => true,
				'last' => true,
			),
			'regexName' => array(
				'rule' => '/^[éèêàâa-zA-z]{2,20}$/',
				'message' => 'Votre nom ne doit contenir que des lettres minuscules et majuscules.<br>Il doit contenir entre 2 et 20 caractères.'
			)
		),
		'birthdate' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				'message' => 'Vous devez préciser votre date de naissance.',
				'required' => false,
				'last' => false,
			)
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Vous devez préciser un email valide.',
				'required' => false,
				'last' => false, 
			)
		),
		'role' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Vous devez préciser votre nom.',
				'required' => true,
				'last' => true,
			),
			'roleInList' => array(
				'rule' => array('inList', array('admin','author','user'), true),
				'message' => 'Le choix ne correspond pas à la lsite.'
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
