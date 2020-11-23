var ModelCupSiteNews = {
    list : {
        fields : ['data','titolo_it','attivo'],
        constraintKey : 'cup_site_page_id',
        routeName : 'list-constraint',
        actions : ['action-edit','action-delete','action-delete-selected','action-insert'],//'action-anteprima'],
        customActions : {
            'action-anteprima' : {
                type : 'collection',
                icon : 'fa fa-eye',
                execute : function () {
                    var that = this;
                    var pageMenu = that.view.pageData.menu_it || 'news';
                    window.open('/cup_site/' + pageMenu, '_blank');
                }
            }
        },
        methods : {
            setRouteValues: function (route) {
                var that = this;
                route.setValues({
                    modelName: that.modelName,
                    constraintKey: that.constraintKey,
                    constraintValue: that.constraintValue,
                })
            },
        },
        fieldsConfig : {
            data : 'w-date-text',
            attivo : {
                type : 'w-swap-smarty',
                modelName: 'cup_site_news'
            }
        }
    },
    edit : {
        fields : ['titolo_it','descrizione_it','data','data_fine','attivo','fotos','attachments'],
        constraintKey : 'cup_site_page_id',
        routeName : 'edit-constraint',
        constraintValue : 2,  // per test
        methods : {
            setRouteValues: function (route) {
                var that = this;
                //alert('b '+that.routeName);
                route.setValues({
                    modelName: that.modelName,
                    pk : that.pk,
                    constraintKey: that.constraintKey,
                    constraintValue: that.constraintValue,
                })
            },
        },
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
            },
            attachments : {
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
                                field : 'attachments|resource',
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

ModelCupSiteNews.insert = Object.assign({},ModelCupSiteNews.edit);
ModelCupSiteNews.insert = Object.assign(ModelCupSiteNews.insert, {
    routeName: 'insert-constraint',
    methods: {
        setRouteValues: function (route) {
            var that = this;
            alert('ss  ' + that.routeName);
            route.setValues({
                modelName: that.modelName,
                constraintKey: that.constraintKey,
                constraintValue: that.constraintValue,
            })
        },
    }
});

var ManageCupSiteNews = {
    collapsible : false,
    modelName : 'cup_site_news',
}
