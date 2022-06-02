$(function(){
	new spMenuSlideFunc();
	new pcDoropDropMenuFunc();

//	$("#mf_header").click(function(){
//		if ($(this).hasClass('js_active')) return false;
//		$(this).addClass('js_active');
//	});
	$(".header_nav_lang").on({
		'mouseenter touchstart': function(){
			$(this).addClass('js_active');
		},
		'mouseleave touchend': function(){
			$(this).removeClass('js_active');
		}
	});

//	new tableWidthSetFunc();
	if ($(".switch_box").length) $(".switch_box").expansionBox();
	if ($(".tab_list").length) $(".tab_list").tabSwitching();
	if ($(".pickup_list").length) $(".pickup_list").slideSide({infiniteRoop: true, autoPlay: true});
	if ($(".knowledge_list").length) $(".knowledge_list").slideSide({infiniteRoop: true, autoPlay: true});
	if (window == window.parent) $("#js_header_nav").fixedNav();
//	new referrerAddFunc();

	if ($(".nav_list").length) {
		$(".nav_list").each(function(){
			if ($(this).find("li").length < 4) $(this).addClass('nav_list_min_' + $(this).find("li").length);
		});
	}

	if ($("article table").length) new wrapTableScrollFunc();

});

/* fixed nav */
$.fn.fixedNav = function(prm){
	prm = $.extend({
		pathRootItem:		this,
		pathRootPosition:	'top',
		classNameReady:		'js_float',
		classNameActive:	'js_fixed',
		smoothScroll:		false
	}, prm);
	new fixedNavFunc(prm);
};
var fixedNavFunc = function(prm){
	this.bodyObj = this.bodyCheck();
	this.fixObj = $(prm.pathRootItem);
	this.dmyObj = $('<div />');
	this.clsRdy = prm.classNameReady;
	this.clsAct = prm.classNameActive;
	this.topFlg = (prm.pathRootPosition == 'bottom') ? false : true;
	this.autoFlg = prm.smoothScroll;
	this.fixH = this.topFlg ? this.fixObj.outerHeight() : 0;
	this.dmyPrm = {'height': this.fixH, 'margin-top': this.fixObj.css('margin-top'), 'padding': 0, 'position': 'static', 'visibility': 'hidden'};
	this.cngPos = Math.round(this.fixObj.offset().top - (this.topFlg ? 0 : ($(window).outerHeight() - this.fixH)));
	this.hshStr = (location.hash.match('#\/')) ? '' : location.hash;
	this.preSet();
};
fixedNavFunc.prototype = {
	preSet: function(){
		var _this = this;
		if (this.topFlg) this.fixObj.addClass(this.clsRdy).after(this.dmyObj.css(this.dmyPrm));
		this.scrollCheck();
		$(window).scroll(function(){ _this.scrollCheck(); });
		if (this.topFlg) {
			$("a[href^='#'], a[href*='" + location.pathname + "#']")
				.each(function(){
					if ($(this).attr('href') != '#' && !$(this).attr('href').match('#\/')) {
						var chkName = $(this).attr('href').split('#')[1];
						var chkObj = $('#' + chkName);
						if (chkObj.length) $(this).attr('data-target-name', chkName);
					}
				})
				.click(function(e){
					var chkName = $(this).attr('data-target-name');
					if (typeof chkName != 'undefined') {
						e.preventDefault();
						var chkPos = (chkName == 'pagetop') ? 0 : Math.round($('#' + chkName).offset().top);
						var tmpH = Math.round(parseInt(chkPos) - _this.fixH);
						if (_this.autoFlg) _this.bodyObj.animate({scrollTop: tmpH}, 200, 'swing');
						else _this.bodyObj.scrollTop(tmpH);
					}
				});
			if (this.hshStr) {
				var chkObj = $(this.hshStr);
				if (chkObj.length) {
					var waitId1;
					var waitId2;
					clearInterval(waitId1);
					clearInterval(waitId2);
					waitId1 = setInterval(function(){
						clearInterval(waitId1);
						var chkP1 = Math.round(chkObj.offset().top);
						var tmpH1 = Math.round(parseInt(chkP1) - _this.fixH);
						_this.bodyObj.scrollTop(tmpH1);
						waitId2 = setInterval(function(){
							clearInterval(waitId2);
							var chkP2 = Math.round(chkObj.offset().top);
							var tmpH2 = Math.round(parseInt(chkP2) - _this.fixH);
							if (chkP1 == chkP2) return false;
							_this.bodyObj.scrollTop(tmpH2);
						}, 500);
					}, 200);
				}
			}
			var rszId;
			clearInterval(rszId);
			$(window).on((('orientation' in window) ? 'orientationchange' : 'resize'), function(){
				clearInterval(rszId);
				rszId = setInterval(function(){
					clearInterval(rszId);
					_this.fixH = _this.fixObj.outerHeight();
					_this.dmyPrm['height'] = _this.fixH;
					_this.dmyObj.css(_this.dmyPrm);
					_this.cngPos = Math.round(_this.dmyObj.offset().top);
					_this.scrollCheck();
				}, 100);
			});
		}
	},
	scrollCheck: function(){
		var scrH = this.bodyObj.scrollTop();
		if (this.cngPos < 0) this.cngPos = 0;
		if ((this.topFlg && (scrH > this.cngPos)) || (!this.topFlg && (scrH < this.cngPos))) this.fixObj.addClass(this.clsAct);
		else this.fixObj.removeClass(this.clsAct);
	},
	bodyCheck: function(){
		$("html").scrollTop($(window).scrollTop() + 1);
		if ($("html").scrollTop()) return $("html");
		else return $("body");
	}
};

