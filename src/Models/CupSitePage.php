<?php

namespace Marley71\Cupparis\App\Site\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

/**
 * Breeze (Eloquent) model for T_AREA table.
 */
class CupSitePage extends Breeze
{


//    use ModelWithUploadsTrait;

    protected $table = 'cup_site_pages';

    protected $guarded = ['id'];

    //public $timestamps = false;
    //public $ownerships = false;

    public $appends = [

    ];


    public static $relationsData = [



//        'belongsto' => array(self::BELONGS_TO, Area::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, Area::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, Area::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['titolo_it'];
     //['id','nome_it'];

    public $defaultOrderColumns = ['id' => 'ASC', ];
     //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['titolo_it'];
     //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';



    public static function getPageTree() {
        $pages = self::whereNull('cup_site_page_id')->get()->toArray();
        for($i=0;$i<count($pages);$i++) {
            $subPages = self::where('cup_site_page_id',$pages[$i]['id'])->get()->toArray();
            $pages[$i]['children'] = $subPages;
        }
        return $pages;
    }

    /**
     * Overload model save.
     *
     * $name_equals string Assert User's name (Optional)
     */
    public function save(array $options = array())
    {
        //echo($this->content_id);

        $content = $this->content_it;

        parent::save($options);
    }

}
