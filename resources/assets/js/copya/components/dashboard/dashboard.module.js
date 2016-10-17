import angular from 'angular';
import uirouter from 'angular-ui-router';

import DashboardController from './dashboard.controller';

export default angular.module('copya.app', [uirouter])
    .controller('DashboardController', DashboardController)
    .name;