/* sp menu slide */
var spMenuSlideFunc = function(prm){
	this.bodyObj = this.bodyCheck();
	this.htmlObj = $("html");
	this.navObj = $(".header_logo");
	this.navBtn = $('<div class="header_nav_button"><span>Menu</span></div>');
	this.opnCls = 'js_nav_open';
	this.posChk = 0;
	this.preSet();
};
spMenuSlideFunc.prototype = {
	preSet: function(){
		var _this = this;
		this.navObj.after(this.navBtn);
		this.navBtn
			.click(function(){
				if (_this.htmlObj.hasClass(_this.opnCls)) _this.closeMenu();
				else _this.openMenu();
			});
	},
	openMenu: function(){
		this.posChk = this.bodyObj.scrollTop();
		this.htmlObj.toggleClass(this.opnCls);
	},
	closeMenu: function(){
		this.htmlObj.toggleClass(this.opnCls);
		this.bodyObj.scrollTop(this.posChk);
	},
	bodyCheck: function(){
		$("html").scrollTop($(window).scrollTop() + 1);
		if ($("html").scrollTop()) return $("html");
		else return $("body");
	}
};

/* pc menu set */
var pcDoropDropMenuFunc = function(prm){
	this.navObj = $("#globalNav");
	this.navBtn = $(".header_nav_button");
	this.opnCls = 'js_nav_open';
	this.timerID;
	this.preSet();
};
pcDoropDropMenuFunc.prototype = {
	preSet: function(){
		var _this = this;
		clearInterval(this.timerID);
		var lngChk = location.pathname.match(/\/(jp|en|cn)\//);
		$.ajax({
			type:		'GET',
			url:		((lngChk == null) ? '' : ('/' + lngChk[1])) + '/nav_list.xml',
			dataType:	'html',
			cache:		false
		})
		.done(function(xml_data){
			var dataObj = $(xml_data);
			_this.navObj.find("li[data-nav-name]").each(function(){
				var idChk = $(this).attr('data-nav-name');
				var lnkChk = $('<tmp/>').append(($(this).children("strong").length ? $(this).children("strong").children("a").clone() : $(this).children("a").clone()).append(' TOP')).html();
				if (idChk!='' && dataObj.find("category_code[id='" + idChk + "']").length) {
					var maxWo = 0;
					var maxWe = 0;
					var tmpW = Math.min(($(window).width() - 60), 1200) * .5;
					$(this)
						.addClass('js_has_child')
						.append(dataObj.find("category_code[id='" + idChk + "']").html())
						.find(".header_nav_main_child")
							.after('<p class="header_nav_main_child_close"><span>CLOSE</span></p>')
							.before('<p class="wm-icon">' + lnkChk + '</p>')
							.children("li:last-child")
								.children("ul")
									.addClass('chk_style')
									.children("li:nth-child(odd)")
										.each(function(){
											maxWo = Math.max(maxWo, Math.ceil(Math.min($(this).find("a").width(), tmpW)));
										})
										.each(function(){
											$(this).css('min-width', maxWo + 'px');
										})
									.end()
									.children("li:nth-child(even)")
										.each(function(){
											maxWe = Math.max(maxWe, Math.ceil(Math.min($(this).find("a").width(), tmpW)));
										})
										.each(function(){
											$(this).css('min-width', maxWe + 'px');
										})
									.end()
									.removeClass('chk_style')
									.addClass('set_style');
				}
			});
		})
		.always(function(){
//			new pcDropDownMenuFunc();
//			_this.navObj.find("a").focus(function(){
//				if ($(this).closest("li[data-nav-name]").hasClass(_this.opnCls)) {}
//				else {
//					$(this).closest("li[data-nav-name]").addClass(_this.opnCls);
//				}
//			}).blur(function(){
//				var _obj = $(this).closest("li[data-nav-name]");
//				clearInterval(_this.timerID);
//				_this.timerID = setInterval(function(){
//						clearInterval(_this.timerID);
//						if (!_obj.find("*:focus").length) _obj.removeClass(_this.opnCls);
//					}, 100);
//			});
			_this.navObj.find(".js_has_child")
//				.mouseenter(function(){
//					this.hovFlg = true;
//				})
//				.mouseleave(function(){
//					this.hovFlg = false;
//					var _obj = $(this).closest("li[data-nav-name]");
//					var _hov = this.hovFlg;
//					clearInterval(_this.timerID);
//					_this.timerID = setInterval(function(){
//							clearInterval(_this.timerID);
//							if (!_hov) _obj.removeClass(_this.opnCls);
//						}, 100);
//				})
				.children("a, strong").click(function(e){
					if (_this.navBtn.css('display') == 'none') {
						e.preventDefault();
						if ($(this).parent().hasClass(_this.opnCls)) $(this).parent().removeClass(_this.opnCls);
						else $(this).parent().addClass(_this.opnCls).siblings("." + _this.opnCls).removeClass(_this.opnCls);
					}
				});
			$(".header_nav_main_child_close").click(function(){
				$(this).closest("." + _this.opnCls).removeClass(_this.opnCls);
			});
		});
	},
	toggleMenu: function(){
		this.bodyObj.toggleClass(this.opnCls);
	}
};

/* tab　switching */
$.fn.tabSwitching = function(prm){
	var exPrm = [];
	var exObj = [];
	for (var i = 0;i < this.length;i++) {
		exPrm[i] = $.extend({
			pathRootPage:			$(this[i]),
			classNameTabCurrent:	'js_current',
			classNameShow:			'js_tab_active',
			classNameHide:			'js_tab_hide',
			breakPoint:				768
		}, prm);
		exObj[i] = new tabSwitchingFunc(exPrm[i]);
	}
};
var tabSwitchingFunc = function(prm){
	this.spW = (typeof prm.breakPoint == 'number') ? parseInt(prm.breakPoint) : 0;
	this.spFlg = this.displayCheck();
	this.tabObj = $(prm.pathRootPage);
	this.curCls = prm.classNameTabCurrent;
	this.shwCls = prm.classNameShow;
	this.hidCls = prm.classNameHide;
	this.tabLst = [];
	this.allFlg = this.spW > 0 ? false : true;
	this.hshStr = location.hash;
	this.preSet();
};
tabSwitchingFunc.prototype = {
	preSet: function() {
		var _this = this;
		var tabCnt = 0;
		var hshFlg = Boolean(this.tabObj.find("a[href='" + _this.hshStr + "']").length);
		this.tabObj
			.find("a[href^='#']").each(function(i){
				var lstTmp = '';
				var ancVal = $(this).text();
				var ancStr = $(this).attr('href');
				var ancTmp = $(ancStr);
				if (ancTmp.length) {
					_this.tabLst[i] = [];
					_this.tabLst[i]['tab'] = (($(this).parent().get(0).tagName.toLowerCase() == 'li') ? $(this).parent() : $(this)).attr('data-tab-no', tabCnt);
					_this.tabLst[i]['page'] = ancTmp;
					_this.tabLst[i]['link'] = _this.tabLst[i]['page'].find("a, input, button");
					if ((!hshFlg && !i) || (hshFlg && (ancStr == _this.hshStr))) {
						_this.tabLst[i]['tab'].addClass(_this.curCls);
						_this.tabLst[i]['page'].addClass(_this.shwCls);
						_this.tabObj.attr('data-tab-selected', ancVal);
					} else {
						_this.tabLst[i]['page'].addClass(_this.hidCls);
					}
					tabCnt++;
				}
			});
		if (this.tabObj.length != $("*[data-tab-selected]").length) { //　特例処理
			this.tabObj.each(function(){
				if (!$(this).is("[data-tab-selected]")) {
					var chkPath = location.pathname;
					var ancVal = '';
					$(this).children("li").each(function(){
						if ($(this).find("a").attr('href').replace('index.html', '')　== chkPath.replace('index.html', '')) {
							$(this).addClass(_this.curCls).siblings("." + _this.curCls).removeClass(_this.curCls);
							ancVal = $(this).find("a").html().replace(/<("[^"]*"|'[^']*'|[^'">])*>/g,'');
						}
					});
					$(this).attr('data-tab-selected', ancVal);
				}
			});
		}
		this.tabObj
			.click(function(){
				if (_this.tabObj.hasClass(_this.shwCls)) _this.tabObj.removeClass(_this.shwCls);
				else _this.tabObj.addClass(_this.shwCls);
			})
			.find("li").eq($(this).find("li").length - 1).find("a")
				.blur(function(){
					_this.tabObj.removeClass(_this.shwCls);
				});
		this.tabObj.find("a[data-tab-no], li[data-tab-no] > a")
			.click(function(e){
				e.preventDefault();
				_this.changeView($(this), false);
			});
		if (!this.allFlg) {
			var rszId;
			clearInterval(rszId);
			$(window).on((('orientation' in window) ? 'orientationchange' : 'resize'), function(){
				clearInterval(rszId);
				rszId = setInterval(function(){
					_this.spFlg = _this.displayCheck();
				}, 100);
			});
		}
	},
	changeView: function(getObj, keyFlg){
//		if ( this.allFlg || !this.spFlg) {
			var btnObj = (typeof getObj.attr('data-tab-no') != 'undefined') ? getObj : getObj.parent();
			if (btnObj.hasClass(this.curCls)) {
				getObj.closest("*[data-tab-selected]").removeClass(this.shwCls);
				return false;
			}
			var noChk = btnObj.attr('data-tab-no');
			for (var i in this.tabLst) {
				if (i == btnObj.attr('data-tab-no')) {
					this.tabLst[i]['tab'].addClass(this.curCls);
					this.tabLst[i]['page'].addClass(this.shwCls).removeClass(this.hidCls);
				} else {
					this.tabLst[i]['tab'].removeClass(this.curCls);
					this.tabLst[i]['page'].addClass(this.hidCls).removeClass(this.shwCls);
				}
			}
			getObj.closest("*[data-tab-selected]").attr('data-tab-selected', getObj.text());
//		}
		if (keyFlg) this.tabObj.focus();
	},
	displayCheck: function(){
		var barW = ((typeof window.innerWidth == 'number') && (typeof document.body.clientWidth == 'number') && (window.innerWidth - document.body.clientWidth) > 0) ? (window.innerWidth - document.body.clientWidth) : 0;
		return ($(window).width() - (barW > 0 ? barW : 0) <= this.spW) ? true : false;
	}
};

