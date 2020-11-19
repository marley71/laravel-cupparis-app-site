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
            attivo : {
                type : 'w-radio',
                domainValues : {
                    0 : 'non attivo',
                    1 : 'attivo'
                }
            },
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
var ManageCupSiteNews = {
    modelName : 'cup_site_news',
    listConf : jQuery.extend({
        constraintKey : 'cup_site_page_id',
        routeName : 'list-constraint',
        methods : {
            setRouteValues: function (route) {
                var that = this;
                route.setValues({
                    modelName: that.modelName,
                    constraintKey: that.constraintKey,
                    constraintValue: that.constraintValue,
                })
            },
        }
    },ModelCupSiteNews.list),
    editConf : jQuery.extend({
        constraintKey : 'cup_site_page_id',
        routeName : 'edit-constraint',
        methods : {
            setRouteValues: function (route) {
                var that = this;
                route.setValues({
                    modelName: that.modelName,
                    pk : that.pk,
                    constraintKey: that.constraintKey,
                    constraintValue: that.constraintValue,
                })
            },
        }
    },ModelCupSiteNews.edit),
    insertConf : jQuery.extend({
        constraintKey : 'cup_site_page_id',
        routeName : 'insert-constraint',
        methods : {
            setRouteValues: function (route) {
                var that = this;
                route.setValues({
                    modelName: that.modelName,
                    constraintKey: that.constraintKey,
                    constraintValue: that.constraintValue,
                })
            },
        }
    },ModelCupSiteNews.edit)
}
