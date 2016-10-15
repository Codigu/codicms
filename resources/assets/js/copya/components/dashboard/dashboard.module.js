const routing = require('./dashboard.routes');
const DashboardController = require('./dashboard.controller');

export default angular.module('copya.app', [uirouter])
    .config(routing)
    .controller('DashboardController', DashboardController)
    .name;