/* slide side */
$.fn.slideSide = function(prm){
	var exPrm = [];
	var exObj = [];
	for (var i = 0;i < this.length;i++) {
		exPrm[i] = $.extend({
			pathRootSlide:		$(this[i]),
			areaDot:			false,
			classNamePrev:		'js_prev_button',
			classNameNext:		'js_next_button',
			classNameHide:		'js_hide_button',
			classNameDot:		'js_dot_area',
			classNameCurrent:	'js_dot_current',
			infiniteRoop:		false,
			autoPlay:			false,
			intervalSec:		5,
			slideChangeSec:		.2
		}, prm);
		exObj[i] = new slideSideFunc(exPrm[i]);
	}
};
var slideSideFunc = function(prm){
	this.sldObj = prm.pathRootSlide;
	if (!this.sldObj.length) return false;
	this.posObj = (prm.areaDot && prm.classNameDot) ? $('<ol class="' + prm.classNameDot + '"/>') : '';
	this.prvBtn = $('<div class="' + prm.classNamePrev + '" />');
	this.nxtBtn = $('<div class="' + prm.classNameNext + '" />');
	this.hidCls = prm.classNameHide;
	this.curCls = prm.classNameCurrent;
	this.maxCnt = this.sldObj.children().length;
	this.viewCnt = this.getViewCount();
	this.viewSiz = 1;
	this.pageCnt = 1;
	this.mvDir = -1;
	this.sldCur = 0;
	this.sldLst = this.sldObj.children().map(function(){ return $(this).prop('outerHTML'); }).get();
	this.posLst = [];
	this.sldSpd = (typeof prm.slideChangeSec == 'number') ? prm.slideChangeSec : 200;
	this.sldTmId　=[];
	this.sldFlg = false;
	this.hvFlg = false;
	this.btnFlg = true;
	this.roopFlg = prm.infiniteRoop;
	this.autoFlg = prm.autoPlay;
	this.sldInt = (typeof prm.intervalSec == 'number') ? prm.intervalSec * 1000 : 5000;
	this.cssAni = this.checkSupport('transition');
	this.cssProp = this.animatePropSet();
	this.cssEnd = 'transitionend webkitTransitionEnd mozTransitionEnd msTransitionEnd oTransitionEnd';
	this.preSet();
};
slideSideFunc.prototype = {
	preSet: function(){
		var _this = this;
		this.sldObj
			.after(this.posObj)
			.wrap('<div class="js_slide_wrapper" />')
			.after(this.prvBtn)
			.after(this.nxtBtn)
			.wrap('<div class="js_slide_clip" />')
			.wrap('<div class="js_slide_basis" />');
		this.itemSet();
		if (this.btnFlg) {
			this.prvBtn
				.click(function(){
					if (!_this.roopFlg && !_this.sldCur) return false;
					_this.mvDir = 1;
					_this.slideMove();
				})
				.keypress(function(e){
					if (e.which == 13) {
						if (!_this.roopFlg && !_this.sldCur) return false;
						_this.mvDir = 1;
						_this.slideMove();
					}
				});
			this.nxtBtn
				.click(function(){
					if (!_this.roopFlg && (_this.sldCur >= (_this.pageCnt - 1))) return false;
					_this.mvDir = -1;
					_this.slideMove();
				})
				.keypress(function(e){
					if (e.which == 13) {
						if (!_this.roopFlg && (_this.sldCur >= (_this.pageCnt - 1))) return false;
						_this.mvDir = -1;
						_this.slideMove();
					}
				});
		}
		this.sldObj.closest(".js_slide_clip").on({
			'mouseenter': function(){
				_this.hvFlg = true;
				if (_this.autoFlg) _this.clearTimeId();
			},
			'mouseleave': function(){
				_this.hvFlg = false;
				if (_this.autoFlg && (_this.maxCnt > _this.viewSiz)) {
					_this.mvDir = -1;
					_this.sldTmId.push(setInterval(function(){ _this.slideMove(); }, 1000));
				}
			},
			'touchstart': function(e){
				if (_this.sldFlg) return false;
				if (_this.autoFlg) _this.clearTimeId();
				this.posX = event.changedTouches[0].pageX;
				this.posY = event.changedTouches[0].pageY;
			},
			'touchmove': function(e){
				if (!this.posX) return false;
				this.mvX = Math.abs(event.changedTouches[0].pageX - this.posX);
				this.mvY = Math.abs(event.changedTouches[0].pageY - this.posY);
				if (this.mvX - this.mvY > 0) {
					e.preventDefault();
					return false;
				}
			},
			'touchend': function(e){
				if (!this.posX) return false;
				this.mvX = event.changedTouches[0].pageX - this.posX;
				this.mvY = event.changedTouches[0].pageY - this.posY;
				if (Math.abs(this.mvX) - Math.abs(this.mvY) > 0) {
					if (this.mvX > 20) {
						e.preventDefault();
						_this.mvDir = 1;
						_this.slideMove();
						return false;
					} else if (this.mvX < -20) {
						e.preventDefault();
						_this.mvDir = -1;
						_this.slideMove();
						return false;
					} else {
						return true;
					}
				} else {
					return true;
				}
				if (_this.autoFlg && (_this.maxCnt > _this.viewSiz)) {
					_this.mvDir = -1;
					_this.sldTmId.push(setInterval(function(){ _this.slideMove(); }, 1000));
				}
				_this.sldFlg = false;
			}
		});
		var rszId;
		$(window).on((('orientation' in window) ? 'orientationchange' : 'resize'), function(){
			clearInterval(rszId);
			rszId = setInterval(function(){
				clearInterval(rszId);
				var chkCnt = _this.getViewCount();
				var chkSiz = _this.getViewSize();
				if ((_this.viewCnt != chkCnt) || (_this.viewSiz != chkSiz)) {
					_this.viewCnt = chkCnt;
					_this.viewSiz = chkSiz;
					_this.itemSet();
				}
			}, 100);
		});
	},
	slideMove: function(getCnt){
		var _this = this;
		if (this.sldFlg) return false;
		if (this.autoFlg) this.clearTimeId();
		this.sldFlg = true;
		var spdSet = 1;
		if (typeof getCnt == 'number') {
			getCnt = parseInt(getCnt);
			spdSet = Math.abs(this.sldCur - getCnt);
			this.mvDir = (this.sldCur > getCnt) ? 1 : -1
			this.sldCur = parseInt(getCnt);
		} else {
			if ((this.mvDir > 0) && !this.sldCur) {
				this.sldCur = this.pageCnt;
				this.sldObj
					.css({'margin-left': (-100 * this.sldCur) + '%'})
					.delay(10)
					.queue(function(){
						_this.sldFlg = false;
						_this.slideMove();
						$(this).dequeue();
					});
				return false;
			}
			this.sldCur = this.sldCur - this.mvDir;
		}
		if (this.posObj && this.curCls) this.posLst[(this.sldCur >= this.pageCnt) ? 0 : this.sldCur].addClass(this.curCls).siblings("." + this.curCls).removeClass(this.curCls);
		if (this.cssAni != null) {
			var tmpProp = {'margin-left': (-100 * this.sldCur) + '%'};
			tmpProp = $.extend(tmpProp, this.cssProp);
			if (spdSet != 1) tmpProp[this.cssAni + '-duration'] = this.sldSpd * spdSet + 's';
			this.sldObj.css(tmpProp).on(this.cssEnd, function() {
				_this.changeSet();
				$(this).off(_this.cssEnd);
			});
		} else {
			this.sldObj.stop().animate({'margin-left': (-100 * this.sldCur) + '%'}, (this.sldSpd * spdSet * 1000), 'swing', function(){
				_this.changeSet();
			});
		}
	},
	changeSet: function(){
		var _this = this;
		if (this.roopFlg) {
			if (this.sldCur >= this.pageCnt) this.sldCur = 0;
			if (!this.sldCur) this.sldObj.attr('style', '');
			if (this.autoFlg && !this.hvFlg && (this.maxCnt > this.viewSiz)) {
				this.mvDir = -1;
				this.sldTmId.push(setInterval(function(){ _this.slideMove(); }, this.sldInt));
			}
		} else {
			if (this.sldCur <= 0) this.prvBtn.addClass(this.hidCls);
			else this.prvBtn.removeClass(this.hidCls);
			if (this.sldCur >= this.pageCnt - 1) this.nxtBtn.addClass(this.hidCls);
			else this.nxtBtn.removeClass(this.hidCls);
		}
		this.sldFlg = false;
	},
	animatePropSet: function(){
		var tmpProp = {};
		tmpProp[this.cssAni + '-property'] = 'margin-left';
		tmpProp[this.cssAni + '-duration'] = this.sldSpd + 's';
		tmpProp[this.cssAni + '-timing-function'] = 'ease';
		return tmpProp;
	},
	itemSet: function(){
		var _this = this;
		if (this.autoFlg) this.clearTimeId();
		this.sldCur = 0;
		this.sldObj.attr('style', '')
			.closest(".js_slide_wrapper").removeClass('js_slide_min'); // 特例処理
		this.viewCnt = this.getViewCount();
		var clpObj = this.sldObj.closest('.js_slide_clip');
		var lmtCnt = this.getLcm(this.maxCnt, this.viewCnt);
		this.pageCnt = Math.ceil((this.roopFlg ? lmtCnt : this.maxCnt) / this.viewCnt);
		this.viewSiz = this.getViewSize();
		if (this.maxCnt <= this.viewSiz) { // 特例処理
			var itmTmp = '';
			for (var i in this.sldLst) itmTmp = itmTmp + this.sldLst[i];
			this.sldObj.empty().html(itmTmp);
			this.sldObj.closest(".js_slide_wrapper").addClass('js_slide_min');
		} else if (this.roopFlg) {
			var itmTmp = '';
			var chkCnt = 0;
			var itemCnt = 0;
			while(chkCnt < lmtCnt + (this.viewCnt * this.viewSiz)) {
				itmTmp = itmTmp + this.sldLst[itemCnt];
				if (this.maxCnt - 1 <= itemCnt) itemCnt = 0;
				else itemCnt++;
				chkCnt++;
			}
			this.sldObj.empty().html(itmTmp);
			this.sldObj.children(":gt(" + (this.maxCnt - 1) + ")").addClass('js_clone'); // 特例処理
		} else {
			this.prvBtn.addClass(this.hidCls);
			if (this.pageCnt == 1) this.nxtBtn.addClass(this.hidCls);
			else this.nxtBtn.removeClass(this.hidCls);
		}
		if (this.posObj) {
			this.posObj.empty();
			this.posLst.length = 0;
			for (var i = 0;i < this.pageCnt;i++) {
				this.posLst[i] = $('<li data-pos-number="' + i + '" />');
				if (!i) this.posLst[i].addClass(this.curCls);
				this.posObj.append(this.posLst[i]);
			}
			this.posObj.find("li").click(function(){ if (!$(this).hasClass(this.curCls)) _this.slideMove(parseInt($(this).attr('data-pos-number'))); });
		}
		if (this.autoFlg && (this.maxCnt > this.viewSiz)) this.sldTmId.push(setInterval(function(){ _this.slideMove(); }, _this.sldInt));
	},
	clearTimeId: function(){
		for (var i in this.sldTmId) {
			clearInterval(this.sldTmId[i]);
			if (i == this.sldTmId.length - 1) this.sldTmId.length = 0;
		}
	},
	getViewCount: function(){
		return Math.round(this.sldObj.outerWidth() / this.sldObj.children(":first-child").outerWidth());
	},
	getViewSize: function(){
		return Math.round((this.sldObj.closest('.js_slide_clip').length ? this.sldObj.closest('.js_slide_clip') : this.sldObj).outerWidth() / this.sldObj.outerWidth());
	},
	getLcm: function(a, b) {
		return a * b / this.getGcd(a, b);
	},
	getGcd: function(a, b){
		var r;
		while ((r = a % b) != 0) {
			a = b;
			b = r;
		}
		return b;
	},
	checkSupport: function(getStr){
		var tmpObj = $('<div />');
		if (tmpObj.css(getStr) != 'undefined') return getStr;
		else if (tmpObj.css('-webkit-' + getStr) != 'undefined') return '-webkit-' + getStr;
		else if (tmpObj.css('-moz-' + getStr) != 'undefined') return '-moz-' + getStr;
		else if (tmpObj.css('-ms-' + getStr) != 'undefined') return '-ms-' + getStr;
		else if (tmpObj.css('-o-' + getStr) != 'undefined') return '-o-' + getStr;
		else return null;
	}
};

