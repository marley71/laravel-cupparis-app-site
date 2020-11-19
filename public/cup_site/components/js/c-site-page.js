
crud.conf['c-site-page'] = {
    type : null,
    pk : null,
    tipoPagina : {
        cRef:'tipoPaginaR',
        domainValues : {
            'html' : 'html libero',
            'news' : 'news',
        },
        defaultValue : 'html',
    },
    pageData : null,
    paginaRef : 'paginaRef',
    newsManageRef : 'newsManageRef',
}
crud.components.cSitePage = Vue.component('c-site-page', {
    extends: crud.components.cComponent,
    template : '#c-site-page-template',

    methods : {
        dynamicData(conf) {
            var that = this;
            conf.tipoPagina.value = conf.type;
            conf.tipoPagina.methods = {
                change : function () {
                    that.selectType(this.value);
                }
            }
            ManageCupSiteNews.listConf.constraintValue = conf.pk;
            ManageCupSiteNews.editConf.constraintValue = conf.pk;
            ManageCupSiteNews.insertConf.constraintValue = conf.pk;
            //ManageCupSiteNews.viewConf.constraintValue = conf.pk;
            return conf;
        },
        selectType : function (type) {
            var that = this;
            that.type = type;
            var that = this;
            var r = that.createRoute('update');
            r.setValues({
                modelName : 'cup_site_page',
                pk : that.pk
            });
            r.setParams({
                type : type
            })
            Server.route(r,function (json) {
                if (json.error) {
                    that.errorDialog(json.msg);
                    return ;
                }
                //that.$crud.paginaRef.reload();
            })
        }
    }

});

