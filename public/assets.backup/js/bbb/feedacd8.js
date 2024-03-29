(function(){
    window.addEvent('domready',function(){
        var element = document.getElement('a.button.large.tertiary').getParent(),
            page = 2,
            per_page = document.getElements('section.section').length - 1,
            load = new LoadMore({
                url: '/feed/on-page/' + page + '/'+ per_page +'/',
                attach: {
                    to: element,
                    position: 'before'
                }
            });

        element.addEvent( 'click' , load.load.bind(load) );
        load.addEvent('success',function(json){
            if ( json.length < per_page ) {
                element.dispose();
            } else {
                page = page + 1;
                load.setOptions({
                    url: '/food/on-page/' + page + '/'+ per_page +'/'
                });
            }
        });
    });

    var LoadMore = new Class({
        Implements: [Options,Events],

        options: {
            url: '',
            attach: {
                to: undefined,
                position: 'bottom'
            }
        },

        loading: false,

        initialize: function(options){
            this.setOptions(options);
        },

        load: function(){
            if ( this.loading ) {
                return false;
            }
            this.loading = true;
            new Request.JSON({
                url: this.options.url,
                onFailure: this.fail.bind(this),
                onSuccess: this.success.bind(this)
            }).send();
            return false;
        },

        fail: function(x){
            console.log(x , ' ' , x.responseText);
        },

        success: function(json){
            // expects an array of views
            var attach = new Element('div');
            attach.set('html',json.join(''));
            
            attach.getChildren().setStyle('opacity',0).each(function(ch){
                this.options.attach.to.grab( ch , this.options.attach.position );
                ch.set('tween' , {duration:400}).tween('opacity' , 1);
            }, this);
            this.loading = false;
            this.fireEvent('success', [json]);
        }
    });
})();