/* table scroll *//*
var tableWidthSetFunc = function(prm){
	this.tblObj = $("table");
	this.wrpCls = 'wm-table';
	this.preSet();
};
tableWidthSetFunc.prototype = {
	preSet: function(){
		var _this = this;
		this.tblObj.each(function(){
			var chkH = 0;
			$(this).find("th:not([colspan]):not([rowspan]), td:not([colspan]):not([rowspan])").each(function(){
				if ($(this).width() < 50) chkH = Math.max($(this).height(), chkH);
			});
			if (chkH > 200) {
				if (!$(this).closest('.' + _this.wrpCls).length) $(this).wrap('<div class="' + _this.wrpCls + '" />');
				var wrpObj = $(this).closest('.' + _this.wrpCls);
				console.log(wrpObj.length);
				$(this).css('min-width', 'auto');
				wrpObj.width(900);
				$(this).css('min-width', $(this).width());
				wrpObj.attr('style', '');
			}
		});
//		this.tblObj.wrapInner(this.wrpObj.clone().width(900).css('border', '1px solid red'));
	},
	toggleMenu: function(){
//		this.bodyObj.toggleClass(this.opnCls);
	}
};*/

/* infoList *//*
function getTodayFunc(getTm) {
    var yy = getTm.getFullYear();
    var mm = getTm.getMonth() + 1;
    var dd = getTm.getDate();
    var hh = getTm.getHours();
    var nn = getTm.getMinutes();
    var ss = getTm.getSeconds();
    return parseInt(yy.toString() + ((mm < 10) ? '0' : '') + mm + ((dd < 10) ? '0' : '') + dd + ((hh < 10) ? '0' : '') + hh + ((nn < 10) ? '0' : '') + nn + ((ss < 10) ? '0' : '') + ss);
}*/

