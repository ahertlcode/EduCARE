//javascript file for exam_setups using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('exam_setupsView', []);

app.controller ('exam_setupsCtrl', function($scope, $http) {

    this.exam_setup = {user:user, id:'', exam_type:'', questions:'', examiner:'', time_allowed:'', subject:'', status:'', test_name:'', created_at:'', class_of_student:'', educareucls:''};
    this.update = {col_name:'', col_value:''};

    $scope.exam_setup_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"exam_setups", "data":this.exam_setup};
            save_exam_setup($scope, $http, pb);
        } else {
            var data = Object.assign(this.exam_setup, this.update);
            var pu = {"method":"update", "table":"exam_setups", "data":data};
            update_exam_setup($scope, $http, pu);
        }
    };

    $scope.exam_setup_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_exam_setup_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.exam_setup_delete = function(coln, colv){
        delete_exam_setup($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"exam_setups_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"exam_setups"}
    }).then((result) =>{
        $scope.exam_setups = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_exam_setup($scope, $http, pb){
    $http({
        url: base_api_url+"exam_setups_http_api.php",
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
        url: base_api_url+"exam_setups_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"exam_setups", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.exam_setup = result.data.exam_setup;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_exam_setup($scope, $http, pb){
    $http({
        url: base_api_url+"exam_setups_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_exam_setup($scope, $http, column, value){
    $http({
        url: base_api_url+"exam_setups_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"exam_setups", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

