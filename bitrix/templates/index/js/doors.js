var DSlider = new Class({
    direct: 0,
    timer: null,
    timer2: null,
    tkey: 1,
    initialize: function (ell) {
        ell.addEvent('mouseover', function () {
            this.tkey = -1;
        }.bind(this));
        ell.addEvent('mouseout', function () {
            this.tkey = 1;
        }.bind(this));
        var btn = ell.getElements('a.mv_r');//[0];
        //if(btn!=null)btn.addEvent('click',this.rotateRite.bind(this));
        if (btn != null) {
            btn.addEvent('click', this.rotateRite.bind(this));
            btn.addEvent('mouseover', this.rotateRiteP.bind(this));
            btn.addEvent('mouseout', this.rotateStop.bind(this));
        }
        btn = ell.getElements('a.mv_l')[0];
        //if(btn!=null)btn.addEvent('click',this.rotateLeft.bind(this));
        if (btn != null) {
            btn.addEvent('click', this.rotateLeft.bind(this));
            btn.addEvent('mouseover', this.rotateLeftP.bind(this));
            btn.addEvent('mouseout', this.rotateStop.bind(this));
        }
        this.key_anim = false;
        this.galery = ell.getElements('.gallery_scroll')[0];
        this.timer = this.roteteTime.periodical(2000, this);
    },
    roteteTime: function () {
        if (this.key_anim)return;
        if (this.tkey == 0) {
            if (this.direct == 0)this.rotateRite();
            else this.rotateLeft();
        }
        ;
        if (this.tkey > 0)this.tkey--;
    },
    rotateRiteP: function () {
        if (this.timer2 != null)$clear(this.timer2);
        this.rotateRite();
        this.timer2 = this.rotateRite.periodical(700, this);
    },
    rotateLeftP: function () {
        if (this.timer2 != null)$clear(this.timer2);
        this.rotateLeft();
        this.timer2 = this.rotateLeft.periodical(700, this);
    },
    rotateStop: function () {
        if (this.timer2 != null)$clear(this.timer2);
    },
    rotateRite: function (e) {
        if (e != null)e.stop();
        if (this.key_anim)return;
        this.direct = 0;
        this.shiftL();
        this.key_anim = true;
        var imgs = this.galery.getElements('img');
        var mi1 = new Fx.Morph(imgs[3]);
        var mi2 = new Fx.Morph(imgs[4]);
        var ms = new Fx.Morph(this.galery, {onComplete: this.shift0.bind(this)});
        mi1.start({height: 160, marginTop: '-5px'});
        mi2.start({height: 120, marginTop: '15px'});
        ms.start({left: 0})
    },
    rotateLeft: function (e) {
        if (e != null)e.stop();
        if (this.key_anim)return;
        this.direct = 1;
        this.key_anim = true;
        var imgs = this.galery.getElements('img');
        var mi1 = new Fx.Morph(imgs[3]);
        var mi2 = new Fx.Morph(imgs[4]);
        var ms = new Fx.Morph(this.galery, {onComplete: this.shiftR.bind(this)});
        mi1.start({height: 120, marginTop: '15px'});
        mi2.start({height: 160, marginTop: '-5px'});
        ms.start({left: -106})
    },
    shift0: function () {
        this.key_anim = false;
    },
    shiftL: function () {
        var lis = this.galery.getElements('li');
        lis[lis.length - 1].inject(lis[0], 'before');
        this.galery.style.left = '-106px';
        this.key_anim = false;
    },
    shiftR: function () {
        var lis = this.galery.getElements('li');
        lis[0].inject(lis[lis.length - 1], 'after')
        this.galery.style.left = '0';
        this.key_anim = false;
    }
});

window.addEvent('domready', function () {
    $$('div.gallery_wrap').each(function (el) {
        new DSlider(el);
    });
})
