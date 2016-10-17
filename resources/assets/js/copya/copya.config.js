
routes.$inject = ['$stateProvider'];

export default function routes($stateProvider) {
    $stateProvider
        .state('admin', {
            url: '/',
            templateUrl: './../templates/dashboard.html',
            controller: 'DashboardController',
            controllerAs: 'home'
        })
        .state('dashboard', {
            url: '/dashboard',
            templateUrl: './../templates/dashboard.html',
            controller: 'DashboardController',
            controllerAs: 'dashboard'
        })
    ;
}