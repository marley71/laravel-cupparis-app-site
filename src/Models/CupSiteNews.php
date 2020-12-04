<?php

namespace Marley71\Cupparis\App\Site\Models;

use App\Models\CupSiteFoto;
use Gecche\Cupparis\App\Breeze\Breeze;
use PHPHtmlParser\Dom;

/**
 * Breeze (Eloquent) model for T_AREA table.
 */
class CupSiteNews extends Breeze
{


//    use ModelWithUploadsTrait;

    protected $table = 'cup_site_news';

    protected $guarded = ['id'];

    //public $timestamps = false;
    //public $ownerships = false;

    public $appends = [

    ];


    public static $relationsData = [
        'fotos' => [self::MORPH_MANY, 'related' => CupSiteFoto::class, 'name' => 'mediable'],
        'attachments' => [self::MORPH_MANY, 'related' => CupSiteAttachment::class, 'name' => 'mediable'],
        'videos' => array(self::MORPH_MANY, 'related' => CupSiteVideo::class,'name' => 'mediable'),

//        'belongsto' => array(self::BELONGS_TO, Area::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, Area::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, Area::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['titolo_it'];
     //['id','nome_it'];

    public $defaultOrderColumns = ['data' => 'DESC', ];
     //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['titolo_it'];
     //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';

    public function save(array $options = array())
    {
        //echo($this->content_id);
        if (!$this->getKey()) {
            $this->menu_it = 'new' . rand();
            parent::save($options);
        }

        $this->menu_it = $this->getKey() . "-" . str_replace(' ','-',$this->titolo_it);
        return parent::save($options);
    }
}
