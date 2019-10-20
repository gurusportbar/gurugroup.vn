;(function() {
    'use strict';

    // set progressive image loading
    let arrProgressive = [];
    let progressiveMedias = document.querySelectorAll('.progressiveMedia');
    for (let i = 0; i < progressiveMedias.length; i++) {
		console.log(progressiveMedias.length);
        run(progressiveMedias[i]);

        let rect = progressiveMedias[i].getBoundingClientRect();
		console.log(rect);
        if(rect.y){
            let x = rect.y + $(document).scrollTop();
            let y = Math.floor(x / 1000);
            if(y < 0){
                y = 0;
            }

            if(arrProgressive[y]){
                arrProgressive[y].push(progressiveMedias[i]);
            }else {
                arrProgressive[y] = [progressiveMedias[i]]
            }
        }
    }

    //Load first element
    let x = Math.floor($(document).scrollTop() / 1000);

    if(x >= 1 && arrProgressive[x - 1]){
        let items = arrProgressive[x - 1];
        delete arrProgressive[x - 1];

        for (let i = 0; i < items.length; i++) {
            load(items[i]);
        }
    }

    if(x >= 0 && arrProgressive && arrProgressive[x]){
        let items = arrProgressive[x];
        delete arrProgressive[x];

        for (let i = 0; i < items.length; i++) {
            load(items[i]);
        }
    }

    //Load element when scroll
    $(document).scroll(function () {
        let x = Math.floor($(document).scrollTop() / 1000);
        let y = x + 1;
        let t = x + 2;

        if(arrProgressive[x]){
            let items = arrProgressive[x];
            delete arrProgressive[x];

            for (let i = 0; i < items.length; i++) {
                load(items[i]);
            }
        }

        if(arrProgressive[y]){
            let items = arrProgressive[y];
            delete arrProgressive[y];

            for (let i = 0; i < items.length; i++) {
                load(items[i]);
            }
        }

        if(arrProgressive[t]){
            let items = arrProgressive[t];
            delete arrProgressive[t];

            for (let i = 0; i < items.length; i++) {
                load(items[i]);
            }
        }

        if(x - 1 > 0){
            let z = x - 1;

            if(arrProgressive[z]){
                let items = arrProgressive[z];
                delete arrProgressive[z];

                for (let i = 0; i < items.length; i++) {
                    load(items[i]);
                }
            }
        }
    });

    // global function
    function run(progressiveMedia) {
        // calculate aspect ratio
        // for the aspectRatioPlaceholder-fill
        // that helps to set a fixed fill for loading images
        var width = progressiveMedia.dataset.width,
            height = progressiveMedia.dataset.height,
            fill = height / width * 100,
            placeholderFill = progressiveMedia.previousElementSibling;

        placeholderFill.setAttribute('style', 'padding-bottom:'+fill+'%;');

        // set max-height and max-width to aspectRatioPlaceholder
        // that is fun
        var aspectRatioPlaceholder = progressiveMedia.parentElement,
            maxWidth = aspectRatioPlaceholder.offsetWidth,
            maxHeight = aspectRatioPlaceholder.offsetHeight;

        aspectRatioPlaceholder.setAttribute('style', 'max-width:'+maxWidth+'px; max-height:'+maxHeight+'px;');

        // get thumbnail height wight
        // make canvas fun part
        var thumb = progressiveMedia.querySelector('.progressiveMedia-thumb'),
            smImageWidth = thumb.width,
            smImageHeight = thumb.height,

            canvas = progressiveMedia.querySelector('.progressiveMedia-canvas'),
            context = canvas.getContext('2d');

        canvas.height = smImageHeight;
        canvas.width = smImageWidth;

        var img = new Image();
        img.src = thumb.src;

        img.onload = function () {
            // context.drawImage(img, 0, 0);
            // draw canvas
            var canvasImage = new CanvasImage(canvas, img);
            canvasImage.blur(2);

            // load canvas visible
            progressiveMedia.classList.add('is-canvasLoaded');
        };
    }

    function load (progressiveMedia){
        // grab data-src from original image from progressiveMedia-image
        var lgImage = progressiveMedia.querySelector('.progressiveMedia-image');
        lgImage.src = lgImage.dataset.src;

        // onload image visible
        lgImage.onload = function() {
            progressiveMedia.classList.add('is-imageLoaded');
        }
    }

    $.fn.progressive = function (options) {
        let progressiveMedias  = $(this).find('.progressiveMedia').not('.is-imageLoaded');
        for (let i = 0; i < progressiveMedias.length; i++) {
            run(progressiveMedias[i]);
            load(progressiveMedias[i]);
        }

        return this;
    };
})();

// canvas blur function
CanvasImage = function (e, t) {
    this.image = t;
    this.element = e;
    e.width = t.width;
    e.height = t.height;
    this.context = e.getContext('2d');
    this.context.drawImage(t, 0, 0);
};

CanvasImage.prototype = {
    blur:function(e) {
        this.context.globalAlpha = 0.5;
        for(var t = -e; t <= e; t += 2) {
            for(var n = -e; n <= e; n += 2) {
                this.context.drawImage(this.element, n, t);
                var blob = n >= 0 && t >= 0 && this.context.drawImage(this.element, -(n -1), -(t-1));
            }
        }
    }
};