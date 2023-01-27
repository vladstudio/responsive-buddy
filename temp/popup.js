// Responsive Buddy
// by Vlad Gerasimov

function update_popup(settings) {
    var devices = [
        { name: "iPhone SE", w: 568, h: 320 },
        { name: "iPhone 7", w: 667, h: 375 },
        { name: "iPhone XR", w: 896, h: 414, hr: true },
        { name: "iPad Mini", w: 1024, h: 768 },
        { name: "iPad Air", w: 1112, h: 834 },
        { name: "iPad Pro", w: 1366, h: 1024 }
    ];
    var html = '<div style="display:flex;align-items:center;gap:4px">'
        + '<a href="#" class="btn set-scale small flex-1 flex f-center" data-s="1">100%</a>'
        + '<a href="#" class="btn set-scale small flex-1 flex f-center" data-s="0.9">90%</a>'
        + '<a href="#" class="btn set-scale small flex-1 flex f-center" data-s="0.8">80%</a>'
        + '<a href="#" class="btn set-scale small flex-1 flex f-center" data-s="0.7">70%</a>'
        + '<a href="#" class="btn set-vertical small flex-1 flex f-center" data-vertical="' + settings.vertical + '">'
        + '<img src="/images/vertical-' + settings.vertical + '.svg" width="16" height="16"></a>'
        + '<a href="#" class="btn set-iframe small flex-1 flex f-center" data-iframe="' + settings.iframe + '">'
        + '<img src="/images/iframe-' + settings.iframe + '.svg" width="16" height="16"></a>'
        + '<a target="_blank" href="https://responsive-buddy.vlad.studio" class="btn small flex-1 flex f-center">'
        + '<img src="/images/help.svg" width="16" height="16"></a>'
        + '</div><hr>';

    for (let i = 0; i < devices.length; i++) {
        let w = settings.vertical ? devices[i].h : devices[i].w;
        let h = settings.vertical ? devices[i].w : devices[i].h;
        html = html + '<a href="#" class="btn open-window" data-name="' + devices[i].name + '" data-w="' + w + '" data-h="' + h + '"><div class="device-name flex-1">' + devices[i].name + '</div><div class="dimensions flex-0 light small">' + w + '&times;' + h + '</div></a>';
        if (devices[i].hr) html = html + '<hr>';
    }
    document.getElementById('app').innerHTML = html;
    $('.set-scale[data-s="' + settings.scale + '"]').addClass('selected');
    html = false;
}


function open_window(url, settings, w, h, device_name) {
    var w_scaled = Math.round(w * settings.scale);
    var h_scaled = Math.round(h * settings.scale);

    chrome.windows.getCurrent(function (current_window) {
        var left = current_window.left + current_window.width - w_scaled - 32;
        var top = current_window.top + 92;
        if (settings.iframe) {
            var specs = 'left=' + left + ',top=' + top + ',menubar=0,width=' + w_scaled + ',height=' + h_scaled;
            var win = window.open('', '_' + Math.random().toString(36), specs);
            html = '<iframe src="' + url + '" width="100%" height="100%" style="position:fixed; top:0; left:0; width:' + w + 'px; height:' + h + 'px; border:0; transform:scale(' + settings.scale + '); transform-origin: 0 0;" />';
            win.document.body.innerHTML = html;
            win.document.title = device_name;
            window.close();
        } else {
            chrome.windows.create({
                url: url,
                type: "popup",
                left: left,
                top: top,
                width: w_scaled,
                height: h_scaled,
            }, function (win) {
                var tab_id = win.tabs[0].id;
                setTimeout(() => {
                    chrome.tabs.setZoomSettings(tab_id, { scope: "per-tab" });
                    chrome.tabs.setZoom(tab_id, settings.scale);
                    window.close();
                }, 300);
            });
        }
    });
}


function open_window(url, settings, w, h, device_name) {
    var w_scaled = Math.round(w * settings.scale);
    var h_scaled = Math.round(h * settings.scale);

    chrome.windows.getCurrent(function (current_window) {
        var left = current_window.left + current_window.width - w_scaled - 32;
        var top = current_window.top + 92;
        if (settings.iframe) {
            var specs = 'left=' + left + ',top=' + top + ',menubar=0,width=' + w_scaled + ',height=' + h_scaled;
            var win = window.open('', '_' + Math.random().toString(36), specs);
            html = '<iframe src="' + url + '" width="100%" height="100%" style="position:fixed; top:0; left:0; width:' + w + 'px; height:' + h + 'px; border:0; transform:scale(' + settings.scale + '); transform-origin: 0 0;" />';
            win.document.body.innerHTML = html;
            win.document.title = device_name;
            window.close();
        } else {
            chrome.windows.create({
                url: url,
                type: "popup",
                left: left,
                top: top,
                width: w_scaled,
                height: h_scaled,
            }, function (win) {
                var tab_id = win.tabs[0].id;
                setTimeout(() => {
                    chrome.tabs.setZoomSettings(tab_id, { scope: "per-tab" });
                    chrome.tabs.setZoom(tab_id, settings.scale);
                    window.close();
                }, 800);
            });
        }
    });
}


chrome.storage.local.get('settings', function (result) {
    var settings = result.settings;
    if (!settings) settings = { scale: 1, vertical: 1, iframe: 1 };

    chrome.tabs.query({ active: true, currentWindow: true }, function (tabs) {
        var url = tabs[0].url;
        update_popup(settings);

        $('body').on('click', '.set-scale', function () {
            scale = $(this).data('s');
            $('.set-scale').removeClass('selected');
            $(this).addClass('selected');
            settings.scale = scale;
            chrome.storage.local.set({ 'settings': settings }, function () {
                update_popup(settings);
            });
        });

        $('body').on('click', '.set-vertical', function () {
            vertical = $(this).data('vertical') == '1' ? 0 : 1;
            settings.vertical = vertical;
            chrome.storage.local.set({ 'settings': settings }, function () {
                update_popup(settings);
            });
        });

        $('body').on('click', '.set-iframe', function () {
            iframe = $(this).data('iframe') == '1' ? 0 : 1;
            settings.iframe = iframe;
            chrome.storage.local.set({ 'settings': settings }, function () {
                update_popup(settings);
            });
        });

        $('body').on('click', '.open-window', function () {
            var w = $(this).data('w');
            var h = $(this).data('h');
            var device_name = $(this).data('name');
            open_window(url, settings, w, h, device_name);
            return false;
        });
    });
});
