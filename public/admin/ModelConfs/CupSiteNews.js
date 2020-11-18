var ModelCupSiteNews = {
    list : {
        fields : ['data','titolo_it','attivo'],
        fieldsConfig : {
            data : 'w-date-text',
            attivo : {
                type : 'w-swap-smarty',
                modelName: 'cup_site_news'
            }
        }
    },
    edit : {
        fieldsConfig : {
            data : 'w-date-picker',
            attivo : 'w-select',
            fotos : {
                type :'w-hasmany',
                template : 'tpl-full-no',
                hasmanyConf : {
                    fields : [
                        'id','nome_it','descrizione_it','resource','status'
                    ],
                    fieldsConfig : {
                        resource : {
                            type : 'w-upload-ajax',
                            //extensions : ['csv','xls'],
                            maxFileSize : '2M',
                            ajaxFields : {
                                field : 'fotos|resource',
                                //resource_type : 'attachment'
                            },
                            modelName : 'cup_site_news'
                        },
                        status : 'w-hidden',
                        id : 'w-hidden',
                    }
                }
            }
        }
    }
}
