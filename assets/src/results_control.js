//javascript file for results_control using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('results_controlView', []);

app.controller ('results_controlCtrl', function($scope, $http) {

    this.results_control = {user:user, id:'', session:'', term:'', class:'', class_teacher:'', keystr:'', resul_tdate:'', status:''};
    this.update = {col_name:'', col_value:''};

    $scope.results_control_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"results_control", "data":this.results_control};
            save_results_control($scope, $http, pb);
        } else {
            var data = Object.assign(this.results_control, this.update);
            var pu = {"method":"update", "table":"results_control", "data":data};
            update_results_control($scope, $http, pu);
        }
    };

    $scope.results_control_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_results_control_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.results_control_delete = function(coln, colv){
        delete_results_control($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"results_control_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"results_control"}
    }).then((result) =>{
        $scope.results_control = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_results_control($scope, $http, pb){
    $http({
        url: base_api_url+"results_control_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function show_selected($scope, $http, column, value){
    $http({
        url: base_api_url+"results_control_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"results_control", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.results_control = result.data.results_control;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_results_control($scope, $http, pb){
    $http({
        url: base_api_url+"results_control_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_results_control($scope, $http, column, value){
    $http({
        url: base_api_url+"results_control_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"results_control", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

