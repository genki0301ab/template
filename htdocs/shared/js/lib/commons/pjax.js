'use strict';
let object = {}
object.extend = function(self, Object) {
    for(let key in Object) {
        self[key] = Object[key];
    }
};

export class Pjax {
    constructor(Object) {
        //extend
        object.extend(this, Object);
        //initialize
        this.event();
    }
    init(href) { //init
        $.pjax({
            url: href,
            container: 'container',
            fragment: 'container',
            scrollTop: 1,
            timeout: 30000
        });
    }
    event() {
        let self = this;
        $(document).on({
            'pjax:start': function() {

            },
            'pjax:end': function() {

            },
            'pjax:complate': function() {

            },
            'pjax:popstate': function() {
            },
            'pjax:timeout': function() {
            }
        });
        $(document).on('click', 'a:not([target="_blank"])', function(event) {
            let href = $(this).attr('href');
            event.preventDefault();
            self.animationStart(href);
        });
    }
    animationStart(href) { //animationStart
    }
    animationEnd() { //animationEnd
    }
}