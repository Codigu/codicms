routes.$inject = ['$stateProvider'];

export default function routes($stateProvider) {
    $stateProvider
        .state('admin', {
            url: '/',
            template: './templates/dashboard.html',
            controller: 'DashboardCtrl',
            controllerAs: 'home'
        })
        .state('dashboard', {
            url: '/dashboard',
            template: './templates/dashboard.html',
            controller: 'DashboardCtrl',
            controllerAs: 'home'
        });
}