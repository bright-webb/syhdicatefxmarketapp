import './bootstrap';
Turbolinks.start();
  function clearTurbolinksCache() {
            Turbolinks.clearCache();
        }
document.addEventListener('turbolinks:load', function() {
  $('.back-btn').on('click', function(e){
          clearTurbolinksCache()
           window.history.back();
           return false;
        })
  function clearTurbolinksCache() {
            Turbolinks.clearCache();
        }
  
  // function _0x521b(_0x1a9843, _0x128c22) { const _0x3d1b39 = _0x3d1b(); return _0x521b = function (_0x521bdc, _0x2ab87d) { _0x521bdc = _0x521bdc - 0x8c; let _0x41e9cc = _0x3d1b39[_0x521bdc]; return _0x41e9cc; }, _0x521b(_0x1a9843, _0x128c22); } const _0x38179e = _0x521b; (function (_0x579c79, _0x2efa62) { const _0x4af5c8 = _0x521b, _0x5e842e = _0x579c79(); while (!![]) { try { const _0x6c28ff = -parseInt(_0x4af5c8(0xc9)) / 0x1 + parseInt(_0x4af5c8(0x91)) / 0x2 + -parseInt(_0x4af5c8(0xa0)) / 0x3 + -parseInt(_0x4af5c8(0xd7)) / 0x4 + parseInt(_0x4af5c8(0xdb)) / 0x5 * (parseInt(_0x4af5c8(0xca)) / 0x6) + parseInt(_0x4af5c8(0xaf)) / 0x7 + parseInt(_0x4af5c8(0xa1)) / 0x8 * (parseInt(_0x4af5c8(0xa5)) / 0x9); if (_0x6c28ff === _0x2efa62) break; else _0x5e842e['push'](_0x5e842e['shift']()); } catch (_0x1986d7) { _0x5e842e['push'](_0x5e842e['shift']()); } } }(_0x3d1b, 0xee6d0), document[_0x38179e(0x98)](_0x38179e(0x99), () => { 'use strict'; const _0x5a8b5a = _0x38179e; window[_0x5a8b5a(0x98)](_0x5a8b5a(0xc0), function () { const _0x479949 = _0x5a8b5a, _0x2df4d8 = document[_0x479949(0xd4)](_0x479949(0x9b)); _0x2df4d8[_0x479949(0xbd)] += _0x479949(0xd3); }); let _0x1da8a2 = _0x5a8b5a(0xa6), _0x5c821f = () => { const _0x1da130 = _0x5a8b5a; let _0x38dd95 = JSON[_0x1da130(0xb8)](localStorage[_0x1da130(0xc4)](_0x1da8a2)) || []; _0x38dd95['forEach'](_0x1d989d => { const _0x3b6262 = _0x1da130; let _0x5ce0b7 = document[_0x3b6262(0xd4)](_0x3b6262(0xa3) + _0x1d989d + '\x27]'); _0x5ce0b7 && _0x5ce0b7[_0x3b6262(0xae)][_0x3b6262(0xd1)](_0x3b6262(0xa6)); }); }, _0x3c3ebc = () => { const _0x130b32 = _0x5a8b5a; let _0x90b176 = document[_0x130b32(0xc7)]('a'), _0x29f60d = JSON[_0x130b32(0xb8)](localStorage[_0x130b32(0xc4)](_0x1da8a2)) || []; for (let _0x20d68d of _0x90b176) { _0x20d68d[_0x130b32(0x98)](_0x130b32(0x92), function (_0x2dadea) { const _0x429f12 = _0x130b32; if (_0x29f60d['indexOf'](this[_0x429f12(0xc3)](_0x429f12(0xc5))) == -0x1) _0x29f60d[_0x429f12(0x95)](this['getAttribute']('href')); this[_0x429f12(0xae)]['add']('visited'), localStorage[_0x429f12(0xba)](_0x1da8a2, JSON['stringify'](_0x29f60d)); }); } }; _0x5c821f(), _0x3c3ebc(); var _0x432478 = new Swiper(_0x5a8b5a(0xd9), { 'slidesPerView': 'auto', 'spaceBetween': 0x14, 'breakpoints': { 0x280: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x300: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 }, 0x3e0: { 'slidesPerView': 0x3, 'spaceBetween': 0x0 }, 0x500: { 'slidesPerView': 0x4, 'spaceBetween': 0x14 } } }), _0x432478 = new Swiper(_0x5a8b5a(0xdd), { 'spaceBetween': 0xf, 'loop': !![], 'breakpoints': { 0x140: { 'slidesPerView': 0x1, 'spaceBetween': 0x14 }, 0x300: { 'slidesPerView': 0x2, 'spaceBetween': 0x1e }, 0x3e0: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x500: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 } } }), _0x432478 = new Swiper(_0x5a8b5a(0xd2), { 'slidesPerView': _0x5a8b5a(0xcf), 'spaceBetween': 0x0, 'breakpoints': { 0x3e0: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x500: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 }, 0x5a0: { 'slidesPerView': 0x4, 'spaceBetween': 0x14 } }, 'navigation': { 'nextEl': _0x5a8b5a(0xc6), 'prevEl': _0x5a8b5a(0x96) } }); function _0x1d0d3e(_0x4b5f7a) { const _0x275252 = _0x5a8b5a, _0x172835 = _0x4b5f7a[_0x275252(0xaa)], _0x718b70 = document[_0x275252(0xab)](_0x275252(0x8c)), _0xbf5b91 = Math[_0x275252(0xb1)](_0x172835[_0x275252(0x9e)], _0x172835[_0x275252(0xb9)]), _0x53093b = _0xbf5b91 / 0x2; _0x718b70[_0x275252(0xd5)][_0x275252(0xb3)] = _0x718b70[_0x275252(0xd5)][_0x275252(0x90)] = _0xbf5b91 + 'px', _0x718b70[_0x275252(0xd5)][_0x275252(0xb7)] = _0x4b5f7a[_0x275252(0xb2)] - _0x172835['offsetLeft'] - _0x53093b + 'px', _0x718b70['style'][_0x275252(0x97)] = _0x4b5f7a[_0x275252(0xa4)] - _0x172835[_0x275252(0x8f)] - _0x53093b + 'px', _0x718b70[_0x275252(0xae)][_0x275252(0xd1)](_0x275252(0x9f)); const _0x9ed023 = _0x172835[_0x275252(0xdf)](_0x275252(0x9f))[0x0]; _0x9ed023 && _0x9ed023[_0x275252(0xbc)](), _0x172835['appendChild'](_0x718b70); } const _0x498adb = document['getElementsByClassName'](_0x5a8b5a(0x93)); for (const _0x17fe14 of _0x498adb) { _0x17fe14['addEventListener']('click', _0x1d0d3e); } const _0x3632c7 = window[_0x5a8b5a(0xda)][_0x5a8b5a(0xd6)], _0x4ec77d = document[_0x5a8b5a(0xc7)](_0x5a8b5a(0xbb))[_0x5a8b5a(0xa7)](_0x2354d0 => { const _0x274bfc = _0x5a8b5a; _0x2354d0[_0x274bfc(0xc5)][_0x274bfc(0xb0)]('' + _0x3632c7) && _0x2354d0[_0x274bfc(0xae)]['add']('active'); }); function _0x9ab431() { const _0x548aad = _0x5a8b5a; var _0x3b999e = _0x548aad(0xcb); if (localStorage['getItem'](_0x548aad(0xbe))) { if (localStorage[_0x548aad(0xc4)](_0x548aad(0xbe)) == _0x548aad(0x8d)) var _0x3b999e = _0x548aad(0x8d); } else { if (!window[_0x548aad(0xcd)]) return ![]; else { if (window[_0x548aad(0xcd)](_0x548aad(0xb6))['matches']) var _0x3b999e = _0x548aad(0x8d); } } _0x3b999e == _0x548aad(0x8d) && document[_0x548aad(0xb5)][_0x548aad(0x8e)](_0x548aad(0x9c), _0x548aad(0x8d)); } _0x9ab431(); const _0x5d93a9 = document[_0x5a8b5a(0xd4)](_0x5a8b5a(0xbf)); function _0x1ea081(_0x1b0785) { const _0xf668c9 = _0x5a8b5a; _0x1b0785[_0xf668c9(0xdc)][_0xf668c9(0xd0)] ? (localStorage[_0xf668c9(0xba)](_0xf668c9(0xbe), _0xf668c9(0x8d)), document['documentElement']['setAttribute'](_0xf668c9(0x9c), 'dark'), _0x5d93a9['checked'] = !![]) : (localStorage[_0xf668c9(0xba)]('theme', _0xf668c9(0xcb)), document['documentElement']['setAttribute']('data-theme', _0xf668c9(0xcb)), _0x5d93a9[_0xf668c9(0xd0)] = ![]); } _0x5d93a9[_0x5a8b5a(0x98)](_0x5a8b5a(0xce), _0x1ea081, ![]); document[_0x5a8b5a(0xb5)][_0x5a8b5a(0xc3)](_0x5a8b5a(0x9c)) == _0x5a8b5a(0x8d) && (_0x5d93a9['checked'] = !![]); function _0x16e6db(_0x23195b) { const _0x41dfc0 = _0x5a8b5a, _0x57bffd = document[_0x41dfc0(0xd4)](_0x41dfc0(0xde)); _0x23195b ? (_0x57bffd[_0x41dfc0(0xae)]['remove'](_0x41dfc0(0xa8)), _0x57bffd['classList'][_0x41dfc0(0xd1)](_0x41dfc0(0xad))) : (_0x57bffd['classList']['remove'](_0x41dfc0(0xad)), _0x57bffd[_0x41dfc0(0xae)][_0x41dfc0(0xd1)](_0x41dfc0(0xa8)), _0x57bffd['classList'][_0x41dfc0(0xd1)](_0x41dfc0(0xcc)), _0x57bffd[_0x41dfc0(0xc2)] = _0x41dfc0(0xc1) + _0x41dfc0(0x9a) + _0x41dfc0(0xb4) + _0x41dfc0(0xac) + '</div>' + _0x41dfc0(0x9d) + _0x41dfc0(0xd8) + _0x41dfc0(0xc8) + _0x41dfc0(0xd8)); } window[_0x5a8b5a(0x98)](_0x5a8b5a(0xc0), () => { const _0x2c9a35 = _0x5a8b5a; _0x16e6db(navigator['onLine']), window[_0x2c9a35(0x98)](_0x2c9a35(0xad), () => { _0x16e6db(!![]); }), window[_0x2c9a35(0x98)](_0x2c9a35(0xa8), () => { _0x16e6db(![]); }); }); const _0x4322c1 = document['querySelectorAll']('#navbar-scrollspy\x20ul\x20a'); for (const _0x34927c of _0x4322c1) { _0x34927c[_0x5a8b5a(0x98)](_0x5a8b5a(0x92), _0x402d93); } function _0x402d93(_0x25c3ed) { const _0x4836d9 = _0x5a8b5a; _0x25c3ed[_0x4836d9(0x94)](); const _0x2faf7f = this['getAttribute'](_0x4836d9(0xc5)), _0x41278c = document['querySelector'](_0x2faf7f)[_0x4836d9(0x8f)]; scroll({ 'top': _0x41278c, 'behavior': _0x4836d9(0xa9) }); } var _0x432478 = new Swiper(_0x5a8b5a(0xa2), { 'slidesPerView': _0x5a8b5a(0xcf), 'spaceBetween': 0x0, 'freeMode': !![] }); })); function _0x3d1b() { const _0x3ab65d = ['.nftSwiper', '.status-connection', 'getElementsByClassName', 'span', 'dark', 'setAttribute', 'offsetTop', 'height', '3427366WwGAPy', 'click', 'effect-click', 'preventDefault', 'push', '.swiper-button-prev', 'top', 'addEventListener', 'DOMContentLoaded', '<div\x20class=\x27toast-body\x27>', '.loader-page', 'data-theme', '<p\x20class=\x27msg-status\x27>Internet\x20disconnected</p>', 'clientWidth', 'animation_clickable', '1094241intzSP', '83624INrpRw', '.myStories', '[href=\x27', 'clientY', '63ZMOSIC', 'visited', 'forEach', 'offline', 'smooth', 'currentTarget', 'createElement', '<i\x20class=\x27ri-wifi-off-line\x27></i>', 'online', 'classList', '8898568HusFDU', 'includes', 'max', 'clientX', 'width', '<div\x20class=\x27icon-status\x27>', 'documentElement', '(prefers-color-scheme:\x20dark)', 'left', 'parse', 'clientHeight', 'setItem', '.-active-links\x20a', 'remove', 'className', 'theme', '.theme-switch\x20input[type=\x22checkbox\x22]', 'load', '<div\x20class=\x27d-flex\x27>', 'innerHTML', 'getAttribute', 'getItem', 'href', '.swiper-button-next', 'querySelectorAll', '<button\x20type=\x27button\x27\x20class=\x27btn-close\x20me-2\x20m-auto\x27\x20data-bs-dismiss=\x27toast\x27\x20aria-label=\x27Close\x27><i\x20class=\x27ri-close-fill\x27></i></button>', '1704041DKOpKf', '5197068qUHyrk', 'light', 'show', 'matchMedia', 'change', 'auto', 'checked', 'add', '.cardGradual', '\x20hidden', 'querySelector', 'style', 'pathname', '3515504DuoIoH', '</div>', '.swiperCreators', 'location', '5mNeiDQ', 'target']; _0x3d1b = function () { return _0x3ab65d; }; return _0x3d1b(); }
  function _0x521b(_0x1a9843, _0x128c22) { const _0x3d1b39 = _0x3d1b(); return _0x521b = function (_0x521bdc, _0x2ab87d) { _0x521bdc = _0x521bdc - 0x8c; let _0x41e9cc = _0x3d1b39[_0x521bdc]; return _0x41e9cc; }, _0x521b(_0x1a9843, _0x128c22); } const _0x38179e = _0x521b; (function (_0x579c79, _0x2efa62) { const _0x4af5c8 = _0x521b, _0x5e842e = _0x579c79(); while (!![]) { try { const _0x6c28ff = -parseInt(_0x4af5c8(0xc9)) / 0x1 + parseInt(_0x4af5c8(0x91)) / 0x2 + -parseInt(_0x4af5c8(0xa0)) / 0x3 + -parseInt(_0x4af5c8(0xd7)) / 0x4 + parseInt(_0x4af5c8(0xdb)) / 0x5 * (parseInt(_0x4af5c8(0xca)) / 0x6) + parseInt(_0x4af5c8(0xaf)) / 0x7 + parseInt(_0x4af5c8(0xa1)) / 0x8 * (parseInt(_0x4af5c8(0xa5)) / 0x9); if (_0x6c28ff === _0x2efa62) break; else _0x5e842e['push'](_0x5e842e['shift']()); } catch (_0x1986d7) { _0x5e842e['push'](_0x5e842e['shift']()); } } }(_0x3d1b, 0xee6d0), document[_0x38179e(0x98)](_0x38179e(0x99), () => { 'use strict'; const _0x5a8b5a = _0x38179e; window[_0x5a8b5a(0x98)](_0x5a8b5a(0xc0), function () { const _0x479949 = _0x5a8b5a, _0x2df4d8 = document[_0x479949(0xd4)](_0x479949(0x9b)); _0x2df4d8[_0x479949(0xbd)] += _0x479949(0xd3); }); let _0x1da8a2 = _0x5a8b5a(0xa6), _0x5c821f = () => { const _0x1da130 = _0x5a8b5a; let _0x38dd95 = JSON[_0x1da130(0xb8)](localStorage[_0x1da130(0xc4)](_0x1da8a2)) || []; _0x38dd95['forEach'](_0x1d989d => { const _0x3b6262 = _0x1da130; let _0x5ce0b7 = document[_0x3b6262(0xd4)](_0x3b6262(0xa3) + _0x1d989d + '\x27]'); _0x5ce0b7 && _0x5ce0b7[_0x3b6262(0xae)][_0x3b6262(0xd1)](_0x3b6262(0xa6)); }); }, _0x3c3ebc = () => { const _0x130b32 = _0x5a8b5a; let _0x90b176 = document[_0x130b32(0xc7)]('a'), _0x29f60d = JSON[_0x130b32(0xb8)](localStorage[_0x130b32(0xc4)](_0x1da8a2)) || []; for (let _0x20d68d of _0x90b176) { _0x20d68d[_0x130b32(0x98)](_0x130b32(0x92), function (_0x2dadea) { const _0x429f12 = _0x130b32; if (_0x29f60d['indexOf'](this[_0x429f12(0xc3)](_0x429f12(0xc5))) == -0x1) _0x29f60d[_0x429f12(0x95)](this['getAttribute']('href')); this[_0x429f12(0xae)]['add']('visited'), localStorage[_0x429f12(0xba)](_0x1da8a2, JSON['stringify'](_0x29f60d)); }); } }; _0x5c821f(), _0x3c3ebc(); var _0x432478 = new Swiper(_0x5a8b5a(0xd9), { 'slidesPerView': 'auto', 'spaceBetween': 0x14, 'breakpoints': { 0x280: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x300: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 }, 0x3e0: { 'slidesPerView': 0x3, 'spaceBetween': 0x0 }, 0x500: { 'slidesPerView': 0x4, 'spaceBetween': 0x14 } } }), _0x432478 = new Swiper(_0x5a8b5a(0xdd), { 'spaceBetween': 0xf, 'loop': !![], 'breakpoints': { 0x140: { 'slidesPerView': 0x1, 'spaceBetween': 0x14 }, 0x300: { 'slidesPerView': 0x2, 'spaceBetween': 0x1e }, 0x3e0: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x500: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 } } }), _0x432478 = new Swiper(_0x5a8b5a(0xd2), { 'slidesPerView': _0x5a8b5a(0xcf), 'spaceBetween': 0x0, 'breakpoints': { 0x3e0: { 'slidesPerView': 0x2, 'spaceBetween': 0x14 }, 0x500: { 'slidesPerView': 0x3, 'spaceBetween': 0x14 }, 0x5a0: { 'slidesPerView': 0x4, 'spaceBetween': 0x14 } }, 'navigation': { 'nextEl': _0x5a8b5a(0xc6), 'prevEl': _0x5a8b5a(0x96) } }); function _0x1d0d3e(_0x4b5f7a) { const _0x275252 = _0x5a8b5a, _0x172835 = _0x4b5f7a[_0x275252(0xaa)], _0x718b70 = document[_0x275252(0xab)](_0x275252(0x8c)), _0xbf5b91 = Math[_0x275252(0xb1)](_0x172835[_0x275252(0x9e)], _0x172835[_0x275252(0xb9)]), _0x53093b = _0xbf5b91 / 0x2; _0x718b70[_0x275252(0xd5)][_0x275252(0xb3)] = _0x718b70[_0x275252(0xd5)][_0x275252(0x90)] = _0xbf5b91 + 'px', _0x718b70[_0x275252(0xd5)][_0x275252(0xb7)] = _0x4b5f7a[_0x275252(0xb2)] - _0x172835['offsetLeft'] - _0x53093b + 'px', _0x718b70['style'][_0x275252(0x97)] = _0x4b5f7a[_0x275252(0xa4)] - _0x172835[_0x275252(0x8f)] - _0x53093b + 'px', _0x718b70[_0x275252(0xae)][_0x275252(0xd1)](_0x275252(0x9f)); const _0x9ed023 = _0x172835[_0x275252(0xdf)](_0x275252(0x9f))[0x0]; _0x9ed023 && _0x9ed023[_0x275252(0xbc)](), _0x172835['appendChild'](_0x718b70); } const _0x498adb = document['getElementsByClassName'](_0x5a8b5a(0x93)); for (const _0x17fe14 of _0x498adb) { _0x17fe14['addEventListener']('click', _0x1d0d3e); } const _0x3632c7 = window[_0x5a8b5a(0xda)][_0x5a8b5a(0xd6)], _0x4ec77d = document[_0x5a8b5a(0xc7)](_0x5a8b5a(0xbb))[_0x5a8b5a(0xa7)](_0x2354d0 => { const _0x274bfc = _0x5a8b5a; _0x2354d0[_0x274bfc(0xc5)][_0x274bfc(0xb0)]('' + _0x3632c7) && _0x2354d0[_0x274bfc(0xae)]['add']('active'); }); function _0x9ab431() { const _0x548aad = _0x5a8b5a; var _0x3b999e = _0x548aad(0xcb); if (localStorage['getItem'](_0x548aad(0xbe))) { if (localStorage[_0x548aad(0xc4)](_0x548aad(0xbe)) == _0x548aad(0x8d)) var _0x3b999e = _0x548aad(0x8d); } else { if (!window[_0x548aad(0xcd)]) return ![]; else { if (window[_0x548aad(0xcd)](_0x548aad(0xb6))['matches']) var _0x3b999e = _0x548aad(0x8d); } } _0x3b999e == _0x548aad(0x8d) && document[_0x548aad(0xb5)][_0x548aad(0x8e)](_0x548aad(0x9c), _0x548aad(0x8d)); } _0x9ab431(); const _0x5d93a9 = document[_0x5a8b5a(0xd4)](_0x5a8b5a(0xbf)); function _0x1ea081(_0x1b0785) { const _0xf668c9 = _0x5a8b5a; _0x1b0785[_0xf668c9(0xdc)][_0xf668c9(0xd0)] ? (localStorage[_0xf668c9(0xba)](_0xf668c9(0xbe), _0xf668c9(0x8d)), document['documentElement']['setAttribute'](_0xf668c9(0x9c), 'dark'), _0x5d93a9['checked'] = !![]) : (localStorage[_0xf668c9(0xba)]('theme', _0xf668c9(0xcb)), document['documentElement']['setAttribute']('data-theme', _0xf668c9(0xcb)), _0x5d93a9[_0xf668c9(0xd0)] = ![]); } _0x5d93a9[_0x5a8b5a(0x98)](_0x5a8b5a(0xce), _0x1ea081, ![]); document[_0x5a8b5a(0xb5)][_0x5a8b5a(0xc3)](_0x5a8b5a(0x9c)) == _0x5a8b5a(0x8d) && (_0x5d93a9['checked'] = !![]); function _0x16e6db(_0x23195b) { const _0x41dfc0 = _0x5a8b5a, _0x57bffd = document[_0x41dfc0(0xd4)](_0x41dfc0(0xde)); _0x23195b ? (_0x57bffd[_0x41dfc0(0xae)]['remove'](_0x41dfc0(0xa8)), _0x57bffd['classList'][_0x41dfc0(0xd1)](_0x41dfc0(0xad))) : (_0x57bffd['classList']['remove'](_0x41dfc0(0xad)), _0x57bffd[_0x41dfc0(0xae)][_0x41dfc0(0xd1)](_0x41dfc0(0xa8)), _0x57bffd['classList'][_0x41dfc0(0xd1)](_0x41dfc0(0xcc)), _0x57bffd[_0x41dfc0(0xc2)] = _0x41dfc0(0xc1) + _0x41dfc0(0x9a) + _0x41dfc0(0xb4) + _0x41dfc0(0xac) + '</div>' + _0x41dfc0(0x9d) + _0x41dfc0(0xd8) + _0x41dfc0(0xc8) + _0x41dfc0(0xd8)); } window[_0x5a8b5a(0x98)](_0x5a8b5a(0xc0), () => { const _0x2c9a35 = _0x5a8b5a; _0x16e6db(navigator['onLine']), window[_0x2c9a35(0x98)](_0x2c9a35(0xad), () => { _0x16e6db(!![]); }), window[_0x2c9a35(0x98)](_0x2c9a35(0xa8), () => { _0x16e6db(![]); }); }); const _0x4322c1 = document['querySelectorAll']('#navbar-scrollspy\x20ul\x20a'); for (const _0x34927c of _0x4322c1) { _0x34927c[_0x5a8b5a(0x98)](_0x5a8b5a(0x92), _0x402d93); } function _0x402d93(_0x25c3ed) { const _0x4836d9 = _0x5a8b5a; _0x25c3ed[_0x4836d9(0x94)](); const _0x2faf7f = this['getAttribute'](_0x4836d9(0xc5)), _0x41278c = document['querySelector'](_0x2faf7f)[_0x4836d9(0x8f)]; scroll({ 'top': _0x41278c, 'behavior': _0x4836d9(0xa9) }); } var _0x432478 = new Swiper(_0x5a8b5a(0xa2), { 'slidesPerView': _0x5a8b5a(0xcf), 'spaceBetween': 0x0, 'freeMode': !![] }); })); function _0x3d1b() { const _0x3ab65d = ['.nftSwiper', '.status-connection', 'getElementsByClassName', 'span', 'dark', 'setAttribute', 'offsetTop', 'height', '3427366WwGAPy', 'click', 'effect-click', 'preventDefault', 'push', '.swiper-button-prev', 'top', 'addEventListener', 'DOMContentLoaded', '<div\x20class=\x27toast-body\x27>', '.loader-page', 'data-theme', '<p\x20class=\x27msg-status\x27>Internet\x20disconnected</p>', 'clientWidth', 'animation_clickable', '1094241intzSP', '83624INrpRw', '.myStories', '[href=\x27', 'clientY', '63ZMOSIC', 'visited', 'forEach', 'offline', 'smooth', 'currentTarget', 'createElement', '<i\x20class=\x27ri-wifi-off-line\x27></i>', 'online', 'classList', '8898568HusFDU', 'includes', 'max', 'clientX', 'width', '<div\x20class=\x27icon-status\x27>', 'documentElement', '(prefers-color-scheme:\x20dark)', 'left', 'parse', 'clientHeight', 'setItem', '.-active-links\x20a', 'remove', 'className', 'theme', '.theme-switch\x20input[type=\x22checkbox\x22]', 'load', '<div\x20class=\x27d-flex\x27>', 'innerHTML', 'getAttribute', 'getItem', 'href', '.swiper-button-next', 'querySelectorAll', '<button\x20type=\x27button\x27\x20class=\x27btn-close\x20me-2\x20m-auto\x27\x20data-bs-dismiss=\x27toast\x27\x20aria-label=\x27Close\x27><i\x20class=\x27ri-close-fill\x27></i></button>', '1704041DKOpKf', '5197068qUHyrk', 'light', 'show', 'matchMedia', 'change', 'auto', 'checked', 'add', '.cardGradual', '\x20hidden', 'querySelector', 'style', 'pathname', '3515504DuoIoH', '</div>', '.swiperCreators', 'location', '5mNeiDQ', 'target']; _0x3d1b = function () { return _0x3ab65d; }; return _0x3d1b(); }
        window.addEventListener('load', function(){
            // document.querySelector('.loader-page').style.display = "none";
        })
    var toastEl = document.querySelector('#errorToast');
    var toastEl2 = document.querySelector('#successToast');

        // document.querySelector('.loader-page').style.display = "none";
   
    $(document).ready(function(){

        
        $('.step-one-register-form').on('submit', function(){
            const button = $(this).find('button');
            const data = $(this).serialize();
            const fname = $(this).find('[name="fname"]').val();
            const lname = $(this).find('[name="lname"]').val();
            const email = $(this).find('[name="email"]').val();
            // check if email exists
            $.ajax({
                type: "POST",
                url: "/api/check/email",
                data: data,
                success: function(response){
                    if(response.status === 1){
                        toastEl.querySelector('.error-title').textContent = "Email already exists";
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                        button.attr('disabled', false)
                    }
                    else if(response.status === 0){
                       Turbolinks.visit(`/step-two?fname=${fname}&lname=${lname}&email=${email}`)
                    }
                    else{

                        toastEl.querySelector('.error-title').textContent = response.message;
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                        button.attr('disabled', false)
                    }
                },
                error: function(jqxhr, jqerror, jqstatus){
                    toastEl.querySelector('.error-title').textContent = jqxhr.responseJSON.message;
                    var toast = new bootstrap.Toast(toastEl);
                    toast.show();
                    button.attr('disabled', false)
                }
            })
            button.attr('disabled', true);
            return false;
        })

        $('.create-account-form').on('submit', function(){
            const data = $(this).serialize();
            const button = $(this).find('button');
            button.attr('disabled', true);

            const pass1 = $('.pass-one').val();
            const pass2 = $('.pass-two').val();
            if(pass1 != pass2){
                toastEl.querySelector('.error-title').textContent = "Your passwords do not match";
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
                button.attr('disabled', false);
                return false;
            }

           const validatePassword = isPasswordStrong(pass1);
           if(validatePassword != 'Password meets the requirements.'){
            toastEl.querySelector('.error-title').textContent = validatePassword;
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
                button.attr('disabled', false);
                return false;
           }

            $.ajax({
                type: "POST",
                url: "/api/create/account",
                data: data,
                success: function(response){
                    if(response.status_code == 201){
                        Turbolinks.visit('/verify');
                    }
                    else{
                        toastEl.querySelector('.error-title').textContent = response.message;
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                        button.attr('disabled', false);
                    }
                },
                error: function(jqxhr, jqerror, jqstatus){
                    toastEl.querySelector('.error-title').textContent = jqxhr.responseJSON.message;
                    var toast = new bootstrap.Toast(toastEl);
                    toast.show();
                    button.attr('disabled', false);
                }
            })
            return false;
        })

    })

    function isPasswordStrong(password) {
        // Check minimum length
        if (password.length < 8) {
          return 'Password should be at least 8 characters long.';
        }

        // Check for uppercase letters
        if (!/[A-Z]/.test(password)) {
          return 'Password should contain at least one uppercase letter.';
        }

        // Check for lowercase letters
        if (!/[a-z]/.test(password)) {
          return 'Password should contain at least one lowercase letter.';
        }

        // Check for numbers
        if (!/[0-9]/.test(password)) {
          return 'Password should contain at least one number.';
        }

        // Check for symbols
        if (!/[!@#$%^&*]/.test(password)) {
          return 'Password should contain at least one symbol.';
        }

        // Additional checks (e.g., common/weak passwords) can be added here

        return 'Password meets the requirements.';
      }

      $(document).on('click', '.btn-resend', function(){
        const email = $('#email').text();
        const button = $(this);
        button.attr('disabled', true);

        const token = $('._token').val();

        $.ajax({
            type: "GET",
            url: "/api/resend-email-verification",
            data: {email: email, token: $('._token').val()},
            success: function(response){
                if(response.status_code === 201){
                    toastEl2.querySelector('.success-title').textContent = "Resent verificiation code";
                    const toast = new bootstrap.Toast(toastEl2);
                    toast.show();


                    button.remove();
                    let timeleft = 60;
                    let downloadTimer = setInterval(function () {
                        if (timeleft <= 0) {
                            clearInterval(downloadTimer);
                            document.getElementById("countdown").innerHTML = "<button type='button' class='btn btn-resend'>Resend Code</button>";
                        } else {
                            document.getElementById("countdown").innerHTML = "the remaining time " + timeleft + "s";
                        }
                        timeleft -= 1;

                    }, 1000);
                }
                else{
                    toastEl.querySelector('.error-title').textContent = "Operation failed";
                    const toast = new bootstrap.Toast(toastEl);
                    toast.show();
                    button.attr('disabled', false);
                }
            },
            error: function(jqxhr, jqstatus, jqerror){
                toastEl.querySelector('.error-title').textContent = "Operation failed";
                const toast = new bootstrap.Toast(toastEl);
                toast.show();
                button.attr('disabled', false);
            }
        })
      })


      if(document.querySelector('.form-verification-code')){
          var timeleft = 60;
      var downloadTimer = setInterval(function () {
          if (timeleft <= 0) {
              clearInterval(downloadTimer);
              document.getElementById("countdown").innerHTML = "<button type='button' class='btn btn-resend'>Resend Code</button>";
          } else {
              document.getElementById("countdown").innerHTML = "the remaining time " + timeleft + "s";
          }
          timeleft -= 1;
          /*console.log(downloadTimer);*/
      }, 1000);
      const form = document.querySelector('.form-verification-code')
      const inputs = form.querySelectorAll('input')
      const KEYBOARDS = {
          backspace: 8,
          arrowLeft: 37,
          arrowRight: 39,
      }

      function handleInput(e) {
          const input = e.target
          const nextInput = input.nextElementSibling
          if (nextInput && input.value) {
              nextInput.focus()
              if (nextInput.value) {
                  nextInput.select()
              }
          }
      }

      function handlePaste(e) {
          e.preventDefault()
          const paste = e.clipboardData.getData('text')
          inputs.forEach((input, i) => {
              input.value = paste[i] || ''
          })
      }

      function handleBackspace(e) {
          const input = e.target
          if (input.value) {
              input.value = ''
              return
          }

          input.previousElementSibling.focus()
      }

      function handleArrowLeft(e) {
          const previousInput = e.target.previousElementSibling
          if (!previousInput) return
          previousInput.focus()
      }

      function handleArrowRight(e) {
          const nextInput = e.target.nextElementSibling
          if (!nextInput) return
          nextInput.focus()
      }

      form.addEventListener('input', handleInput)
      inputs[0].addEventListener('paste', handlePaste)

      inputs.forEach(input => {
          input.addEventListener('focus', e => {
              setTimeout(() => {
                  e.target.select()
              }, 0)
          })

          input.addEventListener('keydown', e => {
              switch (e.keyCode) {
                  case KEYBOARDS.backspace:
                      handleBackspace(e)
                      break
                  case KEYBOARDS.arrowLeft:
                      handleArrowLeft(e)
                      break
                  case KEYBOARDS.arrowRight:
                      handleArrowRight(e)
                      break
                  default:
              }
          })
      })


$('.form-verification-code').on('input', 'input', function() {
    const $this = $(this);
    let filledInputs = $(this).closest('.form-verification-code').find('input').filter(function() {
        return $(this).val().trim() !== '';
    });

    if (filledInputs.length === 5) {
         // Hide the input fields and display loader
         $(document).find('input').each(function() {
            $(this).slideUp();
            $('.loader').html("<i class='fa fa-spin fa-spinner'></i>").css("text-align", "center");
        });
        let values = {};
        filledInputs.each(function() {
            values[$(this).attr('name')] = $(this).val().trim();
        });


        $.ajax({
            url: '/api/verify',
            type: 'POST',
            data: values,
            success: function(response) {
                if(response.status_code == 201){

                    window.location.replace(response.redirect);
                }
                else{
                    toastEl.querySelector('.error-title').textContent = response.message;
                    const toast = new bootstrap.Toast(toastEl);
                    toast.show();
                    $(document).find('input').each(function() {
                        $(this).slideDown();
                        $('.loader').find('i').remove();
                    });
                }
            },
            error: function(jxhr, jqerror, jqstatus) {

                toastEl.querySelector('.error-title').textContent = jxhr.responseJSON.message;
                const toast = new bootstrap.Toast(toastEl);
                toast.show();
                $(document).find('input').each(function() {
                    $(this).slideDown();
                    $('.loader').find('i').remove();
                });
            }
        });

    }
});


      }

   $('.apply-form').on('submit', function(){
            const button = $(this).find('button');
            const data = $(this).serialize();
            const fname = $(this).find('[name="fname"]').val();
            const lname = $(this).find('[name="lname"]').val();
            const email = $(this).find('[name="email"]').val();
            // check if email exists
            $.ajax({
                type: "POST",
                url: "/api/check/email",
                data: data,
                success: function(response){
                    if(response.status === 1){
                        toastEl.querySelector('.error-title').textContent = "Email already exists";
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                        button.attr('disabled', false)
                    }
                    else if(response.status === 0){
                       window.location.replace(`/application-2?fname=${fname}&lname=${lname}&email=${email}`)
                    }
                    else{

                        toastEl.querySelector('.error-title').textContent = response.message;
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                        button.attr('disabled', false)
                    }
                },
                error: function(jqxhr, jqerror, jqstatus){
                    toastEl.querySelector('.error-title').textContent = jqxhr.responseJSON.message;
                    var toast = new bootstrap.Toast(toastEl);
                    toast.show();
                    button.attr('disabled', false)
                }
            })
            button.attr('disabled', true);
            return false;
        });


        // process application form
        $('.application-form').on('submit', function(){
            const form_data = new FormData($(this)[0]);
            const button = $(this).find('button');

            button.attr('disabled', true);


            $.ajax({
                type: "POST",
                url: "/api/submit/application",
                data: form_data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response.status_code == 201){
                        window.location.replace('/verify');
                    }
                    else{
                        toastEl.querySelector('.error-title').textContent = response.message;
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                        button.attr('disabled', false);
                    }

                },
                error: function(jqxhr, error, status){
                    toastEl.querySelector('.error-title').textContent = jqxhr.responseJSON.message;
                    var toast = new bootstrap.Toast(toastEl);
                    toast.show();
                    button.attr('disabled', false)
                }
            });

            return false;
        })

        if(document.querySelector('#avatar-input')){
            document.getElementById('avatar-input').addEventListener('change', function(event) {
                var file = event.target.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById('avatar-preview').src = e.target.result;
                }

                reader.readAsDataURL(file);
            });
        }

        if(document.querySelector('#cover-input')){
            document.getElementById('cover-input').addEventListener('change', function(event) {
                var file = event.target.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById('cover-preview').src = e.target.result;
                }

                reader.readAsDataURL(file);
            });
        }

        /* login form */

        if(document.querySelector('.login-form')){

            $('.login-form-step-one').on('submit', function(){
                const button = $(this).find('button');
                const data = $(this).serialize();

                button.attr('disabled', true);

                $.ajax({
                    type: "POST",
                    url: "/post/login/step/one",
                    data: data,
                    success: function(response){
                        if(response.status_code === 201){
                            Turbolinks.visit('/next?email='+response.email+'&avatar='+response.image);
                        }
                        else{
                            toastEl.querySelector('.error-title').textContent = response.message;
                            var toast = new bootstrap.Toast(toastEl);
                            toast.show();
                            button.attr('disabled', false)
                        }
                        button.attr('disabled', false);
                    },
                    error: function(jqxhr, jqerror, jqstatus){
                        toastEl.querySelector('.error-title').textContent = jqxhr.responseJSON.message;
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                        button.attr('disabled', false)
                    }
                });

                return false;
            })


            $('.next-form-login').on('submit', function(){
                const button = $(this).find('button');
                const data = $(this).serialize();

                button.attr('disabled', true);

                $.ajax({
                    type: "POST",
                    url: "/api/login/step/two",
                    data: data,
                    success: function(response){
                        if(response.status_code === 201){
                            window.location.replace(response.redirect);
                        }
                        else{
                            toastEl.querySelector('.error-title').textContent = response.message;
                            var toast = new bootstrap.Toast(toastEl);
                            toast.show();
                            button.attr('disabled', false)
                        }
                        button.attr('disabled', false);
                    },
                    error: function(jqxhr, jqerror, jqstatus){
                        toastEl.querySelector('.error-title').textContent = jqxhr.responseJSON.message;
                        var toast = new bootstrap.Toast(toastEl);
                        toast.show();
                        button.attr('disabled', false)
                    }
                });
                return false;
            })
        }


    $('.update-form').on('submit', function(){
        const data = new FormData($(this)[0]);
        const button = $(this).find('button');
        button.attr('disabled', true);

        $.ajax({
            type: "POST",
            url: "/post/update/profile",
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response){
                if(response.status_code === 201){
                    successAlert("Operation successful");
                }
                else{
                    errorAlert(response.message);
                }
                button.attr('disabled', false);
            },
            error: function(xhr, error, status){
                errorAlert(xhr.responseJSON.message);
                button.attr('disabled', false);
            }
        });
        return false;
    })
  $('#rating').barrating({
      theme: 'css-stars', // Use the 'css-stars' theme for the rating display
      onSelect: function(value, text, event) {
        $("#rating_value").val(value); // Store the selected rating value in a hidden input field
      }
    });

  $('.review-form').on('submit', function(){
    const form = $(this).serialize();
    const button = $(this).find('button');
    button.attr('disabled', true);
    $(button).find('i').removeClass('hidden');

    $.ajax({
      type: "POST",
      url: "/post/submit-review",
      data: form,
      success: function(response){
        button.attr('disabled', false);
      $(button).find('i').addClass('hidden');
        if(response.status_code === 201){
          successAlert(response.message);
          $(button).text('Update Review');
        }
        else{
          errorAlert(response.message);
        }
      },
      error: function(xhr, error, status){
         button.attr('disabled', false);
    $(button).find('i').addClass('hidden');
        errorAlert(xhr.responseJSON.message);
      }
    })
    return false;
  })

    function errorAlert(message){
         const toastEl = document.querySelector('#errorToast');
        const toastEl2 = document.querySelector('#successToast');

        toastEl.querySelector('.error-title').textContent = message;
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    }

    function successAlert(message){
        const toastEl2 = document.querySelector('#successToast');
        toastEl2.querySelector('.success-title').textContent = message;
        const toast = new bootstrap.Toast(toastEl2);
        toast.show();
    }



