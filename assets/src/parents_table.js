//javascript file for parents_table using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('parents_tableView', []);

app.controller ('parents_tableCtrl', function($scope, $http) {

    this.parents_table = {user:user, id:'', father_name:'', father_Work:'', father_Phone:'', father_Email:'', father_Home_Address:'', father_Postal_Address:'', mother_Name:'', mother_Work:'', mother_Phone:'', mother_Email:'', mother_Home_Address:'', moPostAddr:'', reffered:'', ref:''};
    this.update = {col_name:'', col_value:''};

    $scope.parents_table_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"parents_table", "data":this.parents_table};
            save_parents_table($scope, $http, pb);
        } else {
            var data = Object.assign(this.parents_table, this.update);
            var pu = {"method":"update", "table":"parents_table", "data":data};
            update_parents_table($scope, $http, pu);
        }
    };

    $scope.parents_table_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_parents_table_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.parents_table_delete = function(coln, colv){
        delete_parents_table($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"parents_table_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"parents_table"}
    }).then((result) =>{
        $scope.parents_table = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_parents_table($scope, $http, pb){
    $http({
        url: base_api_url+"parents_table_http_api.php",
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
        url: base_api_url+"parents_table_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"parents_table", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.parents_table = result.data.parents_table;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_parents_table($scope, $http, pb){
    $http({
        url: base_api_url+"parents_table_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_parents_table($scope, $http, column, value){
    $http({
        url: base_api_url+"parents_table_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"parents_table", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

