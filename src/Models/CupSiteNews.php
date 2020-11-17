<?php

namespace Marley71\Cupparis\App\Site\Models;

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
        'fotos' => [self::HAS_MANY, 'related' => CupSiteFoto::class, 'name' => 'mediable'],
        //'attachments' => [self::HAS_MANY, 'related' => CupSiteFoto::class, 'name' => 'mediable'],


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

}
