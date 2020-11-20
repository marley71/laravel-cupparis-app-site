crud.conf['v-calendar'] = {
    resources : [
        'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css'
    ],
    fullCalendarInstance : null
}

crud.components.vCalendar = Vue.component('v-calendar', {
    extends: crud.components.views.vList,
    template: '#v-calendar-template',
    methods : {
        completed() {
            var that = this;
            for (var i in that.value) {
                that.addEvent(that.value[i]);
            }
        },
        addEvent(data) {
            var that = this;
            var event = that.merge({
                title: data.titolo_it,
                start: data.data,
                end: data.data_fine,
                allDay: false,
                description: ""
            },data);
            //console.log('addEvent',data,'event',event);
            that.fullCalendarInstance.fullCalendar('renderEvent',event);
        },
        afterLoadResources() {
            var that = this;
            console.log('afterLoadResource');
            that.fullCalendarInstance = jQuery('#calendar').fullCalendar({
                themeSystem: 'bootstrap4',
                // emphasizes business hours
                businessHours: false,
                defaultView: 'month',
                // event dragging & resizing
                editable: true,
                // header
                header: {
                    left: 'title',
                    center: 'month,agendaWeek,agendaDay',
                    right: 'today prev,next'
                },
                events : [],
                // events: [
                //     {
                //         title: 'Barber',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-07-07',
                //         end: '2019-07-07',
                //         className: 'fc-bg-default',
                //         icon : "circle"
                //     },
                //     {
                //         title: 'Flight Paris',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-08-08T14:00:00',
                //         end: '2019-08-08T20:00:00',
                //         className: 'fc-bg-deepskyblue',
                //         icon : "cog",
                //         allDay: false
                //     },
                //     {
                //         title: 'Team Meeting',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-07-10T13:00:00',
                //         end: '2019-07-10T16:00:00',
                //         className: 'fc-bg-pinkred',
                //         icon : "group",
                //         allDay: false
                //     },
                //     {
                //         title: 'Meeting',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-08-12',
                //         className: 'fc-bg-lightgreen',
                //         icon : "suitcase"
                //     },
                //     {
                //         title: 'Conference',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-08-13',
                //         end: '2019-08-15',
                //         className: 'fc-bg-blue',
                //         icon : "calendar"
                //     },
                //     {
                //         title: 'Baby Shower',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-08-13',
                //         end: '2019-08-14',
                //         className: 'fc-bg-default',
                //         icon : "child"
                //     },
                //     {
                //         title: 'Birthday',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-09-13',
                //         end: '2019-09-14',
                //         className: 'fc-bg-default',
                //         icon : "birthday-cake"
                //     },
                //     {
                //         title: 'Restaurant',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-10-15T09:30:00',
                //         end: '2019-10-15T11:45:00',
                //         className: 'fc-bg-default',
                //         icon : "glass",
                //         allDay: false
                //     },
                //     {
                //         title: 'Dinner',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-11-15T20:00:00',
                //         end: '2019-11-15T22:30:00',
                //         className: 'fc-bg-default',
                //         icon : "cutlery",
                //         allDay: false
                //     },
                //     {
                //         title: 'Shooting',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-08-25',
                //         end: '2019-08-25',
                //         className: 'fc-bg-blue',
                //         icon : "camera"
                //     },
                //     {
                //         title: 'Go Space :)',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-12-27',
                //         end: '2019-12-27',
                //         className: 'fc-bg-default',
                //         icon : "rocket"
                //     },
                //     {
                //         title: 'Dentist',
                //         description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                //         start: '2019-12-29T11:30:00',
                //         end: '2019-12-29T012:30:00',
                //         className: 'fc-bg-blue',
                //         icon : "medkit",
                //         allDay: false
                //     }
                // ],
                eventRender: function(event, element) {
                    if(event.icon){
                        element.find(".fc-title").prepend("<i class='fa fa-"+event.icon+"'></i>");
                    }
                },
                dayClick: function(date) {
                    //jQuery('#modal-view-event-add').modal();
                    console.log('date',date);
                    var modalW = null;
                    var cConf = that.mergeConfView(ModelCupSiteNews.insert,{
                        modelName : 'cup_site_news',
                        actions : ['action-save'],
                        methods : {
                            afterLoadData(json) {
                                console.log('FATER JON',json);
                                json.result.data = date.format('YYYY-MM-DD HH:mm');
                                json.result.data_fine = date.format('YYYY-MM-DD HH:mm');

                            }
                        },
                        customActions : {
                            'action-save' : {
                                afterExecute() {
                                    var action = this;
                                    console.log('afterExecute',action.json);
                                    that.addEvent(action.json.result);
                                    //event.title = action.json.result.titolo_it;
                                    that.fullCalendarInstance.fullCalendar('updateEvent',event);
                                    modalW.hide();
                                }
                            }
                        }
                    });
                    modalW = that.createBigModalView('v-insert',{
                        cConf : cConf
                    },that.translate('app.nuovo-evento'))
                },
                eventClick: function(event, jsEvent, view) {
                    console.log('event',event);
                    var modalW = null;
                    var cConf = that.mergeConfView(ModelCupSiteNews.edit,{
                        pk : event.id,
                        modelName : 'cup_site_news',
                        actions : ['action-save','action-delete'],
                        customActions : {
                            'action-save' : {
                                afterExecute() {
                                    var action = this;
                                    console.log('afterExecute',action.json);
                                    event.title = action.json.result.titolo_it;
                                    that.fullCalendarInstance.fullCalendar('updateEvent',event);
                                    modalW.hide();
                                }
                            },
                        }
                    });
                    modalW = that.createBigModalView('v-edit',{
                        cConf : cConf
                    },event.title)

                    // jQuery('.event-icon').html("<i class='fa fa-"+event.icon+"'></i>");
                    // jQuery('.event-title').html(event.title);
                    // jQuery('.event-body').html(event.description);
                    // jQuery('.eventUrl').attr('href',event.url);
                    // jQuery('#modal-view-event').modal();
                },
            });
            FUL = that.fullCalendarInstance;
        }
    }
})
