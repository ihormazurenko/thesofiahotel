var accessibleTabs6 = (function () {

    "use strict";

    var d = document;
    var tabListClass;
    var onClass;
    var hoverableClass;

    var changeHash = function (e) {
        var newHash = e.target.hash;

        if(history.pushState) {
            history.pushState(null, null, newHash);
        }
        else {
            location.hash = newHash;
        }
    };

    var setTabsOff = function (tabList) {
        var i = tabList.tabs.length;
        while (i--) {
            setTab(tabList.tabs[i], false);
        }
    };


    var setTab = function (tab, switchOn) {
        if (tab && tab.panelId) {
            d.getElementById(tab.panelId).setAttribute("aria-hidden", !switchOn);
            // tab.setAttribute("aria-selected", switchOn);
            // tab.setAttribute("tabindex", switchOn ? "0" : "-1");
        }
    };

    var _activateTab = function (e) {
        var tab = e.target;
        if (e.preventDefault) {
            e.preventDefault();
            setTabsOff(tab.tabList);
            setTab(tab, true);

            changeHash(e);
        }
    };

    var _keypressed = function (e) {

        var tab = e.target;
        var newNo = -1;
        var tabs = tab.tabList.tabs;
        var maxNo = tabs.length - 1;

        if (e.keyCode === 37 || e.keyCode === 38) { // left / up arrow
            newNo = (tab.no === 0) ? maxNo : tab.no - 1;
        }
        if (e.keyCode === 39 || e.keyCode === 40) { // right arrow / down arrow
            newNo = (tab.no === maxNo) ? 0 : tab.no + 1;
        }

        if (newNo > -1) {
            setTabsOff(tab.tabList);
            setTab(tabs[newNo], true);
            tabs[newNo].focus();
        }

        changeHash(e);
    };

    var _tabHovered = function (e) {
        var a = e.target;
        var useHover = hasClassQ39(a.tabList.className,hoverableClass);
        if (useHover) {
            _activateTab(e);
        }
    };

    var _events = function (tab) {
        tab.addEventListener("click", _activateTab, false);
        tab.addEventListener("keydown", _keypressed, false);
        tab.addEventListener("mouseover", _tabHovered, false);
    };

    var _initialiseAriaAttributes = function (tab) {

        var tabPanel = d.getElementById(tab.panelId);

        tab.parentNode.setAttribute("role", "presentation");
        tab.setAttribute("role", "tab");
        tab.setAttribute("aria-controls", tab.panelId);

        tabPanel.setAttribute("role", "tabpanel");
        tabPanel.setAttribute("aria-labelledby", tab.id);

        // Make first <section> object keyboard focussable
        // Preferably a heading
        // Tabindex=0 to work both forwards and backwards through the keychain
        tabPanel.children[0].setAttribute("tabindex", "0");

    };

    var _setUpConfig = function (cfg) {
        tabListClass = cfg.tabListClass || "tab-list";
        onClass = cfg.onClass || "active";
        hoverableClass = cfg.hoverableClass || "tl-hoverable";
    };

    var _setUpTab = function (tab, panelId, count) {
        tab.no = count;
        tab.id = "tab-" + panelId;
        tab.panelId = panelId;
        _initialiseAriaAttributes(tab);
        _events(tab);
    };


    var _initialiseTabList = function (tabList) {

        var defaultTab = 0;
        var panelId;
        var tabPanel;
        var i;

        if (tabList) {

            tabList.setAttribute("role", "tablist");
            tabList.tabs = tabList.getElementsByTagName("a");
            i = tabList.tabs.length;

            while (i--) {

                tabList.tabs[i].tabList = tabList;

                panelId = tabList.tabs[i].href.slice(tabList.tabs[i].href.lastIndexOf("#") + 1);
                tabPanel = d.getElementById(panelId);

                if (tabPanel) {
                    _setUpTab(tabList.tabs[i], panelId, i);
                    if (hasClassQ39(tabList.tabs[i].className, onClass)) {
                        defaultTab = i;

                        // onClass only used to declare intial state, so remove from DOM
                        tabList.tabs[i].className.remove(onClass);
                        d.getElementById(panelId).className.remove(onClass);
                    }
                }
            }
            setTabsOff(tabList);
            if (tabList.tabs[defaultTab] && tabList.tabs[defaultTab].panelId) {
                setTab(tabList.tabs[defaultTab], true);
            }
        }
    };

    function hasClassQ39(element, cls) {
        return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
    }

    var _isMustardCut = function (e) {
        // check browser feature support (IE10+)
        return (
            (typeof d.querySelectorAll === "function") &&
            d.addEventListener &&
            !!d.documentElement.className // IE9+
        );
    };

    var init = function (cfg) {
        var tabLists;
        var i;

        if (_isMustardCut()) {
            _setUpConfig(cfg);
            tabLists = d.getElementsByClassName(tabListClass);
            i = tabLists.length;
            while (i--) {
                _initialiseTabList(tabLists[i]);
            }
        }
    };

    return {
        init: init
    };

}());

//for tabs
jQuery(function ($) {
    if ($('.tabs-on').length) {
        if (typeof accessibleTabs6 == 'object') {
            // $(window).on('load', function () {

            var anchor = window.location.hash;
            $('a[href="' + anchor + '"]').addClass('active');

            accessibleTabs6.init({
                tabListClass: "tabs-on",   // default, may omit
                onClass: "active",               // default, may omit
                hoverableClass: "tl-hoverable"  // default, may omit
            });
            // });

            if ($('.section-menus').length) {
                var parent = $('.section-menus'),
                    buttons = parent.find('.tab-box-btn a'),
                    tabs = parent.find('.tab-section');

                $(window).on('resize', function () {
                    if ($(window).width() > 768) {
                        buttons.removeClass('active');
                        tabs.css('display', '');
                    }
                });

                buttons.on('click touch', function () {
                    if ($(window).width() < 769) {
                        var btn = $(this),
                            currentId = btn.attr('href'),
                            currentTab = btn.closest('.tab-box-btn').next('.tab-section');

                        if (btn.hasClass('active')) {
                            btn.removeClass('active');
                            currentTab.slideUp(350);

                            setTimeout(function () {
                                $('html, body').animate({
                                    scrollTop: $(currentId).offset().top - 85
                                }, 350);
                            },400);

                        } else {
                            buttons.removeClass('active');
                            tabs.slideUp(0);

                            setTimeout(function () {
                                btn.addClass('active');
                                currentTab.slideDown(350);
                            }, 50);
                            setTimeout(function () {
                                $('html, body').animate({
                                    scrollTop: $(currentId).offset().top - 66
                                }, 350);
                            },400);
                        }
                    }
                });
            }
        }
    }
});
