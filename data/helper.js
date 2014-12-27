window.addEventListener("copy", function(event) {
  self.port.emit("copy", event.detail);
}, false);