/* expansion box */
$.fn.expansionBox = function(prm){
	var exPrm = [];
	var exObj = [];
	for (var i = 0;i < this.length;i++) {
		exPrm[i] = $.extend({
			pathRootItem:		$(this[i]),
			classNameButton:	'js_toggle_button',
			classNameActive:	'js_close'
		}, prm);
		exObj[i] = new expansionBoxFunc(exPrm[i]);
	}
};
var expansionBoxFunc = function(prm){
	this.itmObj = $(prm.pathRootItem);
	this.clsBtn = prm.classNameButton;
	this.clsAct = prm.classNameActive;
	this.preSet();
};
expansionBoxFunc.prototype = {
	preSet: function(){
		var _this = this;
		this.itmObj.find("> :first-child, ." + _this.clsBtn).each(function(){
			if (!$(this).nextAll().hasClass(_this.clsBtn)) {
				if ($(this).nextAll().length == 1) $(this).addClass(_this.clsBtn).nextAll().addClass('js_wrapper');
				else $(this).addClass(_this.clsBtn).nextAll().wrapAll('<div class="js_wrapper" />');
			} else if (!$(this).get(0).tagName.toLowerCase().match(/^h[1-6]$/)) {
				var grpCnt = 0;
				$(this)
					.addClass(this.clsAct)
					.nextAll()
					.filter(function(index){
						if (!index) grpCnt = $(this).prevAll("*[class*='" + _this.clsBtn + "']").length;
						return (!$(this).hasClass(_this.clsBtn) && ($(this).prevAll("*[class*='" + _this.clsBtn + "']").length == grpCnt)) ? true : false;
					})
					.wrapAll('<div class="js_wrapper" />');
			}
		});
		this.itmObj.find("." + _this.clsBtn)
			.click(function(){
				_this.toggleContent($(this));
				$(this).blur();
			});
	},
	toggleContent: function(getObj){
		if (getObj.hasClass(this.clsAct)) {
			getObj.removeClass(this.clsAct);
		} else {
			getObj.addClass(this.clsAct);
		}
	}
};

