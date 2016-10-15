angular
    .module('copya.app')
    .controller('DashboardCtrl', DashboardCtrl);

DashboardCtrl.$inject = ['$scope'];

function DashboardCtrl($scope) {
    $scope.title = 'Dashboard';
    $scope.people = [];
    $scope.activate = activate;
    console.log('DashboardCtrl');
}