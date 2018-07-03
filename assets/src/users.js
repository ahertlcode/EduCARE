//javascript file for users using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('usersView', []);

app.controller ('usersCtrl', function($scope, $http) {

    this.user = {user:user, id:'', email:'', user_type:'', password:'', registered_date:''};
    this.update = {col_name:'', col_value:''};

    $scope.user_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"users", "data":this.user};
            save_user($scope, $http, pb);
        } else {
            var data = Object.assign(this.user, this.update);
            var pu = {"method":"update", "table":"users", "data":data};
            update_user($scope, $http, pu);
        }
    };

    $scope.user_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_user_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.user_delete = function(coln, colv){
        delete_user($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"users_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"users"}
    }).then((result) =>{
        $scope.users = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_user($scope, $http, pb){
    $http({
        url: base_api_url+"users_http_api.php",
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
        url: base_api_url+"users_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"users", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.user = result.data.user;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_user($scope, $http, pb){
    $http({
        url: base_api_url+"users_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_user($scope, $http, column, value){
    $http({
        url: base_api_url+"users_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"users", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

