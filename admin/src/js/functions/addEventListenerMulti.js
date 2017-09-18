/* Add one or more listeners to an element
 * ** @param {DOMElement} element - DOM element to add listeners to
 * ** @param {string} eventNames - space separated list of event names, e.g. 'click change'
 * ** @param {Function} listener - function to attach for each event as a listener
 * https://stackoverflow.com/a/8797106
 * */
function addEventListenerMulti(element, eventNames, listener) {
  var events = eventNames.split(' ');
  for (var i=0, iLen=events.length; i<iLen; i++) {
    element.addEventListener(events[i], listener, false);
  }
}
