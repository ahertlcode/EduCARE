//javascript file for banks using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('banksView', []);

app.controller ('banksCtrl', function($scope, $http) {

    this.bank = {user:user, id:'', bank_name:'', bank_code:''};
    this.update = {col_name:'', col_value:''};

    $scope.bank_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"banks", "data":this.bank};
            save_bank($scope, $http, pb);
        } else {
            var data = Object.assign(this.bank, this.update);
            var pu = {"method":"update", "table":"banks", "data":data};
            update_bank($scope, $http, pu);
        }
    };

    $scope.bank_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_bank_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.bank_delete = function(coln, colv){
        delete_bank($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"banks_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"banks"}
    }).then((result) =>{
        $scope.banks = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_bank($scope, $http, pb){
    $http({
        url: base_api_url+"banks_http_api.php",
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
        url: base_api_url+"banks_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"banks", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.bank = result.data.bank;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_bank($scope, $http, pb){
    $http({
        url: base_api_url+"banks_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_bank($scope, $http, column, value){
    $http({
        url: base_api_url+"banks_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"banks", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

