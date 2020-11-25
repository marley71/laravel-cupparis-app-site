<?php
namespace Marley71\Cupparis\App\Site\Models;

use Gecche\Cupparis\App\Breeze\Breeze;
use Gecche\Cupparis\App\Models\AttachmentTrait;
use Gecche\Cupparis\App\Models\FotoTrait;
use Gecche\Cupparis\App\Models\UploadableTraits;

class CupSiteVideo extends Breeze
{
    //use UploadableTraits;
    //use FotoTrait;

    protected $guarded = ['id'];
    //public $dir = 'cup_site_attachment'; //e.g. allegati
    public $prefix = 'allegato'; //e.g. allegato
    public $timestamps = true;
    public $ownerships = true;
    protected $table = 'cup_site_videos';
    //protected $fillable = array('ext','nome_it','descrizione_it','ordine');
    protected $appends = array('video_id');
    public static $rules = array(
        //'nome' => 'required',
    );

    public static $relationsData = array(
        'mediable' => array(self::MORPH_TO, 'name' => 'mediable'),
    );

    public function getUrl()
    {
        return '/viewmediable/cup_site_attachment/'.$this->getKey();
    }

    public function getVideoIdAttribute() {
        $url = $this->link;
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        return $my_array_of_vars['v'];
    }
}
