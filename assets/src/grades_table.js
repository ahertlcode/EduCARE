//javascript file for grades_table using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('grades_tableView', []);

app.controller ('grades_tableCtrl', function($scope, $http) {

    this.grades_table = {user:user, upper_limit:'', lower_limit:'', grade:'', status:'', id:''};
    this.update = {col_name:'', col_value:''};

    $scope.grades_table_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"grades_table", "data":this.grades_table};
            save_grades_table($scope, $http, pb);
        } else {
            var data = Object.assign(this.grades_table, this.update);
            var pu = {"method":"update", "table":"grades_table", "data":data};
            update_grades_table($scope, $http, pu);
        }
    };

    $scope.grades_table_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_grades_table_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.grades_table_delete = function(coln, colv){
        delete_grades_table($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"grades_table_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"grades_table"}
    }).then((result) =>{
        $scope.grades_table = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_grades_table($scope, $http, pb){
    $http({
        url: base_api_url+"grades_table_http_api.php",
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
        url: base_api_url+"grades_table_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"grades_table", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.grades_table = result.data.grades_table;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_grades_table($scope, $http, pb){
    $http({
        url: base_api_url+"grades_table_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_grades_table($scope, $http, column, value){
    $http({
        url: base_api_url+"grades_table_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"grades_table", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