/* slide fade */
var slideFadeFunc = function(prm){
	this.sldObj = prm.pathRootSlide;
	this.preBtn = $(prm.tagButtonPrev);
	this.nxtBtn = $(prm.tagButtonNext);
	this.muteBtn = $(prm.tagButtonMute);
	this.posObj = prm.classNamePos ? $('<ol class="' + prm.classNamePos + '"/>') : '';
	this.curCls = prm.classNameCur;
	this.maxCnt = this.sldObj.children("li, dd").length;
	this.sldInt = (typeof prm.secInterval == 'number') ? prm.secInterval * 1000 : (((this.sldObj.attr('data-interval-sec') != undefined) && this.sldObj.attr('data-interval-sec').match(/^[0-9]+$/)) ? this.sldObj.attr('data-interval-sec') * 1000 : 5000);
	this.sldCur = 0;
	this.sldLst = [];
	this.sldFlg = false;
	this.sldTmId = [];
	this.autoFlg = prm.flagAutoPlay;
};
slideFadeFunc.prototype = {
	preSet: function() {
		var _this = this;
		this.sldObj
			.after(this.preBtn)
			.after(this.nxtBtn)
			.after(this.muteBtn);
		this.sldObj
			.children("li, dd").each(function(i){
			_this.sldLst[i] = [];
			_this.sldLst[i].m = $(this);
			if (!i) _this.sldLst[i].m.addClass(_this.curCls);
			if (_this.posObj) {
				_this.sldLst[i].p = $('<li data-pos-number="' + i + '" />');
				if (!i) _this.sldLst[i].p.addClass(_this.curCls);
				_this.posObj.append(_this.sldLst[i].p);
			}
		});
		if (this.posObj) {
			this.sldObj.after(this.posObj);
			this.posObj.find("li, dd").click(function(){ if (!$(this).hasClass(this.curCls)) _this.slideFade(parseInt($(this).attr('data-pos-number'))); });
		}
		this.preBtn.click(function(){
			var cntChk = _this.sldCur - 1;
			_this.slideFade((cntChk < 0) ? _this.maxCnt - 1 : cntChk);
		});
		this.nxtBtn.click(function(){
			var cntChk = _this.sldCur + 1;
			_this.slideFade((cntChk >= _this.maxCnt) ? 0 : cntChk);
		});
		this.muteBtn.click(function(){
			_this.clearTimeId();
			return false;
		});
		if (this.autoFlg) this.sldTmId.push(setInterval(function(){ _this.slideFade(); }, _this.sldInt));
		this.sldObj.on({
			'mouseover': function(){
				if (_this.autoFlg) _this.clearTimeId();
			},
			'mouseout': function(){
				if (_this.autoFlg) _this.sldTmId.push(setInterval(function(){ _this.slideFade(); }, 1000));
			},
			'touchstart': function(e){
				if (_this.sldFlg) return false;
				if (_this.autoFlg) _this.clearTimeId();
				this.posX = event.changedTouches[0].pageX;
				this.posY = event.changedTouches[0].pageY;
			},
			'touchmove': function(e){
				if (!this.posX) return false;
				this.mvX = Math.abs(event.changedTouches[0].pageX - this.posX);
				this.mvY = Math.abs(event.changedTouches[0].pageY - this.posY);
				if (this.mvX - this.mvY > 0) {
					e.preventDefault();
					return false;
				}
			},
			'touchend': function(e){
				if (!this.posX) return false;
				this.mvX = event.changedTouches[0].pageX - this.posX;
				this.mvY = event.changedTouches[0].pageY - this.posY;
				if (Math.abs(this.mvX) - Math.abs(this.mvY) > 0) {
					if (this.mvX > 20) {
						e.preventDefault();
						var cntChk = _this.sldCur + 1;
						_this.slideFade((cntChk >= _this.maxCnt) ? 0 : cntChk);
						return false;
					} else if (this.mvX < -20) {
						e.preventDefault();
						var cntChk = _this.sldCur - 1;
						_this.slideFade((cntChk < 0) ? _this.maxCnt - 1 : cntChk);
						return false;
					} else {
						return true;
					}
				} else {
					return true;
				}
				if (_this.autoFlg) _this.sldTmId.push(setInterval(function(){ _this.slideFade(); }, 1000));
				_this.sldFlg = false;
			}
		});
	},
	slideFade: function(getCnt){
		var _this = this;
		if (this.sldFlg) return false;
		if (this.autoFlg) this.clearTimeId();
		this.sldFlg = true;
		if (typeof getCnt == 'number') this.sldCur = parseInt(getCnt);
		else if (this.sldCur == this.maxCnt - 1) this.sldCur = 0;
		else this.sldCur++;
		if (this.posObj && this.curCls) this.sldLst[this.sldCur].p.addClass(this.curCls).siblings("." + this.curCls).removeClass(this.curCls);
		this.sldLst[this.sldCur].m
			.siblings("." + this.curCls).removeClass(this.curCls)
			.end()
			.addClass(this.curCls);
		this.sldFlg = false;
		if (this.autoFlg) this.sldTmId.push(setInterval(function(){ _this.slideFade(); }, _this.sldInt));
	},
	clearTimeId: function(){
		for (var i in this.sldTmId) {
			clearInterval(this.sldTmId[i]);
			if (i == this.sldTmId.length - 1) this.sldTmId.length = 0;
		}
	}
};

