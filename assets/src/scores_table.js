//javascript file for scores_table using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('scores_tableView', []);

app.controller ('scores_tableCtrl', function($scope, $http) {

    this.scores_table = {user:user, id:'', session:'', term:'', class:'', student_id:'', subject:'', CAT:'', EXAM:'', GRADE:'', TOTAL:''};
    this.update = {col_name:'', col_value:''};

    $scope.scores_table_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"scores_table", "data":this.scores_table};
            save_scores_table($scope, $http, pb);
        } else {
            var data = Object.assign(this.scores_table, this.update);
            var pu = {"method":"update", "table":"scores_table", "data":data};
            update_scores_table($scope, $http, pu);
        }
    };

    $scope.scores_table_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_scores_table_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.scores_table_delete = function(coln, colv){
        delete_scores_table($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"scores_table_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"scores_table"}
    }).then((result) =>{
        $scope.scores_table = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_scores_table($scope, $http, pb){
    $http({
        url: base_api_url+"scores_table_http_api.php",
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
        url: base_api_url+"scores_table_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"scores_table", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.scores_table = result.data.scores_table;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_scores_table($scope, $http, pb){
    $http({
        url: base_api_url+"scores_table_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_scores_table($scope, $http, column, value){
    $http({
        url: base_api_url+"scores_table_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"scores_table", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

