<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Category $ParentCategory
 * @property Category $ChildCategory
 * @property Document $Document
 */
class Category extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Parent' => array(
			'className' => 'Category',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Child' => array(
			'className' => 'Category',
			'foreignKey' => 'parent_id',
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
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'category_id',
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

    /**
     *
     * Get documents assign to specify category
     *
     * @param $category_id
     * @param null $locale_id
     * @return mixed
     */
    public function list_documents($category_id, $locale_id = null) {
        $options = array('conditions' => array('Document.category_id' => $category_id), 'recursive' => -1);
        $documents = $this->Document->find('all', $options);
        if ($locale_id) {
            $document_ids = array();
            foreach ($documents as $document) {
                $document_ids[] = $document['Document']['id'];
            }
            $DocumentTranslation = ClassRegistry::init('DocumentTranslation');
            $options = array('conditions' => array('DocumentTranslation.document_id' => $document_ids,
                'DocumentTranslation.locale_id' => $locale_id), 'recursive' => -1);
            $doc_trans = $DocumentTranslation->find('all', $options);
            foreach ($doc_trans as $doc_tran) {
                $position = array_search($doc_tran['DocumentTranslation']['document_id'], $document_ids);
                $documents[$position]['DocumentTranslation'] = $doc_tran['DocumentTranslation'];
            }
            unset($doc_trans);
        }
        return $documents;
    }

}