$('.subscription-btn').on('click', function(){
   const id = $(this).data('id');
   const email = $(this).data('email');
   const amount = $(this).data('amount');
   const channel = $(this).data('channel');
   const name = $(this).data('name');
   const duration = $(this).data('duration');
   const creator = $(this).data('creator');

   const redirect = "http://localhost:8000/subscribed?channel="+channel+"&duration="+duration+"&creator="+creator;
   makePayment(amount, email, name, id, channel, redirect);
})

$('.send-signal').on('submit', function(){
  


    const data = $(this).serialize();
    const button = $(this).find('button');

    button.attr('disabled', true);

    $.ajax({
      type: "POST",
      url: "/post/send/signal",
      data: data,
      success: function(response){
          button.attr('disabled', false);
          if(response.status_code == 201){
            successAlert("signal successfully sent");
          }
          else{
            errorAlert(response.message);
          }
      },
      error: function(xhr, error, status){
        errorAlert(xhr.responseJSON.message);
        button.attr('disabled', false);
      }
    })
    return false;
})

function makePayment(amount, email, name, id, channel, redirect) {
  var randomString = generateRandomString();
  var mac = generate_mac();
  FlutterwaveCheckout({
    public_key: "FLWPUBK-41c86810bf1f11ba1a7c88263574d447-X",
    tx_ref: "synthetic-"+randomString,
    amount: amount,
    currency: "USD",
    payment_options: "card, mobilemoneyghana",
    redirect_url: redirect,
    meta: {
      consumer_id: id,
      consumer_mac: mac,
    },
    customer: {
      email: email,
      // phone_number: "08102909304",
      name: name,
    },
    customizations: {
      title: channel + " subscription",
      description: "Payment " + channel,
      logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
    },
  });
}

function generateRandomString() {
  var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  var length = 12;
  var randomString = '';

  for (var i = 0; i < length; i++) {
    var randomIndex = Math.floor(Math.random() * characters.length);
    randomString += characters.charAt(randomIndex);
  }

  return Date.now().toString() + randomString;
}

function generate_mac() {
  var characters = '0123456789abcdef';
  var sections = ['xxxx', 'xxxxx', 'xxxx'];

  var randomString = '';

  sections.forEach(function(section, index) {
    var sectionString = '';
    for (var i = 0; i < section.length; i++) {
      var randomIndex = Math.floor(Math.random() * characters.length);
      sectionString += characters.charAt(randomIndex);
    }

    randomString += sectionString;

    if (index !== sections.length - 1) {
      randomString += '-';
    }
  });

  return randomString;
}


});