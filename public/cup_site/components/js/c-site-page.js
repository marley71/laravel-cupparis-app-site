
crud.conf['c-site-page'] = {
    type : null,
    pk : null,
    tipoPagina : {
        domainValues : {
            'html' : 'html libero',
            'news' : 'news',
        },
        defaultValue : 'html',
    }
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
                    that.type = this.value;
                }
            }
            return conf;
        }
    }

});