/* slide fade */
var wrapTableScrollFunc = function(prm){
	this.tblObj = $("article table");
	this.clsName = 'wm-table';
	this.scrW = $("article").innerWidth();
	this.preSet();
};
wrapTableScrollFunc.prototype = {
	preSet: function() {
		var _this = this;
		this.setWrapper();
		var rszId;
		$(window).on((('orientation' in window) ? 'orientationchange' : 'resize'), function(){
			clearInterval(rszId);
			rszId = setInterval(function(){
				clearInterval(rszId);
				_this.scrW = $(window).innerWidth();
				_this.setWrapper();
			}, 100);
		});
	},
	setWrapper: function(){
		var _this = this;
		this.tblObj.each(function(){
			if ($(this).parent("." + _this.clsName).length) $(this).unwrap();
			if ($(this).width() > _this.scrW) $(this).wrap('<div class="' + _this.clsName + '" />');
		});
	}
};

/* ----- */
var inquiry_control = function(){
    // this.set();
};
inquiry_control.prototype = {
    set: function(){
        $(".form_link_jp").on('click',function(event){
			event.preventDefault();
            var path = location.pathname;
            var h1 = encodeURI($("h1").text());
            var link = "/form/inquiry.php?path="+path+"&h1="+h1;
            var win = window.open(link, "_blank");
            // location.href=link;
            // alert(link);
         });
         $(".form_link_en").on('click',function(event){
			event.preventDefault();
            var path = location.pathname;
            var h1 = encodeURI($("h1").text());
            var link = "/form/en_inquiry.php?path="+path+"&h1="+h1;
            var win = window.open(link, "_blank");
            // location.href=link;
            // alert(link);
         });
         $(".form_link_cn").on('click',function(event){
			event.preventDefault();
            var path = location.pathname;
            var h1 = encodeURI($("h1").text());
            var link = "/form/cn_inquiry.php?path="+path+"&h1="+h1;
            var win = window.open(link, "_blank");
            // location.href=link;
            // alert(link);
         });
    }
}
var inquiry_control_c = new inquiry_control();
$(document).ready(function(){
    inquiry_control_c.set();
});


