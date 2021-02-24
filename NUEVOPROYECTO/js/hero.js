!(function() {
  function t(i, e, n) {
    function s(o, a) {
      if (!e[o]) {
        if (!i[o]) {
          var r = 'function' == typeof require && require;
          if (!a && r) return r(o, !0);
          if (h) return h(o, !0);
          var u = new Error('Cannot find module \'' + o + '\'');
          throw ((u.code = 'MODULE_NOT_FOUND'), u);
        }
        var c = (e[o] = { exports: {} });
        i[o][0].call(
          c.exports,
          function(t) {
            var e = i[o][1][t];
            return s(e || t);
          },
          c,
          c.exports,
          t,
          i,
          e,
          n
        );
      }
      return e[o].exports;
    }
    for (
      var h = 'function' == typeof require && require, o = 0;
      o < n.length;
      o++
    )
      s(n[o]);
    return s;
  }
  return t;
})()(
  {
    1: [
      function(t, i, e) {
        'use strict';
        function n(t, i) {
          if (!(t instanceof i))
            throw new TypeError('Cannot call a class as a function');
        }
        Object.defineProperty(e, '__esModule', { value: !0 });
        var s = (function() {
            function t(t, i) {
              for (var e = 0; e < i.length; e++) {
                var n = i[e];
                (n.enumerable = n.enumerable || !1),
                  (n.configurable = !0),
                  'value' in n && (n.writable = !0),
                  Object.defineProperty(t, n.key, n);
              }
            }
            return function(i, e, n) {
              return e && t(i.prototype, e), n && t(i, n), i;
            };
          })(),
          h = (function() {
            function t(i) {
              var e = this;
              if (
                (n(this, t),
                (TweenLite.defaultEase = Power2.easeInOut),
                (this.width = 0),
                (this.height = 0),
                (this.started = !1),
                (this.canvas = document.getElementById('js-canvas')),
                this.canvas)
              ) {
                (this.canvas.style.width = '100%'),
                  (this.canvas.style.height = '100%'),
                  (this.canvas.onmousedown = function(t) {
                    e.onMouseDown(t);
                  }),
                  (this.canvas.onmouseup = function(t) {
                    e.onMouseUp(t);
                  }),
                  (this.canvas.onmousemove = function(t) {
                    e.onMouseMove(t);
                  });
                var s = this.canvas.getContext('2d');
                (this.point_base_left = { x: 0, y: 0 }),
                  (this.point_base_right = { x: 0, y: 0 }),
                  (this.point_base_center = { x: 0, y: 0 }),
                  (this.point_left = { x: 0, y: 0 }),
                  (this.point_right = { x: 0, y: 0 }),
                  (this.point_cursor = {
                    tx: 0,
                    ty: window.innerHeight,
                    x: 0,
                    y: window.innerHeight
                  }),
                  this.setBasePoints(),
                  (this.context = s);
              }
            }
            return (
              s(t, [
                {
                  key: 'setBasePoints',
                  value: function() {
                    if (this.canvas) {
                      var t = (this.canvas.width = this.width),
                        i = (this.canvas.height = this.height);
                      (this.point_base_left.x = -10),
                        (this.point_base_left.y = i + 10),
                        (this.point_base_right.x = t + 10),
                        (this.point_base_right.y = i + 10),
                        (this.point_base_center.x = t / 2),
                        (this.point_base_center.y = i),
                        (this.point_left.x = 0),
                        (this.point_left.y = i + 10),
                        (this.point_right.x = t),
                        (this.point_right.y = i + 10),
                        (this.point_cursor = {
                          tx: 0,
                          ty: window.innerHeight,
                          x: 0,
                          y: window.innerHeight
                        });
                    }
                  }
                },
                {
                  key: 'onMouseDown',
                  value: function(t) {
                    this.canvas &&
                      (this.started || this.start(),
                      (this.isMouseDown = !0),
                      this.showShape(),
                      (this.point_cursor.tx = t.x),
                      (this.point_cursor.ty = t.y));
                  }
                },
                {
                  key: 'onMouseUp',
                  value: function(t) {
                    this.canvas &&
                      ((this.isMouseDown = !1),
                      (this.point_base_center.x = this.width / 2),
                      this.hideShape());
                  }
                },
                {
                  key: 'onMouseMove',
                  value: function(t) {
                    this.isMouseDown &&
                      ((this.point_cursor.tx = t.x),
                      (this.point_cursor.ty = t.y));
                  }
                },
                {
                  key: 'run',
                  value: function() {
                    this.canvas &&
                      TweenLite.delayedCall(5, this.show, null, this);
                  }
                },
                {
                  key: 'show',
                  value: function() {
                    this.canvas && (this.start(), this.hideShape());
                  }
                },
                {
                  key: 'start',
                  value: function() {
                    this.canvas &&
                      (TweenLite.killTweensOf(this.show),
                      (this.started = !0),
                      this.onRAF());
                  }
                },
                {
                  key: 'onRAF',
                  value: function() {
                    var t = this;
                    this.canvas &&
                      (this.render(),
                      window.requestAnimationFrame(function() {
                        t.onRAF();
                      }));
                  }
                },
                {
                  key: 'killTweens',
                  value: function() {
                    TweenLite.killTweensOf(this.point_left),
                      TweenLite.killTweensOf(this.point_right),
                      TweenLite.killTweensOf(this.point_base_center),
                      TweenLite.killTweensOf(this.point_base_left),
                      TweenLite.killTweensOf(this.point_base_right);
                  }
                },
                {
                  key: 'showShape',
                  value: function() {
                    this.killTweens(),
                      (this.point_base_left.y = this.point_base_right.y = this.height),
                      (this.point_left.y = this.point_right.y = this.point_base_center.y = this.height),
                      (this.point_cursor.ty = this.point_cursor.y = this.height);
                    TweenLite.to(this.point_left, 0.4 * Math.random(), {
                      y: this.height - Math.random() * (this.height / 2)
                    }),
                      TweenLite.to(this.point_right, 0.4 * Math.random(), {
                        y: this.height - Math.random() * (this.height / 2)
                      });
                  }
                },
                {
                  key: 'hideShape',
                  value: function() {
                    arguments.length > 0 &&
                      void 0 !== arguments[0] &&
                      arguments[0];
                    this.killTweens();
                    this.point_cursor.ty = -100;
                    (this.point_base_center.x =
                      this.width / 2 + (100 - 200 * Math.random())),
                      TweenLite.to(this.point_left, 0.14, { y: -100 }),
                      TweenLite.to(this.point_right, 0.14, { y: -100 }),
                      TweenLite.to(
                        this.point_base_center,
                        0.4 + 0.2 * Math.random(),
                        { delay: 0.13, y: -100 }
                      ),
                      TweenLite.to(
                        this.point_base_left,
                        0.4 + 0.2 * Math.random(),
                        { delay: 0.1, y: -100 }
                      ),
                      TweenLite.to(
                        this.point_base_right,
                        0.4 + 0.2 * Math.random(),
                        { delay: 0.1, y: -100 }
                      );
                  }
                },
                {
                  key: 'updatePoints',
                  value: function() {
                    var t = this.isMouseDown ? 0.15 : 0.35;
                    (this.point_cursor.x +=
                      0.15 * (this.point_cursor.tx - this.point_cursor.x)),
                      (this.point_cursor.y +=
                        (this.point_cursor.ty - this.point_cursor.y) * t);
                  }
                },
                {
                  key: 'clear',
                  value: function() {
                    var t = this.width,
                      i = this.height;
                    this.context.clearRect(0, 0, t, i);
                  }
                },
                {
                  key: 'draw',
                  value: function() {
                    (this.context.fillStyle = '#000000'),
                      this.context.beginPath(),
                      this.context.moveTo(
                        this.point_base_left.x,
                        this.point_base_left.y
                      ),
                      this.context.lineTo(
                        this.point_left.x,
                        this.point_right.y
                      ),
                      this.context.lineTo(
                        this.point_cursor.x,
                        this.point_cursor.y
                      ),
                      this.context.lineTo(
                        this.point_right.x,
                        this.point_right.y
                      ),
                      this.context.lineTo(
                        this.point_base_right.x,
                        this.point_base_right.y
                      ),
                      this.context.lineTo(
                        this.point_base_center.x,
                        this.point_base_center.y
                      ),
                      this.context.closePath(),
                      this.context.fill(),
                      this.context.stroke();
                  }
                },
                {
                  key: 'render',
                  value: function() {
                    this.canvas &&
                      ((this.width === this.canvas.offsetWidth &&
                        this.height === this.canvas.offsetHeight) ||
                        ((this.width = this.canvas.width = this.canvas.offsetWidth),
                        (this.height = this.canvas.height = this.canvas.offsetHeight),
                        this.setBasePoints()),
                      this.clear(),
                      this.updatePoints(),
                      this.draw());
                  }
                }
              ]),
              t
            );
          })();
        e.default = h;
      },
      {}
    ],
    2: [
      function(t, i, e) {
        'use strict';
        var n = t('./Desktop');
        new ((function(t) {
          return t && t.__esModule ? t : { default: t };
        })(n)).default().run();
      },
      { './Desktop': 1 }
    ]
  },
  {},
  [2]
);
