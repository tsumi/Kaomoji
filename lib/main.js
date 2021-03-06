var { ToggleButton } = require('sdk/ui/button/toggle');
var panels = require("sdk/panel");
var self = require("sdk/self");
var clipboard = require("sdk/clipboard");
var _ = require("sdk/l10n").get;

var button = ToggleButton({
  id: "kaomoji",
  label: _("addon_label"),
  icon: {
    "16": "./icon-16.png",
    "32": "./icon-32.png",
    "64": "./icon-64.png"
  },
  onChange: handleChange
});

var panel = panels.Panel({
  width: 455,
  height: 400,
  contentURL: self.data.url("kaomoji.html"),
  contentScriptFile: self.data.url("helper.js"),
  onHide: handleHide
});

panel.port.on("copy", function(text) {
  clipboard.set(text);
});

function handleChange(state) {
  if (state.checked) {
    panel.show({
      position: button
    });
  }
}

function handleHide() {
  button.state('window', {checked: false});
}