$(function () {
	/* Euroland tools */
	var pageChk = location.pathname;
	if (pageChk.match('www.shibaura-machine.co.jp')) pageChk = pageChk.split('www.shibaura-machine.co.jp')[1];
	var setLang = pageChk.match(/^\/en\//) ? 'en-gb' : (pageChk.match(/^\/cn\//) ? 'zh-cn' : 'ja-jp');
	if (setLang != null && pageChk.match(/\/ir\//) && $("#localNav, #ranking").length) {
		var setObj = $('<div />');
		if ($("#ranking").length) $("#ranking").before(setObj);
		else $("#localNav").prepend(setObj);
		setObj.append('<iframe class="EurolandTool" src="https://asia.tools.euroland.com/tools/ticker/html/?companycode=jp-toa&amp;v=new&amp;lang=' + setLang + '" id="euroland_frame_id_two" width="100%" height="140" scrolling="no" frameborder="0"></iframe>');
		var jsObj = $("script[src='https://tools.euroland.com/tools/common/eurolandiframeautoheight/eurolandtoolsintegrationobject.js']");
		if (!jsObj.length) {
			jsObj = $('<script />').attr('src', 'https://tools.euroland.com/tools/common/eurolandiframeautoheight/eurolandtoolsintegrationobject.js');
			setObj.append(jsObj);
		}
		jsObj.on('load', function(){
				EurolandToolIntegrationObject.set("euroland_frame_id_two");
		});
	}
	//	else return false;

	/* ユーザがCookieを受け入れるかどうかを確認。 */
//	var siteUrl = location.href.split('www.shibaura-machine.co.jp/')[1];
//	var siteLang = siteUrl.split('/')[0];
	var siteLang = location.pathname.split('/')[1];
	if (siteLang == 'en') {
		var notice = 'We use cookies to make this website work better for you. For more information about the use of cookies on this site, please review our <a href="/' + siteLang + '/privacy/index.html">Privacy Policy</a>. And please confirm that you agree to use of cookies by clicking Accept button.';    
		var div = '<div class="cookie_notice_wrapper"><div class="cookie_notice">';
		div += '<p>' + notice + '</p>';
		div += '<div class="wm-button"><a href="/' + siteLang + '/privacy/index.html">Accept</a>';
		div += '</div></div>';
		var doc_cookies = new docCookies();
		var is_accept = doc_cookies.getItem('tmjpCookie_' + siteLang);
		if (!is_accept) {
			$('footer.footer').after(div);
		}
		$('.cookie_notice_wrapper .wm-button').click(function (e) {
			e.preventDefault();
			var expire = 3600 * 24 * 180;
			doc_cookies.setItem('tmjpCookie_' + siteLang, 1, expire, "/");
			$('.cookie_notice_wrapper').remove();//.css('display', 'none');
			return false;
		});
	}
});
var docCookies = function () {};
docCookies.prototype = {
    getItem: function (sKey) {
        if (!sKey || !this.hasItem(sKey)) {
            return null;
        }
        return unescape(document.cookie.replace(new RegExp("(?:^|.*;\\s*)" + escape(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*((?:[^;](?!;))*[^;]?).*"), "$1"));
    },
    setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
        if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) {
            return;
        }
        var sExpires = "";
        if (vEnd) {
            switch (vEnd.constructor) {
                case Number:
                    sExpires = vEnd === Infinity ? "; expires=Tue, 19 Jan 2038 03:14:07 GMT" : "; max-age=" + vEnd;
                    break;
                case String:
                    sExpires = "; expires=" + vEnd;
                    break;
                case Date:
                    sExpires = "; expires=" + vEnd.toGMTString();
                    break;
            }
        }
        document.cookie = escape(sKey) + "=" + escape(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
    },
    removeItem: function (sKey, sPath) {
        if (!sKey || !this.hasItem(sKey)) {
            return;
        }
        document.cookie = escape(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sPath ? "; path=" + sPath : "");
    },
    hasItem: function (sKey) {
        return (new RegExp("(?:^|;\\s*)" + escape(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
    },
    keys: /* optional method: you can safely remove it! */ function () {
        var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
        for (var nIdx = 0; nIdx < aKeys.length; nIdx++) {
            aKeys[nIdx] = unescape(aKeys[nIdx]);
        }
        return aKeys;
    }
